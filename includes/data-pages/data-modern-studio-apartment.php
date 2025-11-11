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

// Nạp DB và lấy dòng mới nhất từ bảng modern_studio_apartment
require_once __DIR__ . '/../../config/database.php';
try {
    $conn = getDB();
    if (!$conn) {
        throw new Exception('Không thể kết nối cơ sở dữ liệu.');
    }
    $stmt = $conn->query('SELECT * FROM `modern_studio_apartment` ORDER BY id DESC LIMIT 1');
    $row = $stmt->fetch(PDO::FETCH_ASSOC) ?: [];
} catch (Throwable $e) {
    $row = [];
}

// Gán biến từ dữ liệu bảng (có fallback hợp lý nếu thiếu)
$page_title = $row['modern_studio_title'] ?? 'Căn Hộ Studio Hiện Đại - Aurora Hotel Plaza';
$page_description = $row['modern_studio_description'] ?? 'Căn hộ Studio hiện đại, tiện nghi đầy đủ, phù hợp lưu trú ngắn và dài ngày tại Aurora Hotel Plaza.';
$hero_subtitle = $row['modern_studio_hero_subtitle'] ?? 'Không gian sống thông minh với thiết kế tối ưu và dịch vụ tiện lợi';

$price_text = get_or_default($row, 'modern_studio_price_text', '433.000 VNĐ');
$per_night_text = get_or_default($row, 'modern_studio_per_night_text', '/đêm');
$booking_url = get_or_default($row, 'modern_studio_booking_url', '../../../dat-phong.php?room=modern-studio-apartment');
$book_button_text = get_or_default($row, 'modern_studio_book_button_text', 'Đặt Căn Hộ Studio');

$contact_hotline_label = get_or_default($row, 'modern_studio_contact_hotline_label', 'Hotline đặt phòng:');
$contact_hotline = get_or_default($row, 'modern_studio_contact_hotline', '+84 251 391 8888');
$contact_email_label = get_or_default($row, 'modern_studio_contact_email_label', 'Email liên hệ:');
$contact_email_booking = get_or_default($row, 'modern_studio_contact_email_booking', 'booking@aurorahotelplaza.com');
$contact_email_info = get_or_default($row, 'modern_studio_contact_email_info', 'info@aurorahotelplaza.com');

$amenities = json_decode_safe_array($row['modern_studio_amenities'] ?? '');
$included_services = json_decode_safe_array($row['modern_studio_included_services'] ?? '');
$specs = json_decode_safe_specs($row['modern_studio_specs'] ?? '');

// Fallback khi DB chưa có dữ liệu
if (!isset($about_paragraph) || trim((string)$about_paragraph) === '') {
    $about_paragraph = 'Căn hộ Studio tại Aurora Hotel Plaza được thiết kế thông minh với diện tích 40–45m², tối ưu hóa không gian sống, đầy đủ khu vực nghỉ ngơi, bếp nhỏ gọn và phòng tắm riêng. Phù hợp cho cặp đôi, khách công tác hoặc lưu trú dài ngày.';
}

if (empty($amenities)) {
    $amenities = [
        'Miễn phí truy cập Internet',
        'Truyền hình cáp kỹ thuật số VTV',
        'Điện máy lạnh hệ thống',
        'Nước sử dụng',
        'Khuyến mãi thêm điện sử dụng (không quá 70Kw/tháng)',
        'Khu vực bếp, tủ lạnh',
    ];
}

if (empty($included_services)) {
    $included_services = [
        'Sử dụng phòng tập gym, hồ bơi, xông hơi',
        'Dịch vụ giặt ủi miễn phí 4 miếng/khách/đêm',
        '01 chỗ đậu xe miễn phí',
        'Dịch vụ làm phòng 02 lần/tuần',
        'Thay drap giường, áo gối 01 lần/tuần',
        'Thay khăn 01 lần/tuần',
    ];
}

if (empty($specs)) {
    $specs = [
        ['label' => 'Diện tích:', 'value' => '45m²'],
        ['label' => 'Sức chứa:', 'value' => '2 người'],
        ['label' => 'Phòng tắm:', 'value' => '1 phòng'],
        ['label' => 'Loại giường:', 'value' => 'Queen'],
        ['label' => 'Bếp:', 'value' => 'Kitchenette'],
        ['label' => 'Ban công:', 'value' => 'Có view đẹp'],
    ];
}

// Gallery & lightbox
$gallery_heading = $row['modern_studio_gallery_heading'] ?? 'Hình Ảnh Căn Hộ Studio';
$gallery_main_alt = $row['modern_studio_gallery_main_alt'] ?? 'Căn Hộ Studio Hiện Đại - Không gian chính';
$gallery_prev_label = $row['modern_studio_gallery_prev_label'] ?? 'Ảnh trước';
$gallery_next_label = $row['modern_studio_gallery_next_label'] ?? 'Ảnh sau';
$lightbox_close_label = $row['modern_studio_lightbox_close_label'] ?? 'Đóng';

// Ảnh chính và danh sách ảnh
$main_image = 'img/Modern studio apartment/modern-studio-apartment-1.jpg';
$gallery_images = [
    'img/Modern studio apartment/modern-studio-apartment-1.jpg',
    'img/Modern studio apartment/modern-studio-apartment-2.jpg',
    'img/Modern studio apartment/modern-studio-apartment-3.jpg',
    'img/Modern studio apartment/modern-studio-apartment-4.jpg',
    'img/Modern studio apartment/modern-studio-apartment-5.jpg',
    'img/Modern studio apartment/modern-studio-apartment-6.jpg',
    'img/Modern studio apartment/modern-studio-apartment-7.jpg',
];

// Tiêu đề khu liên quan
$related_heading = $row['modern_studio_related_heading'] ?? 'Các Căn Hộ Khác';

// Các biến phụ trợ
$canonical_url = 'https://aurorahotel.vn/can-ho-moi/can-ho-nho/' . ($row['modern_studio_slug'] ?? 'morden-studio-apartment');
$additional_css = isset($additional_css) && is_array($additional_css) ? $additional_css : [];
$additional_css[] = 'room-detail.css';
// Tái sử dụng style slider từ Deluxe để đồng nhất UI
$additional_css[] = 'deluxe-sang-trong.css';
$additional_css[] = 'can-ho-studio.css';
$additional_js = isset($additional_js) && is_array($additional_js) ? $additional_js : [];
$additional_js[] = 'js/room-deluxe.js';

// Section headings
$about_heading = 'Về ' . ($page_title ?: 'Căn Hộ Studio Hiện Đại');
$amenities_heading = 'Phòng bao gồm các tiện ích:';
$services_heading = 'Giá phòng trên đã bao gồm các dịch vụ:';

// Debug dump bảng modern_studio_apartment khi có ?dump=1
if (isset($_GET['dump']) && $_GET['dump'] === '1') {
    try {
        $conn = getDB();
        if (!$conn) {
            throw new Exception('Không thể kết nối cơ sở dữ liệu.');
        }
        $stmt = $conn->query('SELECT * FROM `modern_studio_apartment` ORDER BY id DESC');
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo '<h2>Dump bảng modern_studio_apartment</h2><pre>';
        print_r($rows);
        echo '</pre>';
    } catch (Throwable $e) {
        echo '<p style="color:red">Lỗi dump dữ liệu: ' . htmlspecialchars($e->getMessage()) . '</p>';
    }
}
?>