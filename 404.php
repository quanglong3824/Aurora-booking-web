<?php
// Trả về mã lỗi 404 và chặn index
http_response_code(404);
header('X-Robots-Tag: noindex, nofollow');

// Thiết lập thông tin trang theo style hiện tại
$page_title = 'Không tìm thấy trang';
$page_description = 'Trang bạn đang tìm kiếm không tồn tại hoặc đã được di chuyển.';
$body_class = 'error-page';
$show_breadcrumb = true;
$breadcrumb_items = [
    ['title' => 'Trang chủ', 'url' => 'index.php'],
    ['title' => '404']
];

// Hiển thị Page Header theo bố cục chuẩn
$page_header = true;
$page_header_title = '404 - Không tìm thấy trang';
$page_header_subtitle = 'Xin lỗi, chúng tôi không thể tìm thấy nội dung bạn yêu cầu.';
$page_header_bg = '/assets/image/page-header-bg.jpg';

// Include header theo giao diện chuẩn
include 'includes/header.php';
?>

<section class="section error-section">
    <div class="container">
        <div class="section-header">
            <h2>Trang không tồn tại</h2>
            <p>Liên kết có thể đã bị thay đổi hoặc bị xóa. Vui lòng kiểm tra lại địa chỉ hoặc chọn một hành động bên dưới.</p>
        </div>

        <div class="error-content">
            <div class="error-code" aria-hidden="true">404</div>
            <div class="error-actions" style="margin-top: 1rem; display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="index.php" class="btn-primary">Về trang chủ</a>
                <a href="pages/lien-he.php" class="btn-secondary">Liên hệ hỗ trợ</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>