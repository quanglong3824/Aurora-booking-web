<?php
// Users/edit.php - Màn hình chỉnh sửa thông tin người dùng
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../config/database.php';

if (!isset($_SESSION['user']) || !isset($_SESSION['user']['id'])) {
    header('Location: ' . url('pages/auth/dang-nhap.php?type=error&msg=' . urlencode('Vui lòng đăng nhập để chỉnh sửa thông tin')));
    exit;
}

// Tạo CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrfToken = $_SESSION['csrf_token'];

$userId = (int) $_SESSION['user']['id'];

try {
    $pdo = getDB();
    $stmt = $pdo->prepare('SELECT id, username, email, first_name, last_name, full_name, gender, date_of_birth, phone, avatar_url, address_line1, address_line2, city, state, postal_code, country_code, role, status, locale, timezone, marketing_opt_in, preferences FROM users WHERE id = ? LIMIT 1');
    $stmt->execute([$userId]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$user) {
        header('Location: ' . url('Users/index.php?type=error&msg=' . urlencode('Không tìm thấy thông tin người dùng')));
        exit;
    }
} catch (Throwable $e) {
    header('Location: ' . url('Users/index.php?type=error&msg=' . urlencode('Lỗi tải dữ liệu người dùng')));
    exit;
}

$page_title = 'Chỉnh sửa thông tin người dùng';
$additional_css = [asset('assets/css/auth.css')];
include __DIR__ . '/../includes/header.php';
?>

<main class="container" style="max-width: 980px; margin: 20px auto;">
    <h1 style="margin-bottom: 10px;">Chỉnh sửa thông tin</h1>
    <p style="color:#666;">Một số trường bị cấm thay đổi theo chính sách (username, email, role, status, id_booking).</p>

    <?php if (isset($_GET['type'], $_GET['msg'])): ?>
        <div style="padding:12px; border-radius:6px; margin:10px 0; <?php echo $_GET['type']==='success' ? 'background:#e6ffed; color:#03543f; border:1px solid #84e1bc;' : 'background:#ffe6e6; color:#8a1f1f; border:1px solid #f5a3a3;'; ?>">
            <?php echo htmlspecialchars($_GET['msg']); ?>
        </div>
    <?php endif; ?>

    <form method="post" action="<?php echo url('assets/php/backend/user_update.php'); ?>" id="edit-form" novalidate style="border:1px solid #ddd; border-radius:8px; padding:16px;">
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken); ?>">
        <input type="text" name="website" value="" style="display:none" aria-hidden="true" autocomplete="off">

        <div style="display:grid; grid-template-columns: 1fr 1fr; gap:16px;">
            <div>
                <label>Username (không thể sửa)</label>
                <input type="text" value="<?php echo htmlspecialchars($user['username']); ?>" disabled>
            </div>
            <div>
                <label>Email (không thể sửa)</label>
                <input type="email" value="<?php echo htmlspecialchars($user['email']); ?>" disabled>
            </div>

            <div>
                <label>Họ</label>
                <input type="text" name="first_name" maxlength="100" value="<?php echo htmlspecialchars($user['first_name']); ?>" pattern="^[\p{L} .'-]{1,100}$">
            </div>
            <div>
                <label>Tên</label>
                <input type="text" name="last_name" maxlength="100" value="<?php echo htmlspecialchars($user['last_name']); ?>" pattern="^[\p{L} .'-]{1,100}$">
            </div>

            <div>
                <label>Tên hiển thị</label>
                <input type="text" name="full_name" maxlength="200" value="<?php echo htmlspecialchars($user['full_name']); ?>" pattern="^[\p{L}\d .'-]{1,200}$">
            </div>
            <div>
                <label>Giới tính</label>
                <select name="gender">
                    <option value="" <?php echo empty($user['gender']) ? 'selected' : ''; ?>>—</option>
                    <option value="male" <?php echo $user['gender']==='male' ? 'selected' : ''; ?>>Nam</option>
                    <option value="female" <?php echo $user['gender']==='female' ? 'selected' : ''; ?>>Nữ</option>
                    <option value="other" <?php echo $user['gender']==='other' ? 'selected' : ''; ?>>Khác</option>
                </select>
            </div>

            <div>
                <label>Ngày sinh</label>
                <input type="date" name="date_of_birth" value="<?php echo htmlspecialchars($user['date_of_birth']); ?>">
            </div>
            <div>
                <label>Điện thoại</label>
                <input type="tel" name="phone" maxlength="20" value="<?php echo htmlspecialchars($user['phone']); ?>" pattern="^[0-9+\-() ]{6,20}$">
            </div>

            <div>
                <label>Avatar URL</label>
                <input type="url" name="avatar_url" maxlength="255" value="<?php echo htmlspecialchars($user['avatar_url']); ?>">
            </div>
            <div>
                <label>Quốc gia</label>
                <input type="text" name="country_code" maxlength="2" value="<?php echo htmlspecialchars($user['country_code']); ?>" pattern="^[A-Za-z]{2}$">
            </div>

            <div>
                <label>Địa chỉ 1</label>
                <input type="text" name="address_line1" maxlength="255" value="<?php echo htmlspecialchars($user['address_line1']); ?>">
            </div>
            <div>
                <label>Địa chỉ 2</label>
                <input type="text" name="address_line2" maxlength="255" value="<?php echo htmlspecialchars($user['address_line2']); ?>">
            </div>

            <div>
                <label>Thành phố</label>
                <input type="text" name="city" maxlength="100" value="<?php echo htmlspecialchars($user['city']); ?>">
            </div>
            <div>
                <label>Tỉnh/State</label>
                <input type="text" name="state" maxlength="100" value="<?php echo htmlspecialchars($user['state']); ?>">
            </div>

            <div>
                <label>Mã bưu điện</label>
                <input type="text" name="postal_code" maxlength="20" value="<?php echo htmlspecialchars($user['postal_code']); ?>">
            </div>
            <div>
                <label>Ngôn ngữ</label>
                <input type="text" name="locale" maxlength="10" value="<?php echo htmlspecialchars($user['locale']); ?>">
            </div>

            <div>
                <label>Múi giờ</label>
                <input type="text" name="timezone" maxlength="50" value="<?php echo htmlspecialchars($user['timezone']); ?>">
            </div>
            <div>
                <label>Nhận tin khuyến mãi</label>
                <select name="marketing_opt_in">
                    <option value="0" <?php echo empty($user['marketing_opt_in']) ? 'selected' : ''; ?>>Không</option>
                    <option value="1" <?php echo !empty($user['marketing_opt_in']) ? 'selected' : ''; ?>>Có</option>
                </select>
            </div>

            <div style="grid-column: 1 / span 2;">
                <label>Tuỳ chọn (JSON/Text)</label>
                <textarea name="preferences" rows="4" maxlength="2000" style="width:100%;"><?php echo htmlspecialchars($user['preferences']); ?></textarea>
            </div>

            <div>
                <label>Role (cấm sửa)</label>
                <input type="text" value="<?php echo htmlspecialchars($user['role']); ?>" disabled>
            </div>
            <div>
                <label>Trạng thái (cấm sửa)</label>
                <input type="text" value="<?php echo htmlspecialchars($user['status']); ?>" disabled>
            </div>
        </div>

        <div style="margin-top:16px; display:flex; gap:10px;">
            <button type="submit" class="btn" style="padding:10px 14px; background:#0770e3; color:#fff; border:none; border-radius:6px;">Lưu thay đổi</button>
            <a class="btn" href="<?php echo url('Users/index.php'); ?>" style="padding:10px 14px; background:#eee; color:#333; border-radius:6px; text-decoration:none;">Huỷ</a>
        </div>
    </form>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>