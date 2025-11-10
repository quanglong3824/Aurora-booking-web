<?php
// Refactor: dùng cấu trúc theo mẫu Deluxe và dữ liệu riêng
include '../../includes/data-pages/data-studio-apartment.php';

// Breadcrumb cho trang Căn Hộ Studio
$breadcrumb = [
    [
        'title' => 'Căn hộ',
        'url' => '/pages/can-ho.php'
    ],
    [
        'title' => $page_title,
        'active' => true
    ]
];

include '../../includes/header.php';
?>

<div class="room-detail-page">
    <!-- Hero Section -->
    <section class="room-hero">
        <div class="hero-image">
            <img src="<?php echo asset($main_image); ?>" alt="<?php echo htmlspecialchars($page_title); ?>" loading="lazy">
            <div class="hero-overlay">
                <div class="container">
                    <h1><?php echo $page_title; ?></h1>
                    <p class="hero-subtitle"><?php echo $hero_subtitle; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Information -->
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

                        <?php if (!empty($notes ?? [])): ?>
                        <h3><?php echo $notes_heading ?? 'Lưu ý'; ?></h3>
                        <ul class="services-list">
                            <?php foreach ($notes as $note): ?>
                                <li><?php echo $note; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
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

    <!-- Gallery (Slider) -->
    <section class="room-gallery">
        <div class="container">
            <h3><?php echo $gallery_heading; ?></h3>
            <div class="image-slider" id="deluxeSlider">
                <button class="slider-btn prev" aria-label="<?php echo $gallery_prev_label; ?>"><i class="fas fa-chevron-left"></i></button>
                <div class="slider-main">
                    <img id="sliderMainImage"
                         src="<?php echo asset($main_image); ?>"
                         alt="<?php echo $gallery_main_alt; ?>"
                         loading="eager"
                         decoding="async"
                         fetchpriority="high">
                </div>
                <button class="slider-btn next" aria-label="<?php echo $gallery_next_label; ?>"><i class="fas fa-chevron-right"></i></button>
                <div class="slider-thumbs" id="sliderThumbs">
                    <?php foreach ($gallery_images as $index => $img): ?>
                        <img class="thumb <?php echo $index === 0 ? 'active' : ''; ?>" src="<?php echo asset($img); ?>" data-full="<?php echo asset($img); ?>" alt="Thumb <?php echo $index + 1; ?>" loading="lazy" decoding="async">
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
            <img id="lightboxImage" src="<?php echo asset($main_image); ?>" alt="Xem ảnh lớn">
            <button class="lightbox-next" id="lightboxNext" aria-label="<?php echo $gallery_next_label; ?>"><i class="fas fa-chevron-right"></i></button>
        </div>
        <div class="lightbox-overlay" id="lightboxOverlay"></div>
    </div>

    <!-- Related Rooms (mẫu Deluxe để có style) -->
    <section class="related-rooms">
        <div class="container">
            <h3><?php echo $related_heading; ?></h3>
            <div class="rooms-grid">
                <div class="room-card">
                    <img src="<?php echo asset('img/family apartment/CAN-HO-FAMILY-AURORA-HOTEL-3.jpg'); ?>" alt="Căn Hộ Family" loading="lazy">
                    <div class="room-card-content">
                        <h4>Căn Hộ Family</h4>
                        <p class="room-price">800.000 VNĐ/đêm</p>
                        <a href="<?php echo url('pages/can-ho/family-gia-dinh.php'); ?>" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>

                <div class="room-card">
                    <img src="<?php echo asset('img/premium apartment/CAN-HO-PREMIUM-AURORA-HOTEL-1.jpg'); ?>" alt="Căn Hộ Premium" loading="lazy">
                    <div class="room-card-content">
                        <h4>Căn Hộ Premium</h4>
                        <p class="room-price">600.000 VNĐ/đêm</p>
                        <a href="<?php echo url('pages/can-ho/premium-sang-trong.php'); ?>" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>

                <div class="room-card">
                    <img src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-1.jpg'); ?>" alt="Phòng Deluxe" loading="lazy">
                    <div class="room-card-content">
                        <h4>Phòng Deluxe</h4>
                        <p class="room-price">1.900.000 VNĐ/đêm</p>
                        <a href="<?php echo url('pages/phong/deluxe-sang-trong.php'); ?>" class="btn btn-outline">Xem Chi Tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include '../../includes/footer.php'; ?>