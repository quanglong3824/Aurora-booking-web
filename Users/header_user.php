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
    <link rel="stylesheet" href="<?php echo url('assets/css/user.css'); ?>" />
    <?php if (!empty($additional_css) && is_array($additional_css)): ?>
        <?php foreach ($additional_css as $css): ?>
            <link rel="stylesheet" href="<?php echo url('assets/css/'. $css); ?>" />
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
<header class="user-header" style="position:fixed; top:0; left:0; right:0; z-index:999; background:#fff; border-bottom:1px solid #eee;">
    <div class="container" style="display:flex; align-items:center; justify-content:space-between; padding:12px 16px;">
        <div style="display:flex; align-items:center; gap:12px;">
            <a href="<?php echo url('index.php'); ?>" class="logo" style="font-weight:700; font-size:18px; color:#222; text-decoration:none;">Aurora Hotel Plaza</a>
            <nav class="user-nav" style="display:flex; gap:10px;">
                <a href="#" data-tab="overview" class="nav-link" style="padding:6px 10px; border-radius:6px;">Tổng quan</a>
                <a href="#" data-tab="history" class="nav-link" style="padding:6px 10px; border-radius:6px;">Lịch sử đặt phòng</a>
                <a href="#" data-tab="rewards" class="nav-link" style="padding:6px 10px; border-radius:6px;">Điểm thưởng</a>
                <a href="#" data-tab="profile" class="nav-link" style="padding:6px 10px; border-radius:6px;">Thông tin cá nhân</a>
            </nav>
        </div>
        <div style="display:flex; align-items:center; gap:10px;">
            <a href="<?php echo url('pages/dich-vu.php'); ?>" class="btn-primary" style="padding:8px 12px; border-radius:6px;">Quay lại dịch vụ</a>
            <a href="<?php echo url('pages/auth/logout.php'); ?>" class="btn-outline" style="padding:8px 12px; border-radius:6px;">Đăng xuất</a>
        </div>
    </div>
</header>

<div style="height:68px;"></div>