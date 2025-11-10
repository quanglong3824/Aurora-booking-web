<?php
// assets/php/backend/user_update.php - xử lý cập nhật thông tin người dùng
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../../includes/config.php';
require_once __DIR__ . '/../../config/database.php';

function setModal($type, $title, $msg) {
    $_SESSION['modal'] = [
        'type' => $type,
        'title' => $title,
        'message' => $msg,
    ];
}

function badRequest($msg) {
    setModal('error', 'Cập nhật không thành công', $msg);
    header('Location: ' . url('Users/edit.php'));
    exit;
}

function ok($msg) {
    setModal('success', 'Cập nhật thành công', $msg);
    header('Location: ' . url('Users/edit.php'));
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

// Ký tự và mẫu không cho phép (OS/SQL/JS/HTML injection)
function containsDisallowedChars($s) {
    if ($s === null) return false;
    $reSymbols = '/[`$#;|&^%*+=\\]/u';
    $reLogic = '/\b(eval|alert|prompt|confirm|cmd|exec|system|shell_exec|passthru|unlink|rm|curl|wget)\b/i';
    $reSeq = '/(&&|\|\||\$\(|\$\{)/';
    return preg_match($reSymbols, $s) || preg_match($reLogic, $s) || preg_match($reSeq, $s);
}

// Làm sạch cơ bản cho text
function sanitizeText($s) {
    $s = trim((string)$s);
    $s = strip_tags($s);
    // remove control chars
    $s = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u', '', $s);
    return $s;
}

// Whitelist ký tự an toàn cho text thông thường
function whitelistOk($s) {
    // Cho phép chữ, số, khoảng trắng và một số dấu cơ bản . , - ' / ( )
    if ($s === '') return true;
    return (bool) preg_match("/^[\p{L}\p{N}\s\.,\-'\/\(\)]{1,255}$/u", $s);
}

$userId = (int) $_SESSION['user']['id'];

// Lấy và chuẩn hoá dữ liệu cho phép cập nhật
$fields = [
    'first_name' => FILTER_UNSAFE_RAW,
    'last_name' => FILTER_UNSAFE_RAW,
    'full_name' => FILTER_UNSAFE_RAW,
    'gender' => FILTER_UNSAFE_RAW,
    'date_of_birth' => FILTER_UNSAFE_RAW,
    'phone' => FILTER_UNSAFE_RAW,
    'avatar_url' => FILTER_SANITIZE_URL,
    'address_line1' => FILTER_UNSAFE_RAW,
    'address_line2' => FILTER_UNSAFE_RAW,
    'city' => FILTER_UNSAFE_RAW,
    'state' => FILTER_UNSAFE_RAW,
    'postal_code' => FILTER_UNSAFE_RAW,
    'country_code' => FILTER_UNSAFE_RAW,
    'locale' => FILTER_UNSAFE_RAW,
    'timezone' => FILTER_UNSAFE_RAW,
    'marketing_opt_in' => FILTER_SANITIZE_NUMBER_INT,
    'preferences' => FILTER_UNSAFE_RAW,
];

$input = [];
foreach ($fields as $name => $filter) {
    $input[$name] = isset($_POST[$name]) ? filter_var((string)$_POST[$name], $filter) : null;
}

// Chuẩn hoá cơ bản
$input['country_code'] = $input['country_code'] ? strtoupper(trim($input['country_code'])) : $input['country_code'];
$input['locale'] = $input['locale'] ? strtolower(trim($input['locale'])) : $input['locale'];
$input['timezone'] = $input['timezone'] ? preg_replace('/\s+/', '_', trim($input['timezone'])) : $input['timezone'];

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
if ($input['locale'] && (strlen($input['locale']) > 10 || !preg_match('/^[A-Za-z\-]{2,10}$/', $input['locale']))) {
    badRequest('Mã ngôn ngữ không hợp lệ (ví dụ: vi, en-US)');
}
if ($input['timezone']) {
    if (strlen($input['timezone']) > 50) {
        badRequest('Múi giờ quá dài');
    }
    if (!preg_match('/^([A-Za-z_]+\/[A-Za-z_]+)$/', $input['timezone'])) {
        badRequest('Múi giờ cần theo định dạng Region/City, ví dụ: Asia/Ho_Chi_Minh');
    }
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

// Làm sạch và chặn ký tự không cho phép với trường text (bổ sung)
$textFields = ['first_name','last_name','full_name','address_line1','address_line2','city','state','postal_code'];
foreach ($textFields as $f) {
    if ($input[$f] !== null) {
        $input[$f] = sanitizeText($input[$f]);
        if (containsDisallowedChars($input[$f]) || !whitelistOk($input[$f])) {
            badRequest('Thông tin nhập có ký tự không cho phép ở trường ' . $f);
        }
    }
}

// Avatar URL: chỉ cho phép http/https
if (!empty($input['avatar_url'])) {
    $parts = parse_url($input['avatar_url']);
    if (!$parts || !isset($parts['scheme']) || !in_array(strtolower($parts['scheme']), ['http','https'], true)) {
        badRequest('Liên kết ảnh đại diện cần bắt đầu bằng http/https');
    }
}

// Preferences: nếu người dùng nhập JSON, yêu cầu hợp lệ
if (!empty($input['preferences'])) {
    $pref = trim((string)$input['preferences']);
    if (strlen($pref) > 2000) {
        badRequest('Tuỳ chọn quá dài (tối đa 2000 ký tự)');
    }
    if ($pref !== '' && ($pref[0] === '{' || $pref[0] === '[')) {
        $decoded = json_decode($pref, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            badRequest('Tuỳ chọn (JSON) không hợp lệ, vui lòng kiểm tra lại');
        }
    }
}

try {
    $pdo = getDB();
    if ($pdo === false) {
        badRequest('Không thể kết nối CSDL để cập nhật');
    }

    $pdo->beginTransaction();

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

    // Phản hồi theo kết quả cập nhật
    $updated = (int) $stmt->rowCount();
    if ($updated > 0) {
        $pdo->commit();
        ok('Thông tin đã được lưu');
    } else {
        $pdo->commit();
        setModal('info', 'Không có thay đổi', 'Dữ liệu giữ nguyên vì không có chỉnh sửa.');
        header('Location: ' . url('Users/edit.php'));
        exit;
    }
} catch (Throwable $e) {
    // ghi log nếu cần
    error_log('[user_update] ' . $e->getMessage());
    try { if (isset($pdo) && $pdo instanceof PDO) { $pdo->rollBack(); } } catch (Throwable $ignored) {}
    badRequest('Có lỗi xảy ra khi cập nhật thông tin');
}