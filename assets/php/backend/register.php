<?php
// Khởi tạo phiên sớm để dùng CSRF và throttle đăng ký an toàn
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../../../config/database.php';
require_once __DIR__ . '/../../../includes/config.php';

function redirectWithMessage($type, $msg) {
    // Dùng đường dẫn tương đối tới root để tránh BASE_URL sai khi chạy trong assets/backend
    $qs = '?type=' . urlencode($type) . '&msg=' . urlencode($msg);
    $location = RELATIVE_ROOT . 'pages/auth/dang-ky.php' . $qs;
    header('Location: ' . $location);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirectWithMessage('error', 'Phương thức không hợp lệ.');
}

$csrfToken = $_POST['csrf_token'] ?? '';
if (empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $csrfToken)) {
    redirectWithMessage('error', 'Xác thực CSRF không hợp lệ. Vui lòng thử lại.');
}

// Honeypot chống bot: nếu trường website có giá trị → chặn
if (!empty($_POST['website'])) {
    redirectWithMessage('error', 'Phát hiện hành vi tự động.');
}

// Throttle đơn giản theo phiên: tối đa 1 lần mỗi 3 giây
$now = time();
if (!empty($_SESSION['last_register_time']) && ($now - (int)$_SESSION['last_register_time'] < 3)) {
    redirectWithMessage('error', 'Bạn thao tác quá nhanh, vui lòng thử lại sau ít giây.');
}
$_SESSION['last_register_time'] = $now;

$fullName = trim($_POST['full_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$password = $_POST['password'] ?? '';
$confirmPassword = $_POST['confirm_password'] ?? '';

$errors = [];

// Phát hiện nội dung giống mã/XSS để từ chối
function hasCodeLike($v) {
    if ($v === null || $v === '') return false;
    $s = (string)$v;
    if (preg_match('/[<>]/', $s)) return true; // góc nhọn
    $rx = '/<\/?[a-z][^>]*>|on[a-z]+\s*=|javascript:|data:\s*text\/|<\?php|\?>/i';
    return (bool)preg_match($rx, $s);
}

if ($fullName === '' || mb_strlen($fullName) < 2) {
    $errors[] = 'Họ và tên không hợp lệ.';
}
if (hasCodeLike($fullName)) {
    $errors[] = 'Không cho phép nhập mã trong họ và tên.';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email không hợp lệ.';
}
if (hasCodeLike($email)) {
    $errors[] = 'Email không được chứa ký tự hoặc thẻ mã.';
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
if ($phone !== '' && hasCodeLike($phone)) {
    $errors[] = 'Số điện thoại không được chứa ký tự hoặc thẻ mã.';
}

// Kiểm tra độ mạnh mật khẩu tối thiểu
function pwStrengthPercent($pwd, $emailStr, $nameStr) {
    $score = 0;
    $len = strlen($pwd);
    if ($len >= 10) $score += min(50, ($len - 9) * 5); // tối đa 50
    if (preg_match('/[A-Z]/', $pwd)) $score += 10;
    if (preg_match('/[a-z]/', $pwd)) $score += 10;
    if (preg_match('/[0-9]/', $pwd)) $score += 10;
    if (preg_match('/[^A-Za-z0-9]/', $pwd)) $score += 10;
    $emailLocal = explode('@', $emailStr)[0] ?? '';
    $nameParts = preg_split('/\s+/', $nameStr, -1, PREG_SPLIT_NO_EMPTY);
    $containsAny = false;
    $lowerPwd = strtolower($pwd);
    foreach (array_merge([$emailLocal], $nameParts ?: []) as $part) {
        $t = strtolower(trim($part));
        if (strlen($t) >= 3 && $t !== '' && strpos($lowerPwd, $t) !== false) { $containsAny = true; break; }
    }
    if ($containsAny) $score -= 20;
    if (preg_match('/^(.)\1{3,}$/', $pwd)) $score -= 20;
    if (preg_match('/^[A-Za-z]+$/', $pwd) || preg_match('/^[0-9]+$/', $pwd)) $score -= 15;
    $score = max(0, min(100, $score));
    return (int)round($score);
}

$strength = pwStrengthPercent($password, $email, $fullName);
if ($strength < 60) {
    $errors[] = 'Mật khẩu chưa đủ mạnh (' . $strength . '%). Vui lòng tăng độ dài và đa dạng ký tự.';
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

    // Vô hiệu hóa CSRF token sau khi dùng để tránh reuse, tạo lại ở trang đăng ký
    unset($_SESSION['csrf_token']);

    redirectWithMessage('success', 'Đăng ký thành công! Bạn có thể đăng nhập ngay.');
} catch (Throwable $e) {
    // Không lộ thông tin nội bộ ra ngoài, ghi log nội bộ và trả về thông báo chung
    error_log('[register.php] Error: ' . $e->getMessage());
    redirectWithMessage('error', 'Có lỗi xảy ra, vui lòng thử lại sau.');
}
?>