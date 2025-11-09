<?php
// Thiết lập thông tin trang
$page_title = "Aurora Hotel Plaza - Khách sạn sang trọng";
$page_description = "Trải nghiệm nghỉ dưỡng sang trọng với dịch vụ đẳng cấp quốc tế tại Aurora Hotel Plaza";
$page_keywords = "khách sạn, Aurora Hotel Plaza, nghỉ dưỡng, sang trọng, đặt phòng";
$current_page = "home";
$breadcrumb = [
    ['title' => 'Trang chủ', 'url' => 'index.php', 'active' => true]
];

// Include header
include 'includes/header.php';
?>

<!-- Hero Section -->
<section id="home" class="hero">
    <div class="hero-content">
        <h1>Chào mừng đến với Aurora Hotel Plaza</h1>
        <p>Trải nghiệm nghỉ dưỡng sang trọng với dịch vụ đẳng cấp quốc tế</p>
        <a href="#booking" class="btn-primary">Đặt phòng ngay</a>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- Booking Form -->
<section id="booking" class="booking-section">
    <div class="container">
        <div class="booking-wrapper">
            <header class="booking-header">
                <h2 class="booking-title">Đặt phòng nhanh</h2>
                <p class="booking-subtitle">Chọn ngày, loại phòng và số khách để xem giá tốt nhất</p>
            </header>

            <form class="booking-form" id="quick-booking-form">
                <div class="form-row">
                    <!-- Check-in -->
                    <div class="form-group">
                        <label for="checkin" class="form-label">
                            <i class="far fa-calendar-alt"></i> Ngày nhận phòng
                        </label>
                        <input type="date"
                               id="checkin"
                               name="checkin"
                               class="form-control"
                               min="<?= date('Y-m-d') ?>"
                               required>
                        <small class="form-text">Nhận phòng sau 14:00</small>
                    </div>

                    <!-- Check-out -->
                    <div class="form-group">
                        <label for="checkout" class="form-label">
                            <i class="far fa-calendar-alt"></i> Ngày trả phòng
                        </label>
                        <input type="date"
                               id="checkout"
                               name="checkout"
                               class="form-control"
                               min="<?= date('Y-m-d', strtotime('+1 day')) ?>"
                               required>
                        <small class="form-text">Trả phòng trước 12:00</small>
                    </div>
                </div>

                <div class="form-row">
                    <!-- Guests -->
                    <div class="form-group">
                        <label for="guests" class="form-label">
                            <i class="fas fa-users"></i> Số khách
                        </label>
                        <select id="guests" name="guests" class="form-control" required>
                            <option value="" disabled selected hidden>Chọn số khách</option>
                            <option value="1">1 khách (1 người lớn)</option>
                            <option value="2">2 khách (2 người lớn)</option>
                            <option value="3">3 khách (2 người lớn + 1 trẻ em)</option>
                            <option value="4">4 khách (2 người lớn + 2 trẻ em)</option>
                        </select>
                    </div>

                    <!-- Room type -->
                    <div class="form-group">
                        <label for="room-type" class="form-label">
                            <i class="fas fa-bed"></i> Loại phòng
                        </label>
                        <select id="room-type" name="room-type" class="form-control" required>
                            <option value="" disabled selected hidden>Chọn loại phòng</option>
                            <option value="standard">Phòng Tiêu Chuẩn – 1.200.000 ₫/đêm</option>
                            <option value="deluxe">Phòng Cao Cấp – 2.000.000 ₫/đêm</option>
                            <option value="suite">Phòng Suite – 3.500.000 ₫/đêm</option>
                        </select>
                    </div>
                </div>

                <div class="form-action">
                    <button type="submit" class="btn-booking">
                        <span class="btn-text">Tìm phòng trống</span>
                        <i class="fas fa-search"></i>
                    </button>
                    <p class="booking-note">Giá đã bao gồm thuế & bữa sáng</p>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Rooms Section -->
<section id="rooms" class="rooms-section">
    <div class="container">
        <div class="section-header">
            <h2>Phòng nghỉ</h2>
            <p>Khám phá các loại phòng sang trọng của chúng tôi</p>
        </div>
        <div class="rooms-grid">
            <div class="room-card">
                <div class="room-image">
                    <img src="assets/image/room-standard.jpg" alt="Phòng tiêu chuẩn" onerror="this.src='https://via.placeholder.com/400x300/f0f0f0/666?text=Phòng+Tiêu+Chuẩn'">
                </div>
                <div class="room-info">
                    <h3>Phòng tiêu chuẩn</h3>
                    <p>Phòng nghỉ thoải mái với đầy đủ tiện nghi cơ bản</p>
                    <div class="room-amenities">
                        <span><i class="fas fa-wifi"></i> WiFi miễn phí</span>
                        <span><i class="fas fa-tv"></i> TV LCD</span>
                        <span><i class="fas fa-snowflake"></i> Điều hòa</span>
                    </div>
                    <div class="room-price">
                        <span class="price">1.200.000 VNĐ</span>
                        <span class="per-night">/đêm</span>
                    </div>
                    <a href="#" class="btn-room">Đặt ngay</a>
                </div>
            </div>

            <div class="room-card">
                <div class="room-image">
                    <img src="assets/image/room-deluxe.jpg" alt="Phòng cao cấp" onerror="this.src='https://via.placeholder.com/400x300/f0f0f0/666?text=Phòng+Cao+Cấp'">
                </div>
                <div class="room-info">
                    <h3>Phòng cao cấp</h3>
                    <p>Phòng rộng rãi với view đẹp và tiện nghi cao cấp</p>
                    <div class="room-amenities">
                        <span><i class="fas fa-wifi"></i> WiFi miễn phí</span>
                        <span><i class="fas fa-bath"></i> Bồn tắm</span>
                        <span><i class="fas fa-concierge-bell"></i> Room service</span>
                    </div>
                    <div class="room-price">
                        <span class="price">2.000.000 VNĐ</span>
                        <span class="per-night">/đêm</span>
                    </div>
                    <a href="#" class="btn-room">Đặt ngay</a>
                </div>
            </div>

            <div class="room-card">
                <div class="room-image">
                    <img src="assets/image/room-suite.jpg" alt="Phòng suite" onerror="this.src='https://via.placeholder.com/400x300/f0f0f0/666?text=Phòng+Suite'">
                </div>
                <div class="room-info">
                    <h3>Phòng suite</h3>
                    <p>Phòng hạng sang với không gian riêng biệt và dịch vụ VIP</p>
                    <div class="room-amenities">
                        <span><i class="fas fa-crown"></i> Dịch vụ VIP</span>
                        <span><i class="fas fa-hot-tub"></i> Jacuzzi</span>
                        <span><i class="fas fa-glass-cheers"></i> Minibar</span>
                    </div>
                    <div class="room-price">
                        <span class="price">3.500.000 VNĐ</span>
                        <span class="per-night">/đêm</span>
                    </div>
                    <a href="#" class="btn-room">Đặt ngay</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services-section">
    <div class="container">
        <div class="section-header">
            <h2>Dịch vụ</h2>
            <p>Khám phá các dịch vụ đẳng cấp của chúng tôi</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3>Nhà hàng</h3>
                <p>Thưởng thức ẩm thực đẳng cấp với đầu bếp chuyên nghiệp</p>
                <a href="dich-vu.php#restaurant" class="service-link">Xem chi tiết</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-spa"></i>
                </div>
                <h3>Spa & Wellness</h3>
                <p>Thư giãn và tái tạo năng lượng với các liệu pháp spa cao cấp</p>
                <a href="dich-vu.php#spa" class="service-link">Xem chi tiết</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-swimming-pool"></i>
                </div>
                <h3>Hồ bơi vô cực</h3>
                <p>Tận hưởng không gian thư giãn với hồ bơi vô cực tuyệt đẹp</p>
                <a href="dich-vu.php#pool" class="service-link">Xem chi tiết</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-dumbbell"></i>
                </div>
                <h3>Phòng gym</h3>
                <p>Duy trì sức khỏe với thiết bị tập luyện hiện đại</p>
                <a href="dich-vu.php#fitness" class="service-link">Xem chi tiết</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Hội nghị & Sự kiện</h3>
                <p>Tổ chức sự kiện chuyên nghiệp với không gian sang trọng</p>
                <a href="dich-vu.php#conference" class="service-link">Xem chi tiết</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-concierge-bell"></i>
                </div>
                <h3>Dịch vụ concierge</h3>
                <p>Hỗ trợ 24/7 cho mọi nhu cầu của quý khách</p>
                <a href="dich-vu.php#concierge" class="service-link">Xem chi tiết</a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2>Về Aurora Hotel Plaza</h2>
                <p>Aurora Hotel Plaza là biểu tượng của sự sang trọng và đẳng cấp, mang đến trải nghiệm nghỉ dưỡng không thể nào quên. Với hơn 20 năm kinh nghiệm trong ngành khách sạn, chúng tôi cam kết mang đến dịch vụ tốt nhất cho quý khách.</p>
                <div class="about-stats">
                    <div class="stat-item">
                        <span class="stat-number">200+</span>
                        <span class="stat-label">Phòng nghỉ</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Nhân viên</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">10+</span>
                        <span class="stat-label">Năm kinh nghiệm</span>
                    </div>
                </div>
                <a href="gioi-thieu.php" class="btn-secondary">Tìm hiểu thêm</a>
            </div>
            <div class="about-image">
                <img src="assets/image/about-hotel.jpg" alt="Aurora Hotel Plaza" onerror="this.src='https://via.placeholder.com/600x400/f0f0f0/666?text=Aurora+Hotel'">
            </div>
        </div>
    </div>
</section>

<!-- Gallery Preview -->
<section class="gallery-preview">
    <div class="container">
        <div class="section-header">
            <h2>Thư viện ảnh</h2>
            <p>Khám phá vẻ đẹp của Aurora Hotel Plaza</p>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="assets/image/gallery-1.jpg" alt="Gallery 1" onerror="this.src='https://via.placeholder.com/300x200/f0f0f0/666?text=Gallery+1'">
            </div>
            <div class="gallery-item">
                <img src="assets/image/gallery-2.jpg" alt="Gallery 2" onerror="this.src='https://via.placeholder.com/300x200/f0f0f0/666?text=Gallery+2'">
            </div>
            <div class="gallery-item">
                <img src="assets/image/gallery-3.jpg" alt="Gallery 3" onerror="this.src='https://via.placeholder.com/300x200/f0f0f0/666?text=Gallery+3'">
            </div>
            <div class="gallery-item">
                <img src="assets/image/gallery-4.jpg" alt="Gallery 4" onerror="this.src='https://via.placeholder.com/300x200/f0f0f0/666?text=Gallery+4'">
            </div>
        </div>
        <div class="gallery-cta">
            <a href="thu-vien-anh.php" class="btn-primary">Xem tất cả ảnh</a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="section-header">
            <h2>Liên hệ</h2>
            <p>Chúng tôi luôn sẵn sàng hỗ trợ quý khách</p>
        </div>
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h4>Địa chỉ</h4>
                        <p>123 Đường ABC, Quận 1, TP.HCM</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h4>Điện thoại</h4>
                        <p>+84 28 1234 5678</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p>info@aurorahotel.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <h4>Giờ làm việc</h4>
                        <p>24/7 - Phục vụ quý khách</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form id="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" placeholder="Họ và tên" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="tel" placeholder="Số điện thoại" required>
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Tin nhắn" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn-primary">Gửi tin nhắn</button>
                </form>
            </div>
        </div>
        <div class="contact-cta">
            <a href="lien-he.php" class="btn-secondary">Xem thông tin liên hệ chi tiết</a>
        </div>
    </div>
</section>

<?php
// Include footer
include 'includes/footer.php';
?>