<?php
// Dữ liệu meta và cấu hình cho trang Dịch vụ
$page_title = "Dịch vụ - Aurora Hotel Plaza";
$page_description = "Khám phá đầy đủ các dịch vụ cao cấp tại Aurora Hotel Plaza: nhà hàng, spa, phòng gym, hồ bơi, hội nghị và nhiều tiện ích khác";
$page_keywords = "dịch vụ Aurora Hotel Plaza, nhà hàng, spa, phòng gym, hồ bơi, hội nghị, tiện ích khách sạn";
$current_page = "dich-vu";

// Breadcrumb
$breadcrumb = [
    ['title' => 'Trang chủ', 'url' => 'index.php'],
    ['title' => 'Dịch vụ', 'url' => 'dich-vu.php', 'active' => true]
];

// Page Header
$page_header_title = "Dịch vụ Aurora Hotel Plaza";
$page_header_subtitle = "Trải nghiệm đẳng cấp với đầy đủ tiện ích hiện đại";
$page_header_bg = "/assets/img/hero banner/AURORA-HOTEL-BIEN-HOA-2.jpg";

// CSS & JS riêng cho trang Dịch vụ
$additional_css = isset($additional_css) && is_array($additional_css) ? $additional_css : [];
$additional_css[] = 'dich-vu.css';

$additional_js = isset($additional_js) && is_array($additional_js) ? $additional_js : [];
$additional_js[] = 'js/dich-vu.js';
?>