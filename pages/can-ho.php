<?php
$page_title = "Căn hộ - Aurora Hotel";
$page_description = "Khám phá các loại căn hộ cao cấp tại Aurora Hotel: Studio hiện đại, Premium sang trọng, Family gia đình với không gian rộng rãi và tiện nghi đầy đủ";
$page_keywords = "căn hộ aurora hotel, căn hộ studio, căn hộ premium, căn hộ family, căn hộ gia đình, khách sạn căn hộ";
$current_page = "can-ho";
$breadcrumb = [
    ['title' => 'Trang chủ', 'url' => '../index.php'],
    ['title' => 'Căn hộ', 'url' => 'can-ho.php', 'active' => true]
];
$page_header = true;
$page_header_title = "Căn hộ Aurora Hotel";
$page_header_subtitle = "Không gian sống hiện đại với đầy đủ tiện nghi như ở nhà";
$page_header_bg = "/assets/image/rooms-hero.jpg";

include '../includes/header.php';
?>

<!-- Apartment Filter & Search -->
<section class="room-filter">
    <div class="container">
        <div class="filter-controls">
            <div class="filter-tabs">
                <button class="filter-btn active" data-filter="all">Tất cả căn hộ</button>
                <button class="filter-btn" data-filter="studio">Studio</button>
                <button class="filter-btn" data-filter="premium">Premium</button>
                <button class="filter-btn" data-filter="family">Family</button>
            </div>
        </div>
    </div>
</section>

<!-- Apartments Grid -->
<section class="rooms-showcase">
    <div class="container">
        <!-- Studio Apartments -->
        <div class="room-category" data-category="studio">
            <div class="category-header">
                <h2>Căn hộ Studio</h2>
                <p>Không gian sống thông minh với thiết kế hiện đại và tiện nghi đầy đủ</p>
            </div>
            
            <div class="rooms-grid">
                <div class="room-card featured" data-room-type="studio">
                    <div class="room-image-container">
                        <img src="<?php echo asset('image/apartment-studio.jpg'); ?>" alt="Căn hộ Studio Hiện Đại" loading="lazy">
                        <div class="room-badge">Phổ biến</div>
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <span>16 ảnh</span>
                        </div>
                    </div>
                    
                    <div class="room-content">
                        <div class="room-header">
                            <h3>Căn hộ Studio Hiện Đại</h3>
                            <div class="room-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">4.6/5</span>
                            </div>
                        </div>
                        
                        <div class="room-details">
                            <div class="room-specs">
                                <span><i class="fas fa-bed"></i> 1 giường Queen</span>
                                <span><i class="fas fa-users"></i> 2 khách</span>
                                <span><i class="fas fa-expand-arrows-alt"></i> 40m²</span>
                                <span><i class="fas fa-eye"></i> View thành phố</span>
                            </div>
                            
                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-wifi"></i>
                                    <span>WiFi tốc độ cao</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-tv"></i>
                                    <span>Smart TV 55"</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-utensils"></i>
                                    <span>Bếp đầy đủ tiện nghi</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-washing-machine"></i>
                                    <span>Máy giặt sấy</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-couch"></i>
                                    <span>Khu vực sinh hoạt</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-parking"></i>
                                    <span>Chỗ đậu xe miễn phí</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">3.200.000 VNĐ</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>
                        
                        <div class="room-actions">
                            <a href="<?php echo url('pages/apartments/can-ho-studio/can-ho-studio-hien-dai.php'); ?>" class="btn-secondary room-details-btn">Xem chi tiết</a>
                            <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn-primary room-book-btn">Đặt ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Premium Apartments -->
        <div class="room-category" data-category="premium">
            <div class="category-header">
                <h2>Căn hộ Premium</h2>
                <p>Đẳng cấp sang trọng với không gian rộng rãi và view tuyệt đẹp</p>
            </div>
            
            <div class="rooms-grid">
                <div class="room-card" data-room-type="premium">
                    <div class="room-image-container">
                        <img src="<?php echo asset('image/apartment-premium.jpg'); ?>" alt="Căn hộ Premium Sang Trọng" loading="lazy">
                        <div class="room-badge">Sang trọng</div>
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <span>20 ảnh</span>
                        </div>
                    </div>
                    
                    <div class="room-content">
                        <div class="room-header">
                            <h3>Căn hộ Premium Sang Trọng</h3>
                            <div class="room-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">4.8/5</span>
                            </div>
                        </div>
                        
                        <div class="room-details">
                            <div class="room-specs">
                                <span><i class="fas fa-bed"></i> 1 giường King</span>
                                <span><i class="fas fa-users"></i> 2-3 khách</span>
                                <span><i class="fas fa-expand-arrows-alt"></i> 65m²</span>
                                <span><i class="fas fa-eye"></i> View biển panorama</span>
                            </div>
                            
                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-crown"></i>
                                    <span>Dịch vụ concierge</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-tv"></i>
                                    <span>Smart TV 65"</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-utensils"></i>
                                    <span>Bếp cao cấp đầy đủ</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-hot-tub"></i>
                                    <span>Jacuzzi riêng</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-wine-glass"></i>
                                    <span>Tủ rượu cao cấp</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-dumbbell"></i>
                                    <span>Phòng gym riêng</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">5.800.000 VNĐ</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>
                        
                        <div class="room-actions">
                            <a href="<?php echo url('pages/apartments/can-ho-premium/can-ho-premium-sang-trong.php'); ?>" class="btn-secondary room-details-btn">Xem chi tiết</a>
                            <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn-primary room-book-btn">Đặt ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Family Apartments -->
        <div class="room-category" data-category="family">
            <div class="category-header">
                <h2>Căn hộ Family</h2>
                <p>Không gian rộng rãi hoàn hảo cho gia đình với nhiều phòng ngủ</p>
            </div>
            
            <div class="rooms-grid">
                <div class="room-card" data-room-type="family">
                    <div class="room-image-container">
                        <img src="<?php echo asset('image/apartment-family.jpg'); ?>" alt="Căn hộ Family Gia Đình" loading="lazy">
                        <div class="room-badge">Gia đình</div>
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <span>24 ảnh</span>
                        </div>
                    </div>
                    
                    <div class="room-content">
                        <div class="room-header">
                            <h3>Căn hộ Family Gia Đình</h3>
                            <div class="room-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">4.9/5</span>
                            </div>
                        </div>
                        
                        <div class="room-details">
                            <div class="room-specs">
                                <span><i class="fas fa-bed"></i> 2 phòng ngủ</span>
                                <span><i class="fas fa-users"></i> 4-6 khách</span>
                                <span><i class="fas fa-expand-arrows-alt"></i> 85m²</span>
                                <span><i class="fas fa-eye"></i> View vườn & biển</span>
                            </div>
                            
                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-home"></i>
                                    <span>2 phòng ngủ riêng biệt</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-tv"></i>
                                    <span>3 Smart TV</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-utensils"></i>
                                    <span>Bếp gia đình đầy đủ</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-baby"></i>
                                    <span>Tiện nghi trẻ em</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-gamepad"></i>
                                    <span>Khu vui chơi trẻ em</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-car"></i>
                                    <span>2 chỗ đậu xe</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">7.200.000 VNĐ</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>
                        
                        <div class="room-actions">
                            <a href="<?php echo url('pages/apartments/can-ho-family/can-ho-family-gia-dinh.php'); ?>" class="btn-secondary room-details-btn">Xem chi tiết</a>
                            <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn-primary room-book-btn">Đặt ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Apartment Features -->
<section class="apartment-features">
    <div class="container">
        <div class="section-header">
            <h2>Tại sao chọn căn hộ Aurora?</h2>
            <p>Trải nghiệm sống như ở nhà với đầy đủ tiện nghi hiện đại</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3>Bếp đầy đủ tiện nghi</h3>
                <p>Tự do nấu nướng với bếp gas, lò vi sóng, tủ lạnh và đầy đủ dụng cụ</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-washing-machine"></i>
                </div>
                <h3>Máy giặt sấy riêng</h3>
                <p>Tiện lợi giặt ủi ngay tại căn hộ với máy giặt sấy cao cấp</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-couch"></i>
                </div>
                <h3>Không gian sinh hoạt</h3>
                <p>Phòng khách rộng rãi với sofa, bàn làm việc và khu vực thư giãn</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-parking"></i>
                </div>
                <h3>Chỗ đậu xe miễn phí</h3>
                <p>Bãi đậu xe an toàn, có mái che và camera giám sát 24/7</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-concierge-bell"></i>
                </div>
                <h3>Dịch vụ housekeeping</h3>
                <p>Dọn dẹp hàng ngày và thay đổi khăn trải giường theo yêu cầu</p>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon">
                    <i class="fas fa-swimming-pool"></i>
                </div>
                <h3>Tiện ích chung</h3>
                <p>Hồ bơi, gym, spa và khu BBQ dành riêng cho khách căn hộ</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Trải nghiệm sống như ở nhà</h2>
            <p>Đặt căn hộ ngay hôm nay để tận hưởng không gian sống thoải mái và tiện nghi</p>
            <div class="cta-actions">
                <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn-primary">Đặt căn hộ ngay</a>
                <a href="<?php echo url('pages/lien-he.php'); ?>" class="btn-secondary">Tư vấn chi tiết</a>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>