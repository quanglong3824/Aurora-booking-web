-- Aurora Hotel Plaza - Căn hộ dịch vụ (Overview)
-- Bảng dữ liệu cho trang tổng quan Căn hộ dịch vụ.
-- Sử dụng JSON (lưu trong TEXT) cho các trường danh sách để linh hoạt.

CREATE TABLE IF NOT EXISTS `can_ho` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `can_ho_slug` VARCHAR(100) NOT NULL,
  `page_title` VARCHAR(255) NOT NULL,
  `page_description` TEXT,
  `page_header_enabled` TINYINT(1) DEFAULT 1,
  `page_header_title` VARCHAR(255),
  `page_header_subtitle` VARCHAR(255),
  `page_header_bg` VARCHAR(255),
  `additional_css` TEXT, -- JSON array
  `show_breadcrumb` TINYINT(1) DEFAULT 1,
  `breadcrumb_items` TEXT, -- JSON array of {title, url}
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `can_ho` (
  `can_ho_slug`,
  `page_title`,
  `page_description`,
  `page_header_enabled`,
  `page_header_title`,
  `page_header_subtitle`,
  `page_header_bg`,
  `additional_css`,
  `show_breadcrumb`,
  `breadcrumb_items`
) VALUES (
  'can-ho',
  'Căn hộ dịch vụ',
  'Khám phá các loại căn hộ dịch vụ tại Aurora Hotel Plaza: Family, Premium, Studio với đầy đủ tiện nghi hiện đại',
  1,
  'Căn hộ dịch vụ Aurora Hotel Plaza',
  'Không gian sống tiện nghi, hiện đại phù hợp mọi nhu cầu',
  '/assets/img/premium apartment/CAN-HO-PREMIUM-AURORA-HOTEL-1.jpg',
  '["can-ho.css"]',
  1,
  '[{"title":"Phòng & Căn hộ","url":"phong-va-can-ho.php"},{"title":"Căn hộ","url":""}]'
);

-- Lưu ý: các trường JSON đang lưu ở dạng TEXT để tương thích mọi phiên bản MySQL/MariaDB.
-- Khi triển khai CSDL với hỗ trợ JSON, có thể đổi các cột JSON sang kiểu JSON.