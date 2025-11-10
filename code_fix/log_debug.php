<!-- mẫu code check lỗi đặt ở đầu trang  -->
 <?php
    // Kiểm tra lỗi PHP
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
 ?>
<?php
// Log all errors to a file
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/logs/php_errors.log');

// Optional: log all variables for debugging
ini_set('log_errors_max_len', 0);

// Optional: log all notices and warnings
ini_set('ignore_repeated_errors', 0);
?>

