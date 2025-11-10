-- SQL export for Dịch vụ page
CREATE TABLE IF NOT EXISTS dich_vu (
  id INT AUTO_INCREMENT PRIMARY KEY,
  slug VARCHAR(255) NOT NULL,
  page_title VARCHAR(255) NOT NULL,
  page_description TEXT,
  page_keywords TEXT,
  current_page VARCHAR(255),

  page_header_title VARCHAR(255),
  page_header_subtitle TEXT,
  page_header_bg VARCHAR(255),

  breadcrumb TEXT, -- JSON array of {title, url}

  additional_css TEXT, -- JSON array
  additional_js TEXT -- JSON array
);

INSERT INTO dich_vu (
  slug, page_title, page_description, page_keywords, current_page,
  page_header_title, page_header_subtitle, page_header_bg,
  breadcrumb,
  additional_css, additional_js
) VALUES (
  'dich-vu',
  'Dịch vụ - Aurora Hotel Plaza',
  'Khám phá các dịch vụ chuyên nghiệp tại Aurora Hotel Plaza: nhà hàng, giặt ủi, đưa đón, hỗ trợ tour và nhiều tiện ích khác mang đến trải nghiệm hoàn hảo cho kỳ nghỉ hoặc công tác.',
  'Aurora Hotel Plaza, dịch vụ khách sạn, nhà hàng, giặt ủi, đưa đón, hỗ trợ tour, tiện ích',
  'dich-vu',

  'Dịch vụ khách sạn',
  'Tiện ích đa dạng, phục vụ tận tâm',
  '/assets/img/hero banner/Banner 7.jpg',

  '[{"title":"Trang chủ","url":"../../index.php"},{"title":"Dịch vụ","url":"../dich-vu.php"}]',

  '["dich-vu.css"]',
  '["js/dich-vu.js"]'
);