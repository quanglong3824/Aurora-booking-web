<?php
// Include configuration for dynamic paths
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
        
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - Aurora Hotel Plaza' : 'Aurora Hotel Plaza - Khách sạn 4 sao ở Biên Hoà'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Aurora Hotel Plaza - Khách sạn 4 sao ở Biên Hoà với dịch vụ chuẩn 4 sao'; ?>">
    <meta name="keywords" content="khách sạn Biên Hoà, khách sạn 4 sao Biên Hoà, đặt phòng khách sạn Biên Hoà, Aurora Hotel Plaza, Aurora Biên Hoà, 
    khách sạn sang trọng Biên Hoà, nơi lưu trú Biên Hoà, resort Biên Hoà, khách sạn gần trung tâm Biên Hoà, khách sạn gần sân bay Biên Hoà, khách sạn có hồ bơi Biên Hoà, khách 
    sạn giá tốt Biên Hoà, khách sạn cao cấp Biên Hoà, đặt phòng trực tuyến Biên Hoà, khách sạn 4 sao gần Biên Hoà, Aurora Plaza Biên Hoà, khách sạn tiện nghi Biên Hoà, nghỉ dưỡng Biên Hoà, 
    du lịch Biên Hoà, khách sạn view đẹp Biên Hoà, khách sạn gần chợ Biên Hoà, khách sạn gần bệnh viện Biên Hoà, Aurora booking, Aurora reservation, hotel in Bien Hoa, 4 star hotel Bien Hoa,
     book hotel Bien Hoa, Bien Hoa accommodation, luxury hotel Bien Hoa, top hotel Bien Hoa, best hotel in Bien Hoa">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo asset('img/src/logo/favicon.png'); ?>">
    <link rel="shortcut icon" type="image/png" href="<?php echo asset('img/src/logo/favicon.png'); ?>">
    <link rel="apple-touch-icon" href="<?php echo asset('img/src/logo/favicon.png'); ?>">
    
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
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' - Aurora Hotel Plaza' : 'Aurora Hotel Plaza - Khách sạn sang trọng'; ?>">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : 'Aurora Hotel Plaza - Khách sạn sang trọng với dịch vụ đẳng cấp quốc tế'; ?>">
    <meta property="og:image" content="<?php echo asset('image/aurora-hotel-og.jpg'); ?>">
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:type" content="website">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title . ' - Aurora Hotel Plaza' : 'Aurora Hotel Plaza - Khách sạn sang trọng'; ?>">
    <meta name="twitter:description" content="<?php echo isset($page_description) ? $page_description : 'Aurora Hotel Plaza - Khách sạn sang trọng với dịch vụ đẳng cấp quốc tế'; ?>">
    <meta name="twitter:image" content="<?php echo asset('image/aurora-hotel-og.jpg'); ?>">
</head>
<body class="<?php echo isset($body_class) ? $body_class : ''; ?>">
    <!-- Header -->
    <header class="header <?php echo isset($header_class) ? $header_class : ''; ?>">
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-logo">
                    <a href="<?php echo url('index.php'); ?>" class="nav-logo-link" aria-label="Aurora Hotel Plaza">
                        <img src="<?php echo asset('img/src/logo/logo-white-ui.png'); ?>"
                             alt="<?php echo isset($hotel_name) ? $hotel_name : 'Aurora Hotel Plaza'; ?>"
                             class="logo-img"
                             style="height:80px; width:auto; display:block;" />
                    </a>
                </div>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="<?php echo url('index.php'); ?>" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' || basename($_SERVER['PHP_SELF']) == '') ? 'active' : ''; ?>">Trang chủ</a></li>
                    <li class="dropdown">
                        <a href="<?php echo url('pages/phong-va-can-ho.php'); ?>" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'phong-va-can-ho.php' || basename($_SERVER['PHP_SELF']) == 'phong.php' || strpos($_SERVER['PHP_SELF'], 'can-ho') !== false) ? 'active' : ''; ?>">
                            Lưu trú <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo url('pages/phong.php'); ?>">Phòng</a></li>
                            <li><a href="<?php echo url('pages/can-ho.php'); ?>">Căn hộ</a></li>
                        </ul>
                    </li>
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
                    <a href="<?php echo url('pages/auth/dang-nhap.php'); ?>" class="nav-login" aria-label="Đăng nhập" title="Đăng nhập">
                        <i class="fas fa-user"></i>
                    </a>
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
    <?php 
        // Normalize breadcrumb from different page variables
        $has_breadcrumb = false;
        $render_items = [];

        if (isset($breadcrumb_items) && is_array($breadcrumb_items) && count($breadcrumb_items) > 0) {
            $has_breadcrumb = isset($show_breadcrumb) ? (bool)$show_breadcrumb : true;
            $render_items = $breadcrumb_items;
        } elseif (isset($breadcrumb) && is_array($breadcrumb) && count($breadcrumb) > 0) {
            $has_breadcrumb = true;
            foreach ($breadcrumb as $item) {
                $title = isset($item['title']) ? $item['title'] : (isset($item['name']) ? $item['name'] : '');
                $url = isset($item['url']) ? $item['url'] : null;
                $active = isset($item['active']) ? (bool)$item['active'] : false;
                $render_items[] = [
                    'title' => $title,
                    'url' => $active ? null : $url
                ];
            }
        }
    ?>
    <?php if($has_breadcrumb): ?>
    <nav class="breadcrumb-nav" style="margin-top: 120px;">
        <div class="container" style="margin-top: 100px;">
            <ol class="breadcrumb">
                <li><a href="/"><i class="fas fa-home"></i> Trang chủ</a></li>
                <?php foreach($render_items as $item): ?>
                    <?php if(isset($item['url']) && $item['url']): ?>
                        <li><a href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a></li>
                    <?php else: ?>
                        <li class="active"><?php echo $item['title']; ?></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ol>
        </div>
    </nav>
    <?php endif; ?>

    <!-- Page Header -->
    <?php if(isset($page_header) && $page_header): ?>
    <section class="page-header" style="background-image: url('<?php echo isset($page_header_bg) ? $page_header_bg : '/assets/image/page-header-bg.jpg'; ?>'); margin-top: 120px;">
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