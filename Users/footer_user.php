<?php require_once __DIR__ . '/../includes/config.php'; ?>
<footer class="user-footer" style="margin-top:40px; border-top:1px solid #eee; background:#fafafa;">
    <div class="container" style="padding:16px; display:flex; align-items:center; justify-content:space-between;">
        <div style="color:#666;">© <?php echo date('Y'); ?> Aurora Hotel Plaza</div>
        <div style="display:flex; gap:10px;">
            <a href="<?php echo url('pages/gioi-thieu.php'); ?>" style="color:#444;">Giới thiệu</a>
            <a href="<?php echo url('pages/lien-he.php'); ?>" style="color:#444;">Liên hệ</a>
            <a href="<?php echo url('pages/privacy/term-of-use.php'); ?>" style="color:#444;">Điều khoản</a>
        </div>
    </div>
</footer>

<script src="<?php echo url('assets/js/main.js'); ?>"></script>
<script>
// Điều khiển tab đơn giản cho dashboard người dùng
document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.user-nav [data-tab]');
    const sections = document.querySelectorAll('.tab-section');
    function activate(id) {
        sections.forEach(sec => sec.classList.toggle('active', sec.id === id));
        navLinks.forEach(l => l.classList.toggle('active', l.dataset.tab === id));
    }
    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            activate(this.dataset.tab);
        });
    });
    // Mặc định: Tổng quan
    activate('overview');
});
</script>
</body>
</html>