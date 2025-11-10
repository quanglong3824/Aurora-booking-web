<?php
// Users/index.php - Trang chính cho người dùng đã đăng nhập
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../config/database.php';

if (!isset($_SESSION['user']) || !isset($_SESSION['user']['id'])) {
    header('Location: ' . url('pages/auth/dang-nhap.php?type=error&msg=' . urlencode('Vui lòng đăng nhập để truy cập trang người dùng')));
    exit;
}

$userId = (int) $_SESSION['user']['id'];

try {
    $pdo = getDB();
    $stmt = $pdo->prepare('SELECT id, username, email, first_name, last_name, full_name, gender, date_of_birth, phone, avatar_url, address_line1, address_line2, city, state, postal_code, country_code, role, status, locale, timezone, marketing_opt_in, preferences, last_login_at, last_login_ip, created_at, updated_at FROM users WHERE id = ? LIMIT 1');
    $stmt->execute([$userId]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$user) {
        header('Location: ' . url('pages/auth/dang-nhap.php?type=error&msg=' . urlencode('Không tìm thấy thông tin người dùng')));
        exit;
    }
} catch (Throwable $e) {
    header('Location: ' . url('pages/auth/dang-nhap.php?type=error&msg=' . urlencode('Lỗi tải dữ liệu người dùng')));
    exit;
}

// Tiêu đề trang
$page_title = 'Trang người dùng';
$additional_css = ['user.css'];

include __DIR__ . '/../includes/header.php';
?>

<main class="container">
    <h1 style="margin-bottom: 10px;">Xin chào, <?php echo htmlspecialchars($user['full_name'] ?: $user['username']); ?></h1>
    <p style="color:#666;">Đây là trang chính của bạn. Bạn có thể xem và cập nhật một số thông tin cá nhân.</p>

    <?php if (isset($_GET['type'], $_GET['msg'])): ?>
        <div class="notice <?php echo $_GET['type']==='success' ? 'success' : 'error'; ?>">
            <?php echo htmlspecialchars($_GET['msg']); ?>
        </div>
    <?php endif; ?>

    <section class="user-grid">
        <div class="user-card">
            <h2>Thông tin cơ bản</h2>
            <ul style="list-style:none; padding:0; margin:0;">
                <li><strong>Tên hiển thị:</strong> <?php echo htmlspecialchars($user['full_name'] ?: ($user['first_name'].' '.$user['last_name'])); ?></li>
                <li><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></li>
                <li><strong>Số điện thoại:</strong> <?php echo htmlspecialchars($user['phone']); ?></li>
                <li><strong>Giới tính:</strong> <?php echo htmlspecialchars($user['gender'] ?: '—'); ?></li>
                <li><strong>Ngày sinh:</strong> <?php echo htmlspecialchars($user['date_of_birth'] ?: '—'); ?></li>
                <li><strong>Quốc gia:</strong> <?php echo htmlspecialchars($user['country_code'] ?: '—'); ?></li>
            </ul>
            <div style="margin-top:12px;">
                <a href="<?php echo url('Users/edit.php'); ?>" class="btn-primary">Chỉnh sửa thông tin</a>
            </div>
        </div>

        <div class="user-card">
            <h2>Đăng nhập gần đây</h2>
            <ul style="list-style:none; padding:0; margin:0;">
                <li><strong>Thời điểm:</strong> <?php echo htmlspecialchars($user['last_login_at'] ?: '—'); ?></li>
                <li><strong>IP:</strong> <?php echo htmlspecialchars($user['last_login_ip'] ?: '—'); ?></li>
            </ul>
            <h2 style="margin-top:16px;">Tùy chọn</h2>
            <ul style="list-style:none; padding:0; margin:0;">
                <li><strong>Ngôn ngữ:</strong> <?php echo htmlspecialchars($user['locale'] ?: 'vi_VN'); ?></li>
                <li><strong>Múi giờ:</strong> <?php echo htmlspecialchars($user['timezone'] ?: 'Asia/Ho_Chi_Minh'); ?></li>
                <li><strong>Nhận tin:</strong> <?php echo (int)$user['marketing_opt_in'] ? 'Có' : 'Không'; ?></li>
            </ul>
        </div>
    </section>

    <section class="user-card" style="margin-top:20px;">
        <h2>Địa chỉ</h2>
        <p><?php echo htmlspecialchars(trim(($user['address_line1'] ?: '').' '.($user['address_line2'] ?: '')) ?: '—'); ?></p>
        <p><?php echo htmlspecialchars(trim(($user['city'] ?: '').' '.($user['state'] ?: '').' '.($user['postal_code'] ?: '')) ?: ''); ?></p>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>