php
<?php
$page_title = "Phòng Studio VIP Đẳng Cấp - Aurora Hotel";
$page_description = "Phòng Studio VIP với thiết kế sang trọng, tiện nghi cao cấp và dịch vụ VIP đẳng cấp quốc tế tại Aurora Hotel.";
$canonical_url = "https://aurorahotel.vn/phong-studio-vip-dang-cap";
$additional_css = ['room-detail.css', 'studio-vip-dang-cap.css'];
$breadcrumb = [
    ['name' => 'Trang chủ', 'url' => '/'],
    ['name' => 'Phòng', 'url' => '/phong'],
    ['name' => 'Phòng Studio VIP Đẳng Cấp', 'url' => '']
];
include '../../includes/header.php';
?>

<main class="room-detail-page">
    <!-- Hero Section -->
    <section class="room-hero">
        <div class="hero-image">
            <img src="<?php echo asset('image/room-presidential.jpg'); ?>" alt="Phòng Studio VIP Đẳng Cấp Aurora Hotel" loading="lazy">
            <div class="hero-overlay">
                <div class="container">
                    <h1>Phòng Studio VIP Đẳng Cấp</h1>
                    <p class="hero-subtitle">Trải nghiệm đỉnh cao của sự sang trọng với dịch vụ butler riêng và tiện nghi 5 sao</p>
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
                        <h2>Về Phòng Studio VIP Đẳng Cấp</h2>
                        <p>Phòng Studio VIP của Aurora Hotel là đỉnh cao của sự sang trọng và tinh tế với diện tích 65m². Được thiết kế như một căn hộ mini cao cấp, phòng có không gian sống mở, phòng ngủ riêng biệt, bếp nhỏ hiện đại và ban công panorama với view 360 độ tuyệt đẹp.</p>
                        
                        <h3>Tiện Nghi VIP Đẳng Cấp</h3>
                        <div class="amenities-grid">
                            <div class="amenity-item vip">
                                <i class="fas fa-crown"></i>
                                <span>Dịch vụ Butler riêng 24/7</span>
                            </div>
                            <div class="amenity-item vip">
                                <i class="fas fa-bed"></i>
                                <span>Giường California King Premium</span>
                            </div>
                            <div class="amenity-item vip">
                                <i class="fas fa-couch"></i>
                                <span>Khu vực tiếp khách sang trọng</span>
                            </div>
                            <div class="amenity-item vip">
                                <i class="fas fa-utensils"></i>
                                <span>Bếp nhỏ hiện đại đầy đủ</span>
                            </div>
                            <div class="amenity-item vip">
                                <i class="fas fa-wifi"></i>
                                <span>WiFi tốc độ quang học</span>
                            </div>
                            <div class="amenity-item vip">
                                <i class="fas fa-tv"></i>
                                <span>Smart TV 75 inch 8K</span>
                            </div>
                            <div class="amenity-item vip">
                                <i class="fas fa-hot-tub"></i>
                                <span>Jacuzzi riêng trên ban công</span>
                            </div>
                            <div class="amenity-item vip">
                                <i class="fas fa-wine-glass"></i>
                                <span>Minibar premium & wine cellar</span>
                            </div>
                        </div>

                        <h3>Dịch Vụ VIP Độc Quyền</h3>
                        <ul class="services-list vip">
                            <li>Butler riêng phục vụ 24/7</li>
                            <li>Private check-in/check-out tại phòng</li>
                            <li>Dịch vụ ăn uống cao cấp tại phòng</li>
                            <li>Spa & massage tại phòng</li>
                            <li>Limousine đưa đón sân bay</li>
                            <li>Concierge service cao cấp</li>
                            <li>Dịch vụ giặt ủi express premium</li>
                            <li>Champagne & hoa tươi chào mừng</li>
                            <li>Late check-out đến 16:00</li>
                            <li>Access độc quyền Executive Lounge</li>
                        </ul>

                        <h3>Đặc Điểm Nổi Bật VIP</h3>
                        <div class="highlights vip">
                            <div class="highlight-item">
                                <h4>Thiết Kế Kiến Trúc Đẳng Cấp</h4>
                                <p>Nội thất được thiết kế bởi các kiến trúc sư hàng đầu thế giới với chất liệu cao cấp nhất như marble Carrara, gỗ ebony và crystal Baccarat.</p>
                            </div>
                            <div class="highlight-item">
                                <h4>Công Nghệ Thông Minh Tối Tân</h4>
                                <p>Hệ thống smart home tích hợp AI điều khiển mọi thứ từ ánh sáng, nhiệt độ, âm thanh đến rèm cửa qua giọng nói hoặc smartphone.</p>
                            </div>
                            <div class="highlight-item">
                                <h4>View Panorama 360 Độ</h4>
                                <p>Ban công riêng với jacuzzi và view toàn cảnh 360 độ ra biển, thành phố và núi non, tạo nên trải nghiệm thị giác tuyệt vời.</p>
                            </div>
                        </div>

                        <h3>Trải Nghiệm Ẩm Thực VIP</h3>
                        <div class="dining-experiences">
                            <div class="dining-item">
                                <i class="fas fa-utensils"></i>
                                <div>
                                    <h4>Private Chef Service</h4>
                                    <p>Đầu bếp riêng phục vụ các món ăn cao cấp theo yêu cầu</p>
                                </div>
                            </div>
                            <div class="dining-item">
                                <i class="fas fa-wine-bottle"></i>
                                <div>
                                    <h4>Wine Tasting Experience</h4>
                                    <p>Trải nghiệm thưởng thức rượu vang cao cấp với sommelier</p>
                                </div>
                            </div>
                            <div class="dining-item">
                                <i class="fas fa-birthday-cake"></i>
                                <div>
                                    <h4>Celebration Setup</h4>
                                    <p>Trang trí đặc biệt cho các dịp kỷ niệm và lễ hội</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="booking-card vip">
                        <div class="vip-badge">
                            <i class="fas fa-gem"></i>
                            <span>VIP EXCLUSIVE</span>
                        </div>
                        
                        <div class="price-info">
                            <span class="price">4.500.000 VNĐ</span>
                            <span class="per-night">/đêm</span>
                            <div class="vip-note">Bao gồm tất cả dịch vụ VIP</div>
                        </div>
                        
                        <div class="room-specs">
                            <div class="spec-item">
                                <strong>Diện tích:</strong> 65m²
                            </div>
                            <div class="spec-item">
                                <strong>Sức chứa:</strong> 2 người lớn
                            </div>
                            <div class="spec-item">
                                <strong>Loại giường:</strong> California King
                            </div>
                            <div class="spec-item">
                                <strong>View:</strong> Panorama 360°
                            </div>
                            <div class="spec-item">
                                <strong>Ban công:</strong> Riêng với Jacuzzi
                            </div>
                            <div class="spec-item">
                                <strong>Butler:</strong> Riêng 24/7
                            </div>
                        </div>
                        
                        <div class="vip-perks">
                            <h4>Đặc Quyền VIP</h4>
                            <ul>
                                <li>Butler service riêng 24/7</li>
                                <li>Limousine đưa đón miễn phí</li>
                                <li>Private dining experience</li>
                                <li>Spa treatment tại phòng</li>
                                <li>Executive Lounge access</li>
                                <li>Champagne & caviar welcome</li>
                                <li>Late check-out đến 16:00</li>
                            </ul>
                        </div>
                        
                        <a href="../../dat-phong.php?room=studio-vip" class="btn btn-vip btn-book">
                            <i class="fas fa-gem"></i>
                            Đặt Phòng VIP
                        </a>
                        
                        <div class="contact-info vip">
                            <p><strong>VIP Concierge:</strong></p>
                            <p><a href="tel:+84123456789">+84 123 456 789</a></p>
                            <small>Dịch vụ VIP 24/7</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Gallery -->
    <section class="room-gallery vip">
        <div class="container">
            <h3>Thư Viện Hình Ảnh VIP</h3>
            <div class="gallery-grid vip">
                <div class="gallery-item main">
                    <img src="../../../assets/image/room-presidential.jpg" alt="Phòng Studio VIP - Không gian chính" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Không gian sống VIP</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="../../../assets/image/room-suite-ocean.jpg" alt="Phòng Studio VIP - View panorama" loading="lazy">
                    <div class="gallery-overlay">
                        <span>View Panorama 360°</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="../../../assets/image/room-suite.jpg" alt="Phòng Studio VIP - Phòng ngủ" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Phòng ngủ California King</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo asset('image/room-deluxe-pool.jpg'); ?>" alt="Phòng Studio VIP - Jacuzzi" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Jacuzzi riêng trên ban công</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Rooms -->
    <section class="related-rooms">
        <div class="container">
            <h3>Các Lựa Chọn Cao Cấp Khác</h3>
            <div class="rooms-grid">
                <div class="room-card">
                    <img src="<?php echo asset('image/room-suite.jpg'); ?>" alt="Phòng Premium Deluxe" loading="lazy">
                    <div class="room-card-content">
                        <h4>Phòng Premium Deluxe</h4>
                        <p class="room-price">3.200.000 VNĐ/đêm</p>
                        <a href="<?php echo url('pages/phong/premium-deluxe-cao-cap.php'); ?>" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
                
                <div class="room-card">
                    <img src="<?php echo asset('image/room-presidential.jpg'); ?>" alt="Căn hộ Premium" loading="lazy">
                    <div class="room-card-content">
                        <h4>Căn Hộ Premium</h4>
                        <p class="room-price">6.500.000 VNĐ/đêm</p>
                        <a href="<?php echo url('pages/can-ho/premium-sang-trong.php'); ?>" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
                
                <div class="room-card">
                    <img src="<?php echo asset('image/room-standard.jpg'); ?>" alt="Căn hộ Studio" loading="lazy">
                    <div class="room-card-content">
                        <h4>Căn Hộ Studio</h4>
                        <p class="room-price">4.800.000 VNĐ/đêm</p>
                        <a href="<?php echo url('pages/can-ho/studio-hien-dai.php'); ?>" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../../includes/footer.php'; ?>