<?php
// Debug tạm thời để xác định nguyên nhân 500 (sẽ gỡ sau khi fix)
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Thiết lập thông tin trang
$page_title = "Căn hộ dịch vụ";
$page_description = "Khám phá các loại căn hộ dịch vụ tại Aurora Hotel Plaza: Family, Premium, Studio với đầy đủ tiện nghi hiện đại";
$current_page = "can-ho";
$page_header = true;
$page_header_title = "Căn hộ dịch vụ Aurora Hotel Plaza";
$page_header_subtitle = "Không gian sống tiện nghi, hiện đại phù hợp mọi nhu cầu";
$page_header_bg = '/assets/img/premium apartment/CAN-HO-PREMIUM-AURORA-HOTEL-1.jpg';

// CSS riêng cho trang này
$additional_css = isset($additional_css) && is_array($additional_css) ? $additional_css : [];
$additional_css[] = 'can-ho.css';

// Breadcrumb
$show_breadcrumb = true;
$breadcrumb_items = [
    ["title" => "Phòng & Căn hộ", "url" => 'phong-va-can-ho.php'],
    ["title" => "Căn hộ"]
];

include '../includes/header.php';
?>

<!-- Apartment Filter & Search -->
<section class="room-filter">
    <div class="container">
        <div class="filter-controls">
            <div class="filter-tabs">
                <button class="filter-btn active" data-filter="all">Tất cả căn hộ</button>
                <button class="filter-btn" data-filter="family">Family</button>
                <button class="filter-btn" data-filter="premium">Premium</button>
                <button class="filter-btn" data-filter="studio">Studio</button>
            </div>
        </div>
    </div>
</section>

<!-- Apartments Grid: 1 row / 3 columns -->
<section class="rooms-showcase apartments-showcase">
    <div class="container">
        <div class="section-header">
            <h2>Căn hộ dịch vụ</h2>
            <p>Ba lựa chọn căn hộ: Family, Premium và Studio</p>
        </div>

        <div class="rooms-grid three-cols">
            <!-- Family Apartment -->
            <div class="room-card" data-room-type="family">
                <div class="room-image-container">
                    <span class="category-tag">Family</span>
                    <img src="<?php echo asset('img/family apartment/CAN-HO-FAMILY-AURORA-HOTEL-3.jpg'); ?>" alt="Căn hộ Family Gia Đình" loading="lazy">
                    <div class="room-badge">Gia đình</div>
                    <div class="room-gallery-btn">
                        <i class="fas fa-images"></i>
                        <?php $family_images = glob(__DIR__ . '/../assets/img/family apartment/*.jpg'); ?>
                        <span><?php echo isset($family_images) ? count($family_images) : 0; ?> ảnh</span>
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
                            <span class="rating-text">4.7/5</span>
                        </div>
                    </div>

                    <div class="room-details">
                        <div class="room-specs">
                            <span><i class="fas fa-expand-arrows-alt"></i> 65m²</span>
                            <span><i class="fas fa-users"></i> 3-5 khách</span>
                            <span><i class="fas fa-bed"></i> 1 giường đôi + 1 giường đơn</span>
                        </div>

                        <div class="room-amenities">
                            <div class="amenity-item"><i class="fas fa-wifi"></i><span>WiFi tốc độ cao</span></div>
                            <div class="amenity-item"><i class="fas fa-kitchen-set"></i><span>Bếp & dụng cụ nấu ăn</span></div>
                            <div class="amenity-item"><i class="fas fa-tv"></i><span>Smart TV 50"</span></div>
                            <div class="amenity-item"><i class="fas fa-bath"></i><span>Phòng tắm riêng</span></div>
                        </div>
                    </div>

                    <div class="room-pricing">
                        <div class="price-info">
                            <span class="current-price">Giá liên hệ</span>
                            <span class="price-period">—</span>
                        </div>
                    </div>

                    <div class="room-actions">
                        <a href="<?php echo url('pages/can-ho/family-gia-dinh.php'); ?>" class="btn-secondary room-details-btn">Xem chi tiết</a>
                        <a href="<?php echo url('pages/dat-phong.php?type=apartment&apt=family'); ?>" class="btn-primary room-book-btn">Đặt ngay</a>
                    </div>
                </div>
            </div>

            <!-- Premium Apartment -->
            <div class="room-card" data-room-type="premium">
                <div class="room-image-container">
                    <span class="category-tag">Premium</span>
                    <img src="<?php echo asset('img/premium apartment/CAN-HO-PREMIUM-AURORA-HOTEL-1.jpg'); ?>" alt="Căn hộ Premium Sang Trọng" loading="lazy">
                    <div class="room-badge">Cao cấp</div>
                    <div class="room-gallery-btn">
                        <i class="fas fa-images"></i>
                        <?php $premium_images = glob(__DIR__ . '/../assets/img/premium apartment/*.jpg'); ?>
                        <span><?php echo isset($premium_images) ? count($premium_images) : 0; ?> ảnh</span>
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
                            <span><i class="fas fa-expand-arrows-alt"></i> 75m²</span>
                            <span><i class="fas fa-users"></i> 2-4 khách</span>
                            <span><i class="fas fa-bed"></i> 1 giường King</span>
                        </div>

                        <div class="room-amenities">
                            <div class="amenity-item"><i class="fas fa-wifi"></i><span>WiFi tốc độ cao</span></div>
                            <div class="amenity-item"><i class="fas fa-mug-hot"></i><span>Máy pha cà phê</span></div>
                            <div class="amenity-item"><i class="fas fa-tv"></i><span>Smart TV 55"</span></div>
                            <div class="amenity-item"><i class="fas fa-bath"></i><span>Phòng tắm sang trọng</span></div>
                        </div>
                    </div>

                    <div class="room-pricing">
                        <div class="price-info">
                            <span class="current-price">Giá liên hệ</span>
                            <span class="price-period">—</span>
                        </div>
                    </div>

                    <div class="room-actions">
                        <a href="<?php echo url('pages/can-ho/premium-sang-trong.php'); ?>" class="btn-secondary room-details-btn">Xem chi tiết</a>
                        <a href="<?php echo url('pages/dat-phong.php?type=apartment&apt=premium'); ?>" class="btn-primary room-book-btn">Đặt ngay</a>
                    </div>
                </div>
            </div>

            <!-- Studio Apartment -->
            <div class="room-card" data-room-type="studio">
                <div class="room-image-container">
                    <span class="category-tag">Studio</span>
                    <img src="<?php echo asset('img/studio apartment/CAN-HO-STUDIO-AURORA-HOTEL-1.jpg'); ?>" alt="Căn hộ Studio Hiện Đại" loading="lazy">
                    <div class="room-badge">Hiện đại</div>
                    <div class="room-gallery-btn">
                        <i class="fas fa-images"></i>
                        <?php $studio_images = glob(__DIR__ . '/../assets/img/studio apartment/*.jpg'); ?>
                        <span><?php echo isset($studio_images) ? count($studio_images) : 0; ?> ảnh</span>
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
                            <span class="rating-text">4.9/5</span>
                        </div>
                    </div>

                    <div class="room-details">
                        <div class="room-specs">
                            <span><i class="fas fa-expand-arrows-alt"></i> 45m²</span>
                            <span><i class="fas fa-users"></i> 1-2 khách</span>
                            <span><i class="fas fa-bed"></i> 1 giường Queen</span>
                        </div>

                        <div class="room-amenities">
                            <div class="amenity-item"><i class="fas fa-wifi"></i><span>WiFi tốc độ cao</span></div>
                            <div class="amenity-item"><i class="fas fa-tv"></i><span>Smart TV 50"</span></div>
                            <div class="amenity-item"><i class="fas fa-snowflake"></i><span>Điều hoà nhiệt độ</span></div>
                            <div class="amenity-item"><i class="fas fa-shower"></i><span>Phòng tắm hiện đại</span></div>
                        </div>
                    </div>

                    <div class="room-pricing">
                        <div class="price-info">
                            <span class="current-price">Giá liên hệ</span>
                            <span class="price-period">—</span>
                        </div>
                    </div>

                    <div class="room-actions">
                        <a href="<?php echo url('pages/can-ho/studio-hien-dai.php'); ?>" class="btn-secondary room-details-btn">Xem chi tiết</a>
                        <a href="<?php echo url('pages/dat-phong.php?type=apartment&apt=studio'); ?>" class="btn-primary room-book-btn">Đặt ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

<?php include '../includes/footer.php'; ?>