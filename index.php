<?php
// Nạp dữ liệu trang index từ file riêng
include 'includes/data-pages/data-index.php';
// Include header
include 'includes/header.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<!-- Hero Section -->
<section id="home" class="hero" style="background-image: url('<?= $hero_background ?>');" data-images='<?= json_encode($hero_images, JSON_UNESCAPED_SLASHES) ?>' data-interval='<?= $hero_slide_interval ?>'>
    <div class="hero-content">
        <h1><?= $hero_title ?></h1>
        <p><?= $hero_subtitle ?></p>
        <a href="#booking" class="btn-primary" style="background-color: rgb(<?= $brand_color_rgb ?>); border-color: rgb(<?= $brand_color_rgb ?>);"><?= $cta_booking_text ?></a>
    </div>
    <!-- Hero dots (center bottom) -->
    <div class="hero-controls" aria-label="Điều hướng ảnh hero">
        <div class="hero-dots" role="tablist" aria-label="Chọn ảnh"></div>
    </div>
    <!-- Side overlay arrows (full height, 5% width) -->
    <button class="hero-arrow hero-prev" aria-label="Ảnh trước" type="button">
        <i class="fas fa-chevron-left" aria-hidden="true"></i>
    </button>
    <button class="hero-arrow hero-next" aria-label="Ảnh kế" type="button">
        <i class="fas fa-chevron-right" aria-hidden="true"></i>
    </button>
    <div class="hero-overlay"></div>
</section>

<!-- Booking Form -->
<section id="booking" class="booking-section">
    <div class="container">
        <div class="booking-wrapper">
            <header class="booking-header">
                <h2 class="booking-title"><?= $booking_title ?></h2>
                <p class="booking-subtitle"><?= $booking_subtitle ?></p>
            </header>

            <form class="booking-form" id="quick-booking-form">
                <div class="form-row">
                    <!-- Check-in -->
                    <div class="form-group">
                        <label for="checkin" class="form-label">
                            <i class="far fa-calendar-alt"></i> <?= $checkin_label ?>
                        </label>
                        <input type="date"
                               id="checkin"
                               name="checkin"
                               class="form-control"
                               min="<?= date('Y-m-d') ?>"
                               required>
                        <small class="form-text"><?= $checkin_hint ?></small>
                    </div>

                    <!-- Check-out -->
                    <div class="form-group">
                        <label for="checkout" class="form-label">
                            <i class="far fa-calendar-alt"></i> <?= $checkout_label ?>
                        </label>
                        <input type="date"
                               id="checkout"
                               name="checkout"
                               class="form-control"
                               min="<?= date('Y-m-d', strtotime('+1 day')) ?>"
                               required>
                        <small class="form-text"><?= $checkout_hint ?></small>
                    </div>
                </div>

                <div class="form-row">
                    <!-- Guests -->
                    <div class="form-group">
                        <label for="guests" class="form-label">
                            <i class="fas fa-users"></i> <?= $guests_label ?>
                        </label>
                        <select id="guests" name="guests" class="form-control" required>
                            <option value="" disabled selected hidden><?= $guest_placeholder ?></option>
                            <option value="1"><?= $guest_option_1 ?></option>
                            <option value="2"><?= $guest_option_2 ?></option>
                            <option value="3"><?= $guest_option_3 ?></option>
                            <option value="4"><?= $guest_option_4 ?></option>
                        </select>
                    </div>

                    <!-- Room type -->
                    <div class="form-group">
                        <label for="room-type" class="form-label">
                            <i class="fas fa-bed"></i> <?= $room_type_label ?>
                        </label>
                        <select id="room-type" name="room-type" class="form-control" required>
                            <option value="" disabled selected hidden><?= $room_type_placeholder ?></option>
                            <option value="standard"><?= $room_type_standard_option_text ?></option>
                            <option value="deluxe"><?= $room_type_deluxe_option_text ?></option>
                            <option value="suite"><?= $room_type_suite_option_text ?></option>
                        </select>
                    </div>
                </div>

                <div class="form-action">
                    <button type="submit" class="btn-booking">
                        <span class="btn-text"><?= $search_room_cta ?></span>
                        <i class="fas fa-search"></i>
                    </button>
                    <p class="booking-note"><?= $booking_note ?></p>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Rooms Section -->
<section id="rooms" class="rooms-section">
    <div class="container">
        <div class="section-header">
            <h2><?= $rooms_title ?></h2>
            <p><?= $rooms_desc ?></p>
        </div>
        <div class="rooms-grid">
            <!-- Khối 1 – Deluxe -->
            <div class="room-card">
                <div class="room-image">
                    <img src="<?= asset($room_deluxe_image) ?>" alt="<?= $room_deluxe_title ?>" onerror="this.src='https://via.placeholder.com/400x300/f0f0f0/666?text=Phòng+Cao+Cấp'">
                </div>
                <div class="room-info">
                    <h3><?= $room_deluxe_title ?></h3>
                    <p><?= $room_deluxe_desc ?></p>
                    <div class="room-amenities">
                        <span><i class="fas fa-wifi"></i> <?= $amenity_wifi ?></span>
                        <span><i class="fas fa-tv"></i> <?= $amenity_tv ?></span>
                        <span><i class="fas fa-snowflake"></i> <?= $amenity_ac ?></span>
                    </div>
                    <div class="room-price">
                        <span class="price"><?= $room_deluxe_price ?> VNĐ</span>
                        <span class="per-night">/đêm</span>
                    </div>
                    <a href="#" class="btn-room" style="background-color: rgb(<?= $brand_color_rgb ?>); border-color: rgb(<?= $brand_color_rgb ?>);"><?= $cta_book_now ?></a>
                </div>
            </div>

            <!-- Khối 2 – Premium Deluxe Cao Cấp -->
            <div class="room-card">
                <div class="room-image">
                    <img src="<?= asset($room_premium_image) ?>" alt="<?= htmlspecialchars($room_premium_title) ?>" onerror="this.src='https://via.placeholder.com/400x300/f0f0f0/666?text=Premium+Deluxe'">
                </div>
                <div class="room-info">
                    <h3><?= $room_premium_title ?></h3>
                    <p><?= $room_premium_desc ?></p>
                    <div class="room-amenities">
                        <span><i class="fas fa-wifi"></i> <?= $room_premium_amenity_wifi ?></span>
                        <span><i class="fas fa-bath"></i> <?= $room_premium_amenity_bath ?></span>
                        <span><i class="fas fa-concierge-bell"></i> <?= $room_premium_amenity_service ?></span>
                    </div>
                    <div class="room-price">
                        <span class="price"><?= $room_premium_price ?> VNĐ</span>
                        <span class="per-night">/đêm</span>
                    </div>
                    <a href="<?= url($room_premium_link_path) ?>" class="btn-room" style="background-color: rgb(<?= $brand_color_rgb ?>); border-color: rgb(<?= $brand_color_rgb ?>);"><?= $cta_book_now ?></a>
                </div>
            </div>

            <!-- Khối 3 – Studio VIP Đẳng Cấp -->
            <div class="room-card">
                <div class="room-image">
                    <img src="<?= asset($room_studio_image) ?>" alt="<?= htmlspecialchars($room_studio_title) ?>" onerror="this.src='https://via.placeholder.com/400x300/f0f0f0/666?text=Studio+VIP'">
                </div>
                <div class="room-info">
                    <h3><?= $room_studio_title ?></h3>
                    <p><?= $room_studio_desc ?></p>
                    <div class="room-amenities">
                        <span><i class="fas fa-wifi"></i> <?= $room_studio_amenity_wifi ?></span>
                        <span><i class="fas fa-bath"></i> <?= $room_studio_amenity_bath ?></span>
                        <span><i class="fas fa-concierge-bell"></i> <?= $room_studio_amenity_service ?></span>
                    </div>
                    <div class="room-price">
                        <span class="price"><?= $room_studio_price ?> VNĐ</span>
                        <span class="per-night">/đêm</span>
                    </div>
                    <a href="<?= url($room_studio_link_path) ?>" class="btn-room" style="background-color: rgb(<?= $brand_color_rgb ?>); border-color: rgb(<?= $brand_color_rgb ?>);"><?= $cta_book_now ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services-section">
    <div class="container">
        <div class="section-header">
            <h2><?= $services_title ?></h2>
            <p><?= $services_desc ?></p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <h3><?= $service_restaurant_title ?></h3>
                <p><?= $service_restaurant_desc ?></p>
                <a href="pages/dich-vu.php#restaurant" class="service-link" style="color: rgb(<?= $brand_color_rgb ?>);"><?= $service_link_text ?></a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-spa"></i>
                </div>
                <h3><?= $service_spa_title ?></h3>
                <p><?= $service_spa_desc ?></p>
                <a href="pages/dich-vu.php#spa" class="service-link" style="color: rgb(<?= $brand_color_rgb ?>);"><?= $service_link_text ?></a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-swimming-pool"></i>
                </div>
                <h3><?= $service_pool_title ?></h3>
                <p><?= $service_pool_desc ?></p>
                <a href="pages/dich-vu.php#pool" class="service-link" style="color: rgb(<?= $brand_color_rgb ?>);"><?= $service_link_text ?></a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-dumbbell"></i>
                </div>
                <h3><?= $service_fitness_title ?></h3>
                <p><?= $service_fitness_desc ?></p>
                <a href="pages/dich-vu.php#fitness" class="service-link" style="color: rgb(<?= $brand_color_rgb ?>);"><?= $service_link_text ?></a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3><?= $service_conference_title ?></h3>
                <p><?= $service_conference_desc ?></p>
                <a href="pages/dich-vu.php#conference" class="service-link" style="color: rgb(<?= $brand_color_rgb ?>);"><?= $service_link_text ?></a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-concierge-bell"></i>
                </div>
                <h3><?= $service_concierge_title ?></h3>
                <p><?= $service_concierge_desc ?></p>
                <a href="pages/dich-vu.php#concierge" class="service-link" style="color: rgb(<?= $brand_color_rgb ?>);"><?= $service_link_text ?></a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2><?= $about_title ?></h2>
                <p><?= $about_text ?></p>
                <div class="about-stats">
                    <div class="stat-item">
                        <span class="stat-number"><?= $about_stat_rooms ?></span>
                        <span class="stat-label"><?= $about_stat_rooms_label ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number"><?= $about_stat_staff ?></span>
                        <span class="stat-label"><?= $about_stat_staff_label ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number"><?= $about_stat_experience ?></span>
                        <span class="stat-label"><?= $about_stat_experience_label ?></span>
                    </div>
                </div>
                <a href="pages/gioi-thieu.php" class="btn-secondary" style="color: rgb(<?= $brand_color_rgb ?>);"><?= $cta_learn_more_text ?></a>
            </div>
            <div class="about-image">
                <img src="assets/img/src/ui/vectical/phong-nghi-tai-khach-san-aurora.jpg" alt="<?= $hotel_name ?>" onerror="this.src='https://via.placeholder.com/600x400/f0f0f0/666?text=Aurora+Hotel'">
            </div>
        </div>
    </div>
</section>

<!-- Gallery Preview -->
<section class="gallery-preview">
    <div class="container">
        <div class="section-header">
            <h2><?= $gallery_title ?></h2>
            <p><?= $gallery_subtitle ?></p>
        </div>
        <div class="gallery-grid">
            <?php foreach ($gallery_images as $gi): ?>
                <figure class="gallery-item">
                    <img src="<?= $gi['src'] ?>"
                         alt="<?= htmlspecialchars($gi['alt']) ?>"
                         loading="lazy"
                         class="gallery-img"
                         onerror="this.src='https://via.placeholder.com/400x300/f0f0f0/666?text=Image+not+found'">
                    <?php if (!empty($gi['caption'])): ?>
                        <figcaption class="gallery-caption">
                            <span class="gallery-caption-text"><?= htmlspecialchars($gi['caption']) ?></span>
                        </figcaption>
                    <?php endif; ?>
                </figure>
            <?php endforeach; ?>
        </div>
        <div class="gallery-cta">
            <a href="pages/thu-vien-anh.php" class="btn-primary" style="background-color: rgb(<?= $brand_color_rgb ?>); border-color: rgb(<?= $brand_color_rgb ?>);">Xem tất cả ảnh</a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="section-header">
            <h2><?= $contact_title ?></h2>
            <p><?= $contact_subtitle ?></p>
        </div>
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h4>Địa chỉ</h4>
                        <p><?= $hotel_address ?></p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h4>Điện thoại</h4>
                        <p><?= $hotel_phone ?></p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h4>Email</h4>
                        <p><?= $hotel_email_info ?> | <?= $hotel_email_booking ?></p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-clock"></i>
                    <div>
                        <h4><?= $working_hours_label ?></h4>
                        <p><?= $working_hours_text ?></p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form id="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" placeholder="<?= $contact_form_name_placeholder ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="<?= $contact_form_email_placeholder ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="tel" placeholder="<?= $contact_form_phone_placeholder ?>" required>
                    </div>
                    <div class="form-group">
                        <textarea placeholder="<?= $contact_form_message_placeholder ?>" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn-primary" style="background-color: rgb(<?= $brand_color_rgb ?>); border-color: rgb(<?= $brand_color_rgb ?>);"><?= $contact_form_submit_text ?></button>
                </form>
            </div>
        </div>
        <div class="contact-cta">
            <a href="pages/lien-he.php" class="btn-secondary" style="color: rgb(<?= $brand_color_rgb ?>);"><?= $contact_cta_text ?></a>
        </div>
    </div>
</section>

<?php
// Include footer
include 'includes/footer.php';
?>