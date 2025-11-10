php
<?php
// Nạp dữ liệu trang Studio VIP từ file riêng
include '../../includes/data-pages/data-studio-vip.php';
// Breadcrumb cho trang Phòng Studio VIP Đẳng Cấp
$breadcrumb = [
    [
        'title' => 'Phòng',
        'url' => '/pages/phong.php'
    ],
    [
        'title' => 'Phòng Studio VIP Đẳng Cấp',
        'active' => true
    ]
];
// Include header sau khi có biến tiêu đề/mô tả
include '../../includes/header.php';
?>

<main class="room-detail-page">
    <!-- Hero Section -->
    <section class="room-hero">
        <div class="hero-image">
            <img src="<?php echo asset($main_image); ?>" alt="<?php echo htmlspecialchars($page_title); ?>" loading="lazy" onerror="this.src='https://via.placeholder.com/1200x600/f0f0f0/666?text=Studio+VIP'">
            <div class="hero-overlay">
                <div class="container">
                    <h1>Phòng Studio VIP Đẳng Cấp</h1>
                    <p class="hero-subtitle"><?php echo htmlspecialchars($hero_subtitle); ?></p>
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
                        <h2><?php echo htmlspecialchars($about_heading); ?></h2>
                        <p><?php echo htmlspecialchars($about_paragraph); ?></p>

                        <h3><?php echo htmlspecialchars($amenities_heading); ?></h3>
                        <div class="amenities-grid">
                            <?php foreach ($amenities as $a): ?>
                                <div class="amenity-item">
                                    <i class="fas fa-check"></i>
                                    <span><?php echo htmlspecialchars($a); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <h3><?php echo htmlspecialchars($services_heading); ?></h3>
                        <ul class="services-list">
                            <?php foreach ($included_services as $s): ?>
                                <li><?php echo htmlspecialchars($s); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="booking-card">
                        <div class="price-info">
                            <span class="price"><?php echo htmlspecialchars($price_text); ?></span>
                            <span class="per-night"><?php echo htmlspecialchars($per_night_text); ?></span>
                        </div>

                        <div class="room-specs">
                            <?php foreach ($specs as $sp): ?>
                                <div class="spec-item">
                                    <strong><?php echo htmlspecialchars($sp['label']); ?></strong> <?php echo htmlspecialchars($sp['value']); ?>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <a href="<?php echo url($booking_url_path); ?>" class="btn btn-book">
                            <?php echo htmlspecialchars($book_button_text); ?>
                        </a>

                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-phone contact-icon"></i>
                                <div class="contact-line">
                                    <span class="label"><?php echo htmlspecialchars($contact_hotline_label); ?></span>
                                    <span class="divider">|</span>
                                    <a class="value" href="tel:+842513918888"><?php echo htmlspecialchars($contact_hotline); ?></a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope contact-icon"></i>
                                <div class="contact-line">
                                    <span class="label"><?php echo htmlspecialchars($contact_email_label); ?></span>
                                    <span class="divider">|</span>
                                    <a class="value" href="mailto:<?php echo htmlspecialchars($contact_email_booking); ?>"><?php echo htmlspecialchars($contact_email_booking); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Gallery -->
    <!-- Room Gallery (Slider) -->
    <section class="room-gallery">
        <div class="container">
            <h3><?php echo $gallery_heading; ?></h3>
            <div class="image-slider" id="deluxeSlider">
                <button class="slider-btn prev" aria-label="<?php echo $gallery_prev_label; ?>"><i class="fas fa-chevron-left"></i></button>
                <div class="slider-main">
                    <img id="sliderMainImage"
                         src="<?php echo asset($gallery_images[0]); ?>"
                         alt="<?php echo $gallery_main_alt; ?>"
                         loading="eager"
                         decoding="async"
                         fetchpriority="high"
                         onerror="this.src='https://via.placeholder.com/1200x600/f0f0f0/666?text=Studio+VIP'">
                </div> 
                <button class="slider-btn next" aria-label="<?php echo $gallery_next_label; ?>"><i class="fas fa-chevron-right"></i></button>
                <div class="slider-thumbs" id="sliderThumbs">
                    <?php foreach ($gallery_images as $idx => $imgPath): ?>
                        <img class="thumb <?php echo $idx === 0 ? 'active' : ''; ?>"
                             src="<?php echo asset($imgPath); ?>"
                             data-full="<?php echo asset($imgPath); ?>"
                             alt="Thumb <?php echo $idx + 1; ?>"
                             loading="lazy"
                             decoding="async"
                             onerror="this.src='https://via.placeholder.com/200x120/f0f0f0/666?text=Thumb'">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox for images -->
    <div class="lightbox" id="imageLightbox" aria-hidden="true">
        <div class="lightbox-content">
            <button class="lightbox-close" id="lightboxClose" aria-label="<?php echo $lightbox_close_label; ?>"><i class="fas fa-times"></i></button>
            <button class="lightbox-prev" id="lightboxPrev" aria-label="<?php echo $gallery_prev_label; ?>"><i class="fas fa-chevron-left"></i></button>
            <img id="lightboxImage" src="<?php echo asset($gallery_images[0]); ?>" alt="Xem ảnh lớn">
            <button class="lightbox-next" id="lightboxNext" aria-label="<?php echo $gallery_next_label; ?>"><i class="fas fa-chevron-right"></i></button>
        </div>
        <div class="lightbox-overlay" id="lightboxOverlay"></div>
    </div>

    <!-- Related Rooms -->
    <?php
        // Build randomized suggested rooms excluding current type
        $current_type = 'studio_vip';
        $roomCatalog = [
            'deluxe' => [
                'data_file' => '../../includes/data-pages/data-deluxe.php',
                'detail_link' => 'pages/phong/deluxe-sang-trong.php',
                'fallback_image' => 'img/deluxe/DELUXE-ROOM-AURORA-1.jpg',
            ],
            'premium_deluxe' => [
                'data_file' => '../../includes/data-pages/data-premium-deluxe.php',
                'detail_link' => 'pages/phong/premium-deluxe-cao-cap.php',
                'fallback_image' => 'img/premium deluxe/PREMIUM-DELUXE-AURORA-HOTEL-1.jpg',
            ],
            'premium_twin' => [
                'data_file' => '../../includes/data-pages/data-premium-deluxe-twin.php',
                'detail_link' => 'pages/phong/premium-deluxe-twin-doi.php',
                'fallback_image' => 'img/premium twin/PREMIUM-DELUXE-TWIN-AURORA-1.jpg',
            ],
            'studio_vip' => [
                'data_file' => '../../includes/data-pages/data-studio-vip.php',
                'detail_link' => 'pages/phong/studio-vip-dang-cap.php',
                'fallback_image' => 'img/studio apartment/CAN-HO-STUDIO-AURORA-HOTEL-1.jpg',
            ],
        ];

        $buildCard = function(array $conf) {
            $vars = (function($file){ include $file; return get_defined_vars(); })($conf['data_file']);
            $title = isset($vars['page_title']) ? $vars['page_title'] : 'Phòng';
            $price = isset($vars['price_text']) ? $vars['price_text'] : '';
            $perNight = isset($vars['per_night_text']) ? trim($vars['per_night_text']) : '';
            if ($perNight !== '') { $price = trim($price.' '.$perNight); }
            $image = isset($vars['main_image']) ? $vars['main_image'] : $conf['fallback_image'];
            return [
                'title' => $title,
                'price' => $price,
                'link' => $conf['detail_link'],
                'image' => $image,
            ];
        };

        $pool = [];
        foreach ($roomCatalog as $key => $conf) {
            if ($key !== $current_type) { $pool[] = $buildCard($conf); }
        }
        shuffle($pool);
        $suggested_rooms = array_slice($pool, 0, 2);
    ?>
    <section class="related-rooms">
        <div class="container">
            <h3><?php echo htmlspecialchars($related_heading); ?></h3>
            <div class="rooms-grid">
                <?php foreach ($suggested_rooms as $s): ?>
                    <div class="room-card">
                        <img src="<?php echo asset($s['image']); ?>" alt="<?php echo htmlspecialchars($s['title']); ?>" loading="lazy">
                        <div class="room-card-content">
                            <h4><?php echo htmlspecialchars($s['title']); ?></h4>
                            <?php if (!empty($s['price'])): ?>
                                <p class="room-price"><?php echo htmlspecialchars($s['price']); ?></p>
                            <?php endif; ?>
                            <a href="<?php echo url($s['link']); ?>" class="btn btn-outline">Xem Chi Tiết</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php include '../../includes/footer.php'; ?>