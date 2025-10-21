<?php
$page_title = "Phòng nghỉ - Aurora Hotel";
$page_description = "Khám phá các loại phòng nghỉ sang trọng tại Aurora Hotel: phòng tiêu chuẩn, cao cấp, suite với đầy đủ tiện nghi hiện đại";
$page_keywords = "phòng nghỉ aurora hotel, đặt phòng, phòng tiêu chuẩn, phòng cao cấp, suite, khách sạn sang trọng";
$current_page = "phong";
$breadcrumb = [
    ['title' => 'Trang chủ', 'url' => 'index.php'],
    ['title' => 'Phòng nghỉ', 'url' => 'phong.php', 'active' => true]
];
$page_header_title = "Phòng nghỉ Aurora Hotel";
$page_header_subtitle = "Không gian nghỉ dưỡng sang trọng với tiêu chuẩn 5 sao";
$page_header_bg = "/assets/image/rooms-hero.jpg";

include 'includes/header.php';
?>

<!-- Room Filter & Search -->
<section class="room-filter">
    <div class="container">
        <div class="filter-controls">
            <div class="filter-tabs">
                <button class="filter-btn active" data-filter="all">Tất cả phòng</button>
                <button class="filter-btn" data-filter="standard">Tiêu chuẩn</button>
                <button class="filter-btn" data-filter="deluxe">Cao cấp</button>
                <button class="filter-btn" data-filter="suite">Suite</button>
                <button class="filter-btn" data-filter="presidential">Presidential</button>
            </div>
            
            <div class="filter-options">
                <div class="price-filter">
                    <label>Giá phòng:</label>
                    <select id="priceRange">
                        <option value="">Tất cả</option>
                        <option value="1000000-2000000">1-2 triệu VNĐ</option>
                        <option value="2000000-3000000">2-3 triệu VNĐ</option>
                        <option value="3000000-5000000">3-5 triệu VNĐ</option>
                        <option value="5000000+">Trên 5 triệu VNĐ</option>
                    </select>
                </div>
                
                <div class="capacity-filter">
                    <label>Số khách:</label>
                    <select id="capacity">
                        <option value="">Tất cả</option>
                        <option value="1-2">1-2 khách</option>
                        <option value="3-4">3-4 khách</option>
                        <option value="5+">5+ khách</option>
                    </select>
                </div>
                
                <div class="view-filter">
                    <label>Tầm nhìn:</label>
                    <select id="view">
                        <option value="">Tất cả</option>
                        <option value="city">Thành phố</option>
                        <option value="garden">Vườn</option>
                        <option value="pool">Hồ bơi</option>
                        <option value="ocean">Biển</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Rooms Grid -->
<section class="rooms-showcase">
    <div class="container">
        <!-- Standard Rooms -->
        <div class="room-category" data-category="standard">
            <div class="category-header">
                <h2>Phòng tiêu chuẩn</h2>
                <p>Không gian thoải mái với đầy đủ tiện nghi cơ bản</p>
            </div>
            
            <div class="rooms-grid">
                <div class="room-card featured" data-room-type="standard" data-price="1200000" data-capacity="2" data-view="city">
                    <div class="room-image-container">
                        <img src="/assets/image/room-standard.jpg" alt="Phòng tiêu chuẩn" loading="lazy">
                        <div class="room-badge">Phổ biến</div>
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <span>8 ảnh</span>
                        </div>
                    </div>
                    
                    <div class="room-content">
                        <div class="room-header">
                            <h3>Standard City View</h3>
                            <div class="room-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="rating-text">4.2/5</span>
                            </div>
                        </div>
                        
                        <div class="room-details">
                            <div class="room-specs">
                                <span><i class="fas fa-bed"></i> 1 giường đôi</span>
                                <span><i class="fas fa-users"></i> 2 khách</span>
                                <span><i class="fas fa-expand-arrows-alt"></i> 25m²</span>
                                <span><i class="fas fa-eye"></i> View thành phố</span>
                            </div>
                            
                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-wifi"></i>
                                    <span>WiFi miễn phí</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-tv"></i>
                                    <span>TV LCD 42"</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-snowflake"></i>
                                    <span>Điều hòa</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-coffee"></i>
                                    <span>Minibar</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>Két an toàn</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-bath"></i>
                                    <span>Phòng tắm riêng</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">1.200.000 VNĐ</span>
                                <span class="price-period">/đêm</span>
                                <span class="original-price">1.500.000 VNĐ</span>
                            </div>
                            <div class="discount-badge">Giảm 20%</div>
                        </div>
                        
                        <div class="room-actions">
                            <button class="btn-secondary room-details-btn">Xem chi tiết</button>
                            <button class="btn-primary room-book-btn">Đặt ngay</button>
                        </div>
                    </div>
                </div>
                
                <div class="room-card" data-room-type="standard" data-price="1300000" data-capacity="2" data-view="garden">
                    <div class="room-image-container">
                        <img src="/assets/image/room-standard-garden.jpg" alt="Phòng tiêu chuẩn view vườn" loading="lazy">
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <span>6 ảnh</span>
                        </div>
                    </div>
                    
                    <div class="room-content">
                        <div class="room-header">
                            <h3>Standard Garden View</h3>
                            <div class="room-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="rating-text">4.5/5</span>
                            </div>
                        </div>
                        
                        <div class="room-details">
                            <div class="room-specs">
                                <span><i class="fas fa-bed"></i> 1 giường đôi</span>
                                <span><i class="fas fa-users"></i> 2 khách</span>
                                <span><i class="fas fa-expand-arrows-alt"></i> 28m²</span>
                                <span><i class="fas fa-tree"></i> View vườn</span>
                            </div>
                            
                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-wifi"></i>
                                    <span>WiFi miễn phí</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-tv"></i>
                                    <span>TV LCD 42"</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-snowflake"></i>
                                    <span>Điều hòa</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-coffee"></i>
                                    <span>Minibar</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-leaf"></i>
                                    <span>Ban công riêng</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-bath"></i>
                                    <span>Phòng tắm riêng</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">1.300.000 VNĐ</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>
                        
                        <div class="room-actions">
                            <button class="btn-secondary room-details-btn">Xem chi tiết</button>
                            <button class="btn-primary room-book-btn">Đặt ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Deluxe Rooms -->
        <div class="room-category" data-category="deluxe">
            <div class="category-header">
                <h2>Phòng cao cấp</h2>
                <p>Không gian rộng rãi với tầm nhìn đẹp và tiện nghi cao cấp</p>
            </div>
            
            <div class="rooms-grid">
                <div class="room-card" data-room-type="deluxe" data-price="2000000" data-capacity="3" data-view="city">
                    <div class="room-image-container">
                        <img src="/assets/image/room-deluxe.jpg" alt="Phòng cao cấp" loading="lazy">
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <span>12 ảnh</span>
                        </div>
                    </div>
                    
                    <div class="room-content">
                        <div class="room-header">
                            <h3>Deluxe City View</h3>
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
                                <span><i class="fas fa-bed"></i> 1 giường king</span>
                                <span><i class="fas fa-users"></i> 2-3 khách</span>
                                <span><i class="fas fa-expand-arrows-alt"></i> 35m²</span>
                                <span><i class="fas fa-eye"></i> View thành phố</span>
                            </div>
                            
                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-wifi"></i>
                                    <span>WiFi miễn phí</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-tv"></i>
                                    <span>Smart TV 55"</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-bath"></i>
                                    <span>Bồn tắm</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-concierge-bell"></i>
                                    <span>Room service 24/7</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-couch"></i>
                                    <span>Khu vực nghỉ ngơi</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-wine-glass"></i>
                                    <span>Minibar cao cấp</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">2.000.000 VNĐ</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>
                        
                        <div class="room-actions">
                            <button class="btn-secondary room-details-btn">Xem chi tiết</button>
                            <button class="btn-primary room-book-btn">Đặt ngay</button>
                        </div>
                    </div>
                </div>
                
                <div class="room-card" data-room-type="deluxe" data-price="2200000" data-capacity="4" data-view="pool">
                    <div class="room-image-container">
                        <img src="/assets/image/room-deluxe-pool.jpg" alt="Phòng cao cấp view hồ bơi" loading="lazy">
                        <div class="room-badge">Yêu thích</div>
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <span>10 ảnh</span>
                        </div>
                    </div>
                    
                    <div class="room-content">
                        <div class="room-header">
                            <h3>Deluxe Pool View</h3>
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
                                <span><i class="fas fa-bed"></i> 2 giường đôi</span>
                                <span><i class="fas fa-users"></i> 2-4 khách</span>
                                <span><i class="fas fa-expand-arrows-alt"></i> 40m²</span>
                                <span><i class="fas fa-swimming-pool"></i> View hồ bơi</span>
                            </div>
                            
                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-wifi"></i>
                                    <span>WiFi miễn phí</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-tv"></i>
                                    <span>Smart TV 55"</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-hot-tub"></i>
                                    <span>Bồn tắm jacuzzi</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-leaf"></i>
                                    <span>Ban công rộng</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-coffee"></i>
                                    <span>Máy pha cà phê</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-robe"></i>
                                    <span>Áo choàng tắm</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">2.200.000 VNĐ</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>
                        
                        <div class="room-actions">
                            <button class="btn-secondary room-details-btn">Xem chi tiết</button>
                            <button class="btn-primary room-book-btn">Đặt ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Suite Rooms -->
        <div class="room-category" data-category="suite">
            <div class="category-header">
                <h2>Phòng Suite</h2>
                <p>Không gian sang trọng với khu vực riêng biệt và dịch vụ VIP</p>
            </div>
            
            <div class="rooms-grid">
                <div class="room-card" data-room-type="suite" data-price="3500000" data-capacity="4" data-view="city">
                    <div class="room-image-container">
                        <img src="/assets/image/room-suite.jpg" alt="Suite" loading="lazy">
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <span>15 ảnh</span>
                        </div>
                    </div>
                    
                    <div class="room-content">
                        <div class="room-header">
                            <h3>Executive Suite</h3>
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
                                <span><i class="fas fa-bed"></i> 1 giường king</span>
                                <span><i class="fas fa-users"></i> 2-4 khách</span>
                                <span><i class="fas fa-expand-arrows-alt"></i> 65m²</span>
                                <span><i class="fas fa-eye"></i> View panoramic</span>
                            </div>
                            
                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-crown"></i>
                                    <span>Dịch vụ VIP</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-hot-tub"></i>
                                    <span>Jacuzzi riêng</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-glass-cheers"></i>
                                    <span>Minibar cao cấp</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-couch"></i>
                                    <span>Phòng khách riêng</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-utensils"></i>
                                    <span>Bếp nhỏ</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-concierge-bell"></i>
                                    <span>Butler service</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">3.500.000 VNĐ</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>
                        
                        <div class="room-actions">
                            <button class="btn-secondary room-details-btn">Xem chi tiết</button>
                            <button class="btn-primary room-book-btn">Đặt ngay</button>
                        </div>
                    </div>
                </div>
                
                <div class="room-card featured" data-room-type="suite" data-price="4200000" data-capacity="6" data-view="ocean">
                    <div class="room-image-container">
                        <img src="/assets/image/room-suite-ocean.jpg" alt="Suite view biển" loading="lazy">
                        <div class="room-badge">Cao cấp nhất</div>
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <span>18 ảnh</span>
                        </div>
                    </div>
                    
                    <div class="room-content">
                        <div class="room-header">
                            <h3>Ocean View Suite</h3>
                            <div class="room-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">5.0/5</span>
                            </div>
                        </div>
                        
                        <div class="room-details">
                            <div class="room-specs">
                                <span><i class="fas fa-bed"></i> 1 giường king + sofa bed</span>
                                <span><i class="fas fa-users"></i> 4-6 khách</span>
                                <span><i class="fas fa-expand-arrows-alt"></i> 80m²</span>
                                <span><i class="fas fa-water"></i> View biển</span>
                            </div>
                            
                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-crown"></i>
                                    <span>Dịch vụ VIP</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-hot-tub"></i>
                                    <span>Jacuzzi ngoài trời</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-utensils"></i>
                                    <span>Bếp đầy đủ</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-wine-glass"></i>
                                    <span>Wine cellar</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-dumbbell"></i>
                                    <span>Gym riêng</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-car"></i>
                                    <span>Xe đưa đón riêng</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">4.200.000 VNĐ</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>
                        
                        <div class="room-actions">
                            <button class="btn-secondary room-details-btn">Xem chi tiết</button>
                            <button class="btn-primary room-book-btn">Đặt ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Presidential Suite -->
        <div class="room-category" data-category="presidential">
            <div class="category-header">
                <h2>Presidential Suite</h2>
                <p>Đỉnh cao của sự sang trọng và đẳng cấp</p>
            </div>
            
            <div class="rooms-grid">
                <div class="room-card exclusive" data-room-type="presidential" data-price="8000000" data-capacity="8" data-view="panoramic">
                    <div class="room-image-container">
                        <img src="/assets/image/room-presidential.jpg" alt="Presidential Suite" loading="lazy">
                        <div class="room-badge exclusive">Độc quyền</div>
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <span>25 ảnh</span>
                        </div>
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
                                <span class="rating-text">5.0/5</span>
                            </div>
                        </div>
                        
                        <div class="room-details">
                            <div class="room-specs">
                                <span><i class="fas fa-bed"></i> 2 phòng ngủ</span>
                                <span><i class="fas fa-users"></i> 6-8 khách</span>
                                <span><i class="fas fa-expand-arrows-alt"></i> 150m²</span>
                                <span><i class="fas fa-crown"></i> Tầng cao nhất</span>
                            </div>
                            
                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-crown"></i>
                                    <span>Dịch vụ hoàng gia</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-swimming-pool"></i>
                                    <span>Hồ bơi riêng</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-utensils"></i>
                                    <span>Đầu bếp riêng</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-spa"></i>
                                    <span>Spa room riêng</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-helicopter"></i>
                                    <span>Sân đỗ trực thăng</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>Bảo vệ 24/7</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">8.000.000 VNĐ</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>
                        
                        <div class="room-actions">
                            <button class="btn-secondary room-details-btn">Xem chi tiết</button>
                            <button class="btn-primary room-book-btn">Liên hệ đặt phòng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Room Comparison -->
<section class="room-comparison">
    <div class="container">
        <div class="section-header">
            <h2>So sánh các loại phòng</h2>
            <p>Tìm hiểu chi tiết về từng loại phòng để lựa chọn phù hợp nhất</p>
        </div>
        
        <div class="comparison-table">
            <table>
                <thead>
                    <tr>
                        <th>Tiện ích</th>
                        <th>Standard</th>
                        <th>Deluxe</th>
                        <th>Suite</th>
                        <th>Presidential</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Diện tích</td>
                        <td>25-28m²</td>
                        <td>35-40m²</td>
                        <td>65-80m²</td>
                        <td>150m²</td>
                    </tr>
                    <tr>
                        <td>Số khách tối đa</td>
                        <td>2 khách</td>
                        <td>2-4 khách</td>
                        <td>4-6 khách</td>
                        <td>6-8 khách</td>
                    </tr>
                    <tr>
                        <td>WiFi miễn phí</td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td>Room Service 24/7</td>
                        <td><i class="fas fa-times text-danger"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td>Bồn tắm Jacuzzi</td>
                        <td><i class="fas fa-times text-danger"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td>Butler Service</td>
                        <td><i class="fas fa-times text-danger"></i></td>
                        <td><i class="fas fa-times text-danger"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td>Hồ bơi riêng</td>
                        <td><i class="fas fa-times text-danger"></i></td>
                        <td><i class="fas fa-times text-danger"></i></td>
                        <td><i class="fas fa-times text-danger"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Special Offers -->
<section class="special-offers">
    <div class="container">
        <div class="section-header">
            <h2>Ưu đãi đặc biệt</h2>
            <p>Những gói ưu đãi hấp dẫn dành cho quý khách</p>
        </div>
        
        <div class="offers-grid">
            <div class="offer-card">
                <div class="offer-badge">Giảm 30%</div>
                <h3>Gói nghỉ dưỡng cuối tuần</h3>
                <p>Đặt phòng 2 đêm cuối tuần, nhận ngay ưu đãi 30% và bữa sáng miễn phí</p>
                <div class="offer-validity">Có hiệu lực đến 31/12/2024</div>
                <button class="btn-offer">Đặt ngay</button>
            </div>
            
            <div class="offer-card">
                <div class="offer-badge">Miễn phí</div>
                <h3>Gói trăng mật</h3>
                <p>Trang trí phòng lãng mạn, champagne và spa couple miễn phí cho cặp đôi mới cưới</p>
                <div class="offer-validity">Áp dụng quanh năm</div>
                <button class="btn-offer">Tìm hiểu thêm</button>
            </div>
            
            <div class="offer-card">
                <div class="offer-badge">Tặng kèm</div>
                <h3>Gói gia đình</h3>
                <p>Đặt Suite, nhận miễn phí phòng trẻ em và vé tham quan cho cả gia đình</p>
                <div class="offer-validity">Áp dụng từ T2-T6</div>
                <button class="btn-offer">Đặt ngay</button>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<script>
// Room filtering functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const roomCategories = document.querySelectorAll('.room-category');
    const priceFilter = document.getElementById('priceRange');
    const capacityFilter = document.getElementById('capacity');
    const viewFilter = document.getElementById('view');
    
    // Category filtering
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filter = this.dataset.filter;
            
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Show/hide categories
            roomCategories.forEach(category => {
                if (filter === 'all' || category.dataset.category === filter) {
                    category.style.display = 'block';
                } else {
                    category.style.display = 'none';
                }
            });
        });
    });
    
    // Advanced filtering
    function applyFilters() {
        const priceRange = priceFilter.value;
        const capacity = capacityFilter.value;
        const view = viewFilter.value;
        
        document.querySelectorAll('.room-card').forEach(card => {
            let show = true;
            
            // Price filter
            if (priceRange) {
                const cardPrice = parseInt(card.dataset.price);
                const [min, max] = priceRange.includes('+') 
                    ? [parseInt(priceRange.replace('+', '')), Infinity]
                    : priceRange.split('-').map(p => parseInt(p));
                
                if (cardPrice < min || cardPrice > max) {
                    show = false;
                }
            }
            
            // Capacity filter
            if (capacity && card.dataset.capacity) {
                const cardCapacity = parseInt(card.dataset.capacity);
                if (capacity === '1-2' && cardCapacity > 2) show = false;
                if (capacity === '3-4' && (cardCapacity < 3 || cardCapacity > 4)) show = false;
                if (capacity === '5+' && cardCapacity < 5) show = false;
            }
            
            // View filter
            if (view && card.dataset.view !== view) {
                show = false;
            }
            
            card.style.display = show ? 'block' : 'none';
        });
    }
    
    priceFilter.addEventListener('change', applyFilters);
    capacityFilter.addEventListener('change', applyFilters);
    viewFilter.addEventListener('change', applyFilters);
    
    // Room booking functionality
    document.querySelectorAll('.room-book-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const roomCard = this.closest('.room-card');
            const roomType = roomCard.querySelector('h3').textContent;
            const price = roomCard.querySelector('.current-price').textContent;
            
            // Redirect to booking page with room info
            window.location.href = `dat-phong.php?room=${encodeURIComponent(roomType)}&price=${encodeURIComponent(price)}`;
        });
    });
    
    // Room details modal (placeholder)
    document.querySelectorAll('.room-details-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const roomCard = this.closest('.room-card');
            const roomType = roomCard.querySelector('h3').textContent;
            alert(`Chi tiết phòng ${roomType} sẽ được hiển thị trong modal`);
        });
    });
});
</script>