-- Aurora Booking Website Database
-- ================================

-- Create database
CREATE DATABASE IF NOT EXISTS `aurora_booking` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `aurora_booking`;

-- Table structure for table `rooms`
CREATE TABLE `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_type` varchar(100) NOT NULL,
  `room_name` varchar(200) NOT NULL,
  `description` text,
  `price_per_night` decimal(10,2) NOT NULL,
  `max_guests` int(11) NOT NULL DEFAULT 2,
  `amenities` text,
  `image_url` varchar(500),
  `is_available` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample room data
INSERT INTO `rooms` (`room_type`, `room_name`, `description`, `price_per_night`, `max_guests`, `amenities`, `image_url`) VALUES
('standard', 'Phòng Tiêu Chuẩn', 'Phòng tiêu chuẩn với đầy đủ tiện nghi cơ bản', 800000.00, 2, 'WiFi miễn phí, Điều hòa, TV, Minibar', 'assets/image/room-standard.jpg'),
('standard_garden', 'Phòng Tiêu Chuẩn Hướng Vườn', 'Phòng tiêu chuẩn với view hướng vườn', 900000.00, 2, 'WiFi miễn phí, Điều hòa, TV, Minibar, Ban công', 'assets/image/room-standard-garden.jpg'),
('deluxe', 'Phòng Deluxe', 'Phòng deluxe rộng rãi với tiện nghi cao cấp', 1200000.00, 3, 'WiFi miễn phí, Điều hòa, TV, Minibar, Bồn tắm', 'assets/image/room-deluxe.jpg'),
('deluxe_pool', 'Phòng Deluxe Hướng Hồ Bơi', 'Phòng deluxe với view hồ bơi tuyệt đẹp', 1400000.00, 3, 'WiFi miễn phí, Điều hòa, TV, Minibar, Bồn tắm, Ban công hướng hồ bơi', 'assets/image/room-deluxe-pool.jpg'),
('suite', 'Phòng Suite', 'Phòng suite sang trọng với không gian rộng lớn', 2000000.00, 4, 'WiFi miễn phí, Điều hòa, TV, Minibar, Bồn tắm, Phòng khách riêng', 'assets/image/room-suite.jpg'),
('suite_ocean', 'Phòng Suite Hướng Biển', 'Phòng suite cao cấp với view biển tuyệt đẹp', 2500000.00, 4, 'WiFi miễn phí, Điều hòa, TV, Minibar, Bồn tắm, Phòng khách riêng, Ban công hướng biển', 'assets/image/room-suite-ocean.jpg'),
('presidential', 'Phòng Presidential', 'Phòng tổng thống với tiện nghi đẳng cấp 5 sao', 5000000.00, 6, 'WiFi miễn phí, Điều hòa, TV, Minibar, Bồn tắm jacuzzi, Phòng khách, Phòng ăn, Butler service', 'assets/image/room-presidential.jpg');

-- Table structure for table `bookings`
CREATE TABLE `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_id` int(11) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `guests_count` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `special_requests` text,
  `booking_status` enum('pending','confirmed','cancelled','completed') NOT NULL DEFAULT 'pending',
  `payment_status` enum('pending','paid','refunded') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table structure for table `services`
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(200) NOT NULL,
  `description` text,
  `price` decimal(10,2),
  `image_url` varchar(500),
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample services data
INSERT INTO `services` (`service_name`, `description`, `price`, `image_url`) VALUES
('Spa & Wellness', 'Dịch vụ spa và chăm sóc sức khỏe với các liệu pháp thư giãn', 500000.00, 'assets/image/spa.jpg'),
('Nhà Hàng', 'Nhà hàng phục vụ các món ăn Việt Nam và quốc tế', 0.00, 'assets/image/restaurant.jpg'),
('Hồ Bơi', 'Hồ bơi ngoài trời với view tuyệt đẹp', 0.00, 'assets/image/pool.jpg'),
('Phòng Gym', 'Phòng tập gym hiện đại với đầy đủ thiết bị', 0.00, 'assets/image/gym.jpg'),
('Hội Nghị', 'Phòng hội nghị và sự kiện với thiết bị hiện đại', 2000000.00, 'assets/image/conference.jpg'),
('Concierge', 'Dịch vụ hỗ trợ khách hàng 24/7', 0.00, 'assets/image/concierge.jpg');

-- Table structure for table `gallery`
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text,
  `image_url` varchar(500) NOT NULL,
  `category` varchar(100),
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample gallery data
INSERT INTO `gallery` (`title`, `description`, `image_url`, `category`, `is_featured`) VALUES
('Khách Sạn Aurora - Bên Ngoài', 'Tòa nhà khách sạn Aurora với kiến trúc hiện đại', 'assets/image/hotel-exterior.jpg', 'exterior', 1),
('Thư Viện Ảnh 1', 'Không gian lobby sang trọng', 'assets/image/gallery-1.jpg', 'interior', 1),
('Thư Viện Ảnh 2', 'Phòng nghỉ cao cấp', 'assets/image/gallery-2.jpg', 'rooms', 1),
('Thư Viện Ảnh 3', 'Nhà hàng với view tuyệt đẹp', 'assets/image/gallery-3.jpg', 'restaurant', 0),
('Thư Viện Ảnh 4', 'Hồ bơi ngoài trời', 'assets/image/gallery-4.jpg', 'facilities', 0);

-- Table structure for table `contacts`
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20),
  `subject` varchar(300) NOT NULL,
  `message` text NOT NULL,
  `status` enum('new','read','replied') NOT NULL DEFAULT 'new',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table structure for table `admin_users`
CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `role` enum('admin','manager','staff') NOT NULL DEFAULT 'staff',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `last_login` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert default admin user (password: admin123)
INSERT INTO `admin_users` (`username`, `email`, `password`, `full_name`, `role`) VALUES
('admin', 'admin@aurora-booking.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Administrator', 'admin');

-- Create indexes for better performance
CREATE INDEX idx_bookings_dates ON bookings(check_in_date, check_out_date);
CREATE INDEX idx_bookings_status ON bookings(booking_status);
CREATE INDEX idx_rooms_type ON rooms(room_type);
CREATE INDEX idx_gallery_category ON gallery(category);
CREATE INDEX idx_contacts_status ON contacts(status);