<?php
// Khởi tạo phiên để dùng CSRF token
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$page_title = "Đăng ký";
$page_description = "Tạo tài khoản Aurora Hotel Plaza để nhận ưu đãi và quản lý đặt phòng";
$additional_css = ['auth.css'];
include '../../includes/header.php';
?>

<section class="auth-page">
    <div class="container auth-container">
        <div class="auth-card">
            <div class="auth-grid">
                <div class="auth-content">
                    <h1 class="auth-title">Đăng ký tài khoản</h1>
                    <p class="auth-subtitle">Điền thông tin bên dưới để tạo tài khoản mới</p>
                    <?php if (!empty($_GET['type']) && !empty($_GET['msg'])): ?>
                        <div class="auth-alert" style="margin:10px 0;padding:10px;border-radius:6px;<?php echo $_GET['type']==='success' ? 'background:#e6ffed;color:#03543f;border:1px solid #84e1bc;' : 'background:#ffe6e6;color:#63171b;border:1px solid #feb2b2;'; ?>">
                            <?php echo htmlspecialchars($_GET['msg']); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Modal thông báo đăng ký thành công -->
                    <div id="signupSuccessModal" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,0.5);z-index:1000;align-items:center;justify-content:center;">
                        <div style="background:#fff;max-width:520px;width:92%;border-radius:10px;box-shadow:0 10px 25px rgba(0,0,0,0.2);padding:20px;">
                            <div style="display:flex;align-items:center;gap:12px;">
                                <i class="fas fa-check-circle" style="font-size:28px;color:#0f766e;"></i>
                                <h3 style="margin:0;color:#0f766e;">Đăng ký thành công</h3>
                            </div>
                            <p style="margin:12px 0 18px;color:#374151;">Tài khoản của bạn đã được tạo. Bạn có thể đăng nhập ngay để bắt đầu trải nghiệm Aurora Hotel Plaza.</p>
                            <div style="display:flex;gap:10px;justify-content:flex-end;">
                                <a href="<?php echo url('pages/auth/dang-nhap.php'); ?>" class="btn-auth" style="text-decoration:none;display:inline-block;padding:10px 16px;background:#0ea5e9;color:#fff;border-radius:8px;">
                                    <i class="fas fa-sign-in-alt"></i>
                                    Đăng nhập ngay
                                </a>
                                <button type="button" id="closeSuccessModal" class="btn-auth" style="padding:10px 16px;background:#e5e7eb;color:#111827;border-radius:8px;">
                                    Ở lại trang
                                </button>
                            </div>
                        </div>
                    </div>

                    <form class="auth-form" method="post" action="<?php echo url('assets/php/backend/register.php'); ?>" autocomplete="off" novalidate>
                        <!-- CSRF token -->
                        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'] ?? ''); ?>">
                        <!-- Honeypot chống bot -->
                        <input type="text" name="website" tabindex="-1" aria-hidden="true" style="position:absolute;left:-9999px;opacity:0;width:1px;height:1px;" autocomplete="off">
                        <div class="form-group">
                            <label for="full_name">Họ và tên</label>
                            <input type="text" id="full_name" name="full_name" placeholder="Nguyễn Văn A" required maxlength="100" autocomplete="name" pattern="[^<>]{2,100}" title="Không cho phép ký tự < hoặc >">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="you@example.com" required maxlength="255" autocomplete="email" pattern="^[^<>@\s]+@[^<>@\s]+\.[^<>@\s]+$" title="Email hợp lệ, không chứa ký tự < hoặc >">
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input type="tel" id="phone" name="phone" placeholder="0901 234 567" maxlength="20" autocomplete="tel" inputmode="tel" pattern="^[0-9\s\-\+\.]{8,20}$" title="Chỉ số, khoảng trắng, dấu + - . (8–20 ký tự)">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" id="password" name="password" placeholder="••••••••" required maxlength="72" autocomplete="new-password">
                            <div class="password-strength" style="margin-top:8px;">
                                <label style="display:block;margin-bottom:4px;color:#374151;">Độ mạnh mật khẩu: <span id="pwStrengthPct">0%</span></label>
                                <input type="range" id="pwStrengthRange" min="0" max="100" value="0" disabled style="width:100%;">
                                <div id="pwHints" style="font-size:13px;color:#6b7280;margin-top:6px;display:grid;grid-template-columns:repeat(2,1fr);gap:6px;">
                                    <span id="hintLen">• Ít nhất 10 ký tự</span>
                                    <span id="hintUpper">• Chứa chữ hoa</span>
                                    <span id="hintLower">• Chứa chữ thường</span>
                                    <span id="hintDigit">• Chứa chữ số</span>
                                    <span id="hintSymbol">• Chứa ký tự đặc biệt</span>
                                    <span id="hintNoName">• Không chứa tên/email</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Xác nhận mật khẩu</label>
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="••••••••" required maxlength="72" autocomplete="new-password">
                            <small id="matchHint" style="display:block;margin-top:6px;color:#6b7280;">Nhập lại mật khẩu giống trường trên</small>
                        </div>
                        <div class="auth-actions">
                            <button type="submit" class="btn-auth">
                                <i class="fas fa-user-plus"></i>
                                Đăng ký
                            </button>
                            <div class="auth-links">
                                <a href="<?php echo url('pages/auth/dang-nhap.php'); ?>">Đã có tài khoản? Đăng nhập</a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="auth-illustration">
                    <div class="illustration-box">
                        <i class="fas fa-gift" style="font-size:42px;color:var(--brand-primary);"></i>
                        <h3 style="margin-top:10px">Ưu đãi dành riêng</h3>
                        <p>Thành viên nhận ưu đãi và khuyến mãi độc quyền khi đặt phòng.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Hiện modal khi đăng ký thành công
document.addEventListener('DOMContentLoaded', function () {
    const params = new URLSearchParams(window.location.search);
    const type = params.get('type');
    if (type === 'success') {
        const modal = document.getElementById('signupSuccessModal');
        if (modal) {
            modal.style.display = 'flex';
            const closer = document.getElementById('closeSuccessModal');
            if (closer) closer.addEventListener('click', function(){ modal.style.display = 'none'; });
        }
    }

    // Tính toán độ mạnh mật khẩu và cập nhật range %
    const pw = document.getElementById('password');
    const email = document.getElementById('email');
    const fullName = document.getElementById('full_name');
    const range = document.getElementById('pwStrengthRange');
    const pct = document.getElementById('pwStrengthPct');
    const hintLen = document.getElementById('hintLen');
    const hintUpper = document.getElementById('hintUpper');
    const hintLower = document.getElementById('hintLower');
    const hintDigit = document.getElementById('hintDigit');
    const hintSymbol = document.getElementById('hintSymbol');
    const hintNoName = document.getElementById('hintNoName');
    const matchHint = document.getElementById('matchHint');
    const confirm = document.getElementById('confirm_password');

    function containsAny(source, parts) {
        const s = (source || '').toLowerCase();
        for (const p of parts) {
            const t = (p || '').toLowerCase().trim();
            if (t.length >= 3 && s.includes(t)) return true;
        }
        return false;
    }

    function strengthPercent(pwd, emailStr, nameStr) {
        let score = 0;
        const len = pwd.length;

        // Độ dài (tối đa 50 điểm)
        if (len >= 10) score += Math.min(50, (len - 9) * 5); // 10->50, 19+ cap 50

        // Lớp ký tự (mỗi lớp 10 điểm)
        if (/[A-Z]/.test(pwd)) score += 10;
        if (/[a-z]/.test(pwd)) score += 10;
        if (/[0-9]/.test(pwd)) score += 10;
        if (/[^A-Za-z0-9]/.test(pwd)) score += 10;

        // Phạt nếu chứa email local hoặc tên
        const emailLocal = (emailStr || '').split('@')[0];
        const nameParts = (nameStr || '').split(/\s+/);
        if (containsAny(pwd, [emailLocal, ...nameParts])) score -= 20;

        // Phạt lặp ký tự/chuỗi đơn giản
        if (/^(.)\1{3,}$/.test(pwd)) score -= 20; // 4+ ký tự giống nhau liên tiếp
        if (/^[A-Za-z]+$/.test(pwd) || /^[0-9]+$/.test(pwd)) score -= 15; // chỉ chữ hoặc chỉ số

        score = Math.max(0, Math.min(100, score));
        return Math.round(score);
    }

    function updateHints(pwd) {
        const e = email.value;
        const n = fullName.value;
        const percent = strengthPercent(pwd, e, n);
        if (range) range.value = percent;
        if (pct) pct.textContent = percent + '%';

        const ok = (el, pass) => {
            if (!el) return;
            el.style.color = pass ? '#065f46' : '#6b7280';
        };
        ok(hintLen, pwd.length >= 10);
        ok(hintUpper, /[A-Z]/.test(pwd));
        ok(hintLower, /[a-z]/.test(pwd));
        ok(hintDigit, /[0-9]/.test(pwd));
        ok(hintSymbol, /[^A-Za-z0-9]/.test(pwd));
        const emailLocal2 = (e || '').split('@')[0];
        const nameParts2 = (n || '').split(/\s+/);
        ok(hintNoName, !containsAny(pwd, [emailLocal2, ...nameParts2]));
    }

    pw && pw.addEventListener('input', () => updateHints(pw.value));
    email && email.addEventListener('input', () => updateHints(pw.value));
    fullName && fullName.addEventListener('input', () => updateHints(pw.value));
    confirm && confirm.addEventListener('input', () => {
        const match = confirm.value && pw.value && confirm.value === pw.value;
        if (matchHint) {
            matchHint.style.color = match ? '#065f46' : '#6b7280';
            matchHint.textContent = match ? 'Mật khẩu khớp.' : 'Nhập lại mật khẩu giống trường trên';
        }
    });
});
</script>

<script>
// Ngăn nhập nội dung giống mã vào các input
document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('.auth-form');
  const fields = ['full_name', 'email', 'phone'];

  function hasCodeLike(value) {
    if (!value) return false;
    const v = String(value);
    // Phát hiện thô các dấu hiệu XSS/code
    const patterns = [
      /<\/?[a-z][^>]*>/i,           // thẻ HTML
      /on[a-z]+\s*=/i,              // event handler
      /javascript:/i,                // protocol JS
      /data:\s*text\//i,           // data URL text
      /<\?php|\?>/i,               // thẻ PHP
      /[<>]/                         // góc nhọn
    ];
    return patterns.some(rx => rx.test(v));
  }

  function sanitizeBasic(value) {
    return String(value).replace(/[<>]/g, '').trim();
  }

  fields.forEach(id => {
    const el = document.getElementById(id);
    if (!el) return;
    el.addEventListener('input', () => {
      // Loại bỏ ký tự góc nhọn ngay khi gõ
      const cleaned = sanitizeBasic(el.value);
      if (cleaned !== el.value) el.value = cleaned;
    });
  });

  form && form.addEventListener('submit', function (e) {
    let bad = [];
    fields.forEach(id => {
      const el = document.getElementById(id);
      if (!el) return;
      const val = el.value || '';
      if (hasCodeLike(val)) bad.push(id);
    });
    if (bad.length) {
      e.preventDefault();
      alert('Vui lòng không nhập mã hoặc thẻ HTML vào các trường: ' + bad.join(', '));
    }
  });
});
</script>

<?php include '../../includes/footer.php'; ?>