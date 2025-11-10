<?php
// Khởi tạo phiên sớm để quản lý đăng nhập
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../../../config/database.php';
require_once __DIR__ . '/../../../includes/config.php';

function redirectLogin($type, $msg) {
    $qs = '?type=' . urlencode($type) . '&msg=' . urlencode($msg);
    header('Location: ' . RELATIVE_ROOT . 'pages/auth/dang-nhap.php' . $qs);
    exit;
}

function redirectHome() {
    header('Location: ' . RELATIVE_ROOT . 'index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirectLogin('error', 'Phương thức không hợp lệ.');
}

$csrf = $_POST['csrf_token'] ?? '';
if (empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $csrf)) {
    redirectLogin('error', 'Xác thực CSRF không hợp lệ. Vui lòng thử lại.');
}

// Honeypot đơn giản
if (!empty($_POST['website'])) {
    redirectLogin('error', 'Phát hiện hành vi tự động.');
}

// Throttle 1 lần/2 giây
$now = time();
if (!empty($_SESSION['last_login_time']) && ($now - (int)$_SESSION['last_login_time'] < 2)) {
    redirectLogin('error', 'Bạn thao tác quá nhanh, vui lòng thử lại sau ít giây.');
}
$_SESSION['last_login_time'] = $now;

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirectLogin('error', 'Email không hợp lệ.');
}
if ($password === '' || strlen($password) < 8) {
    redirectLogin('error', 'Mật khẩu phải từ 8 ký tự trở lên.');
}

try {
    $pdo = getDB();
    $stmt = $pdo->prepare('SELECT id, username, email, password_hash, full_name, role, status FROM users WHERE email = ? LIMIT 1');
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        redirectLogin('error', 'Email hoặc mật khẩu không đúng.');
    }
    if ($user['status'] !== 'active') {
        redirectLogin('error', 'Tài khoản chưa hoạt động hoặc đã bị khóa.');
    }

    if (!password_verify($password, $user['password_hash'])) {
        redirectLogin('error', 'Email hoặc mật khẩu không đúng.');
    }

    // Lưu phiên đăng nhập
    $_SESSION['user'] = [
        'id' => (int)$user['id'],
        'username' => $user['username'],
        'email' => $user['email'],
        'full_name' => $user['full_name'] ?: $user['username'],
        'role' => $user['role']
    ];

    // Cập nhật thời gian & IP đăng nhập
    $ip = $_SERVER['REMOTE_ADDR'] ?? null;
    $up = $pdo->prepare('UPDATE users SET last_login_at = NOW(), last_login_ip = ? WHERE id = ?');
    $up->execute([$ip, (int)$user['id']]);

    // Vô hiệu hóa CSRF để tạo mới ở trang tiếp theo
    unset($_SESSION['csrf_token']);

    redirectHome();
} catch (Throwable $e) {
    error_log('[login.php] Error: ' . $e->getMessage());
    redirectLogin('error', 'Có lỗi xảy ra, vui lòng thử lại sau.');
}
?>