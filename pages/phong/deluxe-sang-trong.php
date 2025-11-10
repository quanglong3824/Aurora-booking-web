<?php
// Nạp dữ liệu trang deluxe từ file riêng
include '../../includes/data-pages/data-deluxe.php';
// Breadcrumb cho trang Phòng Deluxe
$breadcrumb = [
    [
        'title' => 'Phòng',
        'url' => '/pages/phong.php'
    ],
    [
        'title' => $page_title,
        'active' => true
    ]
];
// Include header
include '../../includes/header.php';
?>

<div class="room-detail-page">
    <!-- Hero Section -->
    <section class="room-hero">
        <div class="hero-image">
            <img src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-1.jpg'); ?>" alt="Phòng Deluxe Sang Trọng Aurora Hotel Plaza" loading="lazy">
            <div class="hero-overlay">
                <div class="container">
                    <h1><?php echo $page_title; ?></h1>
                    <p class="hero-subtitle"><?php echo $hero_subtitle; ?></p>
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
                        <h2><?php echo $about_heading; ?></h2>
                        <p><?php echo $about_paragraph; ?></p>
                        
                        <h3><?php echo $amenities_heading; ?></h3>
                        <ul class="services-list">
                            <?php foreach ($amenities as $amenity): ?>
                                <li><?php echo $amenity; ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <h3><?php echo $services_heading; ?></h3>
                        <ul class="services-list">
                            <?php foreach ($included_services as $service): ?>
                                <li><?php echo $service; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="booking-card">
                        <div class="price-info">
                            <span class="price"><?php echo $price_text; ?></span>
                            <span class="per-night"><?php echo $per_night_text; ?></span>
                        </div>
                        
                        <div class="room-specs">
                            <?php foreach ($specs as $spec): ?>
                                <div class="spec-item">
                                    <strong><?php echo $spec['label']; ?></strong> <?php echo $spec['value']; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        
                        <a href="<?php echo $booking_url; ?>" class="btn btn-primary btn-book">
                            <?php echo $book_button_text; ?>
                        </a>
                        
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-phone contact-icon" aria-hidden="true"></i>
                                <div class="contact-line">
                                    <span class="label"><?php echo $contact_hotline_label; ?></span>
                                    <a class="value" href="tel:+842513918888" aria-label="Gọi đặt phòng"><?php echo $contact_hotline; ?></a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope contact-icon" aria-hidden="true"></i>
                                <div class="contact-line">
                                    <span class="label"><?php echo $contact_email_label; ?></span>
                                    <a class="value" href="mailto:<?php echo $contact_email_booking; ?>" aria-label="Gửi email đặt phòng"><?php echo $contact_email_booking; ?></a>
                                    <span class="divider">|</span>
                                    <a class="value" href="mailto:<?php echo $contact_email_info; ?>" aria-label="Gửi email thông tin"><?php echo $contact_email_info; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Gallery (Slider) -->
    <section class="room-gallery">
        <div class="container">
            <h3><?php echo $gallery_heading; ?></h3>
            <div class="image-slider" id="deluxeSlider">
                <button class="slider-btn prev" aria-label="<?php echo $gallery_prev_label; ?>"><i class="fas fa-chevron-left"></i></button>
                <div class="slider-main">
                    <img id="sliderMainImage"
                         src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-1.jpg'); ?>"
                         alt="<?php echo $gallery_main_alt; ?>"
                         loading="eager"
                         decoding="async"
                         fetchpriority="high">
                </div>
                <button class="slider-btn next" aria-label="<?php echo $gallery_next_label; ?>"><i class="fas fa-chevron-right"></i></button>
                <div class="slider-thumbs" id="sliderThumbs">
                    <img class="thumb active" src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-1.jpg'); ?>" data-full="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-1.jpg'); ?>" alt="Thumb 1" loading="lazy" decoding="async">
                    <img class="thumb" src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-2.jpg'); ?>" data-full="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-2.jpg'); ?>" alt="Thumb 2" loading="lazy" decoding="async">
                    <img class="thumb" src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-3.jpg'); ?>" data-full="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-3.jpg'); ?>" alt="Thumb 3" loading="lazy" decoding="async">
                    <img class="thumb" src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-4.jpg'); ?>" data-full="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-4.jpg'); ?>" alt="Thumb 4" loading="lazy" decoding="async">
                    <img class="thumb" src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-5.jpg'); ?>" data-full="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-5.jpg'); ?>" alt="Thumb 5" loading="lazy" decoding="async">
                    <img class="thumb" src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-6.jpg'); ?>" data-full="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-6.jpg'); ?>" alt="Thumb 6" loading="lazy" decoding="async">
                    <img class="thumb" src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-7.jpg'); ?>" data-full="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-7.jpg'); ?>" alt="Thumb 7" loading="lazy" decoding="async">
                    <img class="thumb" src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-8.jpg'); ?>" data-full="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-8.jpg'); ?>" alt="Thumb 8" loading="lazy" decoding="async">
                    <img class="thumb" src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-9.jpg'); ?>" data-full="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-9.jpg'); ?>" alt="Thumb 9" loading="lazy" decoding="async">
                    <img class="thumb" src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-10.jpg'); ?>" data-full="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-10.jpg'); ?>" alt="Thumb 10" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox for images -->
    <div class="lightbox" id="imageLightbox" aria-hidden="true">
        <div class="lightbox-content">
            <button class="lightbox-close" id="lightboxClose" aria-label="<?php echo $lightbox_close_label; ?>"><i class="fas fa-times"></i></button>
            <button class="lightbox-prev" id="lightboxPrev" aria-label="<?php echo $gallery_prev_label; ?>"><i class="fas fa-chevron-left"></i></button>
            <img id="lightboxImage" src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-1.jpg'); ?>" alt="Xem ảnh lớn">
            <button class="lightbox-next" id="lightboxNext" aria-label="<?php echo $gallery_next_label; ?>"><i class="fas fa-chevron-right"></i></button>
        </div>
        <div class="lightbox-overlay" id="lightboxOverlay"></div>
    </div>

    <!-- Related Rooms -->
    <?php
        // Build randomized suggested rooms excluding current type
        $current_type = 'deluxe';
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
            <h3><?php echo $related_heading; ?></h3>
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
</div>

<?php include_once '../../includes/footer.php'; ?>