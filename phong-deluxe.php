<?php
$page_title = "Phòng Deluxe - Aurora Hotel";
$page_description = "Phòng Deluxe tại Aurora Hotel với không gian rộng rãi, view hồ bơi đẹp và các tiện nghi cao cấp.";
$page_keywords = "phòng deluxe, Aurora Hotel, khách sạn cao cấp, đặt phòng, view hồ bơi";
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
    <meta property="og:image" content="assets/image/room-deluxe-pool.jpg">
    <meta property="og:url" content="https://aurorahotel.com/phong-deluxe">
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
                <li class="active">Phòng Deluxe</li>
            </ol>
        </div>
    </nav>

    <!-- Room Detail Hero -->
    <section class="room-detail-hero">
        <div class="hero-background">
            <img src="assets/image/room-deluxe-pool.jpg" alt="Phòng Deluxe Aurora Hotel">
            <div class="hero-overlay"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <div class="room-badge featured">Phòng Deluxe</div>
                <h1>Phòng Deluxe</h1>
                <p>Không gian sang trọng với view hồ bơi tuyệt đẹp và đầy đủ tiện nghi cao cấp</p>
                <div class="room-quick-info">
                    <span><i class="fas fa-bed"></i> 1 Giường King</span>
                    <span><i class="fas fa-users"></i> 2-3 Khách</span>
                    <span><i class="fas fa-expand-arrows-alt"></i> 35m²</span>
                    <span><i class="fas fa-swimming-pool"></i> View hồ bơi</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Gallery -->
    <section class="room-gallery">
        <div class="container">
            <div class="gallery-grid">
                <div class="main-image">
                    <img src="assets/image/room-deluxe-pool.jpg" alt="Phòng Deluxe - Hình chính" id="mainImage">
                </div>
                <div class="thumbnail-grid">
                    <img src="assets/image/room-deluxe-pool.jpg" alt="Phòng Deluxe 1" class="thumbnail active" onclick="changeMainImage(this)">
                    <img src="assets/image/room-suite-ocean.jpg" alt="Phòng Deluxe 2" class="thumbnail" onclick="changeMainImage(this)">
                    <img src="assets/image/room-presidential.jpg" alt="Phòng Deluxe 3" class="thumbnail" onclick="changeMainImage(this)">
                    <img src="assets/image/room-standard-garden.jpg" alt="Phòng Deluxe 4" class="thumbnail" onclick="changeMainImage(this)">
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
                                    <span>1 Giường King Size cao cấp (2m x 2.2m)</span>
                                </div>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-users"></i>
                                <div>
                                    <strong>Sức chứa</strong>
                                    <span>Tối đa 3 người (2 người lớn + 1 trẻ em)</span>
                                </div>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-expand-arrows-alt"></i>
                                <div>
                                    <strong>Diện tích</strong>
                                    <span>35m² - Không gian rộng rãi, thoải mái</span>
                                </div>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-swimming-pool"></i>
                                <div>
                                    <strong>Hướng nhìn</strong>
                                    <span>View hồ bơi và khu vườn nhiệt đới</span>
                                </div>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-couch"></i>
                                <div>
                                    <strong>Khu vực nghỉ</strong>
                                    <span>Sofa thư giãn và bàn làm việc riêng</span>
                                </div>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-door-open"></i>
                                <div>
                                    <strong>Ban công</strong>
                                    <span>Ban công riêng với ghế thư giãn</span>
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
                                    <li>Ga trải giường lụa tơ tằm</li>
                                    <li>Gối memory foam cao cấp</li>
                                    <li>Chăn mền goose down</li>
                                    <li>Rèm cửa chống ánh sáng</li>
                                </ul>
                            </div>
                            <div class="amenity-category">
                                <h4><i class="fas fa-bath"></i> Phòng tắm</h4>
                                <ul>
                                    <li>Vòi sen rainfall cao cấp</li>
                                    <li>Bồn tắm Jacuzzi</li>
                                    <li>Đồ dùng tắm Molton Brown</li>
                                    <li>Máy sấy tóc Dyson</li>
                                    <li>Áo choàng tắm cotton</li>
                                </ul>
                            </div>
                            <div class="amenity-category">
                                <h4><i class="fas fa-tv"></i> Giải trí</h4>
                                <ul>
                                    <li>Smart TV 55 inch 4K</li>
                                    <li>Netflix, YouTube Premium</li>
                                    <li>Hệ thống âm thanh Bose</li>
                                    <li>WiFi tốc độ 100Mbps</li>
                                    <li>Máy chơi game PlayStation</li>
                                </ul>
                            </div>
                            <div class="amenity-category">
                                <h4><i class="fas fa-coffee"></i> Tiện ích</h4>
                                <ul>
                                    <li>Minibar premium đầy đủ</li>
                                    <li>Máy pha cà phê Nespresso</li>
                                    <li>Két sắt điện tử</li>
                                    <li>Bàn làm việc executive</li>
                                    <li>Máy lạnh thông minh</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="info-card">
                        <h3>Dịch vụ đặc biệt</h3>
                        <div class="special-services">
                            <div class="service-item">
                                <i class="fas fa-concierge-bell"></i>
                                <div>
                                    <strong>Butler Service</strong>
                                    <span>Dịch vụ quản gia cá nhân 24/7</span>
                                </div>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-utensils"></i>
                                <div>
                                    <strong>Room Service</strong>
                                    <span>Phục vụ tại phòng 24/7 với thực đơn đa dạng</span>
                                </div>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-spa"></i>
                                <div>
                                    <strong>In-room Spa</strong>
                                    <span>Dịch vụ spa tại phòng theo yêu cầu</span>
                                </div>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-car"></i>
                                <div>
                                    <strong>Airport Transfer</strong>
                                    <span>Đưa đón sân bay miễn phí</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Booking Card -->
                <div class="booking-sidebar">
                    <div class="booking-card">
                        <div class="price-section">
                            <div class="price-info">
                                <span class="original-price">2.200.000₫</span>
                                <span class="current-price">1.800.000₫</span>
                                <span class="price-period">/đêm</span>
                            </div>
                            <div class="discount-badge">Giảm 18%</div>
                            <div class="rating-info">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">4.9 (89 đánh giá)</span>
                            </div>
                        </div>

                        <form class="booking-form-detail" action="dat-phong.php" method="POST">
                            <input type="hidden" name="room_type" value="deluxe">
                            
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
                                        <option value="3">3 người</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="children">Trẻ em</label>
                                    <select id="children" name="children">
                                        <option value="0" selected>0 trẻ</option>
                                        <option value="1">1 trẻ</option>
                                        <option value="2">2 trẻ</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="total-price">
                                <div class="price-breakdown">
                                    <div class="price-item">
                                        <span>1.800.000₫ x <span id="nights">1</span> đêm</span>
                                        <span id="subtotal">1.800.000₫</span>
                                    </div>
                                    <div class="price-item discount">
                                        <span>Giảm giá early bird</span>
                                        <span id="discount">-180.000₫</span>
                                    </div>
                                    <div class="price-item">
                                        <span>Thuế & phí</span>
                                        <span id="taxes">162.000₫</span>
                                    </div>
                                    <div class="price-total">
                                        <span>Tổng cộng</span>
                                        <span id="total">1.782.000₫</span>
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
                                <span>Hủy miễn phí trong 48h</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>Đảm bảo giá tốt nhất</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-clock"></i>
                                <span>Xác nhận ngay lập tức</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-gift"></i>
                                <span>Bao gồm bữa sáng</span>
                            </div>
                        </div>
                    </div>

                    <!-- Special Offers -->
                    <div class="offers-card">
                        <h3>Ưu đãi đặc biệt</h3>
                        <div class="offer-item">
                            <div class="offer-icon">
                                <i class="fas fa-percentage"></i>
                            </div>
                            <div class="offer-content">
                                <strong>Giảm 20% cho lưu trú 3 đêm</strong>
                                <span>Áp dụng đến hết tháng này</span>
                            </div>
                        </div>
                        <div class="offer-item">
                            <div class="offer-icon">
                                <i class="fas fa-spa"></i>
                            </div>
                            <div class="offer-content">
                                <strong>Miễn phí spa 60 phút</strong>
                                <span>Cho đặt phòng từ 2 đêm</span>
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
                        <li><strong>Nhận phòng sớm:</strong> Miễn phí từ 12:00</li>
                        <li><strong>Trả phòng muộn:</strong> Miễn phí đến 14:00</li>
                    </ul>
                </div>
                <div class="policy-card">
                    <h3><i class="fas fa-ban"></i> Hủy phòng</h3>
                    <ul>
                        <li><strong>Miễn phí:</strong> Hủy trước 48h</li>
                        <li><strong>Hủy muộn:</strong> Phí 30% giá phòng</li>
                        <li><strong>No-show:</strong> Phí 100% giá phòng</li>
                        <li><strong>Thay đổi:</strong> Miễn phí không giới hạn</li>
                    </ul>
                </div>
                <div class="policy-card">
                    <h3><i class="fas fa-paw"></i> Thú cưng</h3>
                    <ul>
                        <li><strong>Cho phép:</strong> Thú cưng dưới 15kg</li>
                        <li><strong>Phụ thu:</strong> Miễn phí</li>
                        <li><strong>Yêu cầu:</strong> Tiêm chủng đầy đủ</li>
                        <li><strong>Dịch vụ:</strong> Pet sitting có sẵn</li>
                    </ul>
                </div>
                <div class="policy-card">
                    <h3><i class="fas fa-utensils"></i> Bữa ăn</h3>
                    <ul>
                        <li><strong>Bữa sáng:</strong> Buffet miễn phí</li>
                        <li><strong>Room service:</strong> 24/7</li>
                        <li><strong>Minibar:</strong> Bổ sung hàng ngày</li>
                        <li><strong>Đặc biệt:</strong> Menu dành cho trẻ em</li>
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
                        <img src="assets/image/room-standard-garden.jpg" alt="Phòng Tiêu Chuẩn">
                        <div class="room-badge">Phòng Tiêu Chuẩn</div>
                    </div>
                    <div class="room-content">
                        <div class="room-header">
                            <h3>Phòng Tiêu Chuẩn</h3>
                            <div class="room-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">4.8</span>
                            </div>
                        </div>
                        <div class="room-specs">
                            <span><i class="fas fa-bed"></i> 1 Giường đôi</span>
                            <span><i class="fas fa-users"></i> 2 Khách</span>
                            <span><i class="fas fa-expand-arrows-alt"></i> 25m²</span>
                        </div>
                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">1.200.000₫</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>
                        <div class="room-actions">
                            <button class="room-details-btn" onclick="location.href='phong-tieu-chuan.php'">Xem chi tiết</button>
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
            const discountSpan = document.getElementById('discount');
            const taxesSpan = document.getElementById('taxes');
            const totalSpan = document.getElementById('total');
            
            const roomPrice = 1800000;
            const discountRate = 0.1;
            const taxRate = 0.09;
            
            function calculateTotal() {
                const checkin = new Date(checkinInput.value);
                const checkout = new Date(checkoutInput.value);
                
                if (checkin && checkout && checkout > checkin) {
                    const nights = Math.ceil((checkout - checkin) / (1000 * 60 * 60 * 24));
                    const subtotal = roomPrice * nights;
                    const discount = subtotal * discountRate;
                    const afterDiscount = subtotal - discount;
                    const taxes = afterDiscount * taxRate;
                    const total = afterDiscount + taxes;
                    
                    nightsSpan.textContent = nights;
                    subtotalSpan.textContent = subtotal.toLocaleString('vi-VN') + '₫';
                    discountSpan.textContent = '-' + discount.toLocaleString('vi-VN') + '₫';
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