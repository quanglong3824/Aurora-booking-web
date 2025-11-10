<?php
// Users/index.php - Dashboard người dùng (nền UI + trực quan hoá)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../assets/php/backend/user_dashboard.php';

if (!isset($_SESSION['user']) || !isset($_SESSION['user']['id'])) {
    header('Location: ' . url('pages/auth/dang-nhap.php?type=error&msg=' . urlencode('Vui lòng đăng nhập để truy cập trang người dùng')));
    exit;
}

$userId = (int) $_SESSION['user']['id'];
$user = fetchUserById($userId);
if (!$user) {
    header('Location: ' . url('pages/auth/dang-nhap.php?type=error&msg=' . urlencode('Không tìm thấy thông tin người dùng')));
    exit;
}

// Dữ liệu nền cho trực quan hoá
$bookings = fetchBookingsByUser($userId, 10);
$rewards = fetchRewardsByUser($userId);
$bookingCount = count($bookings);
$points = isset($rewards['points']) ? (int)$rewards['points'] : 0;
$tier = $rewards['tier'] ?? 'Standard';

// Tiêu đề trang
$page_title = 'Khu vực người dùng';
$additional_css = ['user.css'];

include __DIR__ . '/header_user.php';
?>

<main class="container" style="margin-top: 12px;">
    <?php if (isset($_GET['type'], $_GET['msg'])): ?>
        <div class="notice <?php echo $_GET['type']==='success' ? 'success' : 'error'; ?>" style="margin-bottom:12px;">
            <?php echo htmlspecialchars($_GET['msg']); ?>
        </div>
    <?php endif; ?>

    <section id="overview" class="tab-section">
        <h1 style="margin-bottom: 8px;">Xin chào, <?php echo htmlspecialchars($user['full_name'] ?: $user['username']); ?></h1>
        <p style="color:#666; margin-bottom:16px;">Bảng điều khiển của bạn - theo dõi đặt phòng, điểm thưởng và thông tin cá nhân.</p>

        <div class="user-grid">
            <div class="user-card">
                <h2>Tổng điểm thưởng</h2>
                <div style="font-size:28px; font-weight:700; color:#1a73e8;"><?php echo number_format($points); ?> điểm</div>
                <p style="color:#666;">Hạng thành viên: <strong><?php echo htmlspecialchars($tier); ?></strong></p>
                <div style="margin-top:10px;">
                    <a href="#" data-tab="rewards" class="btn-primary">Xem chi tiết & đổi điểm</a>
                </div>
            </div>
            <div class="user-card">
                <h2>Lượt đặt phòng</h2>
                <div style="font-size:28px; font-weight:700; color:#1a73e8;"><?php echo (int)$bookingCount; ?></div>
                <p style="color:#666;">10 đặt phòng gần đây nhất</p>
                <div style="margin-top:10px;">
                    <a href="#" data-tab="history" class="btn-primary">Xem lịch sử đặt phòng</a>
                </div>
            </div>
            <div class="user-card">
                <h2>Tuỳ chọn nhanh</h2>
                <p style="color:#666;">Chỉnh sửa hồ sơ, cập nhật liên hệ và cài đặt thông báo.</p>
                <div style="display:flex; gap:8px; flex-wrap:wrap;">
                    <a href="#" data-tab="profile" class="btn-outline">Hồ sơ cá nhân</a>
                    <a href="<?php echo url('pages/dich-vu.php'); ?>" class="btn-primary">Quay lại dịch vụ</a>
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="tab-section" style="display:none;">
        <h2 style="margin-bottom:12px;">Lịch sử đặt phòng</h2>
        <?php if (empty($bookings)): ?>
            <div class="user-card" style="color:#666;">Bạn chưa có đặt phòng nào hoặc dữ liệu chưa khả dụng.</div>
        <?php else: ?>
            <div class="user-card" style="overflow:auto;">
                <table class="table" style="width:100%; border-collapse:collapse;">
                    <thead>
                        <tr style="text-align:left; border-bottom:1px solid #eee;">
                            <th style="padding:8px;">Mã</th>
                            <th style="padding:8px;">Nhận phòng</th>
                            <th style="padding:8px;">Trả phòng</th>
                            <th style="padding:8px;">Loại phòng</th>
                            <th style="padding:8px;">Trạng thái</th>
                            <th style="padding:8px;">Tổng tiền</th>
                            <th style="padding:8px;">Tạo lúc</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($bookings as $b): ?>
                            <tr style="border-bottom:1px solid #f3f3f3;">
                                <td style="padding:8px; font-weight:600;"><?php echo htmlspecialchars($b['code'] ?? ('BK#'.$b['id'])); ?></td>
                                <td style="padding:8px;"><?php echo htmlspecialchars($b['check_in_date'] ?? '—'); ?></td>
                                <td style="padding:8px;"><?php echo htmlspecialchars($b['check_out_date'] ?? '—'); ?></td>
                                <td style="padding:8px;"><?php echo htmlspecialchars($b['room_type'] ?? '—'); ?></td>
                                <td style="padding:8px;">
                                    <?php 
                                        $st = strtolower((string)($b['status'] ?? 'unknown'));
                                        $label = $st === 'confirmed' ? 'Đã xác nhận' : ($st === 'cancelled' ? 'Đã huỷ' : ($st === 'pending' ? 'Chờ xác nhận' : 'Không rõ'));
                                        echo htmlspecialchars($label);
                                    ?>
                                </td>
                                <td style="padding:8px;"><?php echo isset($b['total_price']) ? number_format((float)$b['total_price']).'₫' : '—'; ?></td>
                                <td style="padding:8px;"><?php echo htmlspecialchars($b['created_at'] ?? '—'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </section>

    <section id="rewards" class="tab-section" style="display:none;">
        <h2 style="margin-bottom:12px;">Điểm thưởng & đổi điểm</h2>
        <div class="user-grid">
            <div class="user-card">
                <h3>Tổng điểm hiện có</h3>
                <div style="font-size:28px; font-weight:700; color:#1a73e8;"><?php echo number_format($points); ?> điểm</div>
                <p style="color:#666;">Hạng: <strong><?php echo htmlspecialchars($tier); ?></strong></p>
                <small style="color:#999;">Cập nhật: <?php echo htmlspecialchars($rewards['updated_at'] ?? '—'); ?></small>
            </div>
            <div class="user-card">
                <h3>Đổi điểm</h3>
                <form method="post" action="#" onsubmit="alert('Tính năng đổi điểm sẽ được triển khai sau.'); return false;">
                    <label for="points" style="display:block; margin-bottom:6px;">Số điểm muốn đổi</label>
                    <input type="number" id="points" name="points" min="1" step="1" placeholder="VD: 1000" style="padding:8px; border:1px solid #ddd; border-radius:6px; width:220px;" />
                    <div style="margin-top:10px; display:flex; gap:8px;">
                        <button type="submit" class="btn-primary">Đổi điểm</button>
                        <a href="#" data-tab="history" class="btn-outline">Xem đơn đủ điều kiện</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="profile" class="tab-section" style="display:none;">
        <h2 style="margin-bottom:12px;">Thông tin cá nhân</h2>
        <div class="user-grid">
            <div class="user-card">
                <h3>Thông tin cơ bản</h3>
                <ul style="list-style:none; padding:0; margin:0;">
                    <li><strong>Tên hiển thị:</strong> <?php echo htmlspecialchars($user['full_name'] ?: ($user['first_name'].' '.$user['last_name'])); ?></li>
                    <li><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></li>
                    <li><strong>Số điện thoại:</strong> <?php echo htmlspecialchars($user['phone']); ?></li>
                    <li><strong>Giới tính:</strong> <?php echo htmlspecialchars($user['gender'] ?: '—'); ?></li>
                    <li><strong>Ngày sinh:</strong> <?php echo htmlspecialchars($user['date_of_birth'] ?: '—'); ?></li>
                    <li><strong>Quốc gia:</strong> <?php echo htmlspecialchars($user['country_code'] ?: '—'); ?></li>
                </ul>
                <div style="margin-top:12px; display:flex; gap:8px;">
                    <a href="<?php echo url('Users/edit.php'); ?>" class="btn-primary">Chỉnh sửa thông tin</a>
                    <a href="<?php echo url('pages/dich-vu.php'); ?>" class="btn-outline">Quay lại dịch vụ</a>
                </div>
            </div>
            <div class="user-card">
                <h3>Đăng nhập gần đây & tuỳ chọn</h3>
                <ul style="list-style:none; padding:0; margin:0;">
                    <li><strong>Thời điểm:</strong> <?php echo htmlspecialchars($user['last_login_at'] ?: '—'); ?></li>
                    <li><strong>IP:</strong> <?php echo htmlspecialchars($user['last_login_ip'] ?: '—'); ?></li>
                </ul>
                <h3 style="margin-top:12px;">Tùy chọn</h3>
                <ul style="list-style:none; padding:0; margin:0;">
                    <li><strong>Ngôn ngữ:</strong> <?php echo htmlspecialchars($user['locale'] ?: 'vi_VN'); ?></li>
                    <li><strong>Múi giờ:</strong> <?php echo htmlspecialchars($user['timezone'] ?: 'Asia/Ho_Chi_Minh'); ?></li>
                    <li><strong>Nhận tin:</strong> <?php echo (int)$user['marketing_opt_in'] ? 'Có' : 'Không'; ?></li>
                </ul>
            </div>
            <div class="user-card">
                <h3>Địa chỉ</h3>
                <p><?php echo htmlspecialchars(trim(($user['address_line1'] ?: '').' '.($user['address_line2'] ?: '')) ?: '—'); ?></p>
                <p><?php echo htmlspecialchars(trim(($user['city'] ?: '').' '.($user['state'] ?: '').' '.($user['postal_code'] ?: '')) ?: ''); ?></p>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/footer_user.php'; ?>