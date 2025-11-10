<?php
// Thiết lập thông tin trang
$page_title = 'Chính sách hủy phòng';
$page_description = 'Điều khoản và điều kiện về việc hủy đặt phòng tại Aurora Hotel Plaza.';
$show_breadcrumb = true;
$breadcrumb_items = [
    ['title' => 'Khám phá', 'url' => url('pages/gioi-thieu.php')],
    ['title' => 'Chính sách hủy phòng']
];

// Hiển thị Page Header
$page_header = true;
$page_header_title = 'Chính sách hủy đặt phòng';
$page_header_subtitle = 'Vui lòng tham khảo kỹ quy định để đảm bảo quyền lợi của bạn.';

include '../../includes/header.php';
?>

<section class="policy-page" style="padding: 40px 0;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 16px;">
            <h2>Điều kiện hủy đặt phòng</h2>
            <p style="color:#6b7280;">Các quy định áp dụng cho đơn đặt phòng tại Aurora Hotel Plaza.</p>
        </div>

        <div class="policy-content" style="line-height:1.7; color:#374151;">
            <ul style="list-style: disc; padding-left: 1.25rem;">
                <li>Hủy trước 7 ngày: hoàn 100% phí đặt cọc (nếu có).</li>
                <li>Hủy trước 3–6 ngày: hoàn 50% phí đặt cọc.</li>
                <li>Hủy dưới 3 ngày hoặc không đến: không hoàn phí đặt cọc.</li>
                <li>Trong các trường hợp bất khả kháng, vui lòng liên hệ trực tiếp để được hỗ trợ.</li>
            </ul>

            <p style="margin-top: 12px;">Mọi yêu cầu hủy vui lòng liên hệ qua hotline <strong>+84 9xxx xxx xxx</strong> hoặc email <strong>booking@aurora-plaza.vn</strong>.</p>
        </div>

        <div style="margin-top: 24px; display:flex; gap:12px; flex-wrap:wrap;">
            <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn-primary">Tiếp tục đặt phòng</a>
            <a href="<?php echo url('index.php'); ?>" class="btn-secondary">Về trang chủ</a>
        </div>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>