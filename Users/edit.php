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
$additional_css = ['user.css'];
include __DIR__ . '/../includes/header.php';
?>

<main class="container">
    <h1>Chỉnh sửa thông tin</h1>
    <p class="help-text">Một số trường không thể thay đổi theo chính sách: username, email, role, status.</p>

    <?php if (isset($_GET['type'], $_GET['msg'])): ?>
        <div style="padding:12px; border-radius:6px; margin:10px 0; <?php echo $_GET['type']==='success' ? 'background:#e6ffed; color:#03543f; border:1px solid #84e1bc;' : 'background:#ffe6e6; color:#8a1f1f; border:1px solid #f5a3a3;'; ?>">
            <?php echo htmlspecialchars($_GET['msg']); ?>
        </div>
    <?php endif; ?>

    <form method="post" action="<?php echo url('assets/php/backend/user_update.php'); ?>" id="edit-form" novalidate>
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken); ?>">
        <input type="text" name="website" value="" style="display:none" aria-hidden="true" autocomplete="off">

        <div class="form-grid">
            <div>
                <label>Username (không thể sửa)</label>
                <input type="text" value="<?php echo htmlspecialchars($user['username']); ?>" disabled>
                <div class="help-text">Liên hệ bộ phận hỗ trợ nếu bạn cần thay đổi username.</div>
            </div>
            <div>
                <label>Email (không thể sửa)</label>
                <input type="email" value="<?php echo htmlspecialchars($user['email']); ?>" disabled>
                <div class="help-text">Email dùng để đăng nhập và nhận thông báo.</div>
            </div>

            <div>
                <label>Họ</label>
                <input type="text" name="first_name" maxlength="100" value="<?php echo htmlspecialchars($user['first_name']); ?>" pattern="^[\p{L} .'-]{1,100}$" placeholder="Ví dụ: Nguyễn">
                <div class="field-error" data-for="first_name"></div>
            </div>
            <div>
                <label>Tên</label>
                <input type="text" name="last_name" maxlength="100" value="<?php echo htmlspecialchars($user['last_name']); ?>" pattern="^[\p{L} .'-]{1,100}$" placeholder="Ví dụ: An">
                <div class="field-error" data-for="last_name"></div>
            </div>

            <div>
                <label>Tên hiển thị</label>
                <input type="text" name="full_name" maxlength="200" value="<?php echo htmlspecialchars($user['full_name']); ?>" pattern="^[\p{L}\d .'-]{1,200}$" placeholder="Tên hiển thị công khai">
                <div class="field-error" data-for="full_name"></div>
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
                <div class="field-error" data-for="date_of_birth"></div>
            </div>
            <div>
                <label>Điện thoại</label>
                <input type="tel" name="phone" maxlength="20" value="<?php echo htmlspecialchars($user['phone']); ?>" pattern="^[0-9+\-() ]{6,20}$" placeholder="Ví dụ: 0901 234 567">
                <div class="field-error" data-for="phone"></div>
            </div>

            <div>
                <label>Avatar URL</label>
                <input type="url" name="avatar_url" maxlength="255" value="<?php echo htmlspecialchars($user['avatar_url']); ?>">
                <div class="help-text">Dán liên kết ảnh đại diện (https://...).</div>
                <div class="field-error" data-for="avatar_url"></div>
            </div>
            <div>
                <label>Quốc gia</label>
                <input type="text" name="country_code" maxlength="2" value="<?php echo htmlspecialchars($user['country_code']); ?>" pattern="^[A-Za-z]{2}$" placeholder="VN, US, JP...">
                <div class="field-error" data-for="country_code"></div>
            </div>

            <div>
                <label>Địa chỉ 1</label>
                <input type="text" name="address_line1" maxlength="255" value="<?php echo htmlspecialchars($user['address_line1']); ?>">
                <div class="field-error" data-for="address_line1"></div>
            </div>
            <div>
                <label>Địa chỉ 2</label>
                <input type="text" name="address_line2" maxlength="255" value="<?php echo htmlspecialchars($user['address_line2']); ?>">
                <div class="field-error" data-for="address_line2"></div>
            </div>

            <div>
                <label>Thành phố</label>
                <input type="text" name="city" maxlength="100" value="<?php echo htmlspecialchars($user['city']); ?>">
                <div class="field-error" data-for="city"></div>
            </div>
            <div>
                <label>Tỉnh/State</label>
                <input type="text" name="state" maxlength="100" value="<?php echo htmlspecialchars($user['state']); ?>">
                <div class="field-error" data-for="state"></div>
            </div>

            <div>
                <label>Mã bưu điện</label>
                <input type="text" name="postal_code" maxlength="20" value="<?php echo htmlspecialchars($user['postal_code']); ?>">
                <div class="field-error" data-for="postal_code"></div>
            </div>
            <div>
                <label>Ngôn ngữ</label>
                <input type="text" name="locale" maxlength="10" value="<?php echo htmlspecialchars($user['locale']); ?>" placeholder="vi, en, ja...">
                <div class="field-error" data-for="locale"></div>
            </div>

            <div>
                <label>Múi giờ</label>
                <input type="text" name="timezone" maxlength="50" value="<?php echo htmlspecialchars($user['timezone']); ?>" placeholder="Asia/Ho_Chi_Minh">
                <div class="field-error" data-for="timezone"></div>
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
                <textarea name="preferences" rows="4" maxlength="2000"><?php echo htmlspecialchars($user['preferences']); ?></textarea>
                <div class="help-text">Bạn có thể nhập dạng văn bản, hoặc JSON hợp lệ để lưu cấu hình.</div>
                <div class="field-error" data-for="preferences"></div>
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

        <div class="actions">
            <button type="submit" class="btn-primary">Lưu thay đổi</button>
            <a class="btn-secondary" href="<?php echo url('Users/index.php'); ?>">Huỷ</a>
        </div>
    </form>
</main>

<script>
  (function() {
    const form = document.getElementById('edit-form');
    if (!form) return;

    function showError(name, message) {
      const field = form.querySelector(`[name="${name}"]`);
      const errorEl = form.querySelector(`.field-error[data-for="${name}"]`);
      if (field) field.classList.add('invalid');
      if (errorEl) { errorEl.textContent = message; errorEl.style.display = 'block'; }
    }

    function clearErrors() {
      form.querySelectorAll('.invalid').forEach(el => el.classList.remove('invalid'));
      form.querySelectorAll('.field-error').forEach(el => { el.textContent = ''; el.style.display = 'none'; });
    }

    function hasCodeLike(str) {
      if (!str) return false;
      const s = String(str);
      const re = /<[^>]+>|(https?:\/\/)|SELECT|INSERT|DELETE|UPDATE|DROP|--|\/\*|\*\//i;
      return re.test(s);
    }

    function isValidUrl(value) {
      try { new URL(value); return true; } catch { return false; }
    }

    form.addEventListener('submit', function(e) {
      clearErrors();
      let hasError = false;

      const get = name => {
        const el = form.querySelector(`[name="${name}"]`);
        return el ? el.value.trim() : '';
      };

      const first_name = get('first_name');
      const last_name = get('last_name');
      const full_name = get('full_name');
      const phone = get('phone');
      const avatar_url = get('avatar_url');
      const country_code = get('country_code');
      const address_line1 = get('address_line1');
      const address_line2 = get('address_line2');
      const city = get('city');
      const state = get('state');
      const postal_code = get('postal_code');
      const locale = get('locale');
      const timezone = get('timezone');
      const dob = get('date_of_birth');
      const preferences = get('preferences');

      // Rào chắn nội dung có thể gây hại
      [
        ['first_name', first_name],
        ['last_name', last_name],
        ['full_name', full_name],
        ['address_line1', address_line1],
        ['address_line2', address_line2],
        ['city', city],
        ['state', state],
      ].forEach(([name, val]) => {
        if (hasCodeLike(val)) { showError(name, 'Vui lòng không nhập mã hoặc liên kết trong trường này.'); hasError = true; }
      });

      // Số điện thoại
      if (phone && !/^[0-9+\-() ]{6,20}$/.test(phone)) {
        showError('phone', 'Số điện thoại không đúng định dạng.');
        hasError = true;
      }

      // Avatar URL
      if (avatar_url && !isValidUrl(avatar_url)) {
        showError('avatar_url', 'Liên kết ảnh không hợp lệ.');
        hasError = true;
      }

      // Quốc gia (2 chữ cái)
      if (country_code && !/^[A-Za-z]{2}$/.test(country_code)) {
        showError('country_code', 'Mã quốc gia cần gồm 2 chữ cái, ví dụ: VN.');
        hasError = true;
      }

      // Ngôn ngữ (mã ngắn)
      if (locale && !/^[A-Za-z\-]{2,10}$/.test(locale)) {
        showError('locale', 'Mã ngôn ngữ không hợp lệ, ví dụ: vi, en-US.');
        hasError = true;
      }

      // Timezone
      if (timezone && !/^([A-Za-z_]+\/[A-Za-z_]+)$/.test(timezone)) {
        showError('timezone', 'Múi giờ cần theo định dạng Region/City, ví dụ: Asia/Ho_Chi_Minh.');
        hasError = true;
      }

      // Ngày sinh không ở tương lai
      if (dob) {
        const d = new Date(dob + 'T00:00:00');
        const now = new Date();
        if (d > now) { showError('date_of_birth', 'Ngày sinh không thể là thời điểm trong tương lai.'); hasError = true; }
      }

      // Preferences nếu là JSON thì phải hợp lệ
      if (preferences && (/^[\[{]/.test(preferences))) {
        try { JSON.parse(preferences); }
        catch { showError('preferences', 'Dữ liệu JSON không hợp lệ.'); hasError = true; }
      }

      if (hasError) {
        e.preventDefault();
        const firstInvalid = form.querySelector('.invalid');
        if (firstInvalid) firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
    });
  })();
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>