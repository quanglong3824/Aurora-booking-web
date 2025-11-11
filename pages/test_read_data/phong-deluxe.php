<?php
// Bật lỗi để dễ debug khi chạy trên XAMPP
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Nạp cấu hình database (PDO)
require_once __DIR__ . '/../../config/database.php';

try {
    $conn = getDB();
    if (!$conn) {
        throw new Exception('Không thể kết nối database (getDB trả về false).');
    }

    // Đọc toàn bộ bảng deluxe_sang_trong
    $stmt = $conn->query('SELECT * FROM `deluxe_sang_trong`');
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<h2>Dump bảng deluxe_sang_trong</h2>';
    echo '<pre>';
    print_r($rows);
    echo '</pre>';

    // Nếu muốn xem dòng mới nhất:
    // $stmt = $conn->query('SELECT * FROM `deluxe_sang_trong` ORDER BY id DESC LIMIT 1');
    // $latest = $stmt->fetch(PDO::FETCH_ASSOC);
    // var_dump($latest);
} catch (Throwable $e) {
    echo '<p style="color:red">Lỗi đọc dữ liệu: ' . htmlspecialchars($e->getMessage()) . '</p>';
}