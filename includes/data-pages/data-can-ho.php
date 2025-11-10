<?php
// Dữ liệu meta và cấu hình cho trang Căn hộ dịch vụ
$page_title = "Căn hộ dịch vụ";
$page_description = "Khám phá các loại căn hộ dịch vụ tại Aurora Hotel Plaza: Family, Premium, Studio với đầy đủ tiện nghi hiện đại";
$current_page = "can-ho";

// Page Header
$page_header = true;
$page_header_title = "Căn hộ dịch vụ Aurora Hotel Plaza";
$page_header_subtitle = "Không gian sống tiện nghi, hiện đại phù hợp mọi nhu cầu";
$page_header_bg = '/assets/img/premium apartment/CAN-HO-PREMIUM-AURORA-HOTEL-1.jpg';

// CSS riêng cho trang này
$additional_css = isset($additional_css) && is_array($additional_css) ? $additional_css : [];
$additional_css[] = 'can-ho.css';

// Breadcrumb
$show_breadcrumb = true;
$breadcrumb_items = [
    ["title" => "Phòng & Căn hộ", "url" => 'phong-va-can-ho.php'],
    ["title" => "Căn hộ"]
];
?>