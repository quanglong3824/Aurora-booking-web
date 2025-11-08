<?php
$page_title = "Phòng & Căn hộ";
$page_description = "Tổng quan các lựa chọn phòng nghỉ và căn hộ tại Aurora Hotel";
$page_keywords = "phòng nghỉ, căn hộ, Aurora Hotel, deluxe, studio, premium";

// Hiển thị header trang chuẩn
$page_header = true;
$page_header_title = "Phòng & Căn hộ";
$page_header_bg = '/assets/image/rooms-hero.jpg';

// Load CSS bổ sung cho trang accommodation (nếu cần)
$additional_css = ['accommodation.css'];

include '../includes/header.php';
?>

<!-- Tổng quan chỗ ở: layout 2 cột gọn gàng (Phòng nghỉ / Căn hộ) -->
<section class="accommodation-overview" style="padding:60px 0;">
    <div class="container">
        <div class="section-header" style="text-align:center; margin-bottom:32px;">
            <h2 class="section-title" style="margin-bottom:8px;">Chọn loại chỗ ở phù hợp</h2>
            <p class="section-subtitle" style="color:#6b7280;">Tổng quan nhanh về các hạng phòng nghỉ và căn hộ dịch vụ</p>
        </div>

        <div class="two-columns" style="display:grid; grid-template-columns:repeat(2, 1fr); gap:24px;">
            <!-- Cột: Phòng nghỉ -->
            <article class="overview-card" style="border:1px solid #e5e7eb; border-radius:12px; overflow:hidden; background:#fff;">
                <div class="overview-image" style="max-height:300px; overflow:hidden;">
                    <img src="<?php echo asset('image/room-deluxe.jpg'); ?>" alt="Phòng nghỉ Aurora Hotel" class="img-fluid" style="width:100%; height:100%; object-fit:cover;">
                </div>
                <div class="overview-body" style="padding:20px;">
                    <h3 style="margin-bottom:8px;">Phòng nghỉ</h3>
                    <p style="color:#4b5563;">Trải nghiệm dịch vụ khách sạn đẳng cấp với các hạng phòng từ Deluxe đến Studio VIP, phù hợp công tác và nghỉ dưỡng.</p>

                    <ul class="feature-list" style="display:flex; flex-wrap:wrap; gap:12px; list-style:none; padding:0; margin:16px 0 20px;">
                        <li style="display:flex; align-items:center; gap:8px; color:#4b5563;">
                            <i class="fas fa-bed"></i> Giường cao cấp
                        </li>
                        <li style="display:flex; align-items:center; gap:8px; color:#4b5563;">
                            <i class="fas fa-wifi"></i> WiFi miễn phí
                        </li>
                        <li style="display:flex; align-items:center; gap:8px; color:#4b5563;">
                            <i class="fas fa-concierge-bell"></i> Dịch vụ 24/7
                        </li>
                    </ul>

                    <h6 style="margin-bottom:12px; color:#374151;">Các hạng phòng</h6>
                    <div class="btn-grid" style="display:grid; grid-template-columns:repeat(2, 1fr); gap:10px; margin-bottom:16px;">
                        <a href="<?php echo url('pages/phong/deluxe-sang-trong.php'); ?>" class="btn-room" style="text-align:center; display:block;">Deluxe</a>
                        <a href="<?php echo url('pages/phong/premium-deluxe-cao-cap.php'); ?>" class="btn-room" style="text-align:center; display:block;">Premium Deluxe</a>
                        <a href="<?php echo url('pages/phong/premium-deluxe-twin-doi.php'); ?>" class="btn-room" style="text-align:center; display:block;">Premium Twin</a>
                        <a href="<?php echo url('pages/phong/studio-vip-dang-cap.php'); ?>" class="btn-room" style="text-align:center; display:block;">Studio VIP</a>
                    </div>

                    <a href="<?php echo url('pages/phong.php'); ?>" class="btn-primary">
                        <i class="fas fa-eye" style="margin-right:8px;"></i> Xem tất cả phòng
                    </a>
                </div>
            </article>

            <!-- Cột: Căn hộ dịch vụ -->
            <article class="overview-card" style="border:1px solid #e5e7eb; border-radius:12px; overflow:hidden; background:#fff;">
                <div class="overview-image" style="max-height:300px; overflow:hidden;">
                    <img src="<?php echo asset('image/room-suite-ocean.jpg'); ?>" alt="Căn hộ dịch vụ Aurora" class="img-fluid" style="width:100%; height:100%; object-fit:cover;">
                </div>
                <div class="overview-body" style="padding:20px;">
                    <h3 style="margin-bottom:8px;">Căn hộ dịch vụ</h3>
                    <p style="color:#4b5563;">Không gian như ở nhà với bếp đầy đủ, phòng khách riêng và dịch vụ khách sạn, thích hợp lưu trú dài ngày.</p>

                    <ul class="feature-list" style="display:flex; flex-wrap:wrap; gap:12px; list-style:none; padding:0; margin:16px 0 20px;">
                        <li style="display:flex; align-items:center; gap:8px; color:#4b5563;">
                            <i class="fas fa-utensils"></i> Bếp đầy đủ
                        </li>
                        <li style="display:flex; align-items:center; gap:8px; color:#4b5563;">
                            <i class="fas fa-couch"></i> Phòng khách riêng
                        </li>
                        <li style="display:flex; align-items:center; gap:8px; color:#4b5563;">
                            <i class="fas fa-home"></i> Thoải mái như ở nhà
                        </li>
                    </ul>

                    <h6 style="margin-bottom:12px; color:#374151;">Các loại căn hộ</h6>
                    <div class="btn-grid" style="display:grid; grid-template-columns:repeat(2, 1fr); gap:10px; margin-bottom:16px;">
                        <a href="<?php echo url('pages/can-ho/studio-hien-dai.php'); ?>" class="btn-room" style="text-align:center; display:block;">Studio (40m²)</a>
                        <a href="<?php echo url('pages/can-ho/premium-sang-trong.php'); ?>" class="btn-room" style="text-align:center; display:block;">Premium (65m²)</a>
                        <a href="<?php echo url('pages/can-ho/family-gia-dinh.php'); ?>" class="btn-room" style="text-align:center; display:block;">Family (85m²)</a>
                    </div>

                    <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn-primary">
                        <i class="fas fa-calendar-check" style="margin-right:8px;"></i> Đặt căn hộ
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>