<?php
// Nạp dữ liệu trang từ file riêng trong includes/data-pages
include '../includes/data-pages/data-dich-vu.php';
include '../includes/header.php';
?>
<!-- Services Overview -->
<section class="services-overview" style="margin-top: 120px;">
    <div class="container">
        <div class="section-header">
            <h2>Dịch vụ đẳng cấp quốc tế</h2>
            <p>Aurora Hotel Plaza tự hào mang đến cho quý khách những dịch vụ tốt nhất với tiêu chuẩn 5 sao</p>
        </div>
        
        <div class="services-grid">
            <div class="service-card featured">
                <div class="service-image">
                    <img src="<?php echo asset('img/restaurant/NHA-HANG-AURORA-HOTEL-1.jpg'); ?>" alt="Nhà hàng Aurora" loading="lazy">
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
            
            <!-- <div class="service-card">
                <div class="service-image">
                    <img src="/assets/img/hero banner/AURORA-HOTEL-BIEN-HOA-6.jpg" alt="Aurora Spa" loading="lazy">
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
            </div> -->
            
            <div class="service-card">
                <div class="service-image">
                    <img src="<?php echo asset('img/service/pool/pool.jpg'); ?>" alt="Hồ bơi" loading="lazy">
                </div>
                <div class="service-content">
                    <h3>Hồ bơi</h3>
                    <p>Hồ bơi ngoài trời với tầm nhìn ra thành phố</p>
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
                    <img src="<?php echo asset('img/service/gym/GYM-AURORA-HOTEL-1.jpg'); ?>" alt="Phòng gym" loading="lazy">
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
                    <img src="<?php echo asset('img/service/meet/Hoi-nghi-aurora-5.jpg'); ?>" alt="Phòng hội nghị" loading="lazy">
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
                    <img src="<?php echo asset('img/hero banner/AURORA-HOTEL-BIEN-HOA-3.jpg'); ?>" alt="Dịch vụ concierge" loading="lazy">
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

<section id="office" class="service-detail">
    <div class="container">
        <div class="service-detail-content">
            <div class="service-detail-text">
                <h2>Văn phòng cho thuê</h2>
                <p class="lead">Không gian làm việc chuyên nghiệp ngay trung tâm Biên Hòa, linh hoạt diện tích, đầy đủ tiện ích và dịch vụ hỗ trợ.</p>

                <div class="service-highlights">
                    <div class="highlight-item">
                        <i class="fas fa-building"></i>
                        <div>
                            <h4>Không gian linh hoạt</h4>
                            <p>Từ 20m² đến 200m², phù hợp doanh nghiệp mọi quy mô</p>
                        </div>
                    </div>

                    <div class="highlight-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Vị trí trung tâm</h4>
                            <p>Nằm trong khu phức hợp Aurora Hotel Plaza</p>
                        </div>
                    </div>

                    <div class="highlight-item">
                        <i class="fas fa-shield-alt"></i>
                        <div>
                            <h4>An ninh 24/7</h4>
                            <p>Hệ thống kiểm soát ra vào và camera giám sát</p>
                        </div>
                    </div>
                </div>

                <div class="service-info">
                    <div class="info-item">
                        <strong>Diện tích:</strong>
                        <span>20m² – 200m² (chia theo nhu cầu)</span>
                    </div>
                    <div class="info-item">
                        <strong>Giá thuê:</strong>
                        <span>Từ 12.000.000 VNĐ/tháng</span>
                    </div>
                    <div class="info-item">
                        <strong>Tiện ích:</strong>
                        <span>Internet tốc độ cao, lễ tân, vệ sinh, bãi xe</span>
                    </div>
                </div>

                <a href="/lien-he.php" class="btn btn-primary">Liên hệ thuê văn phòng</a>
            </div>

            <div class="service-detail-gallery">
                <div class="gallery-main">
                    <img src="<?php echo asset('img/service/office/Van-phong-cho-thue-Aurora-1.jpg'); ?>" alt="Văn phòng cho thuê Aurora" loading="lazy">
                </div>
                <div class="gallery-thumbs">
                    <img src="<?php echo asset('img/service/office/Van-phong-cho-thue-Aurora-2.jpg'); ?>" alt="Không gian làm việc hiện đại" loading="lazy">
                    <img src="<?php echo asset('img/service/office/Van-phong-cho-thue-Aurora-3.jpg'); ?>" alt="Khu vực tiếp khách" loading="lazy">
                    <img src="<?php echo asset('img/service/office/Van-phong-cho-thue-Aurora-4.jpg'); ?>" alt="Phòng họp riêng" loading="lazy">
                    <img src="<?php echo asset('img/service/office/Van-phong-cho-thue-Aurora-5.jpg'); ?>" alt="Tiện ích văn phòng" loading="lazy">
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
                        <span>06:00 - 22:00 (Buffet sáng: 06:00 - 10:00)</span>
                    </div>
                    <div class="info-item">
                        <strong>Sức chứa:</strong>
                        <span>200 khách</span>
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
                    <img src="<?php echo asset('img/restaurant/NHA-HANG-AURORA-HOTEL-1.jpg'); ?>" alt="Nhà hàng Aurora" loading="lazy">
                </div>
                <div class="gallery-thumbs">
                    <img src="<?php echo asset('img/restaurant/NHA-HANG-AURORA-HOTEL-10.jpg'); ?>" alt="Không gian nhà hàng" loading="lazy">
                    <img src="<?php echo asset('img/restaurant/NHA-HANG-AURORA-HOTEL-11.jpg'); ?>" alt="Món ăn đặc sắc" loading="lazy">
                    <img src="<?php echo asset('img/restaurant/NHA-HANG-AURORA-HOTEL-14.jpg'); ?>" alt="Hầm rượu" loading="lazy">
                    <img src="<?php echo asset('img/restaurant/NHA-HANG-AURORA-HOTEL-2.jpg'); ?>" alt="Bàn ăn sang trọng" loading="lazy">
                    <img src="<?php echo asset('img/restaurant/NHA-HANG-AURORA-HOTEL-5.jpg'); ?>" alt="Không gian ấm cúng" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Spa Section
<section id="spa" class="service-detail alt">
    <div class="container">
        <div class="service-detail-content">
            <div class="service-detail-gallery">
                <div class="gallery-main">
                    <img src="<?php echo asset('img/hero banner/AURORA-HOTEL-BIEN-HOA-2.jpg'); ?>" alt="Aurora Spa" loading="lazy">
                </div>
                <div class="gallery-thumbs">
                    <img src="<?php echo asset('img/hero banner/AURORA-HOTEL-BIEN-HOA-3.jpg'); ?>" alt="Phòng massage" loading="lazy">
                    <img src="<?php echo asset('img/hero banner/AURORA-HOTEL-BIEN-HOA-4.jpg'); ?>" alt="Sauna" loading="lazy">
                    <img src="<?php echo asset('img/hero banner/AURORA-HOTEL-BIEN-HOA-6.jpg'); ?>" alt="Jacuzzi" loading="lazy">
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
</section> -->

<!-- Pool Section -->
<section id="pool" class="service-detail">
    <div class="container">
        <div class="service-detail-content">
            <div class="service-detail-text">
                <h2>Hồ bơi</h2>
                <p class="lead">Thư giãn tại hồ bơi ngoài trời với thiết kế vô cực, tầm nhìn tuyệt đẹp ra toàn cảnh thành phố từ tầng 14.</p>
                
                <div class="pool-features">
                    <div class="feature-grid">
                        <div class="feature-item">
                            <i class="fas fa-swimming-pool"></i>
                            <h4>Hồ bơi chính</h4>
                            <p>25m x 15m, độ sâu 1.2m - 1.8m</p>
                        </div>
                        
                        <div class="feature-item">
                            <i class="fas fa-child"></i>
                            <h4>Hồ bơi trẻ em</h4>
                            <p>Khu vực an toàn cho trẻ em dưới 12 tuổi</p>
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
                        <span>Tầng 14 - Sky Deck</span>
                    </div>
                    <div class="info-item">
                        <strong>Miễn phí:</strong>
                        <span>Khăn tắm, nước uống</span>
                    </div>
                </div>
            </div>
            
            <div class="service-detail-gallery">
                <div class="gallery-main">
                    <img src="<?php echo asset('img/service/pool/pool.jpg'); ?>" alt="Hồ bơi" loading="lazy">
                </div>
                <!-- <div class="gallery-thumbs">
                    <img src="<?php echo asset('img/hero banner/AURORA-HOTEL-BIEN-HOA-2.jpg'); ?>" alt="Tầm nhìn từ hồ bơi" loading="lazy">
                    <img src="<?php echo asset('img/hero banner/AURORA-HOTEL-BIEN-HOA-3.jpg'); ?>" alt="Pool bar" loading="lazy">
                    <img src="<?php echo asset('img/hero banner/AURORA-HOTEL-BIEN-HOA-4.jpg'); ?>" alt="Khu vực thư giãn" loading="lazy">
                    <img src="<?php echo asset('img/hero banner/AURORA-HOTEL-BIEN-HOA-6.jpg'); ?>" alt="View thành phố" loading="lazy">
                </div> -->
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
                    <img src="<?php echo asset('img/service/gym/GYM-AURORA-HOTEL-1.jpg'); ?>" alt="Fitness Center" loading="lazy">
                </div>
                <div class="gallery-thumbs">
                    <img src="<?php echo asset('img/service/gym/GYM-AURORA-HOTEL-2.jpg'); ?>" alt="Khu tập tạ" loading="lazy">
                    <img src="<?php echo asset('img/service/gym/GYM-AURORA-HOTEL-3.jpg'); ?>" alt="Khu cardio" loading="lazy">
                    <img src="<?php echo asset('img/service/gym/GYM-AURORA-HOTEL-1.jpg'); ?>" alt="Phòng yoga" loading="lazy">
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
                    <img src="<?php echo asset('img/service/meet/Hoi-nghi-aurora-5.jpg'); ?>" alt="Trung tâm hội nghị" loading="lazy">
                </div>
                <div class="gallery-thumbs">
                    <img src="<?php echo asset('img/service/meet/Hoi-nghi-aurora-6.jpg'); ?>" alt="Grand Ballroom" loading="lazy">
                    <!-- <img src="<?php echo asset('img/service/office/Van-phong-cho-thue-Aurora-1.jpg'); ?>" alt="Meeting Room" loading="lazy">
                    <img src="<?php echo asset('img/service/office/Van-phong-cho-thue-Aurora-2.jpg'); ?>" alt="Boardroom" loading="lazy">
                    <img src="<?php echo asset('img/service/office/Van-phong-cho-thue-Aurora-3.jpg'); ?>" alt="Văn phòng 1" loading="lazy">
                    <img src="<?php echo asset('img/service/office/Van-phong-cho-thue-Aurora-4.jpg'); ?>" alt="Văn phòng 2" loading="lazy"> -->
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
                    <img src="<?php echo asset('img/hero banner/AURORA-HOTEL-BIEN-HOA-3.jpg'); ?>" alt="Concierge Service" loading="lazy">
                </div>
                <div class="gallery-thumbs">
                    <img src="<?php echo asset('img/hero banner/AURORA-HOTEL-BIEN-HOA-2.jpg'); ?>" alt="Lễ tân" loading="lazy">
                    <img src="<?php echo asset('img/hero banner/AURORA-HOTEL-BIEN-HOA-1.jpg'); ?>" alt="Dịch vụ vận chuyển" loading="lazy">
                    <img src="<?php echo asset('img/hero banner/AURORA-HOTEL-BIEN-HOA-4.jpg'); ?>" alt="Hỗ trợ khách hàng" loading="lazy">
                    <img src="<?php echo asset('img/hero banner/AURORA-HOTEL-BIEN-HOA-6.jpg'); ?>" alt="Sảnh khách sạn" loading="lazy">
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
                <a href="/lien-he.php" class="btn btn-primary btn-outline">
                    <i class="fas fa-envelope"></i> Gửi yêu cầu
                </a>
            </div>
        </div>
    </div>
</section>


<?php include '../includes/footer.php'; ?>