<?php
$page_title = "Phòng Suite - Aurora Hotel";
$page_description = "Phòng Suite sang trọng tại Aurora Hotel với không gian rộng rãi, view biển tuyệt đẹp và các tiện nghi đẳng cấp 5 sao.";
$page_keywords = "phòng suite, Aurora Hotel, khách sạn 5 sao, luxury suite, view biển";
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
    <meta property="og:image" content="assets/image/room-suite-ocean.jpg">
    <meta property="og:url" content="https://aurorahotel.com/phong-suite">
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
                <li class="active">Phòng Suite</li>
            </ol>
        </div>
    </nav>

    <!-- Room Detail Hero -->
    <section class="room-detail-hero">
        <div class="hero-background">
            <img src="assets/image/room-suite-ocean.jpg" alt="Phòng Suite Aurora Hotel">
            <div class="hero-overlay"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <div class="room-badge exclusive">Suite Cao Cấp</div>
                <h1>Phòng Suite</h1>
                <p>Trải nghiệm đẳng cấp với không gian sang trọng, view biển tuyệt đẹp và dịch vụ butler riêng</p>
                <div class="room-quick-info">
                    <span><i class="fas fa-bed"></i> 1 Giường King + Sofa</span>
                    <span><i class="fas fa-users"></i> 2-4 Khách</span>
                    <span><i class="fas fa-expand-arrows-alt"></i> 55m²</span>
                    <span><i class="fas fa-water"></i> View biển</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Gallery -->
    <section class="room-gallery">
        <div class="container">
            <div class="gallery-grid">
                <div class="main-image">
                    <img src="assets/image/room-suite-ocean.jpg" alt="Phòng Suite - Hình chính" id="mainImage">
                </div>
                <div class="thumbnail-grid">
                    <img src="assets/image/room-suite-ocean.jpg" alt="Phòng Suite 1" class="thumbnail active" onclick="changeMainImage(this)">
                    <img src="assets/image/room-presidential.jpg" alt="Phòng Suite 2" class="thumbnail" onclick="changeMainImage(this)">
                    <img src="assets/image/room-deluxe-pool.jpg" alt="Phòng Suite 3" class="thumbnail" onclick="changeMainImage(this)">
                    <img src="assets/image/room-standard-garden.jpg" alt="Phòng Suite 4" class="thumbnail" onclick="changeMainImage(this)">
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
                                    <span>1 Giường King Size + Sofa bed (2.2m x 2.4m)</span>
                                </div>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-users"></i>
                                <div>
                                    <strong>Sức chứa</strong>
                                    <span>Tối đa 4 người (2 người lớn + 2 trẻ em)</span>
                                </div>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-expand-arrows-alt"></i>
                                <div>
                                    <strong>Diện tích</strong>
                                    <span>55m² - Không gian suite sang trọng</span>
                                </div>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-water"></i>
                                <div>
                                    <strong>Hướng nhìn</strong>
                                    <span>View biển panoramic tuyệt đẹp</span>
                                </div>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-home"></i>
                                <div>
                                    <strong>Phòng khách</strong>
                                    <span>Khu vực tiếp khách riêng biệt</span>
                                </div>
                            </div>
                            <div class="spec-item">
                                <i class="fas fa-door-open"></i>
                                <div>
                                    <strong>Ban công</strong>
                                    <span>Ban công rộng với bàn ghế thư giãn</span>
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
                                    <li>Giường King Size Tempur-Pedic</li>
                                    <li>Ga trải giường Egyptian cotton</li>
                                    <li>Gối memory foam cao cấp</li>
                                    <li>Chăn mền cashmere</li>
                                    <li>Rèm cửa tự động thông minh</li>
                                    <li>Hệ thống chiếu sáng điều chỉnh</li>
                                </ul>
                            </div>
                            <div class="amenity-category">
                                <h4><i class="fas fa-bath"></i> Phòng tắm</h4>
                                <ul>
                                    <li>Vòi sen rainfall + Steam shower</li>
                                    <li>Bồn tắm Jacuzzi view biển</li>
                                    <li>Đồ dùng tắm L'Occitane</li>
                                    <li>Máy sấy tóc Dyson Supersonic</li>
                                    <li>Áo choàng tắm silk</li>
                                    <li>Sàn sưởi ấm</li>
                                </ul>
                            </div>
                            <div class="amenity-category">
                                <h4><i class="fas fa-tv"></i> Giải trí</h4>
                                <ul>
                                    <li>Smart TV 65 inch 8K</li>
                                    <li>Hệ thống âm thanh Bose surround</li>
                                    <li>Netflix, Disney+, HBO Max</li>
                                    <li>WiFi tốc độ 200Mbps</li>
                                    <li>PlayStation 5 + Xbox Series X</li>
                                    <li>Máy chiếu mini 4K</li>
                                </ul>
                            </div>
                            <div class="amenity-category">
                                <h4><i class="fas fa-coffee"></i> Tiện ích</h4>
                                <ul>
                                    <li>Minibar premium Champagne</li>
                                    <li>Máy pha cà phê La Marzocco</li>
                                    <li>Két sắt thông minh</li>
                                    <li>Bàn làm việc executive</li>
                                    <li>Máy lạnh multi-zone</li>
                                    <li>Hệ thống IoT thông minh</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="info-card">
                        <h3>Dịch vụ VIP</h3>
                        <div class="special-services">
                            <div class="service-item">
                                <i class="fas fa-user-tie"></i>
                                <div>
                                    <strong>Personal Butler</strong>
                                    <span>Quản gia riêng phục vụ 24/7</span>
                                </div>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-champagne-glasses"></i>
                                <div>
                                    <strong>Welcome Champagne</strong>
                                    <span>Champagne Dom Pérignon chào mừng</span>
                                </div>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-utensils"></i>
                                <div>
                                    <strong>Private Chef</strong>
                                    <span>Đầu bếp riêng theo yêu cầu</span>
                                </div>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-helicopter"></i>
                                <div>
                                    <strong>Helicopter Transfer</strong>
                                    <span>Đưa đón bằng trực thăng</span>
                                </div>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-spa"></i>
                                <div>
                                    <strong>Private Spa Suite</strong>
                                    <span>Phòng spa riêng với therapist chuyên nghiệp</span>
                                </div>
                            </div>
                            <div class="service-item">
                                <i class="fas fa-car"></i>
                                <div>
                                    <strong>Luxury Car Service</strong>
                                    <span>Xe Rolls-Royce đưa đón miễn phí</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="info-card">
                        <h3>Đặc quyền Suite</h3>
                        <div class="suite-privileges">
                            <div class="privilege-item">
                                <i class="fas fa-crown"></i>
                                <span>Ưu tiên check-in/check-out</span>
                            </div>
                            <div class="privilege-item">
                                <i class="fas fa-cocktail"></i>
                                <span>Truy cập Executive Lounge</span>
                            </div>
                            <div class="privilege-item">
                                <i class="fas fa-utensils"></i>
                                <span>Bữa sáng tại phòng miễn phí</span>
                            </div>
                            <div class="privilege-item">
                                <i class="fas fa-wifi"></i>
                                <span>WiFi premium tốc độ cao</span>
                            </div>
                            <div class="privilege-item">
                                <i class="fas fa-newspaper"></i>
                                <span>Báo quốc tế hàng ngày</span>
                            </div>
                            <div class="privilege-item">
                                <i class="fas fa-tshirt"></i>
                                <span>Dịch vụ giặt ủi express</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Booking Card -->
                <div class="booking-sidebar">
                    <div class="booking-card suite-booking">
                        <div class="price-section">
                            <div class="price-info">
                                <span class="original-price">4.200.000₫</span>
                                <span class="current-price">3.500.000₫</span>
                                <span class="price-period">/đêm</span>
                            </div>
                            <div class="discount-badge">Giảm 17%</div>
                            <div class="rating-info">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">5.0 (45 đánh giá)</span>
                            </div>
                        </div>

                        <form class="booking-form-detail" action="dat-phong.php" method="POST">
                            <input type="hidden" name="room_type" value="suite">
                            
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
                                        <option value="4">4 người</option>
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
                                        <span>3.500.000₫ x <span id="nights">1</span> đêm</span>
                                        <span id="subtotal">3.500.000₫</span>
                                    </div>
                                    <div class="price-item discount">
                                        <span>Giảm giá suite package</span>
                                        <span id="discount">-350.000₫</span>
                                    </div>
                                    <div class="price-item">
                                        <span>Thuế & phí</span>
                                        <span id="taxes">283.500₫</span>
                                    </div>
                                    <div class="price-item bonus">
                                        <span>Bao gồm: Bữa sáng + Spa + Transfer</span>
                                        <span class="text-success">Miễn phí</span>
                                    </div>
                                    <div class="price-total">
                                        <span>Tổng cộng</span>
                                        <span id="total">3.433.500₫</span>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn-book-room suite-btn">
                                <i class="fas fa-crown"></i>
                                Đặt Suite ngay
                            </button>
                        </form>

                        <div class="booking-features">
                            <div class="feature-item">
                                <i class="fas fa-times-circle"></i>
                                <span>Hủy miễn phí trong 72h</span>
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
                                <span>Bao gồm tất cả dịch vụ</span>
                            </div>
                        </div>
                    </div>

                    <!-- VIP Services -->
                    <div class="vip-services-card">
                        <h3>Dịch vụ VIP bao gồm</h3>
                        <div class="vip-service-list">
                            <div class="vip-service">
                                <i class="fas fa-utensils"></i>
                                <span>Bữa sáng tại phòng</span>
                            </div>
                            <div class="vip-service">
                                <i class="fas fa-spa"></i>
                                <span>Spa treatment 90 phút</span>
                            </div>
                            <div class="vip-service">
                                <i class="fas fa-car"></i>
                                <span>Đưa đón sân bay Rolls-Royce</span>
                            </div>
                            <div class="vip-service">
                                <i class="fas fa-champagne-glasses"></i>
                                <span>Champagne chào mừng</span>
                            </div>
                            <div class="vip-service">
                                <i class="fas fa-user-tie"></i>
                                <span>Butler service 24/7</span>
                            </div>
                            <div class="vip-service">
                                <i class="fas fa-cocktail"></i>
                                <span>Executive Lounge access</span>
                            </div>
                        </div>
                        <div class="vip-value">
                            <span>Tổng giá trị: <strong>2.500.000₫</strong></span>
                            <span class="included">Đã bao gồm</span>
                        </div>
                    </div>

                    <!-- Contact Card -->
                    <div class="contact-card">
                        <h3>Suite Concierge</h3>
                        <p>Đội ngũ concierge chuyên biệt phục vụ khách Suite 24/7</p>
                        <div class="contact-methods">
                            <a href="tel:+84123456789" class="contact-method">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <strong>Suite Hotline</strong>
                                    <span>+84 123 456 789</span>
                                </div>
                            </a>
                            <a href="mailto:suite@aurorahotel.com" class="contact-method">
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <strong>Suite Email</strong>
                                    <span>suite@aurorahotel.com</span>
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
            <h2>Chính sách Suite</h2>
            <div class="policies-grid">
                <div class="policy-card">
                    <h3><i class="fas fa-clock"></i> Thời gian</h3>
                    <ul>
                        <li><strong>Nhận phòng:</strong> Bất kỳ lúc nào</li>
                        <li><strong>Trả phòng:</strong> Linh hoạt đến 18:00</li>
                        <li><strong>Nhận phòng sớm:</strong> Miễn phí</li>
                        <li><strong>Trả phòng muộn:</strong> Miễn phí đến 18:00</li>
                    </ul>
                </div>
                <div class="policy-card">
                    <h3><i class="fas fa-ban"></i> Hủy phòng</h3>
                    <ul>
                        <li><strong>Miễn phí:</strong> Hủy trước 72h</li>
                        <li><strong>Hủy muộn:</strong> Phí 20% giá phòng</li>
                        <li><strong>No-show:</strong> Phí 50% giá phòng</li>
                        <li><strong>Thay đổi:</strong> Miễn phí không giới hạn</li>
                    </ul>
                </div>
                <div class="policy-card">
                    <h3><i class="fas fa-paw"></i> Thú cưng</h3>
                    <ul>
                        <li><strong>Cho phép:</strong> Mọi loại thú cưng</li>
                        <li><strong>Phụ thu:</strong> Miễn phí</li>
                        <li><strong>Dịch vụ:</strong> Pet spa & grooming</li>
                        <li><strong>Đặc biệt:</strong> Pet butler service</li>
                    </ul>
                </div>
                <div class="policy-card">
                    <h3><i class="fas fa-crown"></i> Đặc quyền</h3>
                    <ul>
                        <li><strong>Ưu tiên:</strong> Mọi dịch vụ khách sạn</li>
                        <li><strong>Miễn phí:</strong> Tất cả tiện ích resort</li>
                        <li><strong>Đặc biệt:</strong> Yacht charter giảm 50%</li>
                        <li><strong>Loyalty:</strong> Tích điểm gấp đôi</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Similar Rooms -->
    <section class="similar-rooms">
        <div class="container">
            <div class="section-header">
                <h2>Phòng khác</h2>
                <p>Khám phá các lựa chọn phòng khác của chúng tôi</p>
            </div>
            <div class="rooms-grid">
                <div class="room-card">
                    <div class="room-image-container">
                        <img src="assets/image/room-presidential.jpg" alt="Presidential Suite">
                        <div class="room-badge exclusive">Presidential</div>
                    </div>
                    <div class="room-content">
                        <div class="room-header">
                            <h3>Presidential Suite</h3>
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
                            <span><i class="fas fa-bed"></i> 2 Phòng ngủ</span>
                            <span><i class="fas fa-users"></i> 6 Khách</span>
                            <span><i class="fas fa-expand-arrows-alt"></i> 120m²</span>
                        </div>
                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">8.500.000₫</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>
                        <div class="room-actions">
                            <button class="room-details-btn">Xem chi tiết</button>
                            <button class="room-book-btn">Đặt ngay</button>
                        </div>
                    </div>
                </div>

                <div class="room-card">
                    <div class="room-image-container">
                        <img src="assets/image/room-deluxe-pool.jpg" alt="Phòng Deluxe">
                        <div class="room-badge featured">Phòng Deluxe</div>
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
                            <span><i class="fas fa-bed"></i> 1 Giường King</span>
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
            
            const roomPrice = 3500000;
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