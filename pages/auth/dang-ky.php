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

                    <form class="auth-form" method="post" action="#">
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

<?php include '../../includes/footer.php'; ?>