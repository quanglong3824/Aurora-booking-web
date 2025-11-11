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

// Nạp DB và lấy dòng mới nhất từ bảng indochine_studio_apartment
require_once __DIR__ . '/../../config/database.php';
try {
    $conn = getDB();
    if (!$conn) {
        throw new Exception('Không thể kết nối cơ sở dữ liệu.');
    }
    $stmt = $conn->query('SELECT * FROM `indochine_studio_apartment` ORDER BY id DESC LIMIT 1');
    $row = $stmt->fetch(PDO::FETCH_ASSOC) ?: [];
} catch (Throwable $e) {
    $row = [];
}

// Gán biến từ dữ liệu bảng (có fallback rỗng nếu thiếu)
$page_title = $row['indochine_studio_title'] ?? 'Căn Hộ Studio Indochine - Aurora Hotel Plaza';
$page_description = $row['indochine_studio_description'] ?? 'Căn hộ Studio phong cách Indochine với thiết kế tinh tế, tiện nghi hiện đại, phù hợp cho lưu trú ngắn và dài ngày tại Aurora Hotel Plaza.';
$hero_subtitle = $row['indochine_studio_hero_subtitle'] ?? 'Không gian tinh tế phong cách Đông Dương hiện đại';

// Helper: lấy giá trị từ $row, nếu trống thì dùng mặc định
if (!function_exists('get_or_default')) {
    function get_or_default($row, $key, $default) {
        if (!is_array($row)) return $default;
        $val = $row[$key] ?? null;
        if (is_string($val)) {
            return trim($val) !== '' ? $val : $default;
        }
        return $val !== null ? $val : $default;
    }
}

$price_text = get_or_default($row, 'indochine_studio_price_text', '1.600.000 VNĐ');
$per_night_text = get_or_default($row, 'indochine_studio_per_night_text', '/đêm');
$booking_url = get_or_default($row, 'indochine_studio_booking_url', '../../../dat-phong.php?room=indochine-studio');
$book_button_text = get_or_default($row, 'indochine_studio_book_button_text', 'Đặt Căn Hộ Ngay');

$contact_hotline_label = get_or_default($row, 'indochine_studio_contact_hotline_label', 'Hotline đặt phòng:');
$contact_hotline = get_or_default($row, 'indochine_studio_contact_hotline', '(+84-251) 391.8888');
$contact_email_label = get_or_default($row, 'indochine_studio_contact_email_label', 'Email liên hệ:');
$contact_email_booking = get_or_default($row, 'indochine_studio_contact_email_booking', 'booking@aurorahotelplaza.com');
$contact_email_info = get_or_default($row, 'indochine_studio_contact_email_info', 'info@aurorahotelplaza.com');

$amenities = json_decode_safe_array($row['indochine_studio_amenities'] ?? '');
$included_services = json_decode_safe_array($row['indochine_studio_included_services'] ?? '');
$specs = json_decode_safe_specs($row['indochine_studio_specs'] ?? '');

// Fallback khi DB chưa có dữ liệu: mô tả cơ bản, tiện nghi, dịch vụ và thông số
// Tránh cảnh báo biến chưa định nghĩa bằng kiểm tra isset
if (!isset($about_paragraph) || trim((string)$about_paragraph) === '') {
    $about_paragraph = 'Căn hộ Studio mang phong cách Indochine, kết hợp tinh tế giữa nét cổ điển Đông Dương và tiện nghi hiện đại. Không gian ấm áp, tinh xảo, phù hợp cho cặp đôi hoặc khách công tác cần sự riêng tư và tiện nghi.';
}

if (empty($amenities)) {
    $amenities = [
        'Internet, Wifi miễn phí',
        'TV vệ tinh',
        'Két an toàn',
        'Bếp nhỏ',
        'Máy sấy tóc',
        'Điều hoà',
        'Giường đôi: 1 cái'
    ];
}

if (empty($included_services)) {
    $included_services = [
        'Bữa sáng miễn phí',
        'Dịch vụ phòng',
        'Giặt ủi',
        'Hồ bơi',
        'Phòng Gym'
    ];
}

if (empty($specs)) {
    $specs = [
        ['label' => 'Diện tích:', 'value' => '28m²'],
        ['label' => 'Sức chứa:', 'value' => '2 người lớn'],
        ['label' => 'Loại giường:', 'value' => 'King Size'],
        ['label' => 'Phong cách:', 'value' => 'Indochine']
    ];
}

$gallery_main_alt = $row['indochine_studio_gallery_main_alt'] ?? 'Căn hộ Studio Indochine - Không gian chính';
$gallery_prev_label = $row['indochine_studio_gallery_prev_label'] ?? 'Ảnh trước';
$gallery_next_label = $row['indochine_studio_gallery_next_label'] ?? 'Ảnh sau';
$lightbox_close_label = $row['indochine_studio_lightbox_close_label'] ?? 'Đóng';

$related_heading = $row['indochine_studio_related_heading'] ?? 'Các Loại Căn Hộ Khác';
$related1_title = $row['indochine_studio_related1_title'] ?? 'Căn hộ Premium hiện đại';
$related1_price = $row['indochine_studio_related1_price'] ?? '3.000.000 VNĐ/đêm';
$related1_btn_text = $row['indochine_studio_related1_btn_text'] ?? 'Xem Chi Tiết';
$related2_title = $row['indochine_studio_related2_title'] ?? 'Căn hộ Family cổ điển';
$related2_price = $row['indochine_studio_related2_price'] ?? '2.500.000 VNĐ/đêm';
$related2_btn_text = $row['indochine_studio_related2_btn_text'] ?? 'Xem Chi Tiết';

// Các biến phụ trợ
$canonical_url = 'https://aurorahotel.vn/can-ho-moi/can-ho-nho/' . ($row['indochine_studio_slug'] ?? 'indochine-studio-apartment');
$additional_css = isset($additional_css) && is_array($additional_css) ? $additional_css : [];
$additional_css[] = 'room-detail.css';
$additional_css[] = 'indochine-studio-apartment.css';
$additional_js = isset($additional_js) && is_array($additional_js) ? $additional_js : [];
$additional_js[] = 'js/room-deluxe.js';

$about_heading = 'Về ' . ($page_title ?: 'Căn Hộ Studio Indochine');
$about_paragraph = $page_description;
$amenities_heading = 'Tiện Nghi Căn Hộ';
$services_heading = 'Dịch Vụ Đi Kèm';

$gallery_heading = 'Hình Ảnh Căn Hộ';
$breadcrumb = [
    ['name' => 'Trang chủ', 'url' => '/'],
    ['name' => 'Căn hộ', 'url' => '/can-ho'],
    ['name' => ($page_title ?: 'Căn Hộ Studio Indochine'), 'url' => '']
];

// Debug: Dump dữ liệu bảng indochine_studio_apartment từ DB khi có ?dump=1
if (isset($_GET['dump']) && $_GET['dump'] === '1') {
    try {
        $conn = getDB();
        if (!$conn) {
            throw new Exception('Không thể kết nối cơ sở dữ liệu.');
        }
        $stmt = $conn->query('SELECT * FROM `indochine_studio_apartment` ORDER BY id DESC');
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo '<h2>Dump bảng indochine_studio_apartment</h2><pre>';
        print_r($rows);
        echo '</pre>';
    } catch (Throwable $e) {
        echo '<p style="color:red">Lỗi dump dữ liệu: ' . htmlspecialchars($e->getMessage()) . '</p>';
    }
}
?>