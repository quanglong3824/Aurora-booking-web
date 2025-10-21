<?php
$page_title = "Dịch vụ - Aurora Hotel";
$page_description = "Khám phá đầy đủ các dịch vụ cao cấp tại Aurora Hotel: nhà hàng, spa, phòng gym, hồ bơi, hội nghị và nhiều tiện ích khác";
$page_keywords = "dịch vụ aurora hotel, nhà hàng, spa, phòng gym, hồ bơi, hội nghị, tiện ích khách sạn";
$current_page = "dich-vu";
$breadcrumb = [
    ['title' => 'Trang chủ', 'url' => 'index.php'],
    ['title' => 'Dịch vụ', 'url' => 'dich-vu.php', 'active' => true]
];
$page_header_title = "Dịch vụ Aurora Hotel";
$page_header_subtitle = "Trải nghiệm đẳng cấp với đầy đủ tiện ích hiện đại";
$page_header_bg = "/assets/image/services-hero.jpg";

include 'includes/header.php';
?>

<!-- Services Overview -->
<section class="services-overview">
    <div class="container">
        <div class="section-header">
            <h2>Dịch vụ đẳng cấp quốc tế</h2>
            <p>Aurora Hotel tự hào mang đến cho quý khách những dịch vụ tốt nhất với tiêu chuẩn 5 sao</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card featured">
                <div class="service-image">
                    <img src="/assets/image/restaurant.jpg" alt="Nhà hàng Aurora" loading="lazy">
                    <div class="service-overlay">
                        <div class="service-badge">Nổi bật</div>
                    </div>
                </div>
                <div class="service-content">
                    <h3>Nhà hàng Aurora</h3>
                    <p>Thưởng thức ẩm thực đẳng cấp quốc tế với menu được chế biến bởi đầu bếp Michelin</p>
                    <div class="service-features">
                        <span><i class="fas fa-utensils"></i> Fine Dining</span>
                        <span><i class="fas fa-wine-glass"></i> Wine Cellar</span>
                        <span><i class="fas fa-clock"></i> 24/7</span>
                    </div>
                    <a href="#restaurant" class="service-link">Xem chi tiết <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image">
                    <img src="/assets/image/spa.jpg" alt="Aurora Spa" loading="lazy">
                </div>
                <div class="service-content">
                    <h3>Aurora Spa & Wellness</h3>
                    <p>Thư giãn và tái tạo năng lượng với các liệu pháp spa cao cấp</p>
                    <div class="service-features">
                        <span><i class="fas fa-spa"></i> Massage</span>
                        <span><i class="fas fa-leaf"></i> Organic</span>
                        <span><i class="fas fa-hot-tub"></i> Jacuzzi</span>
                    </div>
                    <a href="#spa" class="service-link">Xem chi tiết <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image">
                    <img src="/assets/image/pool.jpg" alt="Hồ bơi" loading="lazy">
                </div>
                <div class="service-content">
                    <h3>Hồ bơi vô cực</h3>
                    <p>Hồ bơi ngoài trời với tầm nhìn panorama tuyệt đẹp ra thành phố</p>
                    <div class="service-features">
                        <span><i class="fas fa-swimming-pool"></i> Infinity Pool</span>
                        <span><i class="fas fa-cocktail"></i> Pool Bar</span>
                        <span><i class="fas fa-sun"></i> Sundeck</span>
                    </div>
                    <a href="#pool" class="service-link">Xem chi tiết <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image">
                    <img src="/assets/image/gym.jpg" alt="Phòng gym" loading="lazy">
                </div>
                <div class="service-content">
                    <h3>Fitness Center</h3>
                    <p>Phòng gym hiện đại với trang thiết bị cao cấp và huấn luyện viên chuyên nghiệp</p>
                    <div class="service-features">
                        <span><i class="fas fa-dumbbell"></i> Modern Equipment</span>
                        <span><i class="fas fa-user-tie"></i> Personal Trainer</span>
                        <span><i class="fas fa-heart"></i> Yoga Class</span>
                    </div>
                    <a href="#fitness" class="service-link">Xem chi tiết <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image">
                    <img src="/assets/image/conference.jpg" alt="Phòng hội nghị" loading="lazy">
                </div>
                <div class="service-content">
                    <h3>Trung tâm hội nghị</h3>
                    <p>Không gian sự kiện chuyên nghiệp với công nghệ hiện đại</p>
                    <div class="service-features">
                        <span><i class="fas fa-users"></i> 500 guests</span>
                        <span><i class="fas fa-microphone"></i> AV Equipment</span>
                        <span><i class="fas fa-wifi"></i> High-speed WiFi</span>
                    </div>
                    <a href="#conference" class="service-link">Xem chi tiết <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            
            <div class="service-card">
                <div class="service-image">
                    <img src="/assets/image/concierge.jpg" alt="Dịch vụ concierge" loading="lazy">
                </div>
                <div class="service-content">
                    <h3>Concierge Service</h3>
                    <p>Dịch vụ hỗ trợ khách hàng 24/7 với đội ngũ chuyên nghiệp</p>
                    <div class="service-features">
                        <span><i class="fas fa-concierge-bell"></i> 24/7 Service</span>
                        <span><i class="fas fa-car"></i> Transportation</span>
                        <span><i class="fas fa-ticket-alt"></i> Booking</span>
                    </div>
                    <a href="#concierge" class="service-link">Xem chi tiết <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Restaurant Section -->
<section id="restaurant" class="service-detail">
    <div class="container">
        <div class="service-detail-content">
            <div class="service-detail-text">
                <h2>Nhà hàng Aurora</h2>
                <p class="lead">Trải nghiệm ẩm thực đẳng cấp quốc tế với menu được chế biến bởi đầu bếp từng làm việc tại các nhà hàng Michelin danh tiếng.</p>
                
                <div class="service-highlights">
                    <div class="highlight-item">
                        <i class="fas fa-award"></i>
                        <div>
                            <h4>Đầu bếp Michelin</h4>
                            <p>Đội ngũ đầu bếp chuyên nghiệp với kinh nghiệm quốc tế</p>
                        </div>
                    </div>
                    
                    <div class="highlight-item">
                        <i class="fas fa-globe"></i>
                        <div>
                            <h4>Ẩm thực đa quốc gia</h4>
                            <p>Menu phong phú từ Á đến Âu, phù hợp mọi khẩu vị</p>
                        </div>
                    </div>
                    
                    <div class="highlight-item">
                        <i class="fas fa-wine-bottle"></i>
                        <div>
                            <h4>Hầm rượu cao cấp</h4>
                            <p>Bộ sưu tập rượu vang từ các vùng nổi tiếng thế giới</p>
                        </div>
                    </div>
                </div>
                
                <div class="service-info">
                    <div class="info-item">
                        <strong>Giờ phục vụ:</strong>
                        <span>06:00 - 23:00 (Buffet sáng: 06:00 - 10:00)</span>
                    </div>
                    <div class="info-item">
                        <strong>Sức chứa:</strong>
                        <span>150 khách</span>
                    </div>
                    <div class="info-item">
                        <strong>Đặt bàn:</strong>
                        <span>+84 28 1234 5678 (ext. 101)</span>
                    </div>
                </div>
                
                <a href="/dat-ban.php" class="btn btn-primary">Đặt bàn ngay</a>
            </div>
            
            <div class="service-detail-gallery">
                <div class="gallery-main">
                    <img src="/assets/image/restaurant-main.jpg" alt="Nhà hàng Aurora" loading="lazy">
                </div>
                <div class="gallery-thumbs">
                    <img src="/assets/image/restaurant-1.jpg" alt="Không gian nhà hàng" loading="lazy">
                    <img src="/assets/image/restaurant-2.jpg" alt="Món ăn đặc sắc" loading="lazy">
                    <img src="/assets/image/restaurant-3.jpg" alt="Hầm rượu" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Spa Section -->
<section id="spa" class="service-detail alt">
    <div class="container">
        <div class="service-detail-content">
            <div class="service-detail-gallery">
                <div class="gallery-main">
                    <img src="/assets/image/spa-main.jpg" alt="Aurora Spa" loading="lazy">
                </div>
                <div class="gallery-thumbs">
                    <img src="/assets/image/spa-1.jpg" alt="Phòng massage" loading="lazy">
                    <img src="/assets/image/spa-2.jpg" alt="Sauna" loading="lazy">
                    <img src="/assets/image/spa-3.jpg" alt="Jacuzzi" loading="lazy">
                </div>
            </div>
            
            <div class="service-detail-text">
                <h2>Aurora Spa & Wellness</h2>
                <p class="lead">Tái tạo năng lượng và thư giãn hoàn toàn với các liệu pháp spa cao cấp sử dụng sản phẩm thiên nhiên organic.</p>
                
                <div class="service-menu">
                    <h4>Menu dịch vụ</h4>
                    <div class="menu-items">
                        <div class="menu-item">
                            <span class="menu-name">Traditional Thai Massage</span>
                            <span class="menu-price">1.200.000 VNĐ</span>
                        </div>
                        <div class="menu-item">
                            <span class="menu-name">Hot Stone Therapy</span>
                            <span class="menu-price">1.500.000 VNĐ</span>
                        </div>
                        <div class="menu-item">
                            <span class="menu-name">Aromatherapy Massage</span>
                            <span class="menu-price">1.300.000 VNĐ</span>
                        </div>
                        <div class="menu-item">
                            <span class="menu-name">Couples Spa Package</span>
                            <span class="menu-price">2.800.000 VNĐ</span>
                        </div>
                    </div>
                </div>
                
                <div class="service-info">
                    <div class="info-item">
                        <strong>Giờ hoạt động:</strong>
                        <span>09:00 - 22:00</span>
                    </div>
                    <div class="info-item">
                        <strong>Số phòng:</strong>
                        <span>8 phòng treatment</span>
                    </div>
                    <div class="info-item">
                        <strong>Đặt lịch:</strong>
                        <span>+84 28 1234 5678 (ext. 102)</span>
                    </div>
                </div>
                
                <a href="/dat-lich-spa.php" class="btn btn-primary">Đặt lịch spa</a>
            </div>
        </div>
    </div>
</section>

<!-- Pool Section -->
<section id="pool" class="service-detail">
    <div class="container">
        <div class="service-detail-content">
            <div class="service-detail-text">
                <h2>Hồ bơi vô cực</h2>
                <p class="lead">Thư giãn tại hồ bơi ngoài trời với thiết kế vô cực, tầm nhìn panorama tuyệt đẹp ra toàn cảnh thành phố từ tầng 25.</p>
                
                <div class="pool-features">
                    <div class="feature-grid">
                        <div class="feature-item">
                            <i class="fas fa-swimming-pool"></i>
                            <h4>Hồ bơi chính</h4>
                            <p>25m x 15m, độ sâu 1.2m - 2.5m</p>
                        </div>
                        
                        <div class="feature-item">
                            <i class="fas fa-child"></i>
                            <h4>Hồ bơi trẻ em</h4>
                            <p>Khu vực an toàn cho trẻ em dưới 12 tuổi</p>
                        </div>
                        
                        <div class="feature-item">
                            <i class="fas fa-hot-tub"></i>
                            <h4>Jacuzzi</h4>
                            <p>Bồn tắm nước nóng thư giãn</p>
                        </div>
                        
                        <div class="feature-item">
                            <i class="fas fa-cocktail"></i>
                            <h4>Pool Bar</h4>
                            <p>Đồ uống và snack bên hồ bơi</p>
                        </div>
                    </div>
                </div>
                
                <div class="service-info">
                    <div class="info-item">
                        <strong>Giờ hoạt động:</strong>
                        <span>06:00 - 22:00</span>
                    </div>
                    <div class="info-item">
                        <strong>Vị trí:</strong>
                        <span>Tầng 25 - Sky Deck</span>
                    </div>
                    <div class="info-item">
                        <strong>Miễn phí:</strong>
                        <span>Khăn tắm, nước uống</span>
                    </div>
                </div>
            </div>
            
            <div class="service-detail-gallery">
                <div class="gallery-main">
                    <img src="/assets/image/pool-main.jpg" alt="Hồ bơi vô cực" loading="lazy">
                </div>
                <div class="gallery-thumbs">
                    <img src="/assets/image/pool-1.jpg" alt="Tầm nhìn từ hồ bơi" loading="lazy">
                    <img src="/assets/image/pool-2.jpg" alt="Pool bar" loading="lazy">
                    <img src="/assets/image/pool-3.jpg" alt="Khu vực thư giãn" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fitness Section -->
<section id="fitness" class="service-detail alt">
    <div class="container">
        <div class="service-detail-content">
            <div class="service-detail-gallery">
                <div class="gallery-main">
                    <img src="/assets/image/gym-main.jpg" alt="Fitness Center" loading="lazy">
                </div>
                <div class="gallery-thumbs">
                    <img src="/assets/image/gym-1.jpg" alt="Khu tập tạ" loading="lazy">
                    <img src="/assets/image/gym-2.jpg" alt="Khu cardio" loading="lazy">
                    <img src="/assets/image/gym-3.jpg" alt="Phòng yoga" loading="lazy">
                </div>
            </div>
            
            <div class="service-detail-text">
                <h2>Fitness Center</h2>
                <p class="lead">Duy trì sức khỏe và thể hình với phòng gym hiện đại, trang thiết bị cao cấp và các lớp học đa dạng.</p>
                
                <div class="fitness-programs">
                    <h4>Chương trình tập luyện</h4>
                    <div class="program-list">
                        <div class="program-item">
                            <div class="program-time">07:00 - 08:00</div>
                            <div class="program-info">
                                <h5>Morning Yoga</h5>
                                <p>Khởi đầu ngày mới với năng lượng tích cực</p>
                            </div>
                        </div>
                        
                        <div class="program-item">
                            <div class="program-time">18:00 - 19:00</div>
                            <div class="program-info">
                                <h5>HIIT Training</h5>
                                <p>Đốt cháy calo hiệu quả với bài tập cường độ cao</p>
                            </div>
                        </div>
                        
                        <div class="program-item">
                            <div class="program-time">19:30 - 20:30</div>
                            <div class="program-info">
                                <h5>Pilates</h5>
                                <p>Tăng cường sức mạnh cốt lõi và độ dẻo dai</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="service-info">
                    <div class="info-item">
                        <strong>Giờ hoạt động:</strong>
                        <span>05:00 - 23:00</span>
                    </div>
                    <div class="info-item">
                        <strong>Diện tích:</strong>
                        <span>300m² với đầy đủ trang thiết bị</span>
                    </div>
                    <div class="info-item">
                        <strong>Personal Trainer:</strong>
                        <span>Có sẵn theo yêu cầu</span>
                    </div>
                </div>
                
                <a href="/dat-lich-gym.php" class="btn btn-primary">Đặt lịch tập</a>
            </div>
        </div>
    </div>
</section>

<!-- Conference Section -->
<section id="conference" class="service-detail">
    <div class="container">
        <div class="service-detail-content">
            <div class="service-detail-text">
                <h2>Trung tâm hội nghị</h2>
                <p class="lead">Không gian sự kiện chuyên nghiệp với công nghệ hiện đại, phù hợp cho hội nghị, hội thảo, tiệc cưới và các sự kiện đặc biệt.</p>
                
                <div class="conference-rooms">
                    <div class="room-item">
                        <h4>Grand Ballroom</h4>
                        <div class="room-specs">
                            <span><i class="fas fa-users"></i> 500 khách</span>
                            <span><i class="fas fa-expand-arrows-alt"></i> 600m²</span>
                            <span><i class="fas fa-microphone"></i> Âm thanh chuyên nghiệp</span>
                        </div>
                        <p>Phòng tiệc lớn với thiết kế sang trọng, phù hợp cho tiệc cưới và sự kiện lớn</p>
                    </div>
                    
                    <div class="room-item">
                        <h4>Executive Meeting Room</h4>
                        <div class="room-specs">
                            <span><i class="fas fa-users"></i> 50 khách</span>
                            <span><i class="fas fa-expand-arrows-alt"></i> 80m²</span>
                            <span><i class="fas fa-tv"></i> LED Display 75"</span>
                        </div>
                        <p>Phòng họp cao cấp với trang thiết bị hiện đại cho các cuộc họp quan trọng</p>
                    </div>
                    
                    <div class="room-item">
                        <h4>Boardroom</h4>
                        <div class="room-specs">
                            <span><i class="fas fa-users"></i> 20 khách</span>
                            <span><i class="fas fa-expand-arrows-alt"></i> 40m²</span>
                            <span><i class="fas fa-video"></i> Video Conference</span>
                        </div>
                        <p>Phòng họp hội đồng quản trị với bàn họp gỗ cao cấp</p>
                    </div>
                </div>
                
                <div class="service-info">
                    <div class="info-item">
                        <strong>Dịch vụ bao gồm:</strong>
                        <span>Âm thanh, ánh sáng, WiFi tốc độ cao</span>
                    </div>
                    <div class="info-item">
                        <strong>Catering:</strong>
                        <span>Menu đa dạng từ coffee break đến tiệc buffet</span>
                    </div>
                    <div class="info-item">
                        <strong>Hỗ trợ kỹ thuật:</strong>
                        <span>Đội ngũ kỹ thuật chuyên nghiệp 24/7</span>
                    </div>
                </div>
                
                <a href="/dat-phong-hop.php" class="btn btn-primary">Đặt phòng họp</a>
            </div>
            
            <div class="service-detail-gallery">
                <div class="gallery-main">
                    <img src="/assets/image/conference-main.jpg" alt="Trung tâm hội nghị" loading="lazy">
                </div>
                <div class="gallery-thumbs">
                    <img src="/assets/image/conference-1.jpg" alt="Grand Ballroom" loading="lazy">
                    <img src="/assets/image/conference-2.jpg" alt="Meeting Room" loading="lazy">
                    <img src="/assets/image/conference-3.jpg" alt="Boardroom" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Concierge Section -->
<section id="concierge" class="service-detail alt">
    <div class="container">
        <div class="service-detail-content">
            <div class="service-detail-gallery">
                <div class="gallery-main">
                    <img src="/assets/image/concierge-main.jpg" alt="Concierge Service" loading="lazy">
                </div>
                <div class="gallery-thumbs">
                    <img src="/assets/image/concierge-1.jpg" alt="Lễ tân" loading="lazy">
                    <img src="/assets/image/concierge-2.jpg" alt="Dịch vụ vận chuyển" loading="lazy">
                    <img src="/assets/image/concierge-3.jpg" alt="Hỗ trợ khách hàng" loading="lazy">
                </div>
            </div>
            
            <div class="service-detail-text">
                <h2>Concierge Service</h2>
                <p class="lead">Đội ngũ concierge chuyên nghiệp sẵn sàng hỗ trợ quý khách 24/7 với mọi nhu cầu trong suốt thời gian lưu trú.</p>
                
                <div class="concierge-services">
                    <h4>Dịch vụ hỗ trợ</h4>
                    <div class="services-list">
                        <div class="service-category">
                            <h5><i class="fas fa-plane"></i> Du lịch & Vận chuyển</h5>
                            <ul>
                                <li>Đưa đón sân bay</li>
                                <li>Thuê xe du lịch</li>
                                <li>Đặt vé máy bay, tàu hỏa</li>
                                <li>Lên kế hoạch tour du lịch</li>
                            </ul>
                        </div>
                        
                        <div class="service-category">
                            <h5><i class="fas fa-ticket-alt"></i> Giải trí & Sự kiện</h5>
                            <ul>
                                <li>Đặt vé xem phim, show diễn</li>
                                <li>Đặt bàn nhà hàng</li>
                                <li>Tổ chức sự kiện riêng</li>
                                <li>Hướng dẫn địa điểm tham quan</li>
                            </ul>
                        </div>
                        
                        <div class="service-category">
                            <h5><i class="fas fa-shopping-bag"></i> Mua sắm & Cá nhân</h5>
                            <ul>
                                <li>Dịch vụ mua sắm cá nhân</li>
                                <li>Giặt ủi express</li>
                                <li>Chăm sóc trẻ em</li>
                                <li>Dịch vụ y tế khẩn cấp</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="service-info">
                    <div class="info-item">
                        <strong>Liên hệ:</strong>
                        <span>+84 28 1234 5678 (ext. 0)</span>
                    </div>
                    <div class="info-item">
                        <strong>Email:</strong>
                        <span>concierge@aurorahotel.com</span>
                    </div>
                    <div class="info-item">
                        <strong>Thời gian:</strong>
                        <span>24/7 - Luôn sẵn sàng phục vụ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Services -->
<section class="additional-services">
    <div class="container">
        <div class="section-header">
            <h2>Dịch vụ bổ sung</h2>
            <p>Những tiện ích khác giúp hoàn thiện trải nghiệm của quý khách</p>
        </div>
        
        <div class="additional-grid">
            <div class="additional-item">
                <i class="fas fa-wifi"></i>
                <h4>WiFi miễn phí</h4>
                <p>Internet tốc độ cao trong toàn bộ khách sạn</p>
            </div>
            
            <div class="additional-item">
                <i class="fas fa-parking"></i>
                <h4>Bãi đỗ xe</h4>
                <p>200 chỗ đỗ xe an toàn với dịch vụ valet</p>
            </div>
            
            <div class="additional-item">
                <i class="fas fa-shield-alt"></i>
                <h4>Két an toàn</h4>
                <p>Két sắt điện tử trong mỗi phòng</p>
            </div>
            
            <div class="additional-item">
                <i class="fas fa-baby"></i>
                <h4>Dịch vụ trẻ em</h4>
                <p>Khu vui chơi và chăm sóc trẻ em chuyên nghiệp</p>
            </div>
            
            <div class="additional-item">
                <i class="fas fa-paw"></i>
                <h4>Pet-friendly</h4>
                <p>Chào đón thú cưng với dịch vụ chăm sóc đặc biệt</p>
            </div>
            
            <div class="additional-item">
                <i class="fas fa-accessible-icon"></i>
                <h4>Tiện nghi khuyết tật</h4>
                <p>Thiết kế thân thiện với người khuyết tật</p>
            </div>
        </div>
    </div>
</section>

<!-- Service Booking CTA -->
<section class="service-cta">
    <div class="container">
        <div class="cta-content">
            <h2>Đặt dịch vụ ngay hôm nay</h2>
            <p>Liên hệ với chúng tôi để đặt dịch vụ hoặc tìm hiểu thêm thông tin</p>
            <div class="cta-buttons">
                <a href="tel:+842812345678" class="btn btn-primary">
                    <i class="fas fa-phone"></i> Gọi ngay
                </a>
                <a href="/lien-he.php" class="btn btn-outline">
                    <i class="fas fa-envelope"></i> Gửi yêu cầu
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Services Page Specific Styles */
.services-overview {
    padding: 80px 0;
    background: #f8f9fa;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 60px;
}

.service-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.service-card.featured {
    grid-column: span 2;
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.service-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.service-card.featured .service-image {
    height: 100%;
}

.service-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.service-card:hover .service-image img {
    transform: scale(1.05);
}

.service-overlay {
    position: absolute;
    top: 20px;
    right: 20px;
}

.service-badge {
    background: #d4af37;
    color: white;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
}

.service-content {
    padding: 30px;
}

.service-content h3 {
    font-size: 1.4rem;
    color: #2c3e50;
    margin-bottom: 15px;
}

.service-content p {
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 20px;
}

.service-features {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin-bottom: 25px;
}

.service-features span {
    display: flex;
    align-items: center;
    gap: 8px;
    background: #f8f9fa;
    padding: 8px 12px;
    border-radius: 15px;
    font-size: 0.85rem;
    color: #6c757d;
}

.service-features i {
    color: #d4af37;
}

.service-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #d4af37;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.3s ease;
}

.service-link:hover {
    color: #b8941f;
}

.service-detail {
    padding: 100px 0;
    background: white;
}

.service-detail.alt {
    background: #f8f9fa;
}

.service-detail-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.service-detail-text h2 {
    font-size: 2.5rem;
    color: #2c3e50;
    margin-bottom: 20px;
}

.service-detail-text .lead {
    font-size: 1.2rem;
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 40px;
}

.service-highlights {
    margin-bottom: 40px;
}

.highlight-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 25px;
}

.highlight-item i {
    font-size: 1.5rem;
    color: #d4af37;
    margin-top: 5px;
    flex-shrink: 0;
}

.highlight-item h4 {
    color: #2c3e50;
    margin-bottom: 8px;
    font-size: 1.1rem;
}

.highlight-item p {
    color: #6c757d;
    line-height: 1.5;
}

.service-info {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 15px;
    margin-bottom: 30px;
}

.info-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #e9ecef;
}

.info-item:last-child {
    border-bottom: none;
}

.info-item strong {
    color: #2c3e50;
    font-weight: 600;
}

.info-item span {
    color: #6c757d;
}

.service-detail-gallery {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.gallery-main {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}

.gallery-main img {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

.gallery-thumbs {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}

.gallery-thumbs img {
    width: 100%;
    height: 100px;
    object-fit: cover;
    border-radius: 10px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.gallery-thumbs img:hover {
    transform: scale(1.05);
}

.service-menu {
    margin-bottom: 40px;
}

.service-menu h4 {
    color: #2c3e50;
    margin-bottom: 20px;
    font-size: 1.3rem;
}

.menu-items {
    background: white;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.menu-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
    border-bottom: 1px solid #f8f9fa;
}

.menu-item:last-child {
    border-bottom: none;
}

.menu-name {
    font-weight: 600;
    color: #2c3e50;
}

.menu-price {
    color: #d4af37;
    font-weight: 700;
}

.pool-features {
    margin-bottom: 40px;
}

.feature-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 15px;
}

.feature-item i {
    font-size: 1.5rem;
    color: #d4af37;
    flex-shrink: 0;
}

.feature-item h4 {
    color: #2c3e50;
    margin-bottom: 5px;
    font-size: 1rem;
}

.feature-item p {
    color: #6c757d;
    font-size: 0.9rem;
}

.fitness-programs {
    margin-bottom: 40px;
}

.fitness-programs h4 {
    color: #2c3e50;
    margin-bottom: 20px;
    font-size: 1.3rem;
}

.program-list {
    background: white;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.program-item {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 15px 0;
    border-bottom: 1px solid #f8f9fa;
}

.program-item:last-child {
    border-bottom: none;
}

.program-time {
    background: #d4af37;
    color: white;
    padding: 8px 15px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 0.9rem;
    flex-shrink: 0;
}

.program-info h5 {
    color: #2c3e50;
    margin-bottom: 5px;
    font-size: 1rem;
}

.program-info p {
    color: #6c757d;
    font-size: 0.9rem;
}

.conference-rooms {
    margin-bottom: 40px;
}

.room-item {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 15px;
    margin-bottom: 20px;
}

.room-item h4 {
    color: #2c3e50;
    margin-bottom: 15px;
    font-size: 1.2rem;
}

.room-specs {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin-bottom: 15px;
}

.room-specs span {
    display: flex;
    align-items: center;
    gap: 8px;
    background: white;
    padding: 8px 12px;
    border-radius: 15px;
    font-size: 0.85rem;
    color: #6c757d;
}

.room-specs i {
    color: #d4af37;
}

.room-item p {
    color: #6c757d;
    line-height: 1.5;
}

.concierge-services {
    margin-bottom: 40px;
}

.concierge-services h4 {
    color: #2c3e50;
    margin-bottom: 25px;
    font-size: 1.3rem;
}

.services-list {
    display: grid;
    grid-template-columns: 1fr;
    gap: 25px;
}

.service-category {
    background: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.service-category h5 {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #2c3e50;
    margin-bottom: 15px;
    font-size: 1.1rem;
}

.service-category i {
    color: #d4af37;
}

.service-category ul {
    list-style: none;
    padding: 0;
}

.service-category li {
    padding: 8px 0;
    color: #6c757d;
    border-bottom: 1px solid #f8f9fa;
    position: relative;
    padding-left: 20px;
}

.service-category li:before {
    content: '•';
    color: #d4af37;
    position: absolute;
    left: 0;
}

.service-category li:last-child {
    border-bottom: none;
}

.additional-services {
    padding: 80px 0;
    background: #f8f9fa;
}

.additional-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 60px;
}

.additional-item {
    background: white;
    padding: 30px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.additional-item:hover {
    transform: translateY(-5px);
}

.additional-item i {
    font-size: 2.5rem;
    color: #d4af37;
    margin-bottom: 20px;
}

.additional-item h4 {
    color: #2c3e50;
    margin-bottom: 15px;
    font-size: 1.1rem;
}

.additional-item p {
    color: #6c757d;
    line-height: 1.5;
    font-size: 0.95rem;
}

.service-cta {
    padding: 100px 0;
    background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
    color: white;
    text-align: center;
}

.service-cta .cta-content h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.service-cta .cta-content p {
    font-size: 1.2rem;
    margin-bottom: 40px;
    opacity: 0.9;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-buttons .btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .service-card.featured {
        grid-column: span 1;
        display: block;
    }
    
    .service-detail-content {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .feature-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .services-grid {
        grid-template-columns: 1fr;
    }
    
    .service-detail-text h2 {
        font-size: 2rem;
    }
    
    .gallery-thumbs {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .cta-buttons .btn {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .service-content {
        padding: 20px;
    }
    
    .service-features {
        flex-direction: column;
    }
    
    .info-item {
        flex-direction: column;
        align-items: flex-start;
        gap: 5px;
    }
    
    .room-specs {
        flex-direction: column;
    }
    
    .program-item {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
}
</style>

<?php include 'includes/footer.php'; ?>