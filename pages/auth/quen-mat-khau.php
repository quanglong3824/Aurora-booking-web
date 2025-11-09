<?php
$page_title = "Quên mật khẩu";
$page_description = "Khôi phục mật khẩu tài khoản Aurora Hotel Plaza";
$additional_css = ['auth.css'];
include '../../includes/header.php';
?>

<section class="auth-page">
    <div class="container auth-container">
        <div class="auth-card">
            <div class="auth-grid">
                <div class="auth-content">
                    <h1 class="auth-title">Quên mật khẩu</h1>
                    <p class="auth-subtitle">Nhập email để nhận hướng dẫn đặt lại mật khẩu</p>

                    <form class="auth-form" method="post" action="#">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="you@example.com" required>
                        </div>
                        <div class="auth-actions">
                            <button type="submit" class="btn-auth">
                                <i class="fas fa-paper-plane"></i>
                                Gửi hướng dẫn
                            </button>
                            <div class="auth-links">
                                <a href="<?php echo url('pages/auth/dang-nhap.php'); ?>">Quay lại đăng nhập</a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="auth-illustration">
                    <div class="illustration-box">
                        <i class="fas fa-lock-open" style="font-size:42px;color:var(--brand-primary);"></i>
                        <h3 style="margin-top:10px">Khôi phục an toàn</h3>
                        <p>Chúng tôi sẽ gửi liên kết đặt lại mật khẩu đến email của bạn.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>