<?php
$page_title = "Phòng Tiêu Chuẩn - Aurora Hotel";
$page_description = "Phòng tiêu chuẩn tại Aurora Hotel với đầy đủ tiện nghi hiện đại, view đẹp và dịch vụ chất lượng cao.";
$page_keywords = "phòng tiêu chuẩn, Aurora Hotel, khách sạn, đặt phòng, tiện nghi";
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:image" content="assets/image/room-standard-garden.jpg">
    <meta property="og:url" content="https://aurorahotel.com/phong-tieu-chuan">
    <meta property="og:type" content="website">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/image/favicon.ico">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <!-- Breadcrumb -->
    <nav class="breadcrumb">
        <div class="container">
            <ol>
                <li><a href="index.php"><i class="fas fa-home"></i> Trang chủ</a></li>
                <li><a href="phong.php">Phòng nghỉ</a></li>
                <li class="active">Phòng Tiêu Chuẩn</li>
            </ol>
        </div>
    </nav>

    <!-- Room Detail Hero -->
    <section class="room-detail-hero">
        <div class="hero-background">
            <img src="assets/image/room-standard-garden.jpg" alt="Phòng Tiêu Chuẩn Aurora Hotel">
            <div class="hero-overlay"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <div class="room-badge">Phòng Tiêu Chuẩn</div>
                <h1>Phòng Tiêu Chuẩn</h1>
                <p>Không gian thoải mái với đầy đủ tiện nghi hiện đại và view vườn xanh mát</p>
                <div class="room-quick-info">
                    <span><i class="fas fa-bed"></i> 1 Giường đôi</span>
                    <span><i class="fas fa-users"></i> 2 Khách</span>
                    <span><i class="fas fa-expand-arrows-alt"></i> 25m²</span>
                    <span><i class="fas fa-tree"></i> View vườn</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Gallery -->
    <section class="room-gallery">
        <div class="container">
            <div class="gallery-grid">
                <div class="main-image">
                    <img src="assets/image/room-standard-garden.jpg" alt="Phòng Tiêu Chuẩn - Hình chính" id="mainImage">
                </div>
                <div class="thumbnail-grid">
                    <img src="assets/image/room-standard-garden.jpg" alt="Phòng Tiêu Chuẩn 1" class="thumbnail active" onclick="changeMainImage(this)">
                    <img src="assets/image/room-deluxe-pool.jpg" alt="Phòng Tiêu Chuẩn 2" class="thumbnail" onclick="changeMainImage(this)">
                    <img src="assets/image/room-suite-ocean.jpg" alt="Phòng Tiêu Chuẩn 3" class="thumbnail" onclick="changeMainImage(this)">
                    <img src="assets/image/room-presidential.jpg" alt="Phòng Tiêu Chuẩn 4" class="thumbnail" onclick="changeMainImage(this)">
                </div>
            </div>
        </div>
    </section>

    <!-- Room Details -->
    <section class="room-details-section">
        <div class="container">
            <div class="room-details-grid">
                <!-- Room Information -->
                <div class="room-info">
                    <div class="info-card">
                        <h2>Thông tin phòng</h2>
                        <div class="room-specs-detail">
                            <div class="spec-item">
                                <i class="fas fa-bed"></i>
                                <div>
                                    <strong>Loại giường</strong>
                                    <span>1 Giường đôi King Size (1.8m x 2m)</span>
                                </div>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-users"></i>
                                <div>
                                    <strong>Sức chứa</strong>
                                    <span>Tối đa 2 người lớn</span>
                                </div>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-expand-arrows-alt"></i>
                                <div>
                                    <strong>Diện tích</strong>
                                    <span>25m² - Không gian thoải mái</span>
                                </div>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-tree"></i>
                                <div>
                                    <strong>Hướng nhìn</strong>
                                    <span>View vườn xanh mát, yên tĩnh</span>
                                </div>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-wifi"></i>
                                <div>
                                    <strong>Internet</strong>
                                    <span>WiFi miễn phí tốc độ cao</span>
                                </div>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-snowflake"></i>
                                <div>
                                    <strong>Điều hòa</strong>
                                    <span>Máy lạnh điều khiển riêng</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="info-card">
                        <h3>Tiện nghi phòng</h3>
                        <div class="amenities-grid">
                            <div class="amenity-category">
                                <h4><i class="fas fa-bed"></i> Phòng ngủ</h4>
                                <ul>
                                    <li>Giường King Size cao cấp</li>
                                    <li>Ga trải giường cotton 100%</li>
                                    <li>Gối đa dạng (mềm/cứng)</li>
                                    <li>Chăn mền chất lượng cao</li>
                                </ul>
                            </div>
                            <div class="amenity-category">
                                <h4><i class="fas fa-bath"></i> Phòng tắm</h4>
                                <ul>
                                    <li>Vòi sen áp lực cao</li>
                                    <li>Bồn tắm thư giãn</li>
                                    <li>Đồ dùng tắm cao cấp</li>
                                    <li>Máy sấy tóc chuyên nghiệp</li>
                                </ul>
                            </div>
                            <div class="amenity-category">
                                <h4><i class="fas fa-tv"></i> Giải trí</h4>
                                <ul>
                                    <li>TV LED 43 inch</li>
                                    <li>Kênh truyền hình quốc tế</li>
                                    <li>Hệ thống âm thanh</li>
                                    <li>WiFi tốc độ cao</li>
                                </ul>
                            </div>
                            <div class="amenity-category">
                                <h4><i class="fas fa-coffee"></i> Tiện ích</h4>
                                <ul>
                                    <li>Minibar đầy đủ</li>
                                    <li>Ấm đun nước điện</li>
                                    <li>Két sắt an toàn</li>
                                    <li>Bàn làm việc</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Booking Card -->
                <div class="booking-sidebar">
                    <div class="booking-card">
                        <div class="price-section">
                            <div class="price-info">
                                <span class="current-price">1.200.000₫</span>
                                <span class="price-period">/đêm</span>
                            </div>
                            <div class="rating-info">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">4.8 (124 đánh giá)</span>
                            </div>
                        </div>

                        <form class="booking-form-detail" action="dat-phong.php" method="POST">
                            <input type="hidden" name="room_type" value="standard">
                            
                            <div class="form-group">
                                <label for="checkin">Ngày nhận phòng</label>
                                <input type="date" id="checkin" name="checkin" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="checkout">Ngày trả phòng</label>
                                <input type="date" id="checkout" name="checkout" required>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="adults">Người lớn</label>
                                    <select id="adults" name="adults" required>
                                        <option value="1">1 người</option>
                                        <option value="2" selected>2 người</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="children">Trẻ em</label>
                                    <select id="children" name="children">
                                        <option value="0" selected>0 trẻ</option>
                                        <option value="1">1 trẻ</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="total-price">
                                <div class="price-breakdown">
                                    <div class="price-item">
                                        <span>1.200.000₫ x <span id="nights">1</span> đêm</span>
                                        <span id="subtotal">1.200.000₫</span>
                                    </div>
                                    <div class="price-item">
                                        <span>Thuế & phí</span>
                                        <span id="taxes">120.000₫</span>
                                    </div>
                                    <div class="price-total">
                                        <span>Tổng cộng</span>
                                        <span id="total">1.320.000₫</span>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn-book-room">
                                <i class="fas fa-calendar-check"></i>
                                Đặt phòng ngay
                            </button>
                        </form>

                        <div class="booking-features">
                            <div class="feature-item">
                                <i class="fas fa-times-circle"></i>
                                <span>Hủy miễn phí trong 24h</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>Đảm bảo giá tốt nhất</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-clock"></i>
                                <span>Xác nhận ngay lập tức</span>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Card -->
                    <div class="contact-card">
                        <h3>Cần hỗ trợ?</h3>
                        <p>Đội ngũ tư vấn của chúng tôi sẵn sàng hỗ trợ bạn 24/7</p>
                        <div class="contact-methods">
                            <a href="tel:+84123456789" class="contact-method">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <strong>Hotline</strong>
                                    <span>+84 123 456 789</span>
                                </div>
                            </a>
                            <a href="mailto:info@aurorahotel.com" class="contact-method">
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <strong>Email</strong>
                                    <span>info@aurorahotel.com</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Policies -->
    <section class="room-policies">
        <div class="container">
            <h2>Chính sách phòng</h2>
            <div class="policies-grid">
                <div class="policy-card">
                    <h3><i class="fas fa-clock"></i> Thời gian</h3>
                    <ul>
                        <li><strong>Nhận phòng:</strong> Từ 14:00</li>
                        <li><strong>Trả phòng:</strong> Trước 12:00</li>
                        <li><strong>Nhận phòng sớm:</strong> Tùy tình trạng phòng</li>
                        <li><strong>Trả phòng muộn:</strong> Phụ thu theo giờ</li>
                    </ul>
                </div>
                <div class="policy-card">
                    <h3><i class="fas fa-ban"></i> Hủy phòng</h3>
                    <ul>
                        <li><strong>Miễn phí:</strong> Hủy trước 24h</li>
                        <li><strong>Hủy muộn:</strong> Phí 50% giá phòng</li>
                        <li><strong>No-show:</strong> Phí 100% giá phòng</li>
                        <li><strong>Thay đổi:</strong> Miễn phí 1 lần</li>
                    </ul>
                </div>
                <div class="policy-card">
                    <h3><i class="fas fa-paw"></i> Thú cưng</h3>
                    <ul>
                        <li><strong>Cho phép:</strong> Thú cưng dưới 10kg</li>
                        <li><strong>Phụ thu:</strong> 200.000₫/đêm</li>
                        <li><strong>Yêu cầu:</strong> Tiêm chủng đầy đủ</li>
                        <li><strong>Khu vực:</strong> Chỉ một số phòng</li>
                    </ul>
                </div>
                <div class="policy-card">
                    <h3><i class="fas fa-smoking-ban"></i> Khác</h3>
                    <ul>
                        <li><strong>Hút thuốc:</strong> Chỉ tại ban công</li>
                        <li><strong>Tiệc tùng:</strong> Không cho phép</li>
                        <li><strong>Khách thăm:</strong> Đến 22:00</li>
                        <li><strong>Trẻ em:</strong> Dưới 6 tuổi miễn phí</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Similar Rooms -->
    <section class="similar-rooms">
        <div class="container">
            <div class="section-header">
                <h2>Phòng tương tự</h2>
                <p>Khám phá các lựa chọn phòng khác phù hợp với bạn</p>
            </div>
            <div class="rooms-grid">
                <div class="room-card">
                    <div class="room-image-container">
                        <img src="assets/image/room-deluxe-pool.jpg" alt="Phòng Deluxe">
                        <div class="room-badge">Phòng Deluxe</div>
                    </div>
                    <div class="room-content">
                        <div class="room-header">
                            <h3>Phòng Deluxe</h3>
                            <div class="room-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">4.9</span>
                            </div>
                        </div>
                        <div class="room-specs">
                            <span><i class="fas fa-bed"></i> 1 Giường đôi</span>
                            <span><i class="fas fa-users"></i> 2-3 Khách</span>
                            <span><i class="fas fa-expand-arrows-alt"></i> 35m²</span>
                        </div>
                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">1.800.000₫</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>
                        <div class="room-actions">
                            <button class="room-details-btn" onclick="location.href='phong-deluxe.php'">Xem chi tiết</button>
                            <button class="room-book-btn">Đặt ngay</button>
                        </div>
                    </div>
                </div>

                <div class="room-card">
                    <div class="room-image-container">
                        <img src="assets/image/room-suite-ocean.jpg" alt="Phòng Suite">
                        <div class="room-badge exclusive">Suite</div>
                    </div>
                    <div class="room-content">
                        <div class="room-header">
                            <h3>Phòng Suite</h3>
                            <div class="room-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">5.0</span>
                            </div>
                        </div>
                        <div class="room-specs">
                            <span><i class="fas fa-bed"></i> 1 Giường King</span>
                            <span><i class="fas fa-users"></i> 2-4 Khách</span>
                            <span><i class="fas fa-expand-arrows-alt"></i> 55m²</span>
                        </div>
                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">3.500.000₫</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>
                        <div class="room-actions">
                            <button class="room-details-btn" onclick="location.href='phong-suite.php'">Xem chi tiết</button>
                            <button class="room-book-btn">Đặt ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- JavaScript -->
    <script src="assets/js/main.js"></script>
    <script>
        // Gallery functionality
        function changeMainImage(thumbnail) {
            const mainImage = document.getElementById('mainImage');
            const thumbnails = document.querySelectorAll('.thumbnail');
            
            // Update main image
            mainImage.src = thumbnail.src;
            mainImage.alt = thumbnail.alt;
            
            // Update active thumbnail
            thumbnails.forEach(thumb => thumb.classList.remove('active'));
            thumbnail.classList.add('active');
        }

        // Booking form calculations
        document.addEventListener('DOMContentLoaded', function() {
            const checkinInput = document.getElementById('checkin');
            const checkoutInput = document.getElementById('checkout');
            const nightsSpan = document.getElementById('nights');
            const subtotalSpan = document.getElementById('subtotal');
            const taxesSpan = document.getElementById('taxes');
            const totalSpan = document.getElementById('total');
            
            const roomPrice = 1200000;
            const taxRate = 0.1;
            
            function calculateTotal() {
                const checkin = new Date(checkinInput.value);
                const checkout = new Date(checkoutInput.value);
                
                if (checkin && checkout && checkout > checkin) {
                    const nights = Math.ceil((checkout - checkin) / (1000 * 60 * 60 * 24));
                    const subtotal = roomPrice * nights;
                    const taxes = subtotal * taxRate;
                    const total = subtotal + taxes;
                    
                    nightsSpan.textContent = nights;
                    subtotalSpan.textContent = subtotal.toLocaleString('vi-VN') + '₫';
                    taxesSpan.textContent = taxes.toLocaleString('vi-VN') + '₫';
                    totalSpan.textContent = total.toLocaleString('vi-VN') + '₫';
                }
            }
            
            checkinInput.addEventListener('change', calculateTotal);
            checkoutInput.addEventListener('change', calculateTotal);
            
            // Set minimum date to today
            const today = new Date().toISOString().split('T')[0];
            checkinInput.min = today;
            checkoutInput.min = today;
            
            // Update checkout min date when checkin changes
            checkinInput.addEventListener('change', function() {
                const checkinDate = new Date(this.value);
                checkinDate.setDate(checkinDate.getDate() + 1);
                checkoutInput.min = checkinDate.toISOString().split('T')[0];
            });
        });
    </script>
</body>
</html>