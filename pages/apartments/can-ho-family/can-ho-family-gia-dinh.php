php
<?php
$page_title = "Căn Hộ Family Gia Đình - Aurora Hotel";
$page_description = "Căn hộ Family rộng rãi với 2 phòng ngủ, phù hợp cho gia đình có trẻ em. Tiện nghi đầy đủ và không gian thoải mái tại Aurora Hotel.";
$canonical_url = "https://aurorahotel.vn/can-ho-family-gia-dinh";
$additional_css = ['room-detail.css'];
$breadcrumb = [
    ['name' => 'Trang chủ', 'url' => '/'],
    ['name' => 'Căn hộ', 'url' => '/can-ho'],
    ['name' => 'Căn Hộ Family Gia Đình', 'url' => '']
];
include '../../../includes/header.php';
?>

<main class="apartment-detail-page">
    <!-- Hero Section -->
    <section class="apartment-hero">
        <div class="hero-image">
            <img src="../../../assets/image/room-suite-ocean.jpg" alt="Căn Hộ Family Gia Đình Aurora Hotel" loading="lazy">
            <div class="hero-overlay">
                <div class="container">
                    <h1>Căn Hộ Family Gia Đình</h1>
                    <p class="hero-subtitle">Không gian sống hoàn hảo cho gia đình với đầy đủ tiện nghi như ở nhà</p>
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
                        <h2>Về Căn Hộ Family Gia Đình</h2>
                        <p>Căn hộ Family của Aurora Hotel được thiết kế đặc biệt cho gia đình với diện tích 80m², bao gồm 2 phòng ngủ riêng biệt, phòng khách rộng rãi, bếp đầy đủ tiện nghi và 2 phòng tắm. Đây là lựa chọn hoàn hảo cho kỳ nghỉ gia đình dài ngày với không gian sống thoải mái như ở nhà.</p>
                        
                        <h3>Bố Trí Căn Hộ</h3>
                        <div class="apartment-layout">
                            <div class="layout-item">
                                <i class="fas fa-bed"></i>
                                <div>
                                    <h4>Phòng Ngủ Chính</h4>
                                    <p>Giường King Size, tủ quần áo lớn, ban công riêng</p>
                                </div>
                            </div>
                            <div class="layout-item">
                                <i class="fas fa-child"></i>
                                <div>
                                    <h4>Phòng Ngủ Trẻ Em</h4>
                                    <p>2 giường đơn, khu vực chơi, tủ đồ chơi</p>
                                </div>
                            </div>
                            <div class="layout-item">
                                <i class="fas fa-couch"></i>
                                <div>
                                    <h4>Phòng Khách</h4>
                                    <p>Sofa lớn, TV 65 inch, khu vực ăn uống</p>
                                </div>
                            </div>
                            <div class="layout-item">
                                <i class="fas fa-utensils"></i>
                                <div>
                                    <h4>Bếp Đầy Đủ</h4>
                                    <p>Tủ lạnh, bếp từ, lò vi sóng, máy rửa bát</p>
                                </div>
                            </div>
                        </div>

                        <h3>Tiện Nghi Gia Đình</h3>
                        <div class="amenities-grid">
                            <div class="amenity-item family">
                                <i class="fas fa-home"></i>
                                <span>Không gian sống như ở nhà</span>
                            </div>
                            <div class="amenity-item family">
                                <i class="fas fa-kitchen-set"></i>
                                <span>Bếp đầy đủ tiện nghi nấu ăn</span>
                            </div>
                            <div class="amenity-item family">
                                <i class="fas fa-washing-machine"></i>
                                <span>Máy giặt & máy sấy riêng</span>
                            </div>
                            <div class="amenity-item family">
                                <i class="fas fa-wifi"></i>
                                <span>WiFi tốc độ cao miễn phí</span>
                            </div>
                            <div class="amenity-item family">
                                <i class="fas fa-tv"></i>
                                <span>Smart TV trong mỗi phòng</span>
                            </div>
                            <div class="amenity-item family">
                                <i class="fas fa-snowflake"></i>
                                <span>Điều hòa đa vùng</span>
                            </div>
                            <div class="amenity-item family">
                                <i class="fas fa-baby"></i>
                                <span>Tiện nghi an toàn cho trẻ em</span>
                            </div>
                            <div class="amenity-item family">
                                <i class="fas fa-car"></i>
                                <span>Chỗ đậu xe riêng miễn phí</span>
                            </div>
                        </div>

                        <h3>Dịch Vụ Gia Đình Đặc Biệt</h3>
                        <ul class="services-list family">
                            <li>Dịch vụ trông trẻ chuyên nghiệp</li>
                            <li>Hoạt động giải trí cho trẻ em</li>
                            <li>Dịch vụ mua sắm tạp hóa</li>
                            <li>Cho thuê xe đẩy em bé & ghế ăn</li>
                            <li>Dịch vụ nấu ăn tại nhà</li>
                            <li>Tour tham quan gia đình</li>
                            <li>Đưa đón trường học (nếu cần)</li>
                            <li>Hỗ trợ y tế 24/7</li>
                        </ul>

                        <h3>Hoạt Động Gia Đình</h3>
                        <div class="family-activities">
                            <div class="activity-card">
                                <img src="../../../assets/image/pool.jpg" alt="Hồ bơi gia đình" loading="lazy">
                                <div class="activity-content">
                                    <h4>Hồ Bơi Gia Đình</h4>
                                    <p>Hồ bơi có khu vực riêng cho trẻ em với độ sâu an toàn và nhân viên cứu hộ</p>
                                </div>
                            </div>
                            <div class="activity-card">
                                <img src="../../../assets/image/gym.jpg" alt="Khu vui chơi trẻ em" loading="lazy">
                                <div class="activity-content">
                                    <h4>Khu Vui Chơi Trẻ Em</h4>
                                    <p>Khu vực vui chơi trong nhà và ngoài trời được thiết kế an toàn</p>
                                </div>
                            </div>
                            <div class="activity-card">
                                <img src="../../../assets/image/restaurant.jpg" alt="Nhà hàng gia đình" loading="lazy">
                                <div class="activity-content">
                                    <h4>Nhà Hàng Gia Đình</h4>
                                    <p>Menu đặc biệt cho trẻ em và không gian ăn uống thân thiện</p>
                                </div>
                            </div>
                        </div>

                        <h3>Chính Sách Gia Đình</h3>
                        <div class="family-policies">
                            <div class="policy-item">
                                <h4>Trẻ Em Miễn Phí</h4>
                                <p>Trẻ em dưới 12 tuổi được miễn phí khi ở cùng bố mẹ (tối đa 2 trẻ)</p>
                            </div>
                            <div class="policy-item">
                                <h4>Giường Phụ</h4>
                                <p>Cung cấp miễn phí giường phụ, nôi em bé và các tiện nghi cho trẻ</p>
                            </div>
                            <div class="policy-item">
                                <h4>Check-in Linh Hoạt</h4>
                                <p>Check-in sớm và check-out muộn miễn phí cho gia đình có trẻ nhỏ</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="booking-card family-apartment">
                        <div class="family-badge">
                            <i class="fas fa-home"></i>
                            <span>FAMILY HOME</span>
                        </div>
                        
                        <div class="price-info">
                            <span class="price">5.500.000 VNĐ</span>
                            <span class="per-night">/đêm</span>
                            <div class="family-note">Bao gồm 2 trẻ em dưới 12 tuổi</div>
                        </div>
                        
                        <div class="apartment-specs">
                            <div class="spec-item">
                                <strong>Diện tích:</strong> 80m²
                            </div>
                            <div class="spec-item">
                                <strong>Phòng ngủ:</strong> 2 phòng
                            </div>
                            <div class="spec-item">
                                <strong>Phòng tắm:</strong> 2 phòng
                            </div>
                            <div class="spec-item">
                                <strong>Sức chứa:</strong> 4-6 người
                            </div>
                            <div class="spec-item">
                                <strong>Bếp:</strong> Đầy đủ tiện nghi
                            </div>
                            <div class="spec-item">
                                <strong>Ban công:</strong> Rộng rãi an toàn
                            </div>
                        </div>
                        
                        <div class="family-perks">
                            <h4>Ưu Đãi Gia Đình</h4>
                            <ul>
                                <li>Trẻ em dưới 12 tuổi miễn phí</li>
                                <li>Breakfast buffet gia đình</li>
                                <li>Chỗ đậu xe miễn phí</li>
                                <li>Hoạt động trẻ em miễn phí</li>
                                <li>Late check-out đến 14:00</li>
                                <li>Dịch vụ giặt ủi ưu tiên</li>
                            </ul>
                        </div>
                        
                        <a href="../../dat-phong.php?room=family-apartment" class="btn btn-family-apartment btn-book">
                            <i class="fas fa-home"></i>
                            Đặt Căn Hộ Gia Đình
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

    <!-- Apartment Gallery -->
    <section class="apartment-gallery">
        <div class="container">
            <h3>Hình Ảnh Căn Hộ Family</h3>
            <div class="gallery-grid apartment">
                <div class="gallery-item main">
                    <img src="../../../assets/image/room-suite-ocean.jpg" alt="Căn hộ Family - Phòng khách" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Phòng khách rộng rãi</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="../../../assets/image/room-suite.jpg" alt="Căn hộ Family - Phòng ngủ chính" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Phòng ngủ chính</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="../../../assets/image/room-standard.jpg" alt="Căn hộ Family - Phòng trẻ em" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Phòng ngủ trẻ em</span>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="../../../assets/image/room-deluxe.jpg" alt="Căn hộ Family - Bếp" loading="lazy">
                    <div class="gallery-overlay">
                        <span>Bếp đầy đủ tiện nghi</span>
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
                    <img src="../../../assets/image/room-presidential.jpg" alt="Căn hộ Premium" loading="lazy">
                    <div class="apartment-card-content">
                        <h4>Căn Hộ Premium</h4>
                        <p class="apartment-price">6.500.000 VNĐ/đêm</p>
                        <a href="../can-ho-premium/can-ho-premium-sang-trong.php" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
                
                <div class="apartment-card">
                    <img src="../../../assets/image/room-suite-ocean.jpg" alt="Căn hộ Studio" loading="lazy">
                    <div class="apartment-card-content">
                        <h4>Căn Hộ Studio</h4>
                        <p class="apartment-price">4.800.000 VNĐ/đêm</p>
                        <a href="../can-ho-studio/can-ho-studio-hien-dai.php" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
                
                <div class="apartment-card">
                    <img src="../../../assets/image/room-standard.jpg" alt="Phòng Premium Deluxe Twin" loading="lazy">
                    <div class="apartment-card-content">
                        <h4>Phòng Premium Twin</h4>
                        <p class="apartment-price">3.500.000 VNĐ/đêm</p>
                        <a href="../../rooms/phong-premium-deluxe-twin/phong-premium-deluxe-twin-doi.php" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../../../includes/footer.php'; ?>