<?php
// Dữ liệu trang Phòng Premium Deluxe Cao Cấp

// SEO & tiêu đề
$page_title = "Phòng Premium Deluxe Cao Cấp - Aurora Hotel Plaza";
$page_description = "Phòng Premium Deluxe cao cấp với thiết kế sang trọng, tiện nghi 5 sao tại Aurora Hotel Plaza.";
$additional_css = ['room-detail.css', 'premium-deluxe-cao-cap.css?v2'];
$additional_js = ['js/room-deluxe.js'];
$hero_subtitle = "Không gian nghỉ dưỡng đẳng cấp với thiết kế sang trọng và tiện nghi 5 sao";

// Ảnh chính và gallery
$main_image = 'img/premium deluxe/PREMIUM-DELUXE-AURORA-HOTEL-1.jpg';
$gallery_images = [
    'img/premium deluxe/PREMIUM-DELUXE-AURORA-HOTEL-1.jpg',
    'img/premium deluxe/PREMIUM-DELUXE-AURORA-HOTEL-2.jpg',
    'img/premium deluxe/PREMIUM-DELUXE-AURORA-HOTEL-3.jpg',
    'img/premium deluxe/PREMIUM-DELUXE-AURORA-HOTEL-5.jpg',
    'img/premium deluxe/PREMIUM-DELUXE-AURORA-HOTEL-6.jpg',
    'img/premium deluxe/PREMIUM-DELUXE-AURORA-HOTEL-7.jpg',
    'img/premium deluxe/PREMIUM-DELUXE-AURORA-HOTEL-8.jpg',
    'img/premium deluxe/PREMIUM-DELUXE-AURORA-HOTEL-9.jpg',
    'img/premium deluxe/PREMIUM-DELUXE-AURORA-HOTEL-10.jpg'
];

// Thông tin đặt phòng
$price_text = '2.200.000 VNĐ';
$per_night_text = '/đêm';
// Chỉ lưu path, trang sẽ bọc bằng url()
$booking_url_path = 'pages/dat-phong.php?room=premium-deluxe';
$book_button_text = 'Đặt Phòng Premium';

// Liên hệ (tái sử dụng từ site chung)
$contact_hotline_label = 'Hotline';
$contact_hotline = '+84 251 391 8888';
$contact_email_label = 'Email';
$contact_email_booking = 'booking@aurorahotelplaza.com';
$contact_email_info = 'info@aurorahotelplaza.com';

// Nội dung giới thiệu
$about_heading = 'Về Phòng Premium Deluxe Cao Cấp';
$about_paragraph = 'Phòng Premium Deluxe của Aurora Hotel Plaza là sự kết hợp hoàn hảo giữa không gian rộng rãi 45m² và thiết kế nội thất cao cấp. Mỗi phòng được trang bị đầy đủ tiện nghi hiện đại, khu vực tiếp khách riêng biệt và ban công lớn với view panorama tuyệt đẹp.';

// Tiện nghi trong phòng (amenities)
$amenities_heading = 'Tiện Nghi Phòng Cao Cấp';
$amenities = [
    'Internet, Wifi miễn phí',
    'Điện thoại IDD',
    'TV vệ tinh',
    'Két an toàn',
    'Giặt ủi',
    'Ghế sofa',
    'Bàn làm việc',
    'Vòi sen & bồn tắm',
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
    ['label' => 'Diện tích:', 'value' => '45m²'],
    ['label' => 'Sức chứa:', 'value' => '2-3 người lớn'],
    ['label' => 'Loại giường:', 'value' => 'Giường đôi (1 cái)'],
    ['label' => 'View:', 'value' => 'Thành phố'],
];

// Gallery text
$gallery_heading = 'Thư viện hình ảnh';
$gallery_prev_label = 'Ảnh trước';
$gallery_next_label = 'Ảnh sau';
$gallery_main_alt = 'Phòng Premium Deluxe Cao Cấp - Hình ảnh chính';

// Lightbox
$lightbox_close_label = 'Đóng';

// Related rooms (giữ tương tự deluxe page cho thống nhất)
$related_heading = 'Khám Phá Các Phòng Khác';
$related1_title = 'Phòng Deluxe Sang Trọng';
$related1_price = '2.000.000 VNĐ/đêm';
$related1_btn_text = 'Xem Chi Tiết';
$related2_title = 'Phòng Studio VIP';
$related2_price = '4.500.000 VNĐ/đêm';
$related2_btn_text = 'Xem Chi Tiết';
?>