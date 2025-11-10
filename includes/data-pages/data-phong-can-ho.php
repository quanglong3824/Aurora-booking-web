<?php
// Text and meta variables for "Phòng & Căn hộ" overview page
$page_title = "Phòng & Căn hộ";
$page_description = "Tổng quan các lựa chọn phòng nghỉ và căn hộ tại Aurora Hotel Plaza";
$page_keywords = "phòng nghỉ, căn hộ, Aurora Hotel Plaza, deluxe, studio, premium";

// Page header
$page_header = true;
$page_header_title = "Phòng & Căn hộ";
$page_header_bg = '/assets/image/rooms-hero.jpg';

// Additional CSS for this page
$additional_css = isset($additional_css) && is_array($additional_css) ? $additional_css : [];
$additional_css[] = 'accommodation.css';

// Overview section texts
$overview_title = 'Chọn loại chỗ ở phù hợp';
$overview_subtitle = 'Tổng quan nhanh về các hạng phòng nghỉ và căn hộ dịch vụ';

// Rooms column texts
$rooms_heading = 'Phòng nghỉ';
$rooms_intro = 'Trải nghiệm dịch vụ khách sạn đẳng cấp với các hạng phòng từ Deluxe đến Studio VIP, phù hợp công tác và nghỉ dưỡng.';
$rooms_features = [
    ['icon' => 'fas fa-bed', 'text' => 'Giường cao cấp'],
    ['icon' => 'fas fa-wifi', 'text' => 'WiFi miễn phí'],
    ['icon' => 'fas fa-concierge-bell', 'text' => 'Dịch vụ 24/7'],
];
$rooms_types = [
    ['label' => 'Deluxe', 'link' => 'pages/phong/deluxe-sang-trong.php'],
    ['label' => 'Premium Deluxe', 'link' => 'pages/phong/premium-deluxe-cao-cap.php'],
    ['label' => 'Premium Twin', 'link' => 'pages/phong/premium-deluxe-twin-doi.php'],
    ['label' => 'Studio VIP', 'link' => 'pages/phong/studio-vip-dang-cap.php'],
];
$view_all_rooms_text = 'Xem tất cả phòng';

// Apartments column texts
$apartments_heading = 'Căn hộ dịch vụ';
$apartments_intro = 'Không gian như ở nhà với bếp đầy đủ, phòng khách riêng và dịch vụ khách sạn, thích hợp lưu trú dài ngày.';
$apartments_features = [
    ['icon' => 'fas fa-utensils', 'text' => 'Bếp đầy đủ'],
    ['icon' => 'fas fa-couch', 'text' => 'Phòng khách riêng'],
    ['icon' => 'fas fa-home', 'text' => 'Thoải mái như ở nhà'],
];
$apartment_types = [
    ['label' => 'Studio (40m²)', 'link' => 'pages/can-ho/studio-hien-dai.php'],
    ['label' => 'Premium (65m²)', 'link' => 'pages/can-ho/premium-sang-trong.php'],
    ['label' => 'Family (85m²)', 'link' => 'pages/can-ho/family-gia-dinh.php'],
];
$book_apartment_text = 'Đặt căn hộ';
?>