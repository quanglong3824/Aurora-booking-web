<?php
// Trả về mã lỗi 500 và chặn index
http_response_code(500);

// Thiết lập thông tin trang theo giao diện chung
$page_title = 'Lỗi máy chủ 500';
$page_description = 'Đã xảy ra lỗi trên máy chủ. Vui lòng thử lại sau.';
$body_class = 'error-page';
$show_breadcrumb = true;
$breadcrumb_items = [
    ['title' => 'Trang chủ', 'url' => 'index.php'],
    ['title' => '500']
];

// Hiển thị Page Header theo bố cục chuẩn
$page_header = true;
$page_header_title = '500 - Lỗi máy chủ';
$page_header_subtitle = 'Xin lỗi, đã xảy ra sự cố. Chúng tôi đang khắc phục!';
$page_header_bg = '/assets/image/page-header-bg.jpg';

// Include header giao diện chuẩn
include 'includes/header.php';
?>

<section class="section error-section" style="padding: 60px 0;">
    <div class="container" style="text-align:center;">
        <div class="error-code" style="font-size:64px; font-weight:700; color:#ef4444;">500</div>
        <h2 style="margin-top:8px;">Lỗi Máy Chủ Nội Bộ</h2>
        <p style="color:#6b7280; max-width:720px; margin:12px auto 24px;">
            Xin lỗi, đã xảy ra lỗi trên máy chủ. Vui lòng thử lại sau ít phút
            hoặc liên hệ với chúng tôi nếu vấn đề vẫn tiếp tục.
        </p>
        <a href="<?php echo url('index.php'); ?>" class="btn-primary">Về trang chủ</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>