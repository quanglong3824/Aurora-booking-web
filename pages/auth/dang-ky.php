<?php
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

                    <form class="auth-form" method="post" action="<?php echo url('assets/php/backend/register.php'); ?>">
                        <div class="form-group">
                            <label for="full_name">Họ và tên</label>
                            <input type="text" id="full_name" name="full_name" placeholder="Nguyễn Văn A" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="you@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại</label>
                            <input type="tel" id="phone" name="phone" placeholder="0901 234 567">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input type="password" id="password" name="password" placeholder="••••••••" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Xác nhận mật khẩu</label>
                            <input type="password" id="confirm_password" name="confirm_password" placeholder="••••••••" required>
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
});
</script>

<?php include '../../includes/footer.php'; ?>