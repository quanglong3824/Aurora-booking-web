php
<?php
$page_title = "Phòng Premium Deluxe Cao Cấp - Aurora Hotel";
$page_description = "Phòng Premium Deluxe cao cấp với thiết kế sang trọng, tiện nghi đẳng cấp và dịch vụ hoàn hảo tại Aurora Hotel.";
$canonical_url = "https://aurorahotel.vn/phong-premium-deluxe-cao-cap";
$additional_css = ['room-detail.css'];
$breadcrumb = [
    ['name' => 'Trang chủ', 'url' => '/'],
    ['name' => 'Phòng', 'url' => '/phong'],
    ['name' => 'Phòng Premium Deluxe Cao Cấp', 'url' => '']
];
include '../../../includes/header.php';
?>

<main class="room-detail-page">
    <!-- Hero Section -->
    <section class="room-hero">
        <div class="hero-image">
            <img src="../../../assets/image/room-suite.jpg" alt="Phòng Premium Deluxe Cao Cấp Aurora Hotel" loading="lazy">
            <div class="hero-overlay">
                <div class="container">
                    <h1>Phòng Premium Deluxe Cao Cấp</h1>
                    <p class="hero-subtitle">Không gian nghỉ dưỡng đẳng cấp với thiết kế sang trọng và tiện nghi 5 sao</p>
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
                        <h2>Về Phòng Premium Deluxe Cao Cấp</h2>
                        <p>Phòng Premium Deluxe của Aurora Hotel là sự kết hợp hoàn hảo giữa không gian rộng rãi 45m² và thiết kế nội thất cao cấp. Mỗi phòng được trang bị đầy đủ tiện nghi hiện đại, khu vực tiếp khách riêng biệt và ban công lớn với view panorama tuyệt đẹp.</p>
                        
                        <h3>Tiện Nghi Phòng Cao Cấp</h3>
                        <div class="amenities-grid">
                            <div class="amenity-item">
                                <i class="fas fa-bed"></i>
                                <span>Giường King Size Premium</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-couch"></i>
                                <span>Khu vực tiếp khách riêng</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-wifi"></i>
                                <span>WiFi tốc độ cao miễn phí</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-tv"></i>
                                <span>Smart TV 65 inch 4K</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-snowflake"></i>
                                <span>Hệ thống điều hòa thông minh</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-bath"></i>
                                <span>Phòng tắm marble với jacuzzi</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-coffee"></i>
                                <span>Minibar cao cấp & máy espresso</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-concierge-bell"></i>
                                <span>Dịch vụ butler 24/7</span>
                            </div>
                        </div>

                        <h3>Dịch Vụ Đặc Biệt</h3>
                        <ul class="services-list">
                            <li>Dịch vụ butler cá nhân</li>
                            <li>Check-in/Check-out ưu tiên</li>
                            <li>Complimentary breakfast tại phòng</li>
                            <li>Dịch vụ spa tại phòng</li>
                            <li>Đưa đón sân bay miễn phí</li>
                            <li>Late check-out miễn phí</li>
                            <li>Dịch vụ giặt ủi express</li>
                            <li>Minibar miễn phí hàng ngày</li>
                        </ul>

                        <h3>Đặc Điểm Nổi Bật</h3>
                        <div class="highlights">
                            <div class="highlight-item">
                                <h4>Thiết Kế Sang Trọng</h4>
                                <p>Nội thất được thiết kế bởi các nhà thiết kế hàng đầu với chất liệu cao cấp và nghệ thuật trang trí tinh tế.</p>
                            </div>
                            <div class="highlight-item">
                                <h4>Công Nghệ Thông Minh</h4>
                                <p>Hệ thống điều khiển thông minh cho ánh sáng, nhiệt độ và rèm cửa qua tablet hoặc smartphone.</p>
                            </div>
                            <div class="highlight-item">
                                <h4>View Tuyệt Đẹp</h4>
                                <p>Ban công rộng với view toàn cảnh biển hoặc thành phố, lý tưởng để thư giãn và ngắm cảnh.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="booking-card premium">
                        <div class="premium-badge">
                            <i class="fas fa-crown"></i>
                            <span>Premium</span>
                        </div>
                        
                        <div class="price-info">
                            <span class="price">3.200.000 VNĐ</span>
                            <span class="per-night">/đêm</span>
                            <div class="original-price">3.800.000 VNĐ</div>
                        </div>
                        
                        <div class="room-specs">
                            <div class="spec-item">
                                <strong>Diện tích:</strong> 45m²
                            </div>
                            <div class="spec-item">
                                <strong>Sức chứa:</strong> 2-3 người lớn
                            </div>
                            <div class="spec-item">
                                <strong>Loại giường:</strong> King Size Premium
                            </div>
                            <div class="spec-item">
                                <strong>View:</strong> Panorama biển/thành phố
                            </div>
                            <div class="spec-item">
                                <strong>Ban công:</strong> Riêng biệt rộng rãi
                            </div>
                        </div>
                        
                        <div class="premium-perks">
                            <h4>Ưu Đãi Đặc Biệt</h4>
                            <ul>
                                <li>Miễn phí đưa đón sân bay</li>
                                <li>Breakfast miễn phí</li>
                                <li>Late check-out đến 14:00</li>
                                <li>Minibar miễn phí</li>
                            </ul>
                        </div>
                        
                        <a href="../../dat-phong.php?room=premium-deluxe" class="btn btn-premium btn-book">
                            <i class="fas fa-crown"></i>
                            Đặt Phòng Premium
                        </a>
                        
                        <div class="contact-info">
                            <p><strong>Hotline VIP:</strong></p>
                            <p><a href="tel:+84123456789">+84 123 456 789</a></p>
                            <small>Hỗ trợ đặt phòng 24/7</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Gallery -->
    <section class="room-gallery">
        <div class="container">
            <h3>Thư Viện Hình Ảnh</h3>
            <div class="gallery-grid">
                <div class="gallery-item main">
                    <img src="../../../assets/image/room-suite.jpg" alt="Phòng Premium Deluxe - Không gian chính" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Không gian chính</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="../../../assets/image/room-suite-ocean.jpg" alt="Phòng Premium Deluxe - View biển" loading="lazy">
                    <div class="gallery-overlay">
                        <span>View biển tuyệt đẹp</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="../../../assets/image/room-deluxe-pool.jpg" alt="Phòng Premium Deluxe - Phòng tắm" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Phòng tắm cao cấp</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="../../../assets/image/room-deluxe.jpg" alt="Phòng Premium Deluxe - Ban công" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Ban công riêng</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Rooms -->
    <section class="related-rooms">
        <div class="container">
            <h3>Khám Phá Các Phòng Khác</h3>
            <div class="rooms-grid">
                <div class="room-card">
                    <img src="../../../assets/image/room-deluxe.jpg" alt="Phòng Deluxe" loading="lazy">
                    <div class="room-card-content">
                        <h4>Phòng Deluxe Sang Trọng</h4>
                        <p class="room-price">2.500.000 VNĐ/đêm</p>
                        <a href="../phong-deluxe/phong-deluxe-sang-trong.php" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
                
                <div class="room-card">
                    <img src="../../../assets/image/room-presidential.jpg" alt="Phòng Studio VIP" loading="lazy">
                    <div class="room-card-content">
                        <h4>Phòng Studio VIP</h4>
                        <p class="room-price">4.500.000 VNĐ/đêm</p>
                        <a href="../phong-studio-vip/phong-studio-vip-dang-cap.php" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
                
                <div class="room-card">
                    <img src="../../../assets/image/room-standard.jpg" alt="Phòng Premium Deluxe Twin" loading="lazy">
                    <div class="room-card-content">
                        <h4>Premium Deluxe Twin</h4>
                        <p class="room-price">3.500.000 VNĐ/đêm</p>
                        <a href="../phong-premium-deluxe-twin/phong-premium-deluxe-twin-doi.php" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../../../includes/footer.php'; ?>