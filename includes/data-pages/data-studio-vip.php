<?php
// Dữ liệu trang Phòng Studio VIP Đẳng Cấp

// SEO & tiêu đề
$page_title = "Phòng Studio VIP Đẳng Cấp - Aurora Hotel Plaza";
$page_description = "AURORA STUDIO (VIP) với thiết kế sang trọng, tiện nghi cao cấp và dịch vụ VIP tại Aurora Hotel Plaza.";
$additional_css = ['room-detail.css', 'deluxe-sang-trong.css', 'studio-vip-dang-cap.css'];
$additional_js = ['js/room-deluxe.js'];
$hero_subtitle = "AURORA STUDIO (VIP) – Trải nghiệm đỉnh cao của sự sang trọng";

// Ảnh chính và gallery (fallback nếu ảnh thiếu sẽ hiện placeholder)
$main_image = 'img/studio apartment/CAN-HO-STUDIO-AURORA-HOTEL-1.jpg';
$gallery_images = [
    'img/studio apartment/CAN-HO-STUDIO-AURORA-HOTEL-1.jpg',
    'img/studio apartment/CAN-HO-STUDIO-AURORA-HOTEL-2.jpg',
    'img/studio apartment/CAN-HO-STUDIO-AURORA-HOTEL-3.jpg',
    'img/studio apartment/CAN-HO-STUDIO-AURORA-HOTEL-4.jpg'
];

// Thông tin đặt phòng
$price_text = '2.950.000 VNĐ';
$per_night_text = '/đêm';
// Chỉ lưu path, trang sẽ bọc bằng url()
$booking_url_path = 'pages/dat-phong.php?room=studio-vip';
$book_button_text = 'Đặt Phòng VIP';

// Liên hệ
$contact_hotline_label = 'Hotline đặt phòng:';
$contact_hotline = '(+84-251) 391.8888';
$contact_email_label = 'Email liên hệ:';
$contact_email_booking = 'booking@aurorahotelplaza.com';
$contact_email_info = 'info@aurorahotelplaza.com';

// Nội dung giới thiệu
$about_heading = 'Về Phòng Studio VIP Đẳng Cấp';
$about_paragraph = 'AURORA STUDIO (VIP) mang đến không gian nghỉ dưỡng đẳng cấp với thiết kế sang trọng, tiện nghi hiện đại và dịch vụ VIP chuyên biệt. Phòng có diện tích rộng rãi, khu vực làm việc và không gian thư giãn thoải mái.';

// Tiện nghi trong phòng (amenities)
$amenities_heading = 'Tiện Nghi Phòng';
$amenities = [
    'Internet, Wifi miễn phí',
    'Điện thoại IDD',
    'TV vệ tinh',
    'Két an toàn',
    'Giặt ủi',
    'Vòi sen & bồn tắm',
    'Bàn làm việc',
    'Giường đôi: 1 cái'
];

// Dịch vụ bao gồm trong giá
$services_heading = 'Giá phòng bao gồm';
$included_services = [
    'Bữa sáng miễn phí',
    'Xông hơi',
    'Hồ bơi',
    'Dịch vụ phòng',
    'Phòng Gym'
];

// Thông số phòng (specs)
$specs = [
    ['label' => 'Diện tích:', 'value' => '45-65m²'],
    ['label' => 'Sức chứa:', 'value' => '2 người lớn'],
    ['label' => 'Loại giường:', 'value' => 'Giường đôi'],
    ['label' => 'View:', 'value' => 'Thành phố']
];

// Gallery text
$gallery_heading = 'Thư viện hình ảnh';
$gallery_prev_label = 'Ảnh trước';
$gallery_next_label = 'Ảnh sau';
$gallery_main_alt = 'Phòng Studio VIP Đẳng Cấp - Hình ảnh chính';

// Lightbox
$lightbox_close_label = 'Đóng';

// Related rooms
$related_heading = 'Khám Phá Các Phòng Khác';
$related1_title = 'Phòng Deluxe Sang Trọng';
$related1_price = '1.900.000 VNĐ/đêm';
$related1_btn_text = 'Xem Chi Tiết';
$related2_title = 'Phòng Premium Deluxe';
$related2_price = '2.200.000 VNĐ/đêm';
$related2_btn_text = 'Xem Chi Tiết';

$breadcrumb = [
    ['name' => 'Trang chủ', 'url' => '/'],
    ['name' => 'Phòng', 'url' => '/phong'],
    ['name' => 'Phòng Studio VIP Đẳng Cấp', 'url' => '']
];
?>