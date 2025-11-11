<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Helper decode an array from JSON safely
if (!function_exists('json_decode_safe_array')) {
    function json_decode_safe_array($json) {
        if (!is_string($json) || $json === '') return [];
        $decoded = json_decode($json, true);
        return is_array($decoded) ? $decoded : [];
    }
}

// Helper decode an array of objects [{label, value}] safely
if (!function_exists('json_decode_safe_specs')) {
    function json_decode_safe_specs($json) {
        $arr = json_decode_safe_array($json);
        // Ensure each item has label/value keys
        $out = [];
        foreach ($arr as $item) {
            if (is_array($item)) {
                $out[] = [
                    'label' => $item['label'] ?? '',
                    'value' => $item['value'] ?? ''
                ];
            }
        }
        return $out;
    }
}

// Nạp DB và lấy dòng mới nhất từ bảng deluxe_sang_trong
require_once __DIR__ . '/../../config/database.php';
try {
    $conn = getDB();
    if (!$conn) {
        throw new Exception('Không thể kết nối cơ sở dữ liệu.');
    }
    $stmt = $conn->query('SELECT * FROM `deluxe_sang_trong` ORDER BY id DESC LIMIT 1');
    $row = $stmt->fetch(PDO::FETCH_ASSOC) ?: [];
} catch (Throwable $e) {
    $row = [];
}

// Gán biến từ dữ liệu bảng (có fallback rỗng nếu thiếu)
$page_title = $row['room_deluxe_title'] ?? '';
$page_description = $row['room_deluxe_description'] ?? '';
$hero_subtitle = $row['room_deluxe_hero_subtitle'] ?? '';

$price_text = $row['room_deluxe_price_text'] ?? '';
$per_night_text = $row['room_deluxe_per_night_text'] ?? '';
$booking_url = $row['room_deluxe_booking_url'] ?? '';
$book_button_text = $row['room_deluxe_book_button_text'] ?? '';

$contact_hotline_label = $row['room_deluxe_contact_hotline_label'] ?? '';
$contact_hotline = $row['room_deluxe_contact_hotline'] ?? '';
$contact_email_label = $row['room_deluxe_contact_email_label'] ?? '';
$contact_email_booking = $row['room_deluxe_contact_email_booking'] ?? '';
$contact_email_info = $row['room_deluxe_contact_email_info'] ?? '';

$amenities = json_decode_safe_array($row['room_deluxe_amenities'] ?? '');
$included_services = json_decode_safe_array($row['room_deluxe_included_services'] ?? '');
$specs = json_decode_safe_specs($row['room_deluxe_specs'] ?? '');

$gallery_main_alt = $row['room_deluxe_gallery_main_alt'] ?? '';
$gallery_prev_label = $row['room_deluxe_gallery_prev_label'] ?? '';
$gallery_next_label = $row['room_deluxe_gallery_next_label'] ?? '';
$lightbox_close_label = $row['room_deluxe_lightbox_close_label'] ?? '';

$related_heading = $row['room_deluxe_related_heading'] ?? '';
$related1_title = $row['room_deluxe_related1_title'] ?? '';
$related1_price = $row['room_deluxe_related1_price'] ?? '';
$related1_btn_text = $row['room_deluxe_related1_btn_text'] ?? '';
$related2_title = $row['room_deluxe_related2_title'] ?? '';
$related2_price = $row['room_deluxe_related2_price'] ?? '';
$related2_btn_text = $row['room_deluxe_related2_btn_text'] ?? '';

// Các biến không có trong schema: heading/phần mô tả phụ, canonical, assets
$canonical_url = 'https://aurorahotel.vn/phong/' . ($row['room_deluxe_slug'] ?? 'deluxe-sang-trong');
$additional_css = ['room-detail.css', 'deluxe-sang-trong.css'];
$additional_js = ['js/room-deluxe.js'];
$about_heading = 'Về ' . ($page_title ?: 'Phòng Deluxe Sang Trọng');
$about_paragraph = $page_description;
$amenities_heading = 'Tiện Nghi Phòng';
$services_heading = 'Dịch Vụ Đi Kèm';

$gallery_heading = 'Hình Ảnh Phòng';
$breadcrumb = [
    ['name' => 'Trang chủ', 'url' => '/'],
    ['name' => 'Phòng', 'url' => '/phong'],
    ['name' => ($page_title ?: 'Phòng Deluxe Sang Trọng'), 'url' => '']
];

// Debug: Dump dữ liệu bảng deluxe_sang_trong từ DB khi có ?dump=1
if (isset($_GET['dump']) && $_GET['dump'] === '1') {
    require_once __DIR__ . '/../../config/database.php';
    try {
        $conn = getDB();
        if (!$conn) {
            throw new Exception('Không thể kết nối cơ sở dữ liệu.');
        }
        $stmt = $conn->query('SELECT * FROM `deluxe_sang_trong` ORDER BY id DESC');
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo '<h2>Dump bảng deluxe_sang_trong</h2><pre>';
        print_r($rows);
        echo '</pre>';
    } catch (Throwable $e) {
        echo '<p style="color:red">Lỗi dump dữ liệu: ' . htmlspecialchars($e->getMessage()) . '</p>';
    }
}

// // thêm echo kiểm tra
// echo '<h2>Debug: Dữ liệu từ DB</h2>';
// echo '<pre>';
// print_r($row);
// echo '</pre>';
?>