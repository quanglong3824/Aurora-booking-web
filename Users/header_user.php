<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once __DIR__ . '/../includes/config.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo htmlspecialchars($page_title ?? 'Khu vực người dùng'); ?></title>
    <link rel="stylesheet" href="<?php echo url('assets/css/style.css'); ?>" />
    <?php if (!empty($additional_css) && is_array($additional_css)): ?>
        <?php foreach ($additional_css as $css): ?>
            <link rel="stylesheet" href="<?php echo url('assets/css/'. $css); ?>" />
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
<header class="user-header">
    <div class="container user-header-inner">
        <div class="user-brand">
            <a href="<?php echo url('index.php'); ?>" class="logo">Aurora Hotel Plaza</a>
            <nav class="user-nav">
                <a href="#" data-tab="overview" class="nav-link">Tổng quan</a>
                <a href="#" data-tab="history" class="nav-link">Lịch sử đặt phòng</a>
                <a href="#" data-tab="rewards" class="nav-link">Điểm thưởng</a>
                <a href="#" data-tab="profile" class="nav-link">Thông tin cá nhân</a>
            </nav>
        </div>
        <div class="user-actions">
            <a href="<?php echo url('pages/dich-vu.php'); ?>" class="btn-primary">Quay lại dịch vụ</a>
            <a href="<?php echo url('pages/auth/logout.php'); ?>" class="btn-outline">Đăng xuất</a>
        </div>
    </div>
</header>

<div class="user-header-spacer"></div>