<?php
// assets/php/backend/user_update.php - xử lý cập nhật thông tin người dùng
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../../includes/config.php';
require_once __DIR__ . '/../../config/database.php';

function badRequest($msg) {
    header('Location: ' . url('Users/edit.php?type=error&msg=' . urlencode($msg)));
    exit;
}

function ok($msg) {
    header('Location: ' . url('Users/index.php?type=success&msg=' . urlencode($msg)));
    exit;
}

if (!isset($_SESSION['user']) || !isset($_SESSION['user']['id'])) {
    header('Location: ' . url('pages/auth/dang-nhap.php?type=error&msg=' . urlencode('Vui lòng đăng nhập')));
    exit;
}

// CSRF
if (!isset($_POST['csrf_token'], $_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], (string)$_POST['csrf_token'])) {
    badRequest('CSRF token không hợp lệ');
}
// làm mới token sau khi dùng
unset($_SESSION['csrf_token']);

// Honeypot
if (!empty($_POST['website'])) {
    badRequest('Phát hiện hành vi tự động');
}

// Helper: phát hiện nội dung giống mã (code-like)
function hasCodeLike($s) {
    $patternTags = '/<\s*\/?\s*(script|style|iframe|object|embed|link|meta|img|svg|on[a-z]+)\b/i';
    $patternAngles = '/[<>]/';
    $patternJSProto = '/javascript\s*:/i';
    $patternPHP = '/<\?php|\?>|\$\w+\s*=|echo\s+|eval\s*\(/i';
    return preg_match($patternTags, $s) || preg_match($patternAngles, $s) || preg_match($patternJSProto, $s) || preg_match($patternPHP, $s);
}

$userId = (int) $_SESSION['user']['id'];

// Lấy và chuẩn hoá dữ liệu cho phép cập nhật
$fields = [
    'first_name' => FILTER_SANITIZE_STRING,
    'last_name' => FILTER_SANITIZE_STRING,
    'full_name' => FILTER_SANITIZE_STRING,
    'gender' => FILTER_SANITIZE_STRING,
    'date_of_birth' => FILTER_SANITIZE_STRING,
    'phone' => FILTER_SANITIZE_STRING,
    'avatar_url' => FILTER_SANITIZE_URL,
    'address_line1' => FILTER_SANITIZE_STRING,
    'address_line2' => FILTER_SANITIZE_STRING,
    'city' => FILTER_SANITIZE_STRING,
    'state' => FILTER_SANITIZE_STRING,
    'postal_code' => FILTER_SANITIZE_STRING,
    'country_code' => FILTER_SANITIZE_STRING,
    'locale' => FILTER_SANITIZE_STRING,
    'timezone' => FILTER_SANITIZE_STRING,
    'marketing_opt_in' => FILTER_SANITIZE_NUMBER_INT,
    'preferences' => FILTER_UNSAFE_RAW,
];

$input = [];
foreach ($fields as $name => $filter) {
    $input[$name] = isset($_POST[$name]) ? filter_var((string)$_POST[$name], $filter) : null;
}

// Validate cơ bản
if ($input['gender'] !== null && $input['gender'] !== '' && !in_array($input['gender'], ['male','female','other'], true)) {
    badRequest('Giới tính không hợp lệ');
}
if ($input['date_of_birth']) {
    $d = date_create_from_format('Y-m-d', $input['date_of_birth']);
    if (!$d) badRequest('Ngày sinh không hợp lệ');
    else {
        $now = new DateTime('today');
        if ($d > $now) badRequest('Ngày sinh không thể là thời điểm trong tương lai');
    }
}
if ($input['phone'] && !preg_match('/^[0-9+\-() ]{6,20}$/', $input['phone'])) {
    badRequest('Số điện thoại không hợp lệ');
}
if ($input['country_code'] && !preg_match('/^[A-Za-z]{2}$/', $input['country_code'])) {
    badRequest('Mã quốc gia không hợp lệ');
}
if ($input['locale'] && strlen($input['locale']) > 10) {
    badRequest('Ngôn ngữ quá dài');
}
if ($input['timezone'] && strlen($input['timezone']) > 50) {
    badRequest('Múi giờ quá dài');
}
if ($input['marketing_opt_in'] !== null) {
    $input['marketing_opt_in'] = (int) !!$input['marketing_opt_in'];
}

// Chặn nội dung giống mã cho các trường text
$checkFields = ['first_name','last_name','full_name','address_line1','address_line2','city','state','postal_code','preferences'];
foreach ($checkFields as $f) {
    if (!empty($input[$f]) && hasCodeLike($input[$f])) {
        badRequest('Vui lòng không nhập mã hoặc liên kết trong trường ' . $f);
    }
}

// Preferences: nếu người dùng nhập JSON, yêu cầu hợp lệ
if (!empty($input['preferences'])) {
    $pref = trim((string)$input['preferences']);
    if ($pref !== '' && ($pref[0] === '{' || $pref[0] === '[')) {
        $decoded = json_decode($pref, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            badRequest('Tuỳ chọn (JSON) không hợp lệ, vui lòng kiểm tra lại');
        }
    }
}

try {
    $pdo = getDB();
    $sql = 'UPDATE users SET first_name = :first_name, last_name = :last_name, full_name = :full_name, gender = :gender, date_of_birth = :date_of_birth, phone = :phone, avatar_url = :avatar_url, address_line1 = :address_line1, address_line2 = :address_line2, city = :city, state = :state, postal_code = :postal_code, country_code = :country_code, locale = :locale, timezone = :timezone, marketing_opt_in = :marketing_opt_in, preferences = :preferences WHERE id = :id LIMIT 1';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':first_name' => $input['first_name'],
        ':last_name' => $input['last_name'],
        ':full_name' => $input['full_name'],
        ':gender' => $input['gender'] ?: null,
        ':date_of_birth' => $input['date_of_birth'] ?: null,
        ':phone' => $input['phone'],
        ':avatar_url' => $input['avatar_url'],
        ':address_line1' => $input['address_line1'],
        ':address_line2' => $input['address_line2'],
        ':city' => $input['city'],
        ':state' => $input['state'],
        ':postal_code' => $input['postal_code'],
        ':country_code' => $input['country_code'],
        ':locale' => $input['locale'],
        ':timezone' => $input['timezone'],
        ':marketing_opt_in' => $input['marketing_opt_in'],
        ':preferences' => $input['preferences'],
        ':id' => $userId,
    ]);

    // Cập nhật session để header hiển thị đúng tên
    if (!empty($input['full_name'])) {
        $_SESSION['user']['full_name'] = $input['full_name'];
    } else {
        // nếu full_name trống, fallback theo first/last name
        $_SESSION['user']['full_name'] = trim(($input['first_name'] ?: '') . ' ' . ($input['last_name'] ?: ''));
    }

    ok('Cập nhật thông tin thành công');
} catch (Throwable $e) {
    // ghi log nếu cần
    error_log('[user_update] ' . $e->getMessage());
    badRequest('Có lỗi xảy ra khi cập nhật thông tin');
}