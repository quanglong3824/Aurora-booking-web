<?php
// Include configuration for dynamic paths
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - Aurora Hotel' : 'Aurora Hotel - Khách sạn sang trọng'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Aurora Hotel - Khách sạn sang trọng với dịch vụ đẳng cấp quốc tế tại TP.HCM'; ?>">
    <meta name="keywords" content="khách sạn, hotel, Aurora, sang trọng, TP.HCM, đặt phòng, nghỉ dưỡng">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo asset('image/favicon.ico'); ?>">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
    <?php if(isset($additional_css)): ?>
        <?php foreach($additional_css as $css): ?>
            <link rel="stylesheet" href="<?php echo asset('css/' . $css); ?>">
        <?php endforeach; ?>
    <?php endif; ?>
    
    <!-- External Libraries -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' - Aurora Hotel' : 'Aurora Hotel - Khách sạn sang trọng'; ?>">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : 'Aurora Hotel - Khách sạn sang trọng với dịch vụ đẳng cấp quốc tế'; ?>">
    <meta property="og:image" content="<?php echo asset('image/aurora-hotel-og.jpg'); ?>">
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title . ' - Aurora Hotel' : 'Aurora Hotel - Khách sạn sang trọng'; ?>">
    <meta name="twitter:description" content="<?php echo isset($page_description) ? $page_description : 'Aurora Hotel - Khách sạn sang trọng với dịch vụ đẳng cấp quốc tế'; ?>">
    <meta name="twitter:image" content="<?php echo asset('image/aurora-hotel-og.jpg'); ?>">
</head>
<body class="<?php echo isset($body_class) ? $body_class : ''; ?>">
    <!-- Header -->
    <header class="header <?php echo isset($header_class) ? $header_class : ''; ?>">
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-logo">
                    <a href="<?php echo url('index.php'); ?>">
                        <h1>Aurora Hotel</h1>
                    </a>
                </div>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="<?php echo url('index.php'); ?>" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' || basename($_SERVER['PHP_SELF']) == '') ? 'active' : ''; ?>">Trang chủ</a></li>
                    <li><a href="<?php echo url('pages/phong-va-can-ho.php'); ?>" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'phong-va-can-ho.php' || strpos($_SERVER['PHP_SELF'], 'phong') !== false || strpos($_SERVER['PHP_SELF'], 'can-ho') !== false || strpos($_SERVER['PHP_SELF'], 'rooms') !== false || strpos($_SERVER['PHP_SELF'], 'apartments') !== false) ? 'active' : ''; ?>">Phòng & Căn hộ</a></li>
                    <li><a href="<?php echo url('pages/dich-vu.php'); ?>" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'dich-vu.php') ? 'active' : ''; ?>">Dịch vụ</a></li>
                    <li class="dropdown">
                        <a href="#" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'thu-vien-anh.php' || basename($_SERVER['PHP_SELF']) == 'gioi-thieu.php') ? 'active' : ''; ?>">
                            Khám phá <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo url('pages/thu-vien-anh.php'); ?>">Thư viện ảnh</a></li>
                            <li><a href="<?php echo url('pages/gioi-thieu.php'); ?>">Giới thiệu</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo url('pages/lien-he.php'); ?>" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'lien-he.php') ? 'active' : ''; ?>">Liên hệ</a></li>
                </ul>
                <div class="nav-actions">
                    <a href="<?php echo url('pages/auth/dang-nhap.php'); ?>" class="nav-login">Đăng nhập</a>
                    <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn-book-now">Đặt phòng</a>
                    <div class="nav-toggle" id="navToggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Breadcrumb -->
    <?php if(isset($show_breadcrumb) && $show_breadcrumb): ?>
    <nav class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><i class="fas fa-home"></i> Trang chủ</a></li>
                <?php if(isset($breadcrumb_items)): ?>
                    <?php foreach($breadcrumb_items as $item): ?>
                        <?php if(isset($item['url'])): ?>
                            <li><a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a></li>
                        <?php else: ?>
                            <li class="active"><?php echo $item['title']; ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ol>
        </div>
    </nav>
    <?php endif; ?>

    <!-- Page Header -->
    <?php if(isset($page_header) && $page_header): ?>
    <section class="page-header" style="background-image: url('<?php echo isset($page_header_bg) ? $page_header_bg : '/assets/image/page-header-bg.jpg'; ?>');">
        <div class="page-header-overlay"></div>
        <div class="container">
            <div class="page-header-content">
                <h1><?php echo isset($page_header_title) ? $page_header_title : $page_title; ?></h1>
                <?php if(isset($page_header_subtitle)): ?>
                    <p><?php echo $page_header_subtitle; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Floating Action Button for Mobile/Tablet -->
    <div class="floating-menu-container">
        <button class="floating-btn" id="floatingBtn">
            <i class="fas fa-bars"></i>
        </button>
        <div class="floating-menu" id="floatingMenu">
            <div class="floating-menu-item">
                <a href="index.php" class="floating-link">
                    <i class="fas fa-home"></i>
                    <span>Trang chủ</span>
                </a>
            </div>
            <div class="floating-menu-item">
                <a href="<?php echo url('pages/phong-va-can-ho.php'); ?>" class="floating-link">
                    <i class="fas fa-building"></i>
                    <span>Phòng & Căn hộ</span>
                </a>
            </div>
            <div class="floating-menu-item">
                <a href="<?php echo url('pages/dich-vu.php'); ?>" class="floating-link">
                    <i class="fas fa-concierge-bell"></i>
                    <span>Dịch vụ</span>
                </a>
            </div>
            <div class="floating-menu-item">
                <a href="<?php echo url('pages/lien-he.php'); ?>" class="floating-link">
                    <i class="fas fa-phone"></i>
                    <span>Liên hệ</span>
                </a>
            </div>
            <div class="floating-menu-item">
                <a href="<?php echo url('pages/dat-phong.php'); ?>" class="floating-link booking-link">
                    <i class="fas fa-calendar-check"></i>
                    <span>Đặt phòng</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content Start -->
    <main class="main-content <?php echo isset($main_class) ? $main_class : ''; ?>">