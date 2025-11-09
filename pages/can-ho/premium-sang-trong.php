php
<?php
$page_title = "Căn Hộ Premium Sang Trọng - Aurora Hotel";
$page_description = "Căn hộ Premium với thiết kế sang trọng, tiện nghi cao cấp và dịch vụ đẳng cấp 5 sao tại Aurora Hotel.";
$canonical_url = "https://aurorahotel.vn/can-ho-premium-sang-trong";
$additional_css = ['apartment-detail.css', 'can-ho-premium.css'];
$breadcrumb = [
    ['name' => 'Trang chủ', 'url' => '/'],
    ['name' => 'Căn hộ', 'url' => '/can-ho'],
    ['name' => 'Căn Hộ Premium Sang Trọng', 'url' => '']
];
include '../../includes/header.php';
?>

<main class="apartment-detail-page premium-theme">
    <!-- Hero Section -->
    <section class="apartment-hero">
        <div class="hero-image">
            <img src="<?php echo asset('assets/image/room-presidential.jpg'); ?>" alt="Căn Hộ Premium Sang Trọng Aurora Hotel" loading="lazy">
            <div class="hero-overlay">
                <div class="container">
                    <h1>Căn Hộ Premium Sang Trọng</h1>
                    <p class="hero-subtitle">Đẳng cấp sống thượng lưu với thiết kế hiện đại và dịch vụ hoàn hảo</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Apartment Information -->
    <section class="apartment-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="apartment-content">
                        <h2>Về Căn Hộ Premium Sang Trọng</h2>
                        <p>Căn hộ Premium của Aurora Hotel là biểu tượng của sự sang trọng và tinh tế với diện tích 120m². Được thiết kế theo phong cách hiện đại kết hợp với nét đẹp cổ điển, căn hộ bao gồm 2 phòng ngủ master, phòng khách rộng rãi, bếp cao cấp và 3 phòng tắm với jacuzzi riêng. Đây là lựa chọn hoàn hảo cho những ai tìm kiếm trải nghiệm nghỉ dưỡng đẳng cấp thượng lưu.</p>
                        
                        <h3>Thiết Kế Căn Hộ Premium</h3>
                        <div class="apartment-layout">
                            <div class="layout-item">
                                <i class="fas fa-crown"></i>
                                <div>
                                    <h4>Phòng Ngủ Master</h4>
                                    <p>Giường King Size cao cấp, tủ quần áo walk-in, ban công riêng với view biển</p>
                                </div>
                            </div>
                            <div class="layout-item">
                                <i class="fas fa-gem"></i>
                                <div>
                                    <h4>Phòng Ngủ Khách</h4>
                                    <p>Giường Queen Size, khu vực làm việc riêng, tủ quần áo cao cấp</p>
                                </div>
                            </div>
                            <div class="layout-item">
                                <i class="fas fa-couch"></i>
                                <div>
                                    <h4>Phòng Khách Sang Trọng</h4>
                                    <p>Sofa da thật, TV OLED 75 inch, hệ thống âm thanh Bose</p>
                                </div>
                            </div>
                            <div class="layout-item">
                                <i class="fas fa-utensils"></i>
                                <div>
                                    <h4>Bếp Cao Cấp</h4>
                                    <p>Thiết bị Miele, đảo bếp marble, tủ rượu nhiệt độ</p>
                                </div>
                            </div>
                        </div>

                        <h3>Tiện Nghi Premium Đẳng Cấp</h3>
                        <div class="amenities-grid">
                            <div class="amenity-item premium">
                                <i class="fas fa-star"></i>
                                <span>Dịch vụ Butler 24/7</span>
                            </div>
                            <div class="amenity-item premium">
                                <i class="fas fa-hot-tub"></i>
                                <span>Jacuzzi riêng trong phòng tắm</span>
                            </div>
                            <div class="amenity-item premium">
                                <i class="fas fa-wine-glass"></i>
                                <span>Minibar cao cấp miễn phí</span>
                            </div>
                            <div class="amenity-item premium">
                                <i class="fas fa-concierge-bell"></i>
                                <span>Dịch vụ concierge riêng</span>
                            </div>
                            <div class="amenity-item premium">
                                <i class="fas fa-car-side"></i>
                                <span>Đưa đón bằng xe sang</span>
                            </div>
                            <div class="amenity-item premium">
                                <i class="fas fa-spa"></i>
                                <span>Spa trong phòng miễn phí</span>
                            </div>
                            <div class="amenity-item premium">
                                <i class="fas fa-utensils"></i>
                                <span>Dịch vụ ăn uống 24/7</span>
                            </div>
                            <div class="amenity-item premium">
                                <i class="fas fa-shield-alt"></i>
                                <span>An ninh riêng tư tuyệt đối</span>
                            </div>
                        </div>

                        <h3>Dịch Vụ Premium Độc Quyền</h3>
                        <ul class="services-list premium">
                            <li>Butler cá nhân phục vụ 24/7</li>
                            <li>Dịch vụ spa và massage tại phòng</li>
                            <li>Chef riêng nấu ăn theo yêu cầu</li>
                            <li>Dịch vụ giặt ủi cao cấp trong ngày</li>
                            <li>Concierge riêng hỗ trợ mọi nhu cầu</li>
                            <li>Đưa đón sân bay bằng Rolls Royce</li>
                            <li>Tổ chức tiệc riêng tư trong căn hộ</li>
                            <li>Dịch vụ mua sắm cá nhân</li>
                            <li>Hướng dẫn viên du lịch riêng</li>
                            <li>Dịch vụ y tế cao cấp 24/7</li>
                        </ul>

                        <h3>Trải Nghiệm Ẩm Thực Đẳng Cấp</h3>
                        <div class="dining-experiences">
                            <div class="dining-card">
                                <img src="../../../assets/image/restaurant.jpg" alt="Bữa sáng premium" loading="lazy">
                                <div class="dining-content">
                                    <h4>Bữa Sáng Premium</h4>
                                    <p>Phục vụ tại phòng với menu đa dạng từ Âu đến Á, nguyên liệu tươi ngon hàng đầu</p>
                                </div>
                            </div>
                            <div class="dining-card">
                                <img src="../../../assets/image/bar.jpg" alt="Minibar cao cấp" loading="lazy">
                                <div class="dining-content">
                                    <h4>Minibar Cao Cấp</h4>
                                    <p>Rượu vang, champagne và đồ uống cao cấp được bổ sung hàng ngày</p>
                                </div>
                            </div>
                            <div class="dining-card">
                                <img src="../../../assets/image/restaurant.jpg" alt="Dịch vụ chef riêng" loading="lazy">
                                <div class="dining-content">
                                    <h4>Chef Riêng</h4>
                                    <p>Đầu bếp chuyên nghiệp nấu ăn theo yêu cầu với nguyên liệu cao cấp</p>
                                </div>
                            </div>
                        </div>

                        <h3>Tiện Ích Độc Quyền</h3>
                        <div class="exclusive-amenities">
                            <div class="exclusive-item">
                                <h4>Hồ Bơi Riêng Tư</h4>
                                <p>Hồ bơi infinity riêng với view toàn cảnh thành phố, phục vụ đồ uống bên bờ</p>
                            </div>
                            <div class="exclusive-item">
                                <h4>Phòng Gym Riêng</h4>
                                <p>Thiết bị tập luyện cao cấp Technogym, huấn luyện viên cá nhân theo yêu cầu</p>
                            </div>
                            <div class="exclusive-item">
                                <h4>Phòng Họp Riêng</h4>
                                <p>Không gian làm việc sang trọng với thiết bị hội nghị hiện đại</p>
                            </div>
                            <div class="exclusive-item">
                                <h4>Sân Thượng Riêng</h4>
                                <p>Khu vực BBQ và thư giãn ngoài trời với view 360 độ tuyệt đẹp</p>
                            </div>
                        </div>

                        <h3>Chính Sách Premium</h3>
                        <div class="premium-policies">
                            <div class="policy-item">
                                <h4>Check-in VIP</h4>
                                <p>Check-in riêng tư tại căn hộ, không cần qua lễ tân. Thời gian linh hoạt 24/7</p>
                            </div>
                            <div class="policy-item">
                                <h4>Hủy Phòng Linh Hoạt</h4>
                                <p>Chính sách hủy phòng linh hoạt đến 24h trước khi nhận phòng</p>
                            </div>
                            <div class="policy-item">
                                <h4>Bảo Mật Tuyệt Đối</h4>
                                <p>Cam kết bảo mật thông tin khách hàng và quyền riêng tư tuyệt đối</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="booking-card premium-apartment">
                        <div class="premium-badge">
                            <i class="fas fa-crown"></i>
                            <span>PREMIUM LUXURY</span>
                        </div>
                        
                        <div class="price-info">
                            <span class="price">12.500.000 VNĐ</span>
                            <span class="per-night">/đêm</span>
                            <div class="premium-note">Bao gồm tất cả dịch vụ premium</div>
                        </div>
                        
                        <div class="apartment-specs">
                            <div class="spec-item">
                                <strong>Diện tích:</strong> 120m²
                            </div>
                            <div class="spec-item">
                                <strong>Phòng ngủ:</strong> 2 phòng master
                            </div>
                            <div class="spec-item">
                                <strong>Phòng tắm:</strong> 3 phòng (có jacuzzi)
                            </div>
                            <div class="spec-item">
                                <strong>Sức chứa:</strong> 4 người
                            </div>
                            <div class="spec-item">
                                <strong>View:</strong> Biển & thành phố
                            </div>
                            <div class="spec-item">
                                <strong>Tầng:</strong> Penthouse (25-30)
                            </div>
                        </div>
                        
                        <div class="premium-perks">
                            <h4>Đặc Quyền Premium</h4>
                            <ul>
                                <li>Butler 24/7 riêng</li>
                                <li>Đưa đón Rolls Royce</li>
                                <li>Spa tại phòng miễn phí</li>
                                <li>Chef riêng theo yêu cầu</li>
                                <li>Concierge cá nhân</li>
                                <li>Hồ bơi riêng tư</li>
                                <li>Minibar cao cấp miễn phí</li>
                                <li>Check-in/out VIP</li>
                            </ul>
                        </div>
                        
                        <a href="../../dat-phong.php?room=premium-apartment" class="btn btn-premium-apartment btn-book">
                            <i class="fas fa-crown"></i>
                            Đặt Căn Hộ Premium
                        </a>
                        
                        <div class="contact-info">
                            <p><strong>Hotline Premium:</strong></p>
                            <p><a href="tel:+84123456789">+84 123 456 789</a></p>
                            <small>Dịch vụ tư vấn cao cấp 24/7</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Apartment Gallery -->
    <section class="apartment-gallery">
        <div class="container">
            <h3>Hình Ảnh Căn Hộ Premium</h3>
            <div class="gallery-grid apartment">
                <div class="gallery-item main">
                    <img src="<?php echo asset('assets/image/room-presidential.jpg'); ?>" alt="Căn hộ Premium - Phòng khách sang trọng" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Phòng khách sang trọng</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo asset('assets/image/room-suite-ocean.jpg'); ?>" alt="Căn hộ Premium - Phòng ngủ master" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Phòng ngủ master</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo asset('assets/image/room-suite.jpg'); ?>" alt="Căn hộ Premium - Phòng tắm jacuzzi" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Phòng tắm jacuzzi</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo asset('assets/image/room-deluxe.jpg'); ?>" alt="Căn hộ Premium - Bếp cao cấp" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Bếp cao cấp Miele</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Apartments -->
    <section class="related-apartments">
        <div class="container">
            <h3>Các Căn Hộ Khác</h3>
            <div class="apartments-grid">
                <div class="apartment-card">
                    <img src="<?php echo asset('assets/image/room-suite-ocean.jpg'); ?>" alt="Căn hộ Family" loading="lazy">
                    <div class="apartment-card-content">
                        <h4>Căn Hộ Family</h4>
                        <p class="apartment-price">5.500.000 VNĐ/đêm</p>
                        <a href="<?php echo url('pages/can-ho/family-gia-dinh.php'); ?>" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
                
                <div class="apartment-card">
                    <img src="<?php echo asset('assets/image/room-standard.jpg'); ?>" alt="Căn hộ Studio" loading="lazy">
                    <div class="apartment-card-content">
                        <h4>Căn Hộ Studio</h4>
                        <p class="apartment-price">4.800.000 VNĐ/đêm</p>
                        <a href="<?php echo url('pages/can-ho/studio-hien-dai.php'); ?>" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
                
                <div class="apartment-card">
                    <img src="<?php echo asset('assets/image/room-deluxe.jpg'); ?>" alt="Phòng Studio VIP" loading="lazy">
                    <div class="apartment-card-content">
                        <h4>Phòng Studio VIP</h4>
                        <p class="apartment-price">4.200.000 VNĐ/đêm</p>
                        <a href="<?php echo url('pages/phong/studio-vip-dang-cap.php'); ?>" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../../includes/footer.php'; ?>