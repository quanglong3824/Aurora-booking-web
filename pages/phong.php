<?php
$page_title = "Phòng nghỉ - Aurora Hotel Plaza";
$page_description = "Khám phá các loại phòng nghỉ sang trọng tại Aurora Hotel Plaza: Deluxe, Premium Deluxe, Premium Deluxe Twin, Studio VIP với đầy đủ tiện nghi hiện đại";
$page_keywords = "phòng nghỉ Aurora Hotel Plaza, đặt phòng, phòng deluxe, phòng premium, phòng studio vip, khách sạn sang trọng";
$current_page = "phong";
$breadcrumb = [
    ['title' => 'Trang chủ', 'url' => '../index.php'],
    ['title' => 'Phòng nghỉ', 'url' => 'phong.php', 'active' => true]
];
$page_header = true;
$page_header_title = "Phòng nghỉ Aurora Hotel Plaza";
$page_header_subtitle = "Không gian nghỉ dưỡng sang trọng với tiêu chuẩn 5 sao";
$page_header_bg = "/assets/image/rooms-hero.jpg";

include '../includes/header.php';
?>

<!-- Room Filter & Search -->
<section class="room-filter">
    <div class="container">
        <div class="filter-controls">
            <div class="filter-tabs">
                <button class="filter-btn active" data-filter="all">Tất cả phòng</button>
                <button class="filter-btn" data-filter="deluxe">Deluxe</button>
                <button class="filter-btn" data-filter="premium">Premium</button>
                <button class="filter-btn" data-filter="studio">Studio VIP</button>
            </div>
        </div>
    </div>
</section>

<!-- Rooms Grid -->
<section class="rooms-showcase">
    <div class="container">
        <!-- Deluxe Rooms -->
        <div class="room-category" data-category="deluxe">
            <div class="category-header">
                <h2>Phòng Deluxe</h2>
                <?php include_once '../includes/data-pages/data-deluxe.php'; ?>
                <p><?php echo htmlspecialchars($hero_subtitle); ?></p>
            </div>

            <div class="rooms-grid">
                <div class="room-card featured" data-room-type="deluxe">
                    <div class="room-image-container">
                        <img src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-1.jpg'); ?>" alt="Phòng Deluxe Sang Trọng" loading="lazy">
                        <div class="room-badge">Phổ biến</div>
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <?php $deluxe_images = glob(__DIR__ . '/../assets/img/deluxe/*.jpg'); ?>
                            <span><?php echo isset($deluxe_images) ? count($deluxe_images) : 0; ?> ảnh</span>
                        </div>
                    </div>

                    <div class="room-content">
                        <div class="room-header">
                            <h3>Phòng Deluxe Sang Trọng</h3>
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
                            <?php if (isset($specs) && is_array($specs)) : ?>
                            <div class="room-specs">
                                <?php foreach ($specs as $spec): 
                                    $icon = 'fas fa-check';
                                    if (isset($spec['label']) && stripos($spec['label'], 'Diện tích') !== false) {
                                        $icon = 'fas fa-expand-arrows-alt';
                                    } elseif (isset($spec['label']) && stripos($spec['label'], 'Sức chứa') !== false) {
                                        $icon = 'fas fa-users';
                                    } elseif (isset($spec['label']) && stripos($spec['label'], 'Loại giường') !== false) {
                                        $icon = 'fas fa-bed';
                                    }
                                ?>
                                    <span><i class="<?php echo $icon; ?>"></i> <?php echo htmlspecialchars($spec['value']); ?></span>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>

                            <div class="room-amenities">
                                <?php if (isset($amenities) && is_array($amenities)) : ?>
                                    <?php foreach ($amenities as $amenity): ?>
                                        <div class="amenity-item">
                                            <i class="fas fa-check"></i>
                                            <span><?php echo htmlspecialchars($amenity); ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price"><?php echo htmlspecialchars($price_text); ?></span>
                                <span class="price-period"><?php echo htmlspecialchars($per_night_text); ?></span>
                            </div>
                        </div>

                        <div class="room-actions">
                            <a href="<?php echo url('pages/phong/deluxe-sang-trong.php'); ?>" class="btn-secondary room-details-btn"><?php echo isset($related1_btn_text) ? htmlspecialchars($related1_btn_text) : 'Xem Chi Tiết'; ?></a>
                            <a href="<?php echo url('pages/dat-phong.php?room=deluxe'); ?>" class="btn-primary room-book-btn"><?php echo htmlspecialchars($book_button_text); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Premium Deluxe Rooms -->
        <div class="room-category" data-category="premium">
            <div class="category-header">
                <h2>Phòng Premium Deluxe</h2>
                <?php include_once '../includes/data-pages/data-premium-deluxe.php'; ?>
                <p><?php echo htmlspecialchars($hero_subtitle); ?></p>
            </div>

            <div class="rooms-grid">
                <div class="room-card" data-room-type="premium">
                    <div class="room-image-container">
                        <img src="<?php echo asset($main_image); ?>" alt="<?php echo htmlspecialchars($gallery_main_alt); ?>" loading="lazy">
                        <div class="room-badge">Cao cấp</div>
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <span><?php echo (isset($gallery_images) && is_array($gallery_images)) ? count($gallery_images) : 0; ?> ảnh</span>
                        </div>
                    </div>

                    <div class="room-content">
                        <div class="room-header">
                            <h3>Phòng Premium Deluxe Cao Cấp</h3>
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
                            <?php if (isset($specs) && is_array($specs)) : ?>
                            <div class="room-specs">
                                <?php foreach ($specs as $spec): 
                                    $icon = 'fas fa-check';
                                    if (isset($spec['label']) && stripos($spec['label'], 'Diện tích') !== false) {
                                        $icon = 'fas fa-expand-arrows-alt';
                                    } elseif (isset($spec['label']) && stripos($spec['label'], 'Sức chứa') !== false) {
                                        $icon = 'fas fa-users';
                                    } elseif (isset($spec['label']) && stripos($spec['label'], 'Loại giường') !== false) {
                                        $icon = 'fas fa-bed';
                                    } elseif (isset($spec['label']) && stripos($spec['label'], 'View') !== false) {
                                        $icon = 'fas fa-eye';
                                    }
                                ?>
                                    <span><i class="<?php echo $icon; ?>"></i> <?php echo htmlspecialchars($spec['value']); ?></span>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>

                            <div class="room-amenities">
                                <?php if (isset($amenities) && is_array($amenities)) : ?>
                                    <?php foreach ($amenities as $amenity): ?>
                                        <div class="amenity-item">
                                            <i class="fas fa-check"></i>
                                            <span><?php echo htmlspecialchars($amenity); ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price"><?php echo htmlspecialchars($price_text); ?></span>
                                <span class="price-period"><?php echo htmlspecialchars($per_night_text); ?></span>
                            </div>
                        </div>

                        <div class="room-actions">
                            <a href="<?php echo url('pages/phong/premium-deluxe-cao-cap.php'); ?>" class="btn-secondary room-details-btn">Xem chi tiết</a>
                            <a href="<?php echo url($booking_url_path); ?>" class="btn-primary room-book-btn"><?php echo htmlspecialchars($book_button_text); ?></a>
                        </div>
                </div>
            </div>

                <?php include_once '../includes/data-pages/data-premium-deluxe-twin.php'; ?>
                <div class="room-card" data-room-type="premium">
                    <div class="room-image-container">
                        <img src="<?php echo asset($main_image); ?>" alt="<?php echo htmlspecialchars($gallery_main_alt); ?>" loading="lazy">
                        <div class="room-badge">Gia đình</div>
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <?php $premium_twin_images = glob(__DIR__ . '/../assets/img/premium twin/*.jpg'); ?>
                            <span><?php echo isset($premium_twin_images) ? count($premium_twin_images) : 0; ?> ảnh</span>
                        </div>
                    </div>

                    <div class="room-content">
                        <div class="room-header">
                            <h3>Phòng Premium Deluxe Twin Đôi</h3>
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
                            <?php if (isset($specs) && is_array($specs)) : ?>
                            <div class="room-specs">
                                <?php foreach ($specs as $spec): 
                                    $icon = 'fas fa-check';
                                    if (isset($spec['label']) && stripos($spec['label'], 'Diện tích') !== false) {
                                        $icon = 'fas fa-expand-arrows-alt';
                                    } elseif (isset($spec['label']) && stripos($spec['label'], 'Sức chứa') !== false) {
                                        $icon = 'fas fa-users';
                                    } elseif (isset($spec['label']) && stripos($spec['label'], 'Loại giường') !== false) {
                                        $icon = 'fas fa-bed';
                                    } elseif (isset($spec['label']) && stripos($spec['label'], 'View') !== false) {
                                        $icon = 'fas fa-eye';
                                    }
                                ?>
                                    <span><i class="<?php echo $icon; ?>"></i> <?php echo htmlspecialchars($spec['value']); ?></span>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>

                            <div class="room-amenities">
                                <?php if (isset($amenities) && is_array($amenities)) : ?>
                                    <?php foreach ($amenities as $amenity): ?>
                                        <div class="amenity-item">
                                            <i class="fas fa-check"></i>
                                            <span><?php echo htmlspecialchars($amenity); ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price"><?php echo htmlspecialchars($price_text); ?></span>
                                <span class="price-period"><?php echo htmlspecialchars($per_night_text); ?></span>
                            </div>
                        </div>

                        <div class="room-actions">
                            <a href="<?php echo url('pages/phong/premium-deluxe-twin-doi.php'); ?>" class="btn-secondary room-details-btn">Xem chi tiết</a>
                            <a href="<?php echo url('pages/dat-phong.php?room=premium-deluxe-twin'); ?>" class="btn-primary room-book-btn"><?php echo htmlspecialchars($book_button_text); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Studio VIP Rooms -->
        <div class="room-category" data-category="studio">
            <div class="category-header">
                <h2>Phòng Studio VIP</h2>
                <?php include_once '../includes/data-pages/data-studio-vip.php'; ?>
                <p><?php echo htmlspecialchars($hero_subtitle); ?></p>
            </div>

            <div class="rooms-grid">
                <div class="room-card" data-room-type="studio">
                    <div class="room-image-container">
                        <img src="<?php echo asset($main_image); ?>" alt="<?php echo htmlspecialchars($gallery_main_alt); ?>" loading="lazy">
                        <div class="room-badge">VIP</div>
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <span><?php echo (isset($gallery_images) && is_array($gallery_images)) ? count($gallery_images) : 0; ?> ảnh</span>
                        </div>
                    </div>

                    <div class="room-content">
                        <div class="room-header">
                            <h3>Phòng Studio VIP Đẳng Cấp</h3>
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
                            <?php if (isset($specs) && is_array($specs)) : ?>
                            <div class="room-specs">
                                <?php foreach ($specs as $spec): 
                                    $icon = 'fas fa-check';
                                    if (isset($spec['label']) && stripos($spec['label'], 'Diện tích') !== false) {
                                        $icon = 'fas fa-expand-arrows-alt';
                                    } elseif (isset($spec['label']) && stripos($spec['label'], 'Sức chứa') !== false) {
                                        $icon = 'fas fa-users';
                                    } elseif (isset($spec['label']) && stripos($spec['label'], 'Loại giường') !== false) {
                                        $icon = 'fas fa-bed';
                                    } elseif (isset($spec['label']) && stripos($spec['label'], 'View') !== false) {
                                        $icon = 'fas fa-eye';
                                    }
                                ?>
                                    <span><i class="<?php echo $icon; ?>"></i> <?php echo htmlspecialchars($spec['value']); ?></span>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>

                            <div class="room-amenities">
                                <?php if (isset($amenities) && is_array($amenities)) : ?>
                                    <?php foreach ($amenities as $amenity): ?>
                                        <div class="amenity-item">
                                            <i class="fas fa-check"></i>
                                            <span><?php echo htmlspecialchars($amenity); ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price"><?php echo htmlspecialchars($price_text); ?></span>
                                <span class="price-period"><?php echo htmlspecialchars($per_night_text); ?></span>
                            </div>
                        </div>

                        <div class="room-actions">
                            <a href="<?php echo url('pages/phong/studio-vip-dang-cap.php'); ?>" class="btn-secondary room-details-btn">Xem chi tiết</a>
                            <a href="<?php echo url($booking_url_path); ?>" class="btn-primary room-book-btn"><?php echo htmlspecialchars($book_button_text); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Room Comparison (Old Table Style, New Data) -->
<section class="room-comparison">
    <div class="container">
        <div class="section-header">
            <h2>So sánh các loại phòng</h2>
            <p>Tìm hiểu chi tiết về từng loại phòng để lựa chọn phù hợp nhất</p>
        </div>

        <?php
            // Tập hợp dữ liệu từ các file để dựng bảng
            include '../includes/data-pages/data-deluxe.php';
            $d_specs = isset($specs) ? $specs : [];
            $d_amenities = isset($amenities) ? $amenities : [];
            $d_services = isset($included_services) ? $included_services : [];
            $d_price = ($price_text ?? '') . (($per_night_text ?? '') ? ' ' . $per_night_text : '');

            include '../includes/data-pages/data-premium-deluxe.php';
            $p_specs = isset($specs) ? $specs : [];
            $p_amenities = isset($amenities) ? $amenities : [];
            $p_services = isset($included_services) ? $included_services : [];
            $p_price = ($price_text ?? '') . (($per_night_text ?? '') ? ' ' . $per_night_text : '');

            include '../includes/data-pages/data-premium-deluxe-twin.php';
            $t_specs = isset($specs) ? $specs : [];
            $t_amenities = isset($amenities) ? $amenities : [];
            $t_services = isset($included_services) ? $included_services : [];
            $t_price = ($price_text ?? '') . (($per_night_text ?? '') ? ' ' . $per_night_text : '');

            include '../includes/data-pages/data-studio-vip.php';
            $s_specs = isset($specs) ? $specs : [];
            $s_amenities = isset($amenities) ? $amenities : [];
            $s_services = isset($included_services) ? $included_services : [];
            $s_price = ($price_text ?? '') . (($per_night_text ?? '') ? ' ' . $per_night_text : '');

            function find_spec($specsArr, $key) {
                foreach ($specsArr as $sp) {
                    if (stripos($sp['label'], $key) !== false) return $sp['value'];
                }
                return '';
            }

            function has_item($arr, $keyword) {
                foreach ($arr as $item) {
                    if (stripos($item, $keyword) !== false) return true;
                }
                return false;
            }
        ?>

        <div class="comparison-table">
            <table>
                <thead>
                    <tr>
                        <th>Tiêu chí</th>
                        <th>Deluxe</th>
                        <th>Premium Deluxe</th>
                        <th>Premium Twin</th>
                        <th>Studio VIP</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Giá</td>
                        <td><?php echo htmlspecialchars($d_price); ?></td>
                        <td><?php echo htmlspecialchars($p_price); ?></td>
                        <td><?php echo htmlspecialchars($t_price); ?></td>
                        <td><?php echo htmlspecialchars($s_price); ?></td>
                    </tr>
                    <tr>
                        <td>Diện tích</td>
                        <td><?php echo htmlspecialchars(find_spec($d_specs, 'Diện tích')); ?></td>
                        <td><?php echo htmlspecialchars(find_spec($p_specs, 'Diện tích')); ?></td>
                        <td><?php echo htmlspecialchars(find_spec($t_specs, 'Diện tích')); ?></td>
                        <td><?php echo htmlspecialchars(find_spec($s_specs, 'Diện tích')); ?></td>
                    </tr>
                    <tr>
                        <td>Sức chứa</td>
                        <td><?php echo htmlspecialchars(find_spec($d_specs, 'Sức chứa')); ?></td>
                        <td><?php echo htmlspecialchars(find_spec($p_specs, 'Sức chứa')); ?></td>
                        <td><?php echo htmlspecialchars(find_spec($t_specs, 'Sức chứa')); ?></td>
                        <td><?php echo htmlspecialchars(find_spec($s_specs, 'Sức chứa')); ?></td>
                    </tr>
                    <tr>
                        <td>Loại giường</td>
                        <td><?php echo htmlspecialchars(find_spec($d_specs, 'Loại giường')); ?></td>
                        <td><?php echo htmlspecialchars(find_spec($p_specs, 'Loại giường')); ?></td>
                        <td><?php echo htmlspecialchars(find_spec($t_specs, 'Loại giường')); ?></td>
                        <td><?php echo htmlspecialchars(find_spec($s_specs, 'Loại giường')); ?></td>
                    </tr>
                    <tr>
                        <td>View</td>
                        <td><?php echo ($v = find_spec($d_specs, 'View')) ? htmlspecialchars($v) : '<i class="fas fa-minus text-muted"></i>'; ?></td>
                        <td><?php echo htmlspecialchars(find_spec($p_specs, 'View')); ?></td>
                        <td><?php echo htmlspecialchars(find_spec($t_specs, 'View')); ?></td>
                        <td><?php echo htmlspecialchars(find_spec($s_specs, 'View')); ?></td>
                    </tr>
                    <tr>
                        <td>WiFi miễn phí</td>
                        <td><?php echo has_item($d_amenities, 'Wifi') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($p_amenities, 'Wifi') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($t_amenities, 'Wifi') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($s_amenities, 'Wifi') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                    </tr>
                    <tr>
                        <td>Bữa sáng miễn phí</td>
                        <td><?php echo has_item($d_services, 'Bữa sáng') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($p_services, 'Bữa sáng') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($t_services, 'Bữa sáng') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($s_services, 'Bữa sáng') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                    </tr>
                    <tr>
                        <td>Xông hơi</td>
                        <td><?php echo has_item($d_services, 'Xông hơi') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($p_services, 'Xông hơi') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($t_services, 'Xông hơi') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($s_services, 'Xông hơi') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                    </tr>
                    <tr>
                        <td>Hồ bơi</td>
                        <td><?php echo has_item($d_services, 'Hồ bơi') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($p_services, 'Hồ bơi') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($t_services, 'Hồ bơi') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($s_services, 'Hồ bơi') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                    </tr>
                    <tr>
                        <td>Dịch vụ phòng</td>
                        <td><?php echo has_item($d_services, 'Dịch vụ phòng') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($p_services, 'Dịch vụ phòng') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($t_services, 'Dịch vụ phòng') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($s_services, 'Dịch vụ phòng') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                    </tr>
                    <tr>
                        <td>Phòng Gym</td>
                        <td><?php echo has_item($d_services, 'Gym') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($p_services, 'Gym') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($t_services, 'Gym') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
                        <td><?php echo has_item($s_services, 'Gym') ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-times text-danger"></i>'; ?></td>
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

<?php include '../includes/footer.php'; ?>

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
                    const [min, max] = priceRange.includes('+') ?
                        [parseInt(priceRange.replace('+', '')), Infinity] :
                        priceRange.split('-').map(p => parseInt(p));

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