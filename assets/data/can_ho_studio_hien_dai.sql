-- Aurora Hotel Plaza - Căn Hộ Studio Hiện Đại
-- Bảng dữ liệu cho trang căn hộ Studio, dùng tiền tố cột: apartment_studio

CREATE TABLE IF NOT EXISTS `can_ho_studio_hien_dai` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `apartment_studio_slug` VARCHAR(100) NOT NULL,
  `apartment_studio_title` VARCHAR(255) NOT NULL,
  `apartment_studio_description` TEXT,
  `apartment_studio_hero_subtitle` VARCHAR(255),
  `apartment_studio_price_text` VARCHAR(50),
  `apartment_studio_per_night_text` VARCHAR(20),
  `apartment_studio_booking_url` VARCHAR(255),
  `apartment_studio_book_button_text` VARCHAR(100),
  `apartment_studio_contact_hotline_label` VARCHAR(100),
  `apartment_studio_contact_hotline` VARCHAR(50),
  `apartment_studio_contact_email_label` VARCHAR(100),
  `apartment_studio_contact_email_booking` VARCHAR(150),
  `apartment_studio_contact_email_info` VARCHAR(150),
  `apartment_studio_services_heading` VARCHAR(255),
  `apartment_studio_included_services` TEXT, -- JSON array
  `apartment_studio_amenities_heading` VARCHAR(255),
  `apartment_studio_amenities` TEXT, -- JSON array
  `apartment_studio_notes_heading` VARCHAR(255),
  `apartment_studio_notes` TEXT, -- JSON array
  `apartment_studio_specs` TEXT, -- JSON array of objects {label,value}
  `apartment_studio_gallery_heading` VARCHAR(255),
  `apartment_studio_gallery_main_alt` VARCHAR(255),
  `apartment_studio_gallery_prev_label` VARCHAR(100),
  `apartment_studio_gallery_next_label` VARCHAR(100),
  `apartment_studio_lightbox_close_label` VARCHAR(100),
  `apartment_studio_main_image` VARCHAR(255),
  `apartment_studio_gallery_images` TEXT, -- JSON array
  `apartment_studio_related_heading` VARCHAR(150),
  `breadcrumb` TEXT, -- JSON array of {name,url}
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `can_ho_studio_hien_dai` (
  `apartment_studio_slug`,
  `apartment_studio_title`,
  `apartment_studio_description`,
  `apartment_studio_hero_subtitle`,
  `apartment_studio_price_text`,
  `apartment_studio_per_night_text`,
  `apartment_studio_booking_url`,
  `apartment_studio_book_button_text`,
  `apartment_studio_contact_hotline_label`,
  `apartment_studio_contact_hotline`,
  `apartment_studio_contact_email_label`,
  `apartment_studio_contact_email_booking`,
  `apartment_studio_contact_email_info`,
  `apartment_studio_services_heading`,
  `apartment_studio_included_services`,
  `apartment_studio_amenities_heading`,
  `apartment_studio_amenities`,
  `apartment_studio_notes_heading`,
  `apartment_studio_notes`,
  `apartment_studio_specs`,
  `apartment_studio_gallery_heading`,
  `apartment_studio_gallery_main_alt`,
  `apartment_studio_gallery_prev_label`,
  `apartment_studio_gallery_next_label`,
  `apartment_studio_lightbox_close_label`,
  `apartment_studio_main_image`,
  `apartment_studio_gallery_images`,
  `apartment_studio_related_heading`,
  `breadcrumb`
) VALUES (
  'studio-hien-dai',
  'Căn Hộ Studio Hiện Đại - Aurora Hotel Plaza',
  'Căn hộ Studio hiện đại, tiện nghi đầy đủ, phù hợp lưu trú ngắn và dài ngày tại Aurora Hotel Plaza.',
  'Không gian sống thông minh với thiết kế tối ưu và dịch vụ tiện lợi',
  '433.000 VNĐ',
  '/đêm',
  '../../dat-phong.php?room=studio-apartment',
  'Đặt Căn Hộ Studio',
  'Hotline đặt phòng:',
  '+84 251 391 8888',
  'Email liên hệ:',
  'booking@aurorahotelplaza.com',
  'info@aurorahotelplaza.com',
  'Giá phòng trên đã bao gồm các dịch vụ:',
  '["Sử dụng phòng tập gym, hồ bơi, xông hơi","Dịch vụ giặt ủi miễn phí 4 miếng/khách/đêm","01 chỗ đậu xe miễn phí","Dịch vụ làm phòng 02 lần/tuần","Thay drap giường, áo gối 01 lần/tuần","Thay khăn 01 lần/tuần"]',
  'Phòng bao gồm các tiện ích:',
  '["Miễn phí truy cập Internet","Truyền hình cáp kỹ thuật số VTV","Điện máy lạnh hệ thống","Nước sử dụng","Khuyến mãi thêm điện sử dụng (không quá 70Kw/tháng)","Khu vực bếp, tủ lạnh"]',
  'Lưu ý:',
  '["Giá ăn sáng cho mỗi khách (nếu có): 150.000 VNĐ/khách/bữa","Thời hạn thuê từ 7 ngày đến 1 tháng: Bên Thuê sẽ thanh toán trước toàn bộ tiền cho Bên Cho Thuê","Thời hạn thuê từ 3 tháng trở lên: Bên Thuê sẽ trao đổi với Bên Cho Thuê về hình thức thanh toán","Giá chỉ từ: 433.000 VNĐ/đêm"]',
  '[{"label":"Diện tích:","value":"45m²"},{"label":"Phòng ngủ:","value":"Studio mở"},{"label":"Phòng tắm:","value":"1 phòng"},{"label":"Sức chứa:","value":"2 người"},{"label":"Bếp:","value":"Kitchenette"},{"label":"Ban công:","value":"Có view đẹp"}]',
  'Hình Ảnh Căn Hộ Studio',
  'Căn Hộ Studio Hiện Đại - Không gian chính',
  'Ảnh trước',
  'Ảnh sau',
  'Đóng',
  'img/studio apartment/CAN-HO-STUDIO-AURORA-HOTEL-1.jpg',
  '["img/studio apartment/CAN-HO-STUDIO-AURORA-HOTEL-1.jpg","img/studio apartment/CAN-HO-STUDIO-AURORA-HOTEL-2.jpg","img/studio apartment/CAN-HO-STUDIO-AURORA-HOTEL-3.jpg","img/studio apartment/CAN-HO-STUDIO-AURORA-HOTEL-5.jpg","img/studio apartment/CAN-HO-STUDIO-AURORA-HOTEL-8.jpg"]',
  'Các Căn Hộ Khác',
  '[{"name":"Trang chủ","url":"/"},{"name":"Căn hộ","url":"/can-ho"},{"name":"Căn Hộ Studio Hiện Đại","url":""}]'
);

-- Lưu ý: các trường JSON đang lưu ở dạng TEXT để tương thích mọi phiên bản MySQL/MariaDB.
-- Khi triển khai CSDL với hỗ trợ JSON, có thể đổi các cột JSON sang kiểu JSON.