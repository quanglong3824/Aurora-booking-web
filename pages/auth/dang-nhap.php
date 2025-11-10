<?php
// Khởi tạo phiên để dùng CSRF token
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$page_title = "Đăng nhập";
$page_description = "Đăng nhập tài khoản Aurora Hotel Plaza để quản lý đặt phòng";
$additional_css = ['auth.css'];
include '../../includes/header.php';
?>

<section class="auth-page">
    <div class="container auth-container" style="margin-top: 90px;">
        <div class="auth-card">
            <div class="auth-grid">
                <div class="auth-content">
                    <h1 class="auth-title">Đăng nhập</h1>
                    <p class="auth-subtitle">Vui lòng nhập email và mật khẩu để tiếp tục</p>
                    <?php if (!empty($_GET['type']) && !empty($_GET['msg'])): ?>
                        <div class="auth-alert" style="margin:10px 0;padding:10px;border-radius:6px;<?php echo $_GET['type']==='success' ? 'background:#e6ffed;color:#03543f;border:1px solid #84e1bc;' : 'background:#ffe6e6;color:#63171b;border:1px solid #feb2b2;'; ?>">
                            <?php echo htmlspecialchars($_GET['msg']); ?>
                        </div>
                    <?php endif; ?>

                    <form class="auth-form" method="post" action="<?php echo url('assets/php/backend/login.php'); ?>" autocomplete="off" novalidate>
                        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'] ?? ''); ?>">
                        <input type="text" name="website" tabindex="-1" aria-hidden="true" style="position:absolute;left:-9999px;opacity:0;width:1px;height:1px;" autocomplete="off">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="you@example.com" required maxlength="255" pattern="^[^<>@\s]+@[^<>@\s]+\.[^<>@\s]+$" title="Email hợp lệ, không chứa ký tự < hoặc >">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" id="password" name="password" placeholder="••••••••" required maxlength="72">
                        </div>
                        <div class="auth-actions">
                            <button type="submit" class="btn-auth">
                                <i class="fas fa-sign-in-alt"></i>
                                Đăng nhập
                            </button>
                            <div class="auth-links">
                                <a href="<?php echo url('pages/auth/quen-mat-khau.php'); ?>">Quên mật khẩu?</a>
                            </div>
                        </div>
                    </form>

                    <p class="auth-switch">Chưa có tài khoản? <a href="<?php echo url('pages/auth/dang-ky.php'); ?>">Đăng ký ngay</a></p>
                </div>

                <div class="auth-illustration">
                    <div class="illustration-box">
                        <i class="fas fa-user-shield" style="font-size:42px;color:var(--brand-primary);"></i>
                        <h3 style="margin-top:10px">Bảo mật & tiện lợi</h3>
                        <p>Quản lý đặt phòng, ưu đãi và thông tin cá nhân của bạn ở một nơi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>