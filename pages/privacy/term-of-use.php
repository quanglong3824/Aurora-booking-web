<?php
// Thiết lập thông tin trang
$page_title = 'Điều khoản sử dụng';
$page_description = 'Các điều khoản khi sử dụng website và dịch vụ của Aurora Hotel Plaza.';
$show_breadcrumb = true;
$breadcrumb_items = [
    ['title' => 'Khám phá', 'url' => url('pages/gioi-thieu.php')],
    ['title' => 'Điều khoản sử dụng']
];

// Hiển thị Page Header
$page_header = true;
$page_header_title = 'Điều khoản sử dụng';
$page_header_subtitle = 'Vui lòng đọc kỹ để hiểu quyền và nghĩa vụ của bạn.';

include '../../includes/header.php';
?>

<section class="policy-page" style="padding: 40px 0;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 16px;">
            <h2>Quy định chung</h2>
            <p style="color:#6b7280;">Áp dụng cho việc sử dụng website và dịch vụ đặt phòng.</p>
        </div>

        <div class="policy-content" style="line-height:1.7; color:#374151;">
            <ul style="list-style: disc; padding-left: 1.25rem;">
                <li>Người dùng cần cung cấp thông tin chính xác khi đặt phòng.</li>
                <li>Không sử dụng website cho mục đích vi phạm pháp luật.</li>
                <li>Mọi nội dung trên website thuộc quyền sở hữu của Aurora Hotel Plaza.</li>
                <li>Chúng tôi có thể cập nhật điều khoản; vui lòng kiểm tra định kỳ.</li>
            </ul>

            <p style="margin-top: 12px;">Khi tiếp tục sử dụng website, bạn đồng ý với các điều khoản này.</p>
        </div>

        <div style="margin-top: 24px; display:flex; gap:12px; flex-wrap:wrap;">
            <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn-primary">Đặt phòng ngay</a>
            <a href="<?php echo url('index.php'); ?>" class="btn-secondary">Về trang chủ</a>
        </div>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>