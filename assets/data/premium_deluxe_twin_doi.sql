-- SQL export for Premium Deluxe Twin Đôi page
CREATE TABLE IF NOT EXISTS premium_deluxe_twin_doi (
  id INT AUTO_INCREMENT PRIMARY KEY,
  slug VARCHAR(255) NOT NULL,
  page_title VARCHAR(255) NOT NULL,
  page_description TEXT,
  page_keywords TEXT,

  hero_subtitle VARCHAR(255),

  price_text VARCHAR(255),
  per_night_text VARCHAR(255),

  booking_url VARCHAR(255),
  book_button_text VARCHAR(255),

  contact_phone_label VARCHAR(255),
  contact_phone TEXT,
  contact_email_label VARCHAR(255),
  contact_email TEXT,

  about_heading VARCHAR(255),
  about_paragraph TEXT,

  amenities_heading VARCHAR(255),
  amenities TEXT, -- JSON array

  services_heading VARCHAR(255),
  included_services TEXT, -- JSON array

  notes_heading VARCHAR(255),
  notes TEXT, -- JSON array

  specs TEXT, -- JSON array of {label, value}

  gallery_heading VARCHAR(255),
  gallery_main_alt VARCHAR(255),
  lightbox_prev_label VARCHAR(255),
  lightbox_next_label VARCHAR(255),
  lightbox_close_label VARCHAR(255),

  main_image VARCHAR(255),
  gallery_images TEXT, -- JSON array (if available)

  related_heading VARCHAR(255),
  related1_title VARCHAR(255),
  related1_desc TEXT,
  related1_url VARCHAR(255),
  related2_title VARCHAR(255),
  related2_desc TEXT,
  related2_url VARCHAR(255),

  breadcrumb TEXT -- JSON array of {title, url}
);

INSERT INTO premium_deluxe_twin_doi (
  slug, page_title, page_description, page_keywords,
  hero_subtitle,
  price_text, per_night_text,
  booking_url, book_button_text,
  contact_phone_label, contact_phone, contact_email_label, contact_email,
  about_heading, about_paragraph,
  amenities_heading, amenities,
  services_heading, included_services,
  notes_heading, notes,
  specs,
  gallery_heading, gallery_main_alt, lightbox_prev_label, lightbox_next_label, lightbox_close_label,
  main_image, gallery_images,
  related_heading, related1_title, related1_desc, related1_url, related2_title, related2_desc, related2_url,
  breadcrumb
) VALUES (
  'premium-deluxe-twin-doi',
  'Phòng Premium Deluxe Twin Đôi - Aurora Hotel Plaza',
  'Phòng Premium Deluxe Twin Đôi tại Aurora Hotel Plaza mang đến trải nghiệm nghỉ dưỡng hiện đại với hai giường đơn rộng rãi, thiết kế tinh tế, ánh sáng tự nhiên và tiện nghi cao cấp. Phù hợp cho cặp đôi, bạn bè hoặc gia đình nhỏ, đảm bảo sự thoải mái tối đa trong mỗi khoảnh khắc lưu trú.',
  'Aurora Hotel Plaza, phòng Premium Deluxe Twin, phòng đôi, nghỉ dưỡng, tiện nghi cao cấp, giường twin, phòng hiện đại',

  'Trải nghiệm thoải mái với hai giường Twin hiện đại, phù hợp cho cặp đôi hoặc bạn bè, không gian rộng rãi và tiện nghi cao cấp.',

  'Giá chỉ từ: 2.200.000 VNĐ',
  '',

  '../../dat-phong.php?room=premium-deluxe-twin',
  'Đặt phòng ngay',

  'Liên hệ đặt phòng:',
  '+84 846 091 555',
  'Email hỗ trợ:',
  'booking@aurorahotelplaza.vn',

  'Giới thiệu phòng',
  'Phòng Premium Deluxe Twin Đôi mang đến không gian thanh lịch, hiện đại với ánh sáng tự nhiên, nội thất cao cấp và cách bố trí hợp lý, giúp bạn tận hưởng kỳ nghỉ thoải mái và tiện nghi.',

  'Tiện nghi phòng',
  '["Hai giường Twin cao cấp","Không gian rộng rãi và thoáng mát","Điều hoà nhiệt độ","Tivi màn hình phẳng","Wifi tốc độ cao","Bàn làm việc và ghế","Tủ quần áo","Két an toàn","Ấm đun nước và cốc"]',

  'Dịch vụ kèm theo',
  '["Bữa sáng miễn phí","Dọn phòng hằng ngày","Lễ tân 24/7","Giặt ủi theo yêu cầu","Dịch vụ gọi taxi","Hỗ trợ đặt tour"]',

  'Ghi chú',
  '["Giờ nhận phòng: từ 14:00","Giờ trả phòng: trước 12:00","Vui lòng liên hệ trước nếu yêu cầu nhận phòng sớm hoặc trả phòng trễ"]',

  '[{"label":"Diện tích","value":"28 m²"},{"label":"Số giường","value":"2 giường Twin"},{"label":"Sức chứa","value":"2–3 khách"},{"label":"Hướng phòng","value":"Thành phố"}]',

  'Thư viện ảnh',
  'PREMIUM-DELUXE-TWIN-AURORA-1.jpg - phòng, giường đôi twin hiện đại, tiện nghi',
  'Trước',
  'Sau',
  'Đóng',

  'img/premium twin/PREMIUM-DELUXE-TWIN-AURORA-1.jpg',
  '[]',

  'Phòng liên quan',
  'Premium Deluxe Cao Cấp',
  'Trải nghiệm cao cấp với không gian sang trọng, tiện nghi hiện đại và dịch vụ chuyên nghiệp.',
  '../../phong/premium-deluxe-cao-cap.php',
  'Deluxe Sang Trọng',
  'Không gian sang trọng, tinh tế, phù hợp cho kỳ nghỉ thư giãn hoặc công tác.',
  '../../phong/deluxe-sang-trong.php',

  '[{"title":"Trang chủ","url":"../../index.php"},{"title":"Phòng","url":"../phong.php"},{"title":"Premium Deluxe Twin","url":"premium-deluxe-twin-doi.php"}]'
);