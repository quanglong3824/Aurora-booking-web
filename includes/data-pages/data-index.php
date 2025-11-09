<?php
// Thiết lập thông tin trang
$page_title = "Aurora Hotel Plaza - Khách sạn sang trọng";
$page_description = "Trải nghiệm nghỉ dưỡng sang trọng với dịch vụ đẳng cấp quốc tế tại Aurora Hotel Plaza";
$page_keywords = "khách sạn, Aurora Hotel Plaza, nghỉ dưỡng, sang trọng, đặt phòng";
$current_page = "home";
$breadcrumb = [
    ['title' => 'Trang chủ', 'url' => 'index.php', 'active' => true]
];

// Biến thông tin khách sạn (lấy theo docs/info Aurora Hotel Plaza.md)
$hotel_name = 'Aurora Hotel Plaza';
$hotel_address = 'số 253, Phạm Văn Thuận, KP2, Phường Tam Hiệp, Tỉnh Đồng Nai';
$hotel_phone = '(+84-251) 391.8888';
$hotel_email_info = 'info@aurorahotelplaza.com';
$hotel_email_booking = 'booking@aurorahotelplaza.com';
$brand_color_rgb = '206, 152, 56';

// Biến nội dung trang (mô tả, tiêu đề...)
$hero_background = 'assets/img/hero banner/AURORA-HOTEL-BIEN-HOA-1.jpg';
$hero_title = "Chào mừng đến với $hotel_name";
$hero_subtitle = "Trải nghiệm nghỉ dưỡng sang trọng với dịch vụ đẳng cấp quốc tế";
$cta_booking_text = "Đặt phòng ngay";

// Hero slider images & interval (ms)
$hero_images = [
    'assets/img/hero banner/AURORA-HOTEL-BIEN-HOA-1.jpg',
    'assets/img/hero banner/AURORA-HOTEL-BIEN-HOA-2.jpg',
    'assets/img/hero banner/AURORA-HOTEL-BIEN-HOA-3.jpg',
    'assets/img/hero banner/AURORA-HOTEL-BIEN-HOA-4.jpg',
    'assets/img/hero banner/AURORA-HOTEL-BIEN-HOA-6.jpg'
];
$hero_slide_interval = 5000;

$booking_title = 'Đặt phòng nhanh';
$booking_subtitle = 'Chọn ngày, loại phòng và số khách để xem giá tốt nhất';

$rooms_title = 'Phòng nghỉ';
$rooms_desc = 'Khám phá các loại phòng sang trọng của chúng tôi';
$room_deluxe_title = 'Phòng cao cấp';
$room_deluxe_desc = 'Phòng rộng rãi với view đẹp và tiện nghi cao cấp';
$room_deluxe_price = '2.000.000';
$room_suite_title = 'Phòng suite';
$room_suite_desc = 'Phòng hạng sang với không gian riêng biệt và dịch vụ VIP';
$room_suite_price = '3.500.000';

// Đồng bộ dữ liệu giá/phần chọn của Deluxe từ trang gốc (tránh sửa nhiều nơi)
if (!function_exists('get_deluxe_page_data')) {
    function get_deluxe_page_data() {
        $data = [];
        // Nạp trong phạm vi hàm để tránh rò rỉ biến ra global (additional_css/js ...)
        include __DIR__ . '/data-deluxe.php';
        $data['price_text'] = isset($price_text) ? $price_text : null;
        $data['hero_subtitle'] = isset($hero_subtitle) ? $hero_subtitle : null;
        $data['page_title'] = isset($page_title) ? $page_title : null;
        $data['amenities'] = isset($amenities) ? $amenities : [];
        $data['main_image'] = 'img/deluxe/DELUXE-ROOM-AURORA-1.jpg';

        return $data;
    }
}

$deluxe_data = get_deluxe_page_data();
if (!empty($deluxe_data['price_text'])) {
    // Lấy phần số từ "1.900.000 VNĐ" -> "1.900.000"
    $room_deluxe_price = preg_replace('/[^0-9\.]/', '', $deluxe_data['price_text']);
}

// Ghi đè trực tiếp các biến hiển thị trên trang chủ bằng dữ liệu Deluxe theo yêu cầu
// Xóa ánh xạ thừa sang biến phòng tiêu chuẩn để dữ liệu gọn sạch

// Biến ảnh hiển thị cho card Deluxe trên trang chủ
$room_deluxe_image = isset($deluxe_data['main_image']) ? $deluxe_data['main_image'] : 'img/deluxe/DELUXE-ROOM-AURORA-1.jpg';

// Biến DEMO cho các khối 2 và 3 (chưa sẵn sàng)
$demo_block_text = 'DEMO – Chưa sẵn sàng';
$demo_null = 'null';

$services_title = 'Dịch vụ';
$services_desc = 'Khám phá các dịch vụ đẳng cấp của chúng tôi';

$about_title = "Về $hotel_name";
$about_text = 'Aurora Hotel Plaza là biểu tượng của sự sang trọng và đẳng cấp, mang đến trải nghiệm nghỉ dưỡng không thể nào quên. Với nhiều năm kinh nghiệm trong ngành khách sạn, chúng tôi cam kết mang đến dịch vụ tốt nhất cho quý khách.';

$gallery_title = 'Thư viện ảnh';
$gallery_subtitle = 'Khám phá vẻ đẹp của Aurora Hotel Plaza';

$contact_title = 'Liên hệ';
$contact_subtitle = 'Chúng tôi luôn sẵn sàng hỗ trợ quý khách';

// Booking labels & texts
$checkin_label = 'Ngày nhận phòng';
$checkin_hint = 'Nhận phòng sau 14:00';
$checkout_label = 'Ngày trả phòng';
$checkout_hint = 'Trả phòng trước 12:00';
$guests_label = 'Số khách';
$guest_placeholder = 'Chọn số khách';
$guest_option_1 = '1 khách (1 người lớn)';
$guest_option_2 = '2 khách (2 người lớn)';
$guest_option_3 = '3 khách (2 người lớn + 1 trẻ em)';
$guest_option_4 = '4 khách (2 người lớn + 2 trẻ em)';
$room_type_label = 'Loại phòng';
$room_type_placeholder = 'Chọn loại phòng';
$room_type_standard_option_text = 'Phòng Tiêu Chuẩn – 1.200.000 ₫/đêm';
$room_type_deluxe_option_text = 'Phòng Cao Cấp – ' . $room_deluxe_price . ' ₫/đêm';
$room_type_suite_option_text = 'Phòng Suite – 3.500.000 ₫/đêm';
$search_room_cta = 'Tìm phòng trống';
$booking_note = 'Giá đã bao gồm thuế & bữa sáng';

// Rooms amenities & CTA
$amenity_wifi = 'WiFi miễn phí';
$amenity_tv = 'TV LCD';
$amenity_ac = 'Điều hòa';

// Nạp thẳng tiện nghi từ trang Deluxe (ưu tiên khớp nhãn)
if (!empty($deluxe_data['amenities']) && is_array($deluxe_data['amenities'])) {
    // Tìm theo từ khóa để ánh xạ
    foreach ($deluxe_data['amenities'] as $amenity) {
        $lower = mb_strtolower($amenity);
        if (strpos($lower, 'wifi') !== false) {
            $amenity_wifi = $amenity; // nạp vào L99–101
        }
        if (strpos($lower, 'tv') !== false) {
            $amenity_tv = $amenity; // nạp vào L99–101
        }
        if (strpos($lower, 'điều hòa') !== false || strpos($lower, 'xông hơi') !== false || strpos($lower, 'air') !== false) {
            // Không có "Điều hòa" trong deluxe, fallback "Xông hơi" nếu có
            $amenity_ac = $amenity; // nạp vào L99–101
        }
    }
}
$amenity_bathtub = 'Bồn tắm';
$amenity_room_service = 'Room service';
$amenity_vip_service = null; // clear data thừa
$amenity_jacuzzi = null;     // clear data thừa
$amenity_minibar = null;     // clear data thừa

// Clear biến suite vì khối 3 chuyển sang demo
$room_suite_title = null;
$room_suite_desc = null;
$room_suite_price = null;
$cta_book_now = 'Đặt ngay';

// Services items
$service_link_text = 'Xem chi tiết';
$service_restaurant_title = 'Nhà hàng';
$service_restaurant_desc = 'Thưởng thức ẩm thực đẳng cấp với đầu bếp chuyên nghiệp';
$service_spa_title = 'Spa & Wellness';
$service_spa_desc = 'Thư giãn và tái tạo năng lượng với các liệu pháp spa cao cấp';
$service_pool_title = 'Hồ bơi vô cực';
$service_pool_desc = 'Tận hưởng không gian thư giãn với hồ bơi vô cực tuyệt đẹp';
$service_fitness_title = 'Phòng gym';
$service_fitness_desc = 'Duy trì sức khỏe với thiết bị tập luyện hiện đại';
$service_conference_title = 'Hội nghị & Sự kiện';
$service_conference_desc = 'Tổ chức sự kiện chuyên nghiệp với không gian sang trọng';
$service_concierge_title = 'Dịch vụ concierge';
$service_concierge_desc = 'Hỗ trợ 24/7 cho mọi nhu cầu của quý khách';

// About stats & CTA
$about_stat_rooms = '200+';
$about_stat_rooms_label = 'Phòng nghỉ';
$about_stat_staff = '50+';
$about_stat_staff_label = 'Nhân viên';
$about_stat_experience = '10+';
$about_stat_experience_label = 'Năm kinh nghiệm';
$cta_learn_more_text = 'Tìm hiểu thêm';

// Contact labels & form
$working_hours_label = 'Giờ làm việc';
$working_hours_text = '24/7 - Phục vụ quý khách';
$contact_cta_text = 'Xem thông tin liên hệ chi tiết';
$contact_form_name_placeholder = 'Họ và tên';
$contact_form_email_placeholder = 'Email';
$contact_form_phone_placeholder = 'Số điện thoại';
$contact_form_message_placeholder = 'Tin nhắn';
$contact_form_submit_text = 'Gửi tin nhắn';

// Gallery images config (preview on homepage)
$gallery_images = [
    [
        'src' => 'assets/img/hero banner/AURORA-HOTEL-BIEN-HOA-4.jpg',
        'alt' => 'Sảnh Aurora Hotel Plaza',
        'caption' => 'Sảnh khách sạn'
    ],
    [
        'src' => 'assets/img/deluxe/DELUXE-ROOM-AURORA-1.jpg',
        'alt' => 'Phòng Deluxe Aurora',
        'caption' => 'Phòng Deluxe'
    ],
    [
        'src' => 'assets/img/restaurant/NHA-HANG-AURORA-HOTEL-1.jpg',
        'alt' => 'Nhà hàng Aurora',
        'caption' => 'Nhà hàng'
    ],
    [
        'src' => 'assets/img/service/gym/GYM-AURORA-HOTEL-1.jpg',
        'alt' => 'Phòng Gym Aurora',
        'caption' => 'Phòng gym'
    ],
    [
        'src' => 'assets/img/premium apartment/CAN-HO-PREMIUM-AURORA-HOTEL-1.jpg',
        'alt' => 'Căn hộ Premium Aurora',
        'caption' => 'Căn hộ Premium'
    ],
    [
        'src' => 'assets/img/family apartment/CAN-HO-FAMILY-AURORA-HOTEL-6.jpg',
        'alt' => 'Căn hộ Family Aurora',
        'caption' => 'Căn hộ Family'
    ],
    [
        'src' => 'assets/img/studio apartment/CAN-HO-STUDIO-AURORA-HOTEL-1.jpg',
        'alt' => 'Căn hộ Studio Aurora',
        'caption' => 'Căn hộ Studio'
    ],
    [
        'src' => 'assets/img/hero banner/AURORA-HOTEL-BIEN-HOA-6.jpg',
        'alt' => 'Không gian Aurora Hotel',
        'caption' => 'Không gian khách sạn'
    ]
];

// CSS & JS bổ sung cho trang chủ (gallery overlay + hero slider)
$additional_css = isset($additional_css) && is_array($additional_css) ? $additional_css : [];
$additional_css[] = 'gallery-hero.css';

$additional_js = isset($additional_js) && is_array($additional_js) ? $additional_js : [];
$additional_js[] = 'js/hero-slider.js';
?>