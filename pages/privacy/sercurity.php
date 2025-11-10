<?php
// Thiết lập thông tin trang
$page_title = 'Chính sách bảo mật';
$page_description = 'Cách chúng tôi thu thập, sử dụng và bảo vệ dữ liệu cá nhân của khách hàng.';
$show_breadcrumb = true;
$breadcrumb_items = [
    ['title' => 'Khám phá', 'url' => url('pages/gioi-thieu.php')],
    ['title' => 'Chính sách bảo mật']
];

// Hiển thị Page Header
$page_header = true;
$page_header_title = 'Chính sách bảo mật';
$page_header_subtitle = 'Minh bạch trong việc xử lý dữ liệu cá nhân của bạn.';

include '../../includes/header.php';
?>

<section class="policy-page" style="padding: 40px 0;">
    <div class="container">
        <div class="section-header" style="margin-bottom: 16px;">
            <h2>Cam kết bảo mật</h2>
            <p style="color:#6b7280;">Aurora Hotel Plaza tôn trọng quyền riêng tư và bảo vệ thông tin của bạn.</p>
        </div>

        <div class="policy-content" style="line-height:1.7; color:#374151;">
            <ul style="list-style: disc; padding-left: 1.25rem;">
                <li>Chỉ thu thập dữ liệu cần thiết phục vụ đặt phòng và chăm sóc khách hàng.</li>
                <li>Không chia sẻ dữ liệu cho bên thứ ba nếu không có sự đồng ý của bạn.</li>
                <li>Bảo mật hệ thống theo tiêu chuẩn ngành, kiểm soát truy cập nội bộ chặt chẽ.</li>
                <li>Bạn có quyền yêu cầu xem, sửa, hoặc xoá dữ liệu cá nhân của mình.</li>
            </ul>

            <p style="margin-top: 12px;">Liên hệ <strong>privacy@aurora-plaza.vn</strong> nếu bạn có bất kỳ câu hỏi nào liên quan đến dữ liệu cá nhân.</p>
        </div>

        <div style="margin-top: 24px; display:flex; gap:12px; flex-wrap:wrap;">
            <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn-primary">Đặt phòng ngay</a>
            <a href="<?php echo url('index.php'); ?>" class="btn-secondary">Về trang chủ</a>
        </div>
    </div>
</section>

<?php include '../../includes/footer.php'; ?>