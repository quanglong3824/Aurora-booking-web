<?php
$page_title = "Phòng Deluxe Sang Trọng - Aurora Hotel";
$page_description = "Phòng Deluxe sang trọng với thiết kế hiện đại, view đẹp và đầy đủ tiện nghi cao cấp tại Aurora Hotel.";
$canonical_url = "https://aurorahotel.vn/phong-deluxe-sang-trong";
$additional_css = ['room-detail.css', 'deluxe-sang-trong.css'];
$breadcrumb = [
    ['name' => 'Trang chủ', 'url' => '/'],
    ['name' => 'Phòng', 'url' => '/phong'],
    ['name' => 'Phòng Deluxe Sang Trọng', 'url' => '']
];
include '../../includes/header.php';
?>

<main class="room-detail-page">
    <!-- Hero Section -->
    <section class="room-hero">
        <div class="hero-image">
            <img src="<?php echo asset('image/room-deluxe.jpg'); ?>" alt="Phòng Deluxe Sang Trọng Aurora Hotel" loading="lazy">
            <div class="hero-overlay">
                <div class="container">
                    <h1>Phòng Deluxe Sang Trọng</h1>
                    <p class="hero-subtitle">Trải nghiệm không gian nghỉ dưỡng đẳng cấp với thiết kế tinh tế</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Information -->
    <section class="room-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-content">
                        <h2>Về Phòng Deluxe Sang Trọng</h2>
                        <p>Phòng Deluxe của Aurora Hotel mang đến không gian nghỉ dưỡng sang trọng với diện tích 35m², được thiết kế hiện đại kết hợp với nét truyền thống Việt Nam. Mỗi phòng đều có ban công riêng với view hướng biển hoặc thành phố tuyệt đẹp.</p>
                        
                        <h3>Tiện Nghi Phòng</h3>
                        <div class="amenities-grid">
                            <div class="amenity-item">
                                <i class="fas fa-bed"></i>
                                <span>Giường King Size cao cấp</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-wifi"></i>
                                <span>WiFi miễn phí tốc độ cao</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-tv"></i>
                                <span>Smart TV 55 inch</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-snowflake"></i>
                                <span>Điều hòa nhiệt độ</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-bath"></i>
                                <span>Phòng tắm riêng với bồn tắm</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-coffee"></i>
                                <span>Minibar & máy pha cà phê</span>
                            </div>
                        </div>

                        <h3>Dịch Vụ Đi Kèm</h3>
                        <ul class="services-list">
                            <li>Dọn phòng hàng ngày</li>
                            <li>Dịch vụ giặt ủi</li>
                            <li>Room service 24/7</li>
                            <li>Đưa đón sân bay (có phí)</li>
                            <li>Hỗ trợ lễ tân 24/7</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="booking-card">
                        <div class="price-info">
                            <span class="price">2.500.000 VNĐ</span>
                            <span class="per-night">/đêm</span>
                        </div>
                        
                        <div class="room-specs">
                            <div class="spec-item">
                                <strong>Diện tích:</strong> 35m²
                            </div>
                            <div class="spec-item">
                                <strong>Sức chứa:</strong> 2 người lớn
                            </div>
                            <div class="spec-item">
                                <strong>Loại giường:</strong> King Size
                            </div>
                            <div class="spec-item">
                                <strong>View:</strong> Biển/Thành phố
                            </div>
                        </div>
                        
                        <a href="../../dat-phong.php?room=deluxe" class="btn btn-primary btn-book">
                            Đặt Phòng Ngay
                        </a>
                        
                        <div class="contact-info">
                            <p><strong>Hotline đặt phòng:</strong></p>
                            <p><a href="tel:+84123456789">+84 123 456 789</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Gallery -->
    <section class="room-gallery">
        <div class="container">
            <h3>Hình Ảnh Phòng</h3>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="<?php echo asset('image/room-deluxe.jpg'); ?>" alt="Phòng Deluxe - Không gian chính" loading="lazy">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo asset('image/room-deluxe-pool.jpg'); ?>" alt="Phòng Deluxe - View hồ bơi" loading="lazy">
                </div>
                <!-- Thêm các hình ảnh khác -->
            </div>
        </div>
    </section>

    <!-- Related Rooms -->
    <section class="related-rooms">
        <div class="container">
            <h3>Các Loại Phòng Khác</h3>
            <div class="rooms-grid">
                <div class="room-card">
                    <img src="../../../assets/image/room-suite.jpg" alt="Phòng Premium Deluxe" loading="lazy">
                    <div class="room-card-content">
                        <h4>Phòng Premium Deluxe</h4>
                        <p class="room-price">3.200.000 VNĐ/đêm</p>
                        <a href="<?php echo url('pages/phong/premium-deluxe-cao-cap.php'); ?>" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
                
                <div class="room-card">
                    <img src="../../../assets/image/room-presidential.jpg" alt="Phòng Studio VIP" loading="lazy">
                    <div class="room-card-content">
                        <h4>Phòng Studio VIP</h4>
                        <p class="room-price">4.500.000 VNĐ/đêm</p>
                        <a href="<?php echo url('pages/phong/studio-vip-dang-cap.php'); ?>" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include_once '../../includes/footer.php'; ?>