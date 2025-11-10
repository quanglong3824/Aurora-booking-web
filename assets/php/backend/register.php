<?php
require_once __DIR__ . '/../../../config/database.php';
require_once __DIR__ . '/../../../includes/config.php';

function redirectWithMessage($type, $msg) {
    $location = url('pages/auth/dang-ky.php') . '?type=' . urlencode($type) . '&msg=' . urlencode($msg);
    header('Location: ' . $location);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirectWithMessage('error', 'Phương thức không hợp lệ.');
}

$fullName = trim($_POST['full_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$password = $_POST['password'] ?? '';
$confirmPassword = $_POST['confirm_password'] ?? '';

$errors = [];

if ($fullName === '' || mb_strlen($fullName) < 2) {
    $errors[] = 'Họ và tên không hợp lệ.';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email không hợp lệ.';
}
if ($password === '' || mb_strlen($password) < 8) {
    $errors[] = 'Mật khẩu phải từ 8 ký tự trở lên.';
}
if ($password !== $confirmPassword) {
    $errors[] = 'Mật khẩu xác nhận không khớp.';
}
if ($phone !== '' && !preg_match('/^[0-9\s\-\+\.]{8,20}$/', $phone)) {
    $errors[] = 'Số điện thoại không hợp lệ.';
}

if (!empty($errors)) {
    redirectWithMessage('error', implode(' | ', $errors));
}

function buildUsernameFromEmail($email) {
    $local = explode('@', $email)[0];
    $username = preg_replace('/[^a-zA-Z0-9._-]/', '', $local);
    if ($username === '') {
        $username = 'user' . random_int(1000, 9999);
    }
    return $username;
}

try {
    $pdo = getDB();

    $username = buildUsernameFromEmail($email);
    // Ensure unique username
    $base = $username;
    $suffix = 0;
    $stmt = $pdo->prepare('SELECT COUNT(*) AS c FROM users WHERE username = ?');
    while (true) {
        $stmt->execute([$username]);
        $exists = (int)$stmt->fetchColumn();
        if ($exists === 0) break;
        $suffix++;
        $username = $base . '_' . $suffix;
    }

    // Check duplicate email
    $stmt = $pdo->prepare('SELECT COUNT(*) AS c FROM users WHERE email = ?');
    $stmt->execute([$email]);
    if ((int)$stmt->fetchColumn() > 0) {
        redirectWithMessage('error', 'Email đã được sử dụng.');
    }

    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    $ins = $pdo->prepare(
        'INSERT INTO users (username, email, password_hash, full_name, phone, role, status, locale, timezone, id_booking)
         VALUES (?, ?, ?, ?, ?, "customer", "active", "vi_VN", "Asia/Ho_Chi_Minh", NULL)'
    );
    $ins->execute([$username, $email, $passwordHash, $fullName, $phone]);

    redirectWithMessage('success', 'Đăng ký thành công! Bạn có thể đăng nhập ngay.');
} catch (Throwable $e) {
    redirectWithMessage('error', 'Lỗi hệ thống: ' . $e->getMessage());
}
?>