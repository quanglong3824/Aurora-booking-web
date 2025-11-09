php
<?php
$page_title = "Phòng Premium Deluxe Twin Đôi - Aurora Hotel Plaza";
$page_description = "Phòng Premium Deluxe Twin với 2 giường đơn cao cấp, thiết kế hiện đại và tiện nghi đẳng cấp tại Aurora Hotel Plaza.";
$canonical_url = "https://aurorahotel.vn/phong-premium-deluxe-twin-doi";
$additional_css = ['room-detail.css', 'premium-deluxe-twin-doi.css'];
$breadcrumb = [
    ['name' => 'Trang chủ', 'url' => '/'],
    ['name' => 'Phòng', 'url' => '/phong'],
    ['name' => 'Phòng Premium Deluxe Twin Đôi', 'url' => '']
];
include '../../includes/header.php';
?>

<main class="room-detail-page">
    <!-- Hero Section -->
    <section class="room-hero">
        <div class="hero-image">
            <img src="<?php echo asset('image/room-standard.jpg'); ?>" alt="Phòng Premium Deluxe Twin Đôi Aurora Hotel Plaza" loading="lazy">
            <div class="hero-overlay">
                <div class="container">
                    <h1>Phòng Premium Deluxe Twin Đôi</h1>
                    <p class="hero-subtitle">Không gian lý tưởng cho gia đình và nhóm bạn với 2 giường đôi cao cấp</p>
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
                        <h2>Về Phòng Premium Deluxe Twin Đôi</h2>
                        <p>Phòng Premium Deluxe Twin của Aurora Hotel Plaza được thiết kế đặc biệt cho gia đình hoặc nhóm bạn với diện tích 50m². Phòng có 2 giường đôi cao cấp, khu vực sinh hoạt chung rộng rãi và ban công riêng với view tuyệt đẹp ra biển hoặc thành phố.</p>
                        
                        <h3>Tiện Nghi Phòng Twin</h3>
                        <div class="amenities-grid">
                            <div class="amenity-item">
                                <i class="fas fa-bed"></i>
                                <span>2 Giường Queen Size cao cấp</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-users"></i>
                                <span>Khu vực sinh hoạt chung</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-wifi"></i>
                                <span>WiFi tốc độ cao miễn phí</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-tv"></i>
                                <span>2 Smart TV 55 inch</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-snowflake"></i>
                                <span>Hệ thống điều hòa đa vùng</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-bath"></i>
                                <span>Phòng tắm rộng với vòi sen đôi</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-coffee"></i>
                                <span>Minibar & khu vực pha chế</span>
                            </div>
                            <div class="amenity-item">
                                <i class="fas fa-baby"></i>
                                <span>Tiện nghi thân thiện với trẻ em</span>
                            </div>
                        </div>

                        <h3>Dịch Vụ Gia Đình</h3>
                        <ul class="services-list">
                            <li>Dịch vụ trông trẻ (theo yêu cầu)</li>
                            <li>Giường phụ miễn phí cho trẻ em</li>
                            <li>Bữa sáng gia đình tại phòng</li>
                            <li>Dịch vụ giặt ủi ưu tiên</li>
                            <li>Tour tham quan gia đình</li>
                            <li>Hoạt động giải trí cho trẻ</li>
                            <li>Đưa đón sân bay (có phí)</li>
                            <li>Hỗ trợ lễ tân 24/7</li>
                        </ul>

                        <h3>Đặc Điểm Nổi Bật</h3>
                        <div class="highlights">
                            <div class="highlight-item">
                                <h4>Thiết Kế Thân Thiện Gia Đình</h4>
                                <p>Không gian được bố trí hợp lý với khu vực riêng tư và chung, tạo sự thoải mái cho mọi thành viên trong gia đình.</p>
                            </div>
                            <div class="highlight-item">
                                <h4>An Toàn Cho Trẻ Em</h4>
                                <p>Phòng được trang bị các tiện nghi an toàn cho trẻ em như ổ cắm bảo vệ, góc bàn bo tròn và khóa an toàn.</p>
                            </div>
                            <div class="highlight-item">
                                <h4>Không Gian Linh Hoạt</h4>
                                <p>Có thể sắp xếp lại nội thất theo nhu cầu, bổ sung giường phụ hoặc nôi em bé miễn phí.</p>
                            </div>
                        </div>

                        <h3>Hoạt Động Gia Đình</h3>
                        <div class="family-activities">
                            <div class="activity-item">
                                <i class="fas fa-swimming-pool"></i>
                                <div>
                                    <h4>Hồ Bơi Gia Đình</h4>
                                    <p>Hồ bơi có khu vực riêng cho trẻ em với độ sâu an toàn</p>
                                </div>
                            </div>
                            <div class="activity-item">
                                <i class="fas fa-gamepad"></i>
                                <div>
                                    <h4>Khu Vui Chơi Trẻ Em</h4>
                                    <p>Khu vực vui chơi trong nhà và ngoài trời được giám sát</p>
                                </div>
                            </div>
                            <div class="activity-item">
                                <i class="fas fa-utensils"></i>
                                <div>
                                    <h4>Nhà Hàng Gia Đình</h4>
                                    <p>Menu đặc biệt cho trẻ em và khu vực ăn uống thân thiện</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="booking-card family">
                        <div class="family-badge">
                            <i class="fas fa-heart"></i>
                            <span>Family Friendly</span>
                        </div>
                        
                        <div class="price-info">
                            <span class="price">3.500.000 VNĐ</span>
                            <span class="per-night">/đêm</span>
                            <div class="family-note">Bao gồm 2 trẻ em dưới 12 tuổi</div>
                        </div>
                        
                        <div class="room-specs">
                            <div class="spec-item">
                                <strong>Diện tích:</strong> 50m²
                            </div>
                            <div class="spec-item">
                                <strong>Sức chứa:</strong> 4 người lớn + 2 trẻ em
                            </div>
                            <div class="spec-item">
                                <strong>Loại giường:</strong> 2 Queen Size
                            </div>
                            <div class="spec-item">
                                <strong>View:</strong> Biển/Thành phố/Vườn
                            </div>
                            <div class="spec-item">
                                <strong>Ban công:</strong> Rộng rãi an toàn
                            </div>
                        </div>
                        
                        <div class="family-perks">
                            <h4>Ưu Đãi Gia Đình</h4>
                            <ul>
                                <li>Trẻ em dưới 12 tuổi miễn phí</li>
                                <li>Giường phụ/nôi miễn phí</li>
                                <li>Breakfast buffet cho gia đình</li>
                                <li>Hoạt động trẻ em miễn phí</li>
                                <li>Late check-out đến 13:00</li>
                            </ul>
                        </div>
                        
                        <a href="../../dat-phong.php?room=premium-deluxe-twin" class="btn btn-family btn-book">
                            <i class="fas fa-heart"></i>
                            Đặt Phòng Gia Đình
                        </a>
                        
                        <div class="contact-info">
                            <p><strong>Hotline gia đình:</strong></p>
                            <p><a href="tel:+84123456789">+84 123 456 789</a></p>
                            <small>Tư vấn chuyên biệt cho gia đình</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Gallery -->
    <section class="room-gallery">
        <div class="container">
            <h3>Hình Ảnh Phòng Twin</h3>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="<?php echo asset('image/room-standard.jpg'); ?>" alt="Phòng Premium Deluxe Twin - Không gian chính" loading="lazy">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo asset('image/room-standard-garden.jpg'); ?>" alt="Phòng Premium Deluxe Twin - View vườn" loading="lazy">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo asset('image/room-deluxe.jpg'); ?>" alt="Phòng Premium Deluxe Twin - Khu vực sinh hoạt" loading="lazy">
                </div>
                <div class="gallery-item">
                    <img src="<?php echo asset('image/room-suite.jpg'); ?>" alt="Phòng Premium Deluxe Twin - Phòng tắm" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Related Rooms -->
    <section class="related-rooms">
        <div class="container">
            <h3>Các Lựa Chọn Khác Cho Gia Đình</h3>
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
                    <img src="<?php echo asset('image/room-presidential.jpg'); ?>" alt="Căn hộ Family" loading="lazy">
                    <div class="room-card-content">
                        <h4>Căn Hộ Family</h4>
                        <p class="room-price">5.500.000 VNĐ/đêm</p>
                        <a href="<?php echo url('pages/can-ho/family-gia-dinh.php'); ?>" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
                
                <div class="room-card">
                    <img src="<?php echo asset('image/room-deluxe.jpg'); ?>" alt="Phòng Deluxe" loading="lazy">
                    <div class="room-card-content">
                        <h4>Phòng Deluxe Sang Trọng</h4>
                        <p class="room-price">2.500.000 VNĐ/đêm</p>
                        <a href="<?php echo url('pages/phong/deluxe-sang-trong.php'); ?>" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../../includes/footer.php'; ?>