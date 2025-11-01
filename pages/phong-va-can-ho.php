<?php
$page_title = "Phòng & Căn hộ - Aurora Hotel";
$page_description = "Khám phá các loại phòng nghỉ và căn hộ cao cấp tại Aurora Hotel với đầy đủ tiện nghi hiện đại";
$page_keywords = "phòng nghỉ, căn hộ, Aurora Hotel, khách sạn 5 sao, phòng deluxe, căn hộ studio";

// Header configuration - Disable default header for custom hero
$page_header = false;

// Additional CSS and JS for this page
$additional_css = ['accommodation.css'];
$additional_js = ['js/accommodation.js'];

include '../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-background">
        <div class="hero-overlay"></div>
        <img src="/assets/image/rooms-hero.jpg" alt="Aurora Hotel Rooms" class="hero-image">
    </div>
    <div class="hero-content">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-8 col-xl-7">
                    <div class="hero-text">
                        <h1 class="hero-title">Phòng & Căn hộ<br><span class="text-primary">Aurora Hotel</span></h1>
                        <p class="hero-subtitle">Trải nghiệm không gian nghỉ dưỡng đẳng cấp 5 sao với thiết kế hiện đại và dịch vụ hoàn hảo</p>
                        <div class="hero-stats">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stat-item">
                                        <h3 class="stat-number">50+</h3>
                                        <p class="stat-label">Phòng & Căn hộ</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stat-item">
                                        <h3 class="stat-number">7</h3>
                                        <p class="stat-label">Loại phòng khác nhau</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stat-item">
                                        <h3 class="stat-number">24/7</h3>
                                        <p class="stat-label">Dịch vụ hỗ trợ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-buttons">
                            <a href="#room-categories" class="btn btn-primary btn-lg me-3">
                                <i class="fas fa-search me-2"></i>Khám phá phòng
                            </a>
                            <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn btn-outline-light btn-lg">
                                <i class="fas fa-calendar-check me-2"></i>Đặt phòng ngay
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-5 d-none d-lg-block">
                    <div class="hero-card">
                        <div class="card border-0 shadow-lg">
                            <div class="card-body p-4">
                                <h5 class="card-title text-center mb-4">Ưu đãi đặc biệt</h5>
                                <div class="offer-item mb-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-percent text-primary me-3"></i>
                                        <div>
                                            <h6 class="mb-1">Giảm 20% cho đặt phòng sớm</h6>
                                            <small class="text-muted">Đặt trước 30 ngày</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="offer-item mb-3">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-gift text-success me-3"></i>
                                        <div>
                                            <h6 class="mb-1">Miễn phí nâng cấp phòng</h6>
                                            <small class="text-muted">Tùy theo tình trạng phòng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="offer-item mb-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-utensils text-warning me-3"></i>
                                        <div>
                                            <h6 class="mb-1">Bữa sáng miễn phí</h6>
                                            <small class="text-muted">Cho 2 người lớn</small>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn btn-primary w-100">
                                    Nhận ưu đãi ngay
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <a href="#room-categories" class="scroll-down">
            <i class="fas fa-chevron-down"></i>
        </a>
    </div>
</section>

<!-- Room & Apartment Categories -->
<section id="room-categories" class="accommodation-categories py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="section-title fade-in-up">Chọn loại chỗ ở phù hợp</h2>
                <p class="section-subtitle fade-in-up">Aurora Hotel cung cấp đa dạng lựa chọn từ phòng nghỉ sang trọng đến căn hộ đầy đủ tiện nghi</p>
            </div>
        </div>

        <div class="row g-5">
            <!-- Phòng nghỉ -->
            <div class="col-lg-6">
                <div class="accommodation-card h-100 slide-in-left">
                    <div class="card-image">
                        <img src="/assets/image/room-deluxe.jpg" alt="Phòng nghỉ Aurora Hotel" class="img-fluid">
                        <div class="card-overlay">
                            <div class="overlay-content">
                                <h3>Phòng nghỉ</h3>
                                <p>Không gian nghỉ dưỡng sang trọng với tiêu chuẩn 5 sao</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="card-title mb-0">Phòng nghỉ cao cấp</h4>
                            <span class="price-badge">Từ 2.5tr/đêm</span>
                        </div>
                        <p class="card-text">Trải nghiệm dịch vụ khách sạn đẳng cấp với các loại phòng từ Deluxe đến Studio VIP</p>
                        
                        <div class="room-types mb-4">
                            <h6>Các loại phòng:</h6>
                            <div class="row g-2">
                                <div class="col-6">
                                    <a href="<?php echo url('pages/rooms/phong-deluxe/phong-deluxe-sang-trong.php'); ?>" class="btn btn-outline-primary btn-sm w-100">
                                        Deluxe
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="<?php echo url('pages/rooms/phong-premium-deluxe/phong-premium-deluxe-cao-cap.php'); ?>" class="btn btn-outline-primary btn-sm w-100">
                                        Premium Deluxe
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="<?php echo url('pages/rooms/phong-premium-deluxe-twin/phong-premium-deluxe-twin-doi.php'); ?>" class="btn btn-outline-primary btn-sm w-100">
                                        Premium Twin
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="<?php echo url('pages/rooms/phong-studio-vip/phong-studio-vip-dang-cap.php'); ?>" class="btn btn-outline-primary btn-sm w-100">
                                        Studio VIP
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-features mb-4">
                            <div class="row text-center">
                                <div class="col-4">
                                    <i class="fas fa-bed text-primary"></i>
                                    <small class="d-block">Giường cao cấp</small>
                                </div>
                                <div class="col-4">
                                    <i class="fas fa-wifi text-primary"></i>
                                    <small class="d-block">WiFi miễn phí</small>
                                </div>
                                <div class="col-4">
                                    <i class="fas fa-concierge-bell text-primary"></i>
                                    <small class="d-block">Dịch vụ 24/7</small>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="<?php echo url('pages/phong.php'); ?>" class="btn btn-primary btn-lg">
                                <i class="fas fa-eye me-2"></i>Xem tất cả phòng
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Căn hộ -->
            <div class="col-lg-6">
                <div class="accommodation-card h-100 slide-in-right">
                    <div class="card-image">
                        <img src="/assets/image/room-suite.jpg" alt="Căn hộ Aurora Hotel" class="img-fluid">
                        <div class="card-overlay">
                            <div class="overlay-content">
                                <h3>Căn hộ</h3>
                                <p>Không gian sống hiện đại với đầy đủ tiện nghi như ở nhà</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="card-title mb-0">Căn hộ dịch vụ</h4>
                            <span class="price-badge">Từ 3.2tr/đêm</span>
                        </div>
                        <p class="card-text">Sự kết hợp hoàn hảo giữa sự thoải mái của ngôi nhà và dịch vụ khách sạn cao cấp</p>
                        
                        <div class="room-types mb-4">
                            <h6>Các loại căn hộ:</h6>
                            <div class="row g-2">
                                <div class="col-6">
                                    <a href="<?php echo url('pages/apartments/can-ho-studio/can-ho-studio-hien-dai.php'); ?>" class="btn btn-outline-success btn-sm w-100">
                                        Studio (40m²)
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="<?php echo url('pages/apartments/can-ho-premium/can-ho-premium-sang-trong.php'); ?>" class="btn btn-outline-success btn-sm w-100">
                                        Premium (65m²)
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="<?php echo url('pages/apartments/can-ho-family/can-ho-family-gia-dinh.php'); ?>" class="btn btn-outline-success btn-sm w-100">
                                        Family (85m²)
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-features mb-4">
                            <div class="row text-center">
                                <div class="col-4">
                                    <i class="fas fa-home text-success"></i>
                                    <small class="d-block">Như ở nhà</small>
                                </div>
                                <div class="col-4">
                                    <i class="fas fa-utensils text-success"></i>
                                    <small class="d-block">Bếp đầy đủ</small>
                                </div>
                                <div class="col-4">
                                    <i class="fas fa-couch text-success"></i>
                                    <small class="d-block">Phòng khách</small>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="<?php echo url('pages/can-ho.php'); ?>" class="btn btn-success btn-lg">
                                <i class="fas fa-eye me-2"></i>Xem tất cả căn hộ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing & Features Comparison -->
<section class="pricing-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title fade-in-up">Bảng giá & So sánh tính năng</h2>
                <p class="section-subtitle fade-in-up">Lựa chọn phù hợp với nhu cầu và ngân sách của bạn</p>
            </div>
        </div>

        <!-- Pricing Table -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="pricing-table-wrapper">
                    <div class="table-responsive">
                        <table class="table pricing-table">
                            <thead>
                                <tr>
                                    <th scope="col" class="room-type-col">Loại phòng</th>
                                    <th scope="col" class="text-center">Diện tích</th>
                                    <th scope="col" class="text-center">Sức chứa</th>
                                    <th scope="col" class="text-center">Giá thường</th>
                                    <th scope="col" class="text-center">Giá cuối tuần</th>
                                    <th scope="col" class="text-center">Đặt phòng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="room-row">
                                    <td class="room-name">
                                        <div class="d-flex align-items-center">
                                            <img src="/assets/image/room-deluxe.jpg" alt="Deluxe" class="room-thumb me-3">
                                            <div>
                                                <h6 class="mb-1">Phòng Deluxe</h6>
                                                <small class="text-muted">Sang trọng & tiện nghi</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">35m²</td>
                                    <td class="text-center">2 người</td>
                                    <td class="text-center">
                                        <span class="price">2.500.000đ</span>
                                        <small class="d-block text-muted">/đêm</small>
                                    </td>
                                    <td class="text-center">
                                        <span class="price text-warning">2.800.000đ</span>
                                        <small class="d-block text-muted">/đêm</small>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn btn-primary btn-sm">Đặt ngay</a>
                                    </td>
                                </tr>
                                <tr class="room-row">
                                    <td class="room-name">
                                        <div class="d-flex align-items-center">
                                            <img src="/assets/image/room-premium.jpg" alt="Premium Deluxe" class="room-thumb me-3">
                                            <div>
                                                <h6 class="mb-1">Premium Deluxe</h6>
                                                <small class="text-muted">Cao cấp & rộng rãi</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">45m²</td>
                                    <td class="text-center">2 người</td>
                                    <td class="text-center">
                                        <span class="price">3.200.000đ</span>
                                        <small class="d-block text-muted">/đêm</small>
                                    </td>
                                    <td class="text-center">
                                        <span class="price text-warning">3.600.000đ</span>
                                        <small class="d-block text-muted">/đêm</small>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn btn-primary btn-sm">Đặt ngay</a>
                                    </td>
                                </tr>
                                <tr class="room-row">
                                    <td class="room-name">
                                        <div class="d-flex align-items-center">
                                            <img src="/assets/image/room-twin.jpg" alt="Premium Twin" class="room-thumb me-3">
                                            <div>
                                                <h6 class="mb-1">Premium Twin</h6>
                                                <small class="text-muted">2 giường đơn</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">45m²</td>
                                    <td class="text-center">2 người</td>
                                    <td class="text-center">
                                        <span class="price">3.200.000đ</span>
                                        <small class="d-block text-muted">/đêm</small>
                                    </td>
                                    <td class="text-center">
                                        <span class="price text-warning">3.600.000đ</span>
                                        <small class="d-block text-muted">/đêm</small>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn btn-primary btn-sm">Đặt ngay</a>
                                    </td>
                                </tr>
                                <tr class="room-row featured">
                                    <td class="room-name">
                                        <div class="d-flex align-items-center">
                                            <img src="/assets/image/room-studio.jpg" alt="Studio VIP" class="room-thumb me-3">
                                            <div>
                                                <h6 class="mb-1">Studio VIP <span class="badge bg-warning text-dark ms-2">Phổ biến</span></h6>
                                                <small class="text-muted">Đẳng cấp & hiện đại</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">55m²</td>
                                    <td class="text-center">2-3 người</td>
                                    <td class="text-center">
                                        <span class="price">4.500.000đ</span>
                                        <small class="d-block text-muted">/đêm</small>
                                    </td>
                                    <td class="text-center">
                                        <span class="price text-warning">5.200.000đ</span>
                                        <small class="d-block text-muted">/đêm</small>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn btn-warning btn-sm">Đặt ngay</a>
                                    </td>
                                </tr>
                                <tr class="apartment-divider">
                                    <td colspan="6" class="text-center py-3">
                                        <h5 class="mb-0 text-success"><i class="fas fa-home me-2"></i>Căn hộ dịch vụ</h5>
                                    </td>
                                </tr>
                                <tr class="room-row">
                                    <td class="room-name">
                                        <div class="d-flex align-items-center">
                                            <img src="/assets/image/apartment-studio.jpg" alt="Căn hộ Studio" class="room-thumb me-3">
                                            <div>
                                                <h6 class="mb-1">Căn hộ Studio</h6>
                                                <small class="text-muted">Bếp + phòng khách</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">40m²</td>
                                    <td class="text-center">2 người</td>
                                    <td class="text-center">
                                        <span class="price">3.200.000đ</span>
                                        <small class="d-block text-muted">/đêm</small>
                                    </td>
                                    <td class="text-center">
                                        <span class="price text-warning">3.800.000đ</span>
                                        <small class="d-block text-muted">/đêm</small>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn btn-success btn-sm">Đặt ngay</a>
                                    </td>
                                </tr>
                                <tr class="room-row">
                                    <td class="room-name">
                                        <div class="d-flex align-items-center">
                                            <img src="/assets/image/apartment-premium.jpg" alt="Căn hộ Premium" class="room-thumb me-3">
                                            <div>
                                                <h6 class="mb-1">Căn hộ Premium</h6>
                                                <small class="text-muted">1 phòng ngủ riêng</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">65m²</td>
                                    <td class="text-center">2-3 người</td>
                                    <td class="text-center">
                                        <span class="price">4.800.000đ</span>
                                        <small class="d-block text-muted">/đêm</small>
                                    </td>
                                    <td class="text-center">
                                        <span class="price text-warning">5.500.000đ</span>
                                        <small class="d-block text-muted">/đêm</small>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn btn-success btn-sm">Đặt ngay</a>
                                    </td>
                                </tr>
                                <tr class="room-row">
                                    <td class="room-name">
                                        <div class="d-flex align-items-center">
                                            <img src="/assets/image/apartment-family.jpg" alt="Căn hộ Family" class="room-thumb me-3">
                                            <div>
                                                <h6 class="mb-1">Căn hộ Family</h6>
                                                <small class="text-muted">2 phòng ngủ</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">85m²</td>
                                    <td class="text-center">4-6 người</td>
                                    <td class="text-center">
                                        <span class="price">6.500.000đ</span>
                                        <small class="d-block text-muted">/đêm</small>
                                    </td>
                                    <td class="text-center">
                                        <span class="price text-warning">7.500.000đ</span>
                                        <small class="d-block text-muted">/đêm</small>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn btn-success btn-sm">Đặt ngay</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Comparison -->
        <div class="row">
            <div class="col-12">
                <h4 class="text-center mb-4">So sánh tính năng & tiện nghi</h4>
                <div class="features-comparison">
                    <div class="table-responsive">
                        <table class="table features-table">
                            <thead>
                                <tr>
                                    <th scope="col">Tính năng</th>
                                    <th scope="col" class="text-center">Phòng Deluxe</th>
                                    <th scope="col" class="text-center">Premium Deluxe</th>
                                    <th scope="col" class="text-center">Studio VIP</th>
                                    <th scope="col" class="text-center">Căn hộ Studio</th>
                                    <th scope="col" class="text-center">Căn hộ Premium</th>
                                    <th scope="col" class="text-center">Căn hộ Family</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="fas fa-wifi text-primary me-2"></i>WiFi miễn phí</td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-utensils text-primary me-2"></i>Bếp đầy đủ</td>
                                    <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                    <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                    <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-couch text-primary me-2"></i>Phòng khách riêng</td>
                                    <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                    <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-bath text-primary me-2"></i>Bồn tắm</td>
                                    <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-mountain text-primary me-2"></i>View thành phố</td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-concierge-bell text-primary me-2"></i>Dịch vụ phòng 24/7</td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-car text-primary me-2"></i>Đưa đón sân bay</td>
                                    <td class="text-center"><i class="fas fa-times text-danger"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                    <td class="text-center"><i class="fas fa-check text-success"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Section -->
<section class="comparison-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title fade-in-up">So sánh phòng nghỉ & căn hộ</h2>
                <p class="section-subtitle fade-in-up">Tìm hiểu sự khác biệt để chọn lựa phù hợp nhất</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="comparison-card slide-in-left">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0"><i class="fas fa-bed me-2"></i>Phòng nghỉ</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Dịch vụ khách sạn đầy đủ</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Dọn phòng hàng ngày</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Phù hợp nghỉ ngắn hạn</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Giá từ 2.500.000đ/đêm</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Diện tích 35-55m²</li>
                        </ul>
                        <div class="text-center">
                            <a href="<?php echo url('pages/phong.php'); ?>" class="btn btn-primary">Chọn phòng nghỉ</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="comparison-card slide-in-right">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0"><i class="fas fa-home me-2"></i>Căn hộ</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Không gian sống riêng tư</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Bếp và phòng khách đầy đủ</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Phù hợp ở dài hạn</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Giá từ 3.200.000đ/đêm</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Diện tích 40-85m²</li>
                        </ul>
                        <div class="text-center">
                            <a href="<?php echo url('pages/can-ho.php'); ?>" class="btn btn-success">Chọn căn hộ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Amenities & Services Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5 fade-in-up">
            <h2 class="section-title">Tiện Nghi & Dịch Vụ</h2>
            <p class="section-subtitle">Trải nghiệm dịch vụ 5 sao với đầy đủ tiện nghi hiện đại</p>
        </div>

        <!-- Main Amenities -->
        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-6 slide-in-left">
                <div class="amenity-card text-center">
                    <div class="amenity-icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h5>Wi-Fi Miễn Phí</h5>
                    <p>Internet tốc độ cao trong toàn bộ khách sạn</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 slide-in-left">
                <div class="amenity-card text-center">
                    <div class="amenity-icon">
                        <i class="fas fa-swimming-pool"></i>
                    </div>
                    <h5>Hồ Bơi</h5>
                    <p>Hồ bơi ngoài trời với view thành phố tuyệt đẹp</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 slide-in-right">
                <div class="amenity-card text-center">
                    <div class="amenity-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h5>Phòng Gym</h5>
                    <p>Trung tâm thể dục hiện đại mở cửa 24/7</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 slide-in-right">
                <div class="amenity-card text-center">
                    <div class="amenity-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h5>Spa & Wellness</h5>
                    <p>Dịch vụ massage và chăm sóc sức khỏe</p>
                </div>
            </div>
        </div>

        <!-- Detailed Services -->
        <div class="row g-5">
            <!-- Room Services -->
            <div class="col-lg-4 fade-in-up">
                <div class="service-category">
                    <div class="service-header">
                        <i class="fas fa-bed"></i>
                        <h4>Dịch Vụ Phòng</h4>
                    </div>
                    <ul class="service-list">
                        <li><i class="fas fa-check"></i> Room Service 24/7</li>
                        <li><i class="fas fa-check"></i> Dọn phòng hàng ngày</li>
                        <li><i class="fas fa-check"></i> Giặt ủi cao cấp</li>
                        <li><i class="fas fa-check"></i> Mini Bar đầy đủ</li>
                        <li><i class="fas fa-check"></i> Két sắt an toàn</li>
                        <li><i class="fas fa-check"></i> Điều hòa thông minh</li>
                        <li><i class="fas fa-check"></i> TV màn hình phẳng</li>
                        <li><i class="fas fa-check"></i> Máy pha cà phê</li>
                    </ul>
                </div>
            </div>

            <!-- Hotel Services -->
            <div class="col-lg-4 fade-in-up">
                <div class="service-category">
                    <div class="service-header">
                        <i class="fas fa-concierge-bell"></i>
                        <h4>Dịch Vụ Khách Sạn</h4>
                    </div>
                    <ul class="service-list">
                        <li><i class="fas fa-check"></i> Lễ tân 24/7</li>
                        <li><i class="fas fa-check"></i> Concierge chuyên nghiệp</li>
                        <li><i class="fas fa-check"></i> Đưa đón sân bay</li>
                        <li><i class="fas fa-check"></i> Thuê xe du lịch</li>
                        <li><i class="fas fa-check"></i> Tour du lịch</li>
                        <li><i class="fas fa-check"></i> Đặt vé máy bay</li>
                        <li><i class="fas fa-check"></i> Hỗ trợ visa</li>
                        <li><i class="fas fa-check"></i> Dịch vụ thông dịch</li>
                    </ul>
                </div>
            </div>

            <!-- Dining & Entertainment -->
            <div class="col-lg-4 fade-in-up">
                <div class="service-category">
                    <div class="service-header">
                        <i class="fas fa-utensils"></i>
                        <h4>Ẩm Thực & Giải Trí</h4>
                    </div>
                    <ul class="service-list">
                        <li><i class="fas fa-check"></i> Nhà hàng cao cấp</li>
                        <li><i class="fas fa-check"></i> Sky Bar tầng thượng</li>
                        <li><i class="fas fa-check"></i> Coffee Shop 24/7</li>
                        <li><i class="fas fa-check"></i> Karaoke VIP</li>
                        <li><i class="fas fa-check"></i> Phòng họp & sự kiện</li>
                        <li><i class="fas fa-check"></i> Trung tâm thương mại</li>
                        <li><i class="fas fa-check"></i> Sân tennis</li>
                        <li><i class="fas fa-check"></i> Khu vui chơi trẻ em</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Premium Features -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="premium-features fade-in-up">
                    <h4 class="text-center mb-4">Đặc Quyền Cao Cấp</h4>
                    <div class="row g-4">
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="premium-feature">
                                <i class="fas fa-crown"></i>
                                <span>VIP Lounge</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="premium-feature">
                                <i class="fas fa-car"></i>
                                <span>Valet Parking</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="premium-feature">
                                <i class="fas fa-plane"></i>
                                <span>Airport Transfer</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="premium-feature">
                                <i class="fas fa-shield-alt"></i>
                                <span>Bảo Mật 24/7</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="premium-feature">
                                <i class="fas fa-user-md"></i>
                                <span>Y Tế Khẩn Cấp</span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="premium-feature">
                                <i class="fas fa-baby"></i>
                                <span>Dịch Vụ Trẻ Em</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Hours -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="service-hours fade-in-up">
                    <h4 class="text-center mb-4">Giờ Hoạt Động</h4>
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="hours-card">
                                <h6><i class="fas fa-utensils me-2"></i>Nhà Hàng</h6>
                                <p class="mb-1">Sáng: 6:00 - 10:00</p>
                                <p class="mb-1">Trưa: 11:30 - 14:00</p>
                                <p class="mb-0">Tối: 18:00 - 22:00</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="hours-card">
                                <h6><i class="fas fa-swimming-pool me-2"></i>Hồ Bơi</h6>
                                <p class="mb-1">Thứ 2 - CN: 6:00 - 22:00</p>
                                <p class="mb-0 text-muted">Nghỉ bảo trì: Thứ 2 (6:00-8:00)</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="hours-card">
                                <h6><i class="fas fa-dumbbell me-2"></i>Phòng Gym</h6>
                                <p class="mb-0">24/7 - Mở cửa liên tục</p>
                                <p class="mb-0 text-muted">Có HLV: 6:00 - 22:00</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="hours-card">
                                <h6><i class="fas fa-spa me-2"></i>Spa</h6>
                                <p class="mb-1">Thứ 2 - CN: 9:00 - 21:00</p>
                                <p class="mb-0 text-muted">Đặt lịch trước 24h</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5 fade-in-up">
            <h2 class="section-title">Thư Viện Hình Ảnh</h2>
            <p class="section-subtitle">Khám phá không gian sang trọng và hiện đại của Aurora Hotel</p>
        </div>

        <!-- Gallery Filter -->
        <div class="gallery-filter text-center mb-4 fade-in-up">
            <button class="btn btn-outline-primary me-2 mb-2 filter-btn active" data-filter="all">Tất Cả</button>
            <button class="btn btn-outline-primary me-2 mb-2 filter-btn" data-filter="rooms">Phòng Nghỉ</button>
            <button class="btn btn-outline-primary me-2 mb-2 filter-btn" data-filter="apartments">Căn Hộ</button>
            <button class="btn btn-outline-primary me-2 mb-2 filter-btn" data-filter="amenities">Tiện Nghi</button>
            <button class="btn btn-outline-primary me-2 mb-2 filter-btn" data-filter="exterior">Ngoại Thất</button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid row g-4">
            <!-- Room Images -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="rooms">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="/assets/image/room-deluxe.jpg" alt="Premium Deluxe Room" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Premium Deluxe</h5>
                                <p>Phòng cao cấp với view thành phố</p>
                                <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="/assets/image/room-deluxe.jpg">
                                    <i class="fas fa-expand-alt"></i> Xem Chi Tiết
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-item" data-category="rooms">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="/assets/image/room-suite.jpg" alt="Premium Twin Room" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Premium Twin</h5>
                                <p>Phòng đôi với 2 giường đơn</p>
                                <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="/assets/image/room-suite.jpg">
                                    <i class="fas fa-expand-alt"></i> Xem Chi Tiết
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-item" data-category="rooms">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="/assets/image/room-presidential.jpg" alt="Studio VIP Room" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Studio VIP</h5>
                                <p>Studio cao cấp với bếp mini</p>
                                <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="/assets/image/room-presidential.jpg">
                                    <i class="fas fa-expand-alt"></i> Xem Chi Tiết
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Apartment Images -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="apartments">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="/assets/image/room-suite-ocean.jpg" alt="Studio Apartment" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Studio Apartment</h5>
                                <p>Căn hộ studio hiện đại</p>
                                <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="/assets/image/room-suite-ocean.jpg">
                                    <i class="fas fa-expand-alt"></i> Xem Chi Tiết
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-item" data-category="apartments">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="/assets/image/room-deluxe-pool.jpg" alt="Premium Apartment" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Premium Apartment</h5>
                                <p>Căn hộ cao cấp 2 phòng ngủ</p>
                                <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="/assets/image/room-deluxe-pool.jpg">
                                    <i class="fas fa-expand-alt"></i> Xem Chi Tiết
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-item" data-category="apartments">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="/assets/image/room-standard-garden.jpg" alt="Family Apartment" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Family Apartment</h5>
                                <p>Căn hộ gia đình rộng rãi</p>
                                <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="/assets/image/room-standard-garden.jpg">
                                    <i class="fas fa-expand-alt"></i> Xem Chi Tiết
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Amenities Images -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="amenities">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="/assets/image/restaurant.jpg" alt="Hotel Restaurant" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Nhà Hàng</h5>
                                <p>Nhà hàng cao cấp phục vụ 24/7</p>
                                <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="/assets/image/restaurant.jpg">
                                    <i class="fas fa-expand-alt"></i> Xem Chi Tiết
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-item" data-category="amenities">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="/assets/image/gym.jpg" alt="Fitness Center" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Phòng Gym</h5>
                                <p>Trung tâm thể dục hiện đại</p>
                                <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="/assets/image/gym.jpg">
                                    <i class="fas fa-expand-alt"></i> Xem Chi Tiết
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-item" data-category="amenities">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="/assets/image/pool.jpg" alt="Swimming Pool" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Hồ Bơi</h5>
                                <p>Hồ bơi ngoài trời tuyệt đẹp</p>
                                <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="/assets/image/pool.jpg">
                                    <i class="fas fa-expand-alt"></i> Xem Chi Tiết
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Exterior Images -->
            <div class="col-lg-6 col-md-6 gallery-item" data-category="exterior">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="/assets/image/hotel-exterior.jpg" alt="Hotel Exterior Day" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Tòa Nhà Ban Ngày</h5>
                                <p>Kiến trúc hiện đại và sang trọng</p>
                                <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="/assets/image/hotel-exterior.jpg">
                                    <i class="fas fa-expand-alt"></i> Xem Chi Tiết
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 gallery-item" data-category="exterior">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="/assets/image/spa.jpg" alt="Hotel Spa" class="img-fluid">
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <h5>Spa & Wellness</h5>
                                <p>Khu vực thư giãn và chăm sóc sức khỏe</p>
                                <button class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="/assets/image/spa.jpg">
                                    <i class="fas fa-expand-alt"></i> Xem Chi Tiết
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-5 fade-in-up">
            <button class="btn btn-outline-primary btn-lg" id="loadMoreBtn">
                <i class="fas fa-plus me-2"></i>Xem Thêm Hình Ảnh
            </button>
        </div>
    </div>
</section>

<!-- Gallery Modal -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <img src="" alt="Gallery Image" class="img-fluid w-100" id="modalImage">
            </div>
        </div>
    </div>
</div>

<!-- Testimonials & Reviews Section -->
<section class="testimonials-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Đánh giá từ khách hàng</h2>
                <p class="section-subtitle">Trải nghiệm thực tế từ những vị khách đã lưu trú tại Aurora Hotel</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="customer-avatar">
                            <img src="../assets/image/customer1.jpg" alt="Nguyễn Minh Anh" class="avatar-img">
                        </div>
                        <div class="customer-info">
                            <h5>Nguyễn Minh Anh</h5>
                            <p class="customer-title">Doanh nhân</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p>"Căn hộ Studio rất thoáng mát và hiện đại. Dịch vụ tuyệt vời, nhân viên thân thiện. Tôi sẽ quay lại Aurora Hotel trong những chuyến công tác tiếp theo."</p>
                    </div>
                    <div class="testimonial-footer">
                        <span class="stay-date">Lưu trú: Tháng 12/2023</span>
                        <span class="room-type">Căn hộ Studio</span>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="customer-avatar">
                            <img src="../assets/image/customer2.jpg" alt="Trần Thị Hương" class="avatar-img">
                        </div>
                        <div class="customer-info">
                            <h5>Trần Thị Hương</h5>
                            <p class="customer-title">Kiến trúc sư</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p>"Phòng Deluxe có view thành phố tuyệt đẹp. Thiết kế nội thất sang trọng, tiện nghi đầy đủ. Đặc biệt ấn tượng với dịch vụ room service 24/7."</p>
                    </div>
                    <div class="testimonial-footer">
                        <span class="stay-date">Lưu trú: Tháng 11/2023</span>
                        <span class="room-type">Phòng Deluxe</span>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="customer-avatar">
                            <img src="../assets/image/customer3.jpg" alt="Lê Văn Đức" class="avatar-img">
                        </div>
                        <div class="customer-info">
                            <h5>Lê Văn Đức</h5>
                            <p class="customer-title">Giám đốc Marketing</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <p>"Căn hộ 2 phòng ngủ hoàn hảo cho gia đình. Không gian rộng rãi, bếp đầy đủ tiện nghi. Con em rất thích hồ bơi và khu vui chơi."</p>
                    </div>
                    <div class="testimonial-footer">
                        <span class="stay-date">Lưu trú: Tháng 10/2023</span>
                        <span class="room-type">Căn hộ 2PN</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Review Statistics -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="review-stats">
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="stat-item">
                                <div class="stat-number">4.9</div>
                                <div class="stat-label">Điểm đánh giá trung bình</div>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="stat-item">
                                <div class="stat-number">1,247</div>
                                <div class="stat-label">Đánh giá từ khách hàng</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="stat-item">
                                <div class="stat-number">98%</div>
                                <div class="stat-label">Khách hàng hài lòng</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="stat-item">
                                <div class="stat-number">95%</div>
                                <div class="stat-label">Tỷ lệ quay lại</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="cta-content fade-in-up">
                    <h2 class="mb-4">Sẵn sàng đặt phòng?</h2>
                    <p class="lead mb-4">Liên hệ với chúng tôi để được tư vấn và đặt phòng với giá tốt nhất</p>
                    <div class="cta-buttons">
                        <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn btn-primary btn-lg me-3">
                            <i class="fas fa-calendar-check me-2"></i>Đặt phòng ngay
                        </a>
                        <a href="<?php echo url('pages/lien-he.php'); ?>" class="btn btn-outline-primary btn-lg">
                            <i class="fas fa-phone me-2"></i>Liên hệ tư vấn
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.accommodation-card {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.accommodation-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.card-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.accommodation-card:hover .card-image img {
    transform: scale(1.05);
}

.card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(45deg, rgba(0,0,0,0.7), rgba(0,0,0,0.3));
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.accommodation-card:hover .card-overlay {
    opacity: 1;
}

.overlay-content {
    text-align: center;
    color: white;
}

.overlay-content h3 {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
}

.card-body {
    padding: 2rem;
}

.card-title {
    color: #2c3e50;
    font-weight: bold;
    margin-bottom: 1rem;
}

.room-types h6 {
    color: #34495e;
    font-weight: 600;
    margin-bottom: 1rem;
}

.card-features {
    background: #f8f9fa;
    padding: 1rem;
    border-radius: 10px;
}

.card-features i {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.comparison-card {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    height: 100%;
}

.comparison-card .card-header {
    padding: 1.5rem;
    border: none;
}

.comparison-card .card-body {
    padding: 2rem;
}

.section-title {
    color: #2c3e50;
    font-weight: bold;
    margin-bottom: 1rem;
}

.section-subtitle {
    color: #7f8c8d;
    font-size: 1.1rem;
}

.cta-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
}

.cta-section h2 {
    color: white;
}

.cta-buttons .btn {
    padding: 12px 30px;
    font-weight: 600;
    border-radius: 25px;
}

@media (max-width: 768px) {
    .card-body {
        padding: 1.5rem;
    }
    
    .cta-buttons .btn {
        display: block;
        width: 100%;
        margin-bottom: 1rem;
    }
    
    .cta-buttons .btn:last-child {
        margin-bottom: 0;
    }
}
</style>

<?php include '../includes/footer.php'; ?>