<?php
// Đăng xuất: hủy phiên và quay lại trang chủ
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Xóa thông tin người dùng khỏi phiên
unset($_SESSION['user']);

// Tùy chọn: hủy toàn bộ phiên
session_regenerate_id(true);

require_once __DIR__ . '/../../includes/config.php';
header('Location: ' . url('index.php'));
exit;
?>