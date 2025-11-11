<?php
/**
 * Configuration file for Aurora Booking Website
 * Handles base URL and path calculations
 */

// Determine the base URL dynamically
function getBaseUrl() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $script_name = $_SERVER['SCRIPT_NAME'];

    // Lấy thư mục chứa script hiện tại
    $path = dirname($script_name);
    $path = rtrim($path, '/');

    // Chuẩn hoá: cắt về thư mục gốc dự án nếu nằm trong /pages, /admin hoặc /Users
    $segments = explode('/', $path); // ví dụ: ['', 'Aurora-booking-web', 'pages', 'phong']
    foreach (['pages', 'admin', 'Users'] as $marker) {
        $idx = array_search($marker, $segments, true);
        if ($idx !== false) {
            // Lấy phần trước thư mục đặc biệt để trỏ về gốc dự án
            $segments = array_slice($segments, 0, $idx);
            break;
        }
    }

    // Ghép lại đường dẫn base (đảm bảo bắt đầu bằng '/')
    $basePath = implode('/', $segments);
    if ($basePath === '') {
        $basePath = '/';
    } else {
        // Đảm bảo có dấu '/' đầu và cuối
        if ($basePath[0] !== '/') { $basePath = '/' . $basePath; }
        $basePath = rtrim($basePath, '/') . '/';
    }

    return $protocol . '://' . $host . $basePath;
}

// Get relative path to root from current location
function getRelativeRoot() {
    $script_name = $_SERVER['SCRIPT_NAME'];
    $depth = substr_count($script_name, '/') - 1;
    
    if ($depth <= 1) {
        return './';
    }
    
    return str_repeat('../', $depth - 1);
}

// Define constants
define('BASE_URL', getBaseUrl());
define('RELATIVE_ROOT', getRelativeRoot());

// Helper function to create proper URLs (absolute based on BASE_URL)
function url($path = '') {
    return BASE_URL . ltrim($path, '/');
}

// Helper function for assets (absolute path)
function asset($path = '') {
    return BASE_URL . 'assets/' . ltrim($path, '/');
}
?>