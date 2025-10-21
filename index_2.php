<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Hotel - Khách sạn sang trọng</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-logo">
                    <h1>Aurora Hotel</h1>
                </div>
                <ul class="nav-menu">
                    <li><a href="#home">Trang chủ</a></li>
                    <li><a href="#rooms">Phòng</a></li>
                    <li><a href="#services">Dịch vụ</a></li>
                    <li><a href="#gallery">Thư viện ảnh</a></li>
                    <li><a href="#about">Giới thiệu</a></li>
                    <li><a href="#contact">Liên hệ</a></li>
                </ul>
                <div class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Chào mừng đến với Aurora Hotel</h1>
            <p>Trải nghiệm nghỉ dưỡng sang trọng với dịch vụ đẳng cấp quốc tế</p>
            <a href="#booking" class="btn-primary">Đặt phòng ngay</a>
        </div>
        <div class="hero-overlay"></div>
    </section>

    <!-- Booking Form -->
    <section id="booking" class="booking-section">
        <div class="container">
            <div class="booking-form">
                <h3>Đặt phòng</h3>
                <form class="booking-form-grid">
                    <div class="form-group">
                        <label>Ngày nhận phòng</label>
                        <input type="date" id="checkin" required>
                    </div>
                    <div class="form-group">
                        <label>Ngày trả phòng</label>
                        <input type="date" id="checkout" required>
                    </div>
                    <div class="form-group">
                        <label>Số khách</label>
                        <select id="guests">
                            <option value="1">1 khách</option>
                            <option value="2">2 khách</option>
                            <option value="3">3 khách</option>
                            <option value="4">4 khách</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Loại phòng</label>
                        <select id="room-type">
                            <option value="standard">Phòng tiêu chuẩn</option>
                            <option value="deluxe">Phòng cao cấp</option>
                            <option value="suite">Phòng suite</option>
                        </select>
                    </div>
                    <button type="submit" class="btn-booking">Tìm phòng</button>
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
                <p>Trải nghiệm các dịch vụ đẳng cấp tại Aurora Hotel</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Nhà hàng</h3>
                    <p>Thưởng thức ẩm thực đa dạng từ Á đến Âu với đầu bếp chuyên nghiệp</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3>Spa & Wellness</h3>
                    <p>Thư giãn và tái tạo năng lượng với các liệu pháp spa cao cấp</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-swimming-pool"></i>
                    </div>
                    <h3>Hồ bơi</h3>
                    <p>Hồ bơi ngoài trời với view tuyệt đẹp, mở cửa 24/7</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h3>Phòng gym</h3>
                    <p>Phòng tập gym hiện đại với đầy đủ thiết bị tập luyện</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Hội nghị</h3>
                    <p>Phòng hội nghị chuyên nghiệp cho các sự kiện doanh nghiệp</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3>Đưa đón sân bay</h3>
                    <p>Dịch vụ đưa đón sân bay 24/7 với xe sang trọng</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Về Aurora Hotel</h2>
                    <p>Aurora Hotel là điểm đến lý tưởng cho những ai tìm kiếm sự sang trọng và đẳng cấp. Với hơn 20 năm kinh nghiệm trong ngành khách sạn, chúng tôi cam kết mang đến cho quý khách những trải nghiệm nghỉ dưỡng không thể nào quên.</p>
                    <p>Tọa lạc tại vị trí đắc địa, Aurora Hotel sở hữu 200 phòng nghỉ được thiết kế tinh tế, cùng với các tiện ích hiện đại và dịch vụ chăm sóc khách hàng tận tâm.</p>
                    <div class="about-stats">
                        <div class="stat">
                            <h3>200+</h3>
                            <p>Phòng nghỉ</p>
                        </div>
                        <div class="stat">
                            <h3>20+</h3>
                            <p>Năm kinh nghiệm</p>
                        </div>
                        <div class="stat">
                            <h3>50K+</h3>
                            <p>Khách hàng hài lòng</p>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <img src="assets/image/hotel-exterior.jpg" alt="Aurora Hotel" onerror="this.src='https://via.placeholder.com/600x400/f0f0f0/666?text=Aurora+Hotel'">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="section-header">
                <h2>Liên hệ</h2>
                <p>Hãy liên hệ với chúng tôi để được tư vấn và hỗ trợ</p>
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
                </div>
                <div class="contact-form">
                    <form>
                        <div class="form-row">
                            <input type="text" placeholder="Họ và tên" required>
                            <input type="email" placeholder="Email" required>
                        </div>
                        <input type="text" placeholder="Tiêu đề" required>
                        <textarea placeholder="Nội dung tin nhắn" rows="5" required></textarea>
                        <button type="submit" class="btn-primary">Gửi tin nhắn</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Aurora Hotel</h3>
                    <p>Khách sạn sang trọng với dịch vụ đẳng cấp quốc tế</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Liên kết nhanh</h4>
                    <ul>
                        <li><a href="#rooms">Phòng nghỉ</a></li>
                        <li><a href="#services">Dịch vụ</a></li>
                        <li><a href="#about">Giới thiệu</a></li>
                        <li><a href="#contact">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Dịch vụ</h4>
                    <ul>
                        <li><a href="#">Nhà hàng</a></li>
                        <li><a href="#">Spa & Wellness</a></li>
                        <li><a href="#">Hội nghị</a></li>
                        <li><a href="#">Đưa đón sân bay</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Thông tin liên hệ</h4>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Đường ABC, Quận 1, TP.HCM</p>
                    <p><i class="fas fa-phone"></i> +84 28 1234 5678</p>
                    <p><i class="fas fa-envelope"></i> info@aurorahotel.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Aurora Hotel. Tất cả quyền được bảo lưu.</p>
            </div>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>
</html>