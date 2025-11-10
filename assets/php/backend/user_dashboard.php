<?php
// Backend cho khu vực người dùng: lấy thông tin user, lịch sử đặt phòng, điểm thưởng
// Đặt tách riêng tại assets/php/backend và dùng inc từ config/database.php

require_once __DIR__ . '/../../../config/database.php';

function fetchUserById(int $userId): ?array {
    try {
        $pdo = getDB();
        if ($pdo === false) { return null; }
        $stmt = $pdo->prepare('SELECT id, username, email, first_name, last_name, full_name, gender, date_of_birth, phone, avatar_url, address_line1, address_line2, city, state, postal_code, country_code, role, status, locale, timezone, marketing_opt_in, preferences, last_login_at, last_login_ip, created_at, updated_at FROM users WHERE id = ? LIMIT 1');
        $stmt->execute([$userId]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user ?: null;
    } catch (Throwable $e) {
        if (defined('DB_DEBUG') && DB_DEBUG) {
            error_log('fetchUserById error: ' . $e->getMessage());
        }
        return null;
    }
}

function fetchBookingsByUser(int $userId, int $limit = 10): array {
    // Lưu ý: tên bảng có thể khác (bookings/reservations). Trả về rỗng nếu không tồn tại.
    try {
        $pdo = getDB();
        if ($pdo === false) { return []; }
        $sql = 'SELECT id, code, check_in_date, check_out_date, room_type, status, total_price, created_at FROM bookings WHERE user_id = ? ORDER BY created_at DESC LIMIT ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$userId, $limit]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
    } catch (Throwable $e) {
        if (defined('DB_DEBUG') && DB_DEBUG) {
            error_log('fetchBookingsByUser error: ' . $e->getMessage());
        }
        return [];
    }
}

function fetchRewardsByUser(int $userId): array {
    // Lưu ý: tên bảng có thể là user_rewards/loyalty_points. Trả về giá trị mặc định nếu không có.
    try {
        $pdo = getDB();
        if ($pdo === false) { return ['points' => 0, 'tier' => 'Standard', 'updated_at' => null]; }
        $sql = 'SELECT points, tier, updated_at FROM user_rewards WHERE user_id = ? LIMIT 1';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$userId]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return ['points' => 0, 'tier' => 'Standard', 'updated_at' => null];
        }
        return $row;
    } catch (Throwable $e) {
        if (defined('DB_DEBUG') && DB_DEBUG) {
            error_log('fetchRewardsByUser error: ' . $e->getMessage());
        }
        return ['points' => 0, 'tier' => 'Standard', 'updated_at' => null];
    }
}

function redeemRewardPoints(int $userId, int $points): array {
    // Nền tảng: chỉ mô phỏng phản hồi. Triển khai thực tế sau (giảm điểm, ghi log, tạo voucher)
    if ($points <= 0) {
        return ['success' => false, 'message' => 'Số điểm không hợp lệ.'];
    }
    return ['success' => false, 'message' => 'Chức năng đổi điểm sẽ được triển khai sau.'];
}