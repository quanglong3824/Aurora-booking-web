<?php
$page_title = "Thư viện ảnh - Aurora Hotel";
$page_description = "Khám phá vẻ đẹp của Aurora Hotel qua bộ sưu tập hình ảnh về phòng nghỉ, tiện ích và không gian sang trọng";
$page_keywords = "thư viện ảnh aurora hotel, hình ảnh khách sạn, phòng nghỉ, tiện ích, gallery";
$current_page = "thu-vien-anh";
$breadcrumb = [
    ['title' => 'Trang chủ', 'url' => 'index.php'],
    ['title' => 'Thư viện ảnh', 'url' => 'thu-vien-anh.php', 'active' => true]
];
$page_header_title = "Thư viện ảnh Aurora Hotel";
$page_header_subtitle = "Khám phá vẻ đẹp sang trọng qua từng khung hình";
$page_header_bg = "/assets/image/gallery-hero.jpg";

include 'includes/header.php';
?>

<!-- Gallery Filter -->
<section class="gallery-filter">
    <div class="container">
        <div class="filter-tabs">
            <button class="filter-btn active" data-filter="all">Tất cả</button>
            <button class="filter-btn" data-filter="rooms">Phòng nghỉ</button>
            <button class="filter-btn" data-filter="restaurant">Nhà hàng</button>
            <button class="filter-btn" data-filter="spa">Spa & Wellness</button>
            <button class="filter-btn" data-filter="pool">Hồ bơi</button>
            <button class="filter-btn" data-filter="facilities">Tiện ích</button>
            <button class="filter-btn" data-filter="events">Sự kiện</button>
            <button class="filter-btn" data-filter="exterior">Ngoại thất</button>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="gallery-grid">
    <div class="container">
        <div class="masonry-grid" id="galleryGrid">
            <!-- Room Images -->
            <div class="gallery-item" data-category="rooms">
                <div class="gallery-image">
                    <img src="/assets/image/room-deluxe-1.jpg" alt="Phòng Deluxe" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Phòng Deluxe</h4>
                            <p>Không gian sang trọng với tầm nhìn thành phố</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/room-deluxe-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item" data-category="rooms">
                <div class="gallery-image">
                    <img src="/assets/image/room-suite-1.jpg" alt="Suite Presidential" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Suite Presidential</h4>
                            <p>Đỉnh cao của sự sang trọng và tiện nghi</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/room-suite-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item" data-category="rooms">
                <div class="gallery-image">
                    <img src="/assets/image/room-bathroom-1.jpg" alt="Phòng tắm cao cấp" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Phòng tắm cao cấp</h4>
                            <p>Thiết kế hiện đại với bồn tắm jacuzzi</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/room-bathroom-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Restaurant Images -->
            <div class="gallery-item" data-category="restaurant">
                <div class="gallery-image">
                    <img src="/assets/image/restaurant-dining-1.jpg" alt="Khu vực dining" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Khu vực dining</h4>
                            <p>Không gian ẩm thực sang trọng</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/restaurant-dining-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item" data-category="restaurant">
                <div class="gallery-image">
                    <img src="/assets/image/restaurant-chef-1.jpg" alt="Đầu bếp chuyên nghiệp" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Đầu bếp chuyên nghiệp</h4>
                            <p>Nghệ thuật ẩm thực đẳng cấp quốc tế</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/restaurant-chef-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item" data-category="restaurant">
                <div class="gallery-image">
                    <img src="/assets/image/restaurant-food-1.jpg" alt="Món ăn đặc sắc" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Món ăn đặc sắc</h4>
                            <p>Hương vị tinh tế từ đầu bếp Michelin</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/restaurant-food-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Spa Images -->
            <div class="gallery-item" data-category="spa">
                <div class="gallery-image">
                    <img src="/assets/image/spa-treatment-1.jpg" alt="Phòng treatment" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Phòng treatment</h4>
                            <p>Không gian thư giãn tuyệt đối</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/spa-treatment-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item" data-category="spa">
                <div class="gallery-image">
                    <img src="/assets/image/spa-relaxation-1.jpg" alt="Khu vực thư giãn" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Khu vực thư giãn</h4>
                            <p>Tái tạo năng lượng trong không gian yên tĩnh</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/spa-relaxation-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Pool Images -->
            <div class="gallery-item" data-category="pool">
                <div class="gallery-image">
                    <img src="/assets/image/pool-infinity-1.jpg" alt="Hồ bơi vô cực" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Hồ bơi vô cực</h4>
                            <p>Tầm nhìn panorama tuyệt đẹp</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/pool-infinity-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item" data-category="pool">
                <div class="gallery-image">
                    <img src="/assets/image/pool-night-1.jpg" alt="Hồ bơi về đêm" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Hồ bơi về đêm</h4>
                            <p>Ánh sáng lung linh trong đêm thành phố</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/pool-night-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item" data-category="pool">
                <div class="gallery-image">
                    <img src="/assets/image/pool-bar-1.jpg" alt="Pool Bar" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Pool Bar</h4>
                            <p>Thưởng thức cocktail bên hồ bơi</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/pool-bar-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Facilities Images -->
            <div class="gallery-item" data-category="facilities">
                <div class="gallery-image">
                    <img src="/assets/image/gym-equipment-1.jpg" alt="Phòng gym hiện đại" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Phòng gym hiện đại</h4>
                            <p>Trang thiết bị cao cấp từ Technogym</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/gym-equipment-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item" data-category="facilities">
                <div class="gallery-image">
                    <img src="/assets/image/lobby-1.jpg" alt="Sảnh khách sạn" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Sảnh khách sạn</h4>
                            <p>Thiết kế sang trọng và ấn tượng</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/lobby-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item" data-category="facilities">
                <div class="gallery-image">
                    <img src="/assets/image/business-center-1.jpg" alt="Trung tâm thương mại" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Trung tâm thương mại</h4>
                            <p>Không gian làm việc chuyên nghiệp</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/business-center-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Events Images -->
            <div class="gallery-item" data-category="events">
                <div class="gallery-image">
                    <img src="/assets/image/ballroom-1.jpg" alt="Grand Ballroom" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Grand Ballroom</h4>
                            <p>Không gian sự kiện hoành tráng</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/ballroom-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item" data-category="events">
                <div class="gallery-image">
                    <img src="/assets/image/wedding-1.jpg" alt="Tiệc cưới" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Tiệc cưới</h4>
                            <p>Ngày trọng đại trong không gian lãng mạn</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/wedding-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item" data-category="events">
                <div class="gallery-image">
                    <img src="/assets/image/conference-setup-1.jpg" alt="Hội nghị" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Hội nghị</h4>
                            <p>Thiết lập chuyên nghiệp cho sự kiện doanh nghiệp</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/conference-setup-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Exterior Images -->
            <div class="gallery-item" data-category="exterior">
                <div class="gallery-image">
                    <img src="/assets/image/hotel-facade-1.jpg" alt="Mặt tiền khách sạn" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Mặt tiền khách sạn</h4>
                            <p>Kiến trúc hiện đại giữa lòng thành phố</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/hotel-facade-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item" data-category="exterior">
                <div class="gallery-image">
                    <img src="/assets/image/hotel-entrance-1.jpg" alt="Lối vào chính" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Lối vào chính</h4>
                            <p>Chào đón khách với phong cách sang trọng</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/hotel-entrance-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item" data-category="exterior">
                <div class="gallery-image">
                    <img src="/assets/image/hotel-garden-1.jpg" alt="Khu vườn khách sạn" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Khu vườn khách sạn</h4>
                            <p>Oasis xanh mát giữa lòng đô thị</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/hotel-garden-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Additional Room Images -->
            <div class="gallery-item" data-category="rooms">
                <div class="gallery-image">
                    <img src="/assets/image/room-superior-1.jpg" alt="Phòng Superior" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Phòng Superior</h4>
                            <p>Tiện nghi đầy đủ với thiết kế hiện đại</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/room-superior-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item" data-category="rooms">
                <div class="gallery-image">
                    <img src="/assets/image/room-balcony-1.jpg" alt="Ban công phòng" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Ban công phòng</h4>
                            <p>Thư giãn với tầm nhìn thành phố</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/room-balcony-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Additional Restaurant Images -->
            <div class="gallery-item" data-category="restaurant">
                <div class="gallery-image">
                    <img src="/assets/image/restaurant-bar-1.jpg" alt="Quầy bar" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Quầy bar</h4>
                            <p>Cocktail và rượu vang cao cấp</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/restaurant-bar-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item" data-category="restaurant">
                <div class="gallery-image">
                    <img src="/assets/image/restaurant-terrace-1.jpg" alt="Sân thượng" loading="lazy">
                    <div class="gallery-overlay">
                        <div class="gallery-info">
                            <h4>Sân thượng</h4>
                            <p>Ẩm thực ngoài trời với view tuyệt đẹp</p>
                        </div>
                        <button class="gallery-zoom" data-src="/assets/image/restaurant-terrace-1.jpg">
                            <i class="fas fa-search-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Load More Button -->
        <div class="load-more-container">
            <button class="btn btn-outline load-more-btn" id="loadMoreBtn">
                <i class="fas fa-plus"></i> Xem thêm ảnh
            </button>
        </div>
    </div>
</section>

<!-- Gallery Stats -->
<section class="gallery-stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-number" data-count="500">0</span>
                    <span class="stat-label">Hình ảnh chất lượng cao</span>
                </div>
            </div>
            
            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-bed"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-number" data-count="150">0</span>
                    <span class="stat-label">Phòng nghỉ được chụp</span>
                </div>
            </div>
            
            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-number" data-count="25">0</span>
                    <span class="stat-label">Khu vực tiện ích</span>
                </div>
            </div>
            
            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-number" data-count="100">0</span>
                    <span class="stat-label">Sự kiện được ghi lại</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Virtual Tour CTA -->
<section class="virtual-tour-cta">
    <div class="container">
        <div class="cta-content">
            <div class="cta-text">
                <h2>Khám phá Aurora Hotel với Virtual Tour 360°</h2>
                <p>Trải nghiệm không gian khách sạn một cách sống động và chân thực nhất</p>
                <div class="cta-features">
                    <div class="feature">
                        <i class="fas fa-vr-cardboard"></i>
                        <span>Công nghệ VR</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-360-degrees"></i>
                        <span>Góc nhìn 360°</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-mobile-alt"></i>
                        <span>Tương thích mọi thiết bị</span>
                    </div>
                </div>
                <a href="/virtual-tour.php" class="btn btn-primary">
                    <i class="fas fa-play"></i> Bắt đầu tour
                </a>
            </div>
            <div class="cta-image">
                <img src="/assets/image/virtual-tour-preview.jpg" alt="Virtual Tour Preview" loading="lazy">
                <div class="play-overlay">
                    <div class="play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Image Lightbox -->
<div class="lightbox" id="lightbox">
    <div class="lightbox-content">
        <button class="lightbox-close" id="lightboxClose">&times;</button>
        <button class="lightbox-prev" id="lightboxPrev">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="lightbox-next" id="lightboxNext">
            <i class="fas fa-chevron-right"></i>
        </button>
        <div class="lightbox-image-container">
            <img id="lightboxImage" src="" alt="">
            <div class="lightbox-info">
                <h4 id="lightboxTitle"></h4>
                <p id="lightboxDescription"></p>
            </div>
        </div>
        <div class="lightbox-counter">
            <span id="lightboxCounter">1 / 20</span>
        </div>
    </div>
</div>

<style>
/* Gallery Page Specific Styles */
.gallery-filter {
    padding: 40px 0;
    background: white;
    border-bottom: 1px solid #e9ecef;
    position: sticky;
    top: 80px;
    z-index: 100;
}

.filter-tabs {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px;
}

.filter-btn {
    background: transparent;
    border: 2px solid #e9ecef;
    color: #6c757d;
    padding: 12px 24px;
    border-radius: 25px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}

.filter-btn:hover,
.filter-btn.active {
    background: #d4af37;
    border-color: #d4af37;
    color: white;
    transform: translateY(-2px);
}

.gallery-grid {
    padding: 60px 0;
    background: #f8f9fa;
}

.masonry-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
    margin-bottom: 60px;
}

.gallery-item {
    break-inside: avoid;
    margin-bottom: 20px;
    opacity: 1;
    transform: translateY(0);
    transition: opacity 0.5s ease, transform 0.5s ease;
}

.gallery-item.hidden {
    opacity: 0;
    transform: translateY(20px);
    pointer-events: none;
}

.gallery-image {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.gallery-image:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

.gallery-image img {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.3s ease;
}

.gallery-image:hover img {
    transform: scale(1.05);
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.8) 100%);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 20px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.gallery-image:hover .gallery-overlay {
    opacity: 1;
}

.gallery-info {
    align-self: flex-end;
    color: white;
}

.gallery-info h4 {
    font-size: 1.2rem;
    margin-bottom: 5px;
    font-weight: 600;
}

.gallery-info p {
    font-size: 0.9rem;
    opacity: 0.9;
    line-height: 1.4;
}

.gallery-zoom {
    align-self: flex-start;
    background: rgba(255,255,255,0.2);
    border: none;
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.gallery-zoom:hover {
    background: rgba(255,255,255,0.3);
    transform: scale(1.1);
}

.load-more-container {
    text-align: center;
}

.load-more-btn {
    padding: 15px 30px;
    font-size: 1rem;
    border-radius: 25px;
}

.gallery-stats {
    padding: 80px 0;
    background: white;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
}

.stat-item {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 30px;
    background: #f8f9fa;
    border-radius: 20px;
    transition: transform 0.3s ease;
}

.stat-item:hover {
    transform: translateY(-5px);
}

.stat-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #d4af37, #f1c40f);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.stat-icon i {
    font-size: 1.5rem;
    color: white;
}

.stat-number {
    display: block;
    font-size: 2rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 5px;
}

.stat-label {
    color: #6c757d;
    font-size: 0.9rem;
    line-height: 1.4;
}

.virtual-tour-cta {
    padding: 100px 0;
    background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
    color: white;
}

.cta-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.cta-text h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    line-height: 1.2;
}

.cta-text p {
    font-size: 1.2rem;
    margin-bottom: 30px;
    opacity: 0.9;
    line-height: 1.6;
}

.cta-features {
    display: flex;
    gap: 30px;
    margin-bottom: 40px;
}

.feature {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 0.9rem;
}

.feature i {
    color: #d4af37;
    font-size: 1.2rem;
}

.cta-image {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}

.cta-image img {
    width: 100%;
    height: 300px;
    object-fit: cover;
}

.play-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.3);
    display: flex;
    align-items: center;
    justify-content: center;
}

.play-button {
    width: 80px;
    height: 80px;
    background: rgba(212, 175, 55, 0.9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.play-button:hover {
    transform: scale(1.1);
    background: rgba(212, 175, 55, 1);
}

.play-button i {
    font-size: 1.8rem;
    color: white;
    margin-left: 5px;
}

/* Lightbox Styles */
.lightbox {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.95);
    z-index: 10000;
    align-items: center;
    justify-content: center;
}

.lightbox.active {
    display: flex;
}

.lightbox-content {
    position: relative;
    max-width: 90%;
    max-height: 90%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.lightbox-close {
    position: absolute;
    top: -50px;
    right: 0;
    background: none;
    border: none;
    color: white;
    font-size: 2rem;
    cursor: pointer;
    z-index: 10001;
    transition: color 0.3s ease;
}

.lightbox-close:hover {
    color: #d4af37;
}

.lightbox-prev,
.lightbox-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255,255,255,0.1);
    border: none;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.lightbox-prev {
    left: -70px;
}

.lightbox-next {
    right: -70px;
}

.lightbox-prev:hover,
.lightbox-next:hover {
    background: rgba(212, 175, 55, 0.8);
    transform: translateY(-50%) scale(1.1);
}

.lightbox-image-container {
    position: relative;
    text-align: center;
}

.lightbox-image-container img {
    max-width: 100%;
    max-height: 80vh;
    object-fit: contain;
    border-radius: 10px;
}

.lightbox-info {
    position: absolute;
    bottom: -60px;
    left: 0;
    right: 0;
    color: white;
    text-align: center;
}

.lightbox-info h4 {
    font-size: 1.2rem;
    margin-bottom: 5px;
}

.lightbox-info p {
    font-size: 0.9rem;
    opacity: 0.8;
}

.lightbox-counter {
    position: absolute;
    bottom: -100px;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    font-size: 0.9rem;
    opacity: 0.7;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .masonry-grid {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 15px;
    }
    
    .cta-content {
        grid-template-columns: 1fr;
        gap: 40px;
        text-align: center;
    }
    
    .cta-features {
        justify-content: center;
    }
}

@media (max-width: 768px) {
    .filter-tabs {
        gap: 10px;
    }
    
    .filter-btn {
        padding: 10px 20px;
        font-size: 0.85rem;
    }
    
    .masonry-grid {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 10px;
    }
    
    .gallery-overlay {
        padding: 15px;
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
    
    .stat-item {
        padding: 20px;
    }
    
    .stat-number {
        font-size: 1.5rem;
    }
    
    .cta-text h2 {
        font-size: 2rem;
    }
    
    .cta-features {
        flex-direction: column;
        gap: 15px;
    }
    
    .lightbox-prev {
        left: -40px;
    }
    
    .lightbox-next {
        right: -40px;
    }
}

@media (max-width: 480px) {
    .masonry-grid {
        grid-template-columns: 1fr;
    }
    
    .filter-tabs {
        flex-direction: column;
        align-items: center;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .stat-item {
        flex-direction: column;
        text-align: center;
        gap: 15px;
    }
    
    .lightbox-prev,
    .lightbox-next {
        display: none;
    }
    
    .lightbox-close {
        top: -30px;
        right: 10px;
    }
}
</style>

<script>
// Gallery Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    
    let currentFilter = 'all';
    let visibleItems = 12;
    
    // Filter items
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            currentFilter = btn.getAttribute('data-filter');
            visibleItems = 12;
            
            filterItems();
        });
    });
    
    function filterItems() {
        let visibleCount = 0;
        
        galleryItems.forEach((item, index) => {
            const category = item.getAttribute('data-category');
            const shouldShow = currentFilter === 'all' || category === currentFilter;
            
            if (shouldShow && visibleCount < visibleItems) {
                item.classList.remove('hidden');
                visibleCount++;
            } else {
                item.classList.add('hidden');
            }
        });
        
        // Show/hide load more button
        const totalFilteredItems = Array.from(galleryItems).filter(item => {
            const category = item.getAttribute('data-category');
            return currentFilter === 'all' || category === currentFilter;
        }).length;
        
        if (visibleCount >= totalFilteredItems) {
            loadMoreBtn.style.display = 'none';
        } else {
            loadMoreBtn.style.display = 'block';
        }
    }
    
    // Load more functionality
    loadMoreBtn.addEventListener('click', () => {
        visibleItems += 12;
        filterItems();
    });
    
    // Initialize filter
    filterItems();
    
    // Lightbox functionality
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightboxImage');
    const lightboxTitle = document.getElementById('lightboxTitle');
    const lightboxDescription = document.getElementById('lightboxDescription');
    const lightboxCounter = document.getElementById('lightboxCounter');
    const lightboxClose = document.getElementById('lightboxClose');
    const lightboxPrev = document.getElementById('lightboxPrev');
    const lightboxNext = document.getElementById('lightboxNext');
    
    let currentImageIndex = 0;
    let currentImages = [];
    
    // Open lightbox
    document.querySelectorAll('.gallery-zoom').forEach((btn, index) => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            
            // Get all visible images
            currentImages = Array.from(document.querySelectorAll('.gallery-item:not(.hidden) .gallery-zoom'));
            currentImageIndex = currentImages.indexOf(btn);
            
            showLightboxImage();
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });
    
    // Close lightbox
    lightboxClose.addEventListener('click', closeLightbox);
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });
    
    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    // Navigation
    lightboxPrev.addEventListener('click', () => {
        currentImageIndex = (currentImageIndex - 1 + currentImages.length) % currentImages.length;
        showLightboxImage();
    });
    
    lightboxNext.addEventListener('click', () => {
        currentImageIndex = (currentImageIndex + 1) % currentImages.length;
        showLightboxImage();
    });
    
    function showLightboxImage() {
        const currentBtn = currentImages[currentImageIndex];
        const galleryItem = currentBtn.closest('.gallery-item');
        const img = galleryItem.querySelector('img');
        const info = galleryItem.querySelector('.gallery-info');
        
        lightboxImage.src = currentBtn.getAttribute('data-src');
        lightboxTitle.textContent = info.querySelector('h4').textContent;
        lightboxDescription.textContent = info.querySelector('p').textContent;
        lightboxCounter.textContent = `${currentImageIndex + 1} / ${currentImages.length}`;
    }
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;
        
        switch(e.key) {
            case 'Escape':
                closeLightbox();
                break;
            case 'ArrowLeft':
                lightboxPrev.click();
                break;
            case 'ArrowRight':
                lightboxNext.click();
                break;
        }
    });
    
    // Stats counter animation
    const statNumbers = document.querySelectorAll('.stat-number');
    
    const animateCounter = (element) => {
        const target = parseInt(element.getAttribute('data-count'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;
        
        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current);
        }, 16);
    };
    
    // Intersection Observer for counter animation
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    statNumbers.forEach(counter => {
        counterObserver.observe(counter);
    });
    
    // Masonry layout adjustment
    function adjustMasonryLayout() {
        const grid = document.querySelector('.masonry-grid');
        if (!grid) return;
        
        // Force reflow for masonry effect
        const items = grid.querySelectorAll('.gallery-item:not(.hidden)');
        items.forEach(item => {
            item.style.height = 'auto';
        });
    }
    
    // Adjust layout on window resize
    window.addEventListener('resize', adjustMasonryLayout);
    
    // Lazy loading for images
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    imageObserver.unobserve(img);
                }
            }
        });
    });
    
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
});
</script>

<?php include 'includes/footer.php'; ?>