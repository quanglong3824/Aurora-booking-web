-- SQL export for Phòng & Căn Hộ overview page
CREATE TABLE IF NOT EXISTS phong_va_can_ho (
  id INT AUTO_INCREMENT PRIMARY KEY,
  slug VARCHAR(255) NOT NULL,
  page_title VARCHAR(255) NOT NULL,
  page_description TEXT,
  page_keywords TEXT,

  page_header_enabled TINYINT(1) DEFAULT 1,
  page_header_title VARCHAR(255),
  page_header_bg VARCHAR(255),

  additional_css TEXT, -- JSON array
  additional_js TEXT, -- JSON array (if any)

  overview_title VARCHAR(255),
  overview_subtitle TEXT,

  rooms_heading VARCHAR(255),
  rooms_intro TEXT,
  rooms_features TEXT, -- JSON array of {icon, text}
  rooms_types TEXT, -- JSON array of {label, link}
  view_all_rooms_text VARCHAR(255),

  apartments_heading VARCHAR(255),
  apartments_intro TEXT,
  apartments_features TEXT, -- JSON array of {icon, text}
  apartment_types TEXT, -- JSON array of {label, link}
  book_apartment_text VARCHAR(255)
);

INSERT INTO phong_va_can_ho (
  slug, page_title, page_description, page_keywords,
  page_header_enabled, page_header_title, page_header_bg,
  additional_css, additional_js,
  overview_title, overview_subtitle,
  rooms_heading, rooms_intro, rooms_features, rooms_types, view_all_rooms_text,
  apartments_heading, apartments_intro, apartments_features, apartment_types, book_apartment_text
) VALUES (
  'phong-va-can-ho',
  'Phòng & Căn Hộ - Aurora Hotel Plaza',
  'Khám phá hệ thống phòng nghỉ và căn hộ dịch vụ tại Aurora Hotel Plaza với thiết kế hiện đại, tiện nghi đầy đủ và dịch vụ chuyên nghiệp, phù hợp cho kỳ nghỉ và công tác.',
  'Aurora Hotel Plaza, phòng nghỉ, căn hộ dịch vụ, đặt phòng, tiện nghi, hiện đại',

  1,
  'Phòng & Căn Hộ',
  '/assets/image/rooms-hero.jpg',

  '["accommodation.css"]',
  '[]',

  'Khám phá không gian nghỉ dưỡng hoàn hảo',
  'Aurora Hotel Plaza cung cấp đa dạng hạng phòng và căn hộ dịch vụ, đáp ứng nhu cầu từ cá nhân, cặp đôi đến gia đình và nhóm công tác.',

  'Phòng nghỉ tại khách sạn',
  'Hệ thống phòng nghỉ hiện đại với tiện nghi cao cấp và dịch vụ chuyên nghiệp.',
  '[{"icon":"fa-bed","text":"Giường êm ái, không gian thoải mái"},{"icon":"fa-wifi","text":"Wifi tốc độ cao"},{"icon":"fa-tv","text":"Tivi màn hình phẳng"},{"icon":"fa-shower","text":"Phòng tắm riêng, nội thất cao cấp"}]',
  '[{"label":"Deluxe","link":"/pages/phong/deluxe-sang-trong.php"},{"label":"Premium Deluxe","link":"/pages/phong/premium-deluxe-cao-cap.php"},{"label":"Premium Deluxe Twin","link":"/pages/phong/premium-deluxe-twin-doi.php"},{"label":"Studio VIP","link":"/pages/phong/studio-vip-dang-cap.php"}]',
  'Xem tất cả phòng',

  'Căn hộ dịch vụ',
  'Căn hộ tiện nghi, riêng tư, phù hợp lưu trú dài ngày.',
  '[{"icon":"fa-home","text":"Không gian riêng tư"},{"icon":"fa-kitchen-set","text":"Bếp đầy đủ dụng cụ"},{"icon":"fa-broom","text":"Dọn dẹp định kỳ"},{"icon":"fa-parking","text":"Bãi đỗ xe thuận tiện"}]',
  '[{"label":"Premium Apartment","link":"/pages/can-ho/premium-sang-trong.php"},{"label":"Family Apartment","link":"/pages/can-ho/family-gia-dinh.php"},{"label":"Studio Apartment","link":"/pages/can-ho/studio-hien-dai.php"}]',
  'Đặt căn hộ ngay'
);