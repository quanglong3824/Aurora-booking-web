-- SQL export for Giới thiệu page
CREATE TABLE IF NOT EXISTS gioi_thieu (
  id INT AUTO_INCREMENT PRIMARY KEY,
  slug VARCHAR(255) NOT NULL,
  page_title VARCHAR(255) NOT NULL,
  page_description TEXT,
  page_keywords TEXT,

  page_header_title VARCHAR(255),
  page_header_subtitle TEXT,
  page_header_bg VARCHAR(255),

  breadcrumb TEXT, -- JSON array of {title, url}

  additional_css TEXT, -- JSON array
  additional_js TEXT -- JSON array
);

INSERT INTO gioi_thieu (
  slug, page_title, page_description, page_keywords,
  page_header_title, page_header_subtitle, page_header_bg,
  breadcrumb,
  additional_css, additional_js
) VALUES (
  'gioi-thieu',
  'Giới thiệu - Aurora Hotel Plaza',
  'Aurora Hotel Plaza là khách sạn hiện đại nằm tại trung tâm, cung cấp hệ thống phòng và căn hộ tiện nghi cùng dịch vụ chuyên nghiệp, mang đến trải nghiệm nghỉ dưỡng và công tác hoàn hảo.',
  'Aurora Hotel Plaza, giới thiệu, khách sạn, tiện nghi, dịch vụ chuyên nghiệp, nghỉ dưỡng',

  'Về Aurora Hotel Plaza',
  'Không gian hiện đại, dịch vụ tận tâm',
  '/assets/img/hero banner/Banner 8.jpg',

  '[{"title":"Trang chủ","url":"../../index.php"},{"title":"Giới thiệu","url":"../gioi-thieu.php"}]',

  '[]',
  '[]'
);