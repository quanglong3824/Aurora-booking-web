<?php
// Nạp dữ liệu text/meta riêng cho trang Phòng & Căn hộ
include '../includes/data-pages/data-phong-can-ho.php';
// Breadcrumb cho trang Phòng & Căn hộ
$breadcrumb = [
    [
        'title' => 'Phòng & Căn hộ',
        'active' => true
    ]
];
// Include header chuẩn
include '../includes/header.php';
?>

<?php
// Helper: nạp dữ liệu từ file data riêng trong phạm vi cục bộ
// để tránh ghi đè biến toàn cục trên trang hiện tại
function load_indochine_studio_summary() {
    // Bao vùng riêng cho biến từ file data
    include_once '../includes/data-pages/data-indochine-studio.php';
    $summary = [
        'title' => isset($page_title) ? $page_title : 'Căn Hộ Studio Indochine',
        'subtitle' => isset($hero_subtitle) ? $hero_subtitle : '',
        'price' => isset($price_text) ? $price_text : '',
        'per_night' => isset($per_night_text) ? $per_night_text : '',
        'link' => url('pages/can-ho-moi/can-ho-nho/indochine-studio-apartment.php'),
        // data-indochine-studio.php không đặt $main_image, dùng ảnh hero mặc định
        'image' => asset('img/Indochine studio apartment/indochine-studio-apartment-1.jpg'),
    ];
    return $summary;
}

function load_modern_studio_summary() {
    include_once '../includes/data-pages/data-modern-studio-apartment.php';
    $summary = [
        'title' => isset($page_title) ? $page_title : 'Căn Hộ Studio Hiện Đại',
        'subtitle' => isset($hero_subtitle) ? $hero_subtitle : '',
        'price' => isset($price_text) ? $price_text : '',
        'per_night' => isset($per_night_text) ? $per_night_text : '',
        'link' => url('pages/can-ho-moi/can-ho-nho/morden-studio-apartment.php'),
        'image' => asset(isset($main_image) ? $main_image : 'img/Modern studio apartment/modern-studio-apartment-1.jpg'),
    ];
    return $summary;
}

$indochineStudio = load_indochine_studio_summary();
$modernStudio = load_modern_studio_summary();
?>

<!-- Hàng: Căn hộ mới nhất (6 cột nhỏ, 2 cột đầu là nhóm Studio) -->
<section class="latest-apartments" style="padding:40px 0 20px;">
    <div class="container">
        <div class="section-header" style="text-align:center; margin-bottom:24px;">
            <h2 class="section-title" style="margin-bottom:8px;">Căn hộ mới nhất</h2>
            <p class="section-subtitle" style="color:#6b7280;">Các lựa chọn Studio được cập nhật gần đây</p>
        </div>

        <div class="latest-grid" style="display:grid; grid-template-columns:repeat(6, 1fr); gap:12px;">
            <!-- Nhóm Studio: chiếm 2 cột, bên trong hiển thị 2 phòng tương tự -->
            <div class="group-card" style="grid-column: span 2; border:1px solid #e5e7eb; border-radius:12px; background:#fff; padding:14px;">
                <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:12px;">
                    <h6 style="margin:0; color:#374151;">Nhóm Studio</h6>
                    <span style="font-size:12px; color:#9ca3af;">2 lựa chọn</span>
                </div>
                <div class="studio-group" style="display:grid; grid-template-columns:repeat(2, 1fr); gap:10px;">
                    <!-- Indochine Studio tile -->
                    <article class="mini-card" style="border:1px solid #eef2f7; border-radius:10px; overflow:hidden; background:#fafafa;">
                        <div class="mini-image" style="aspect-ratio:4/3; overflow:hidden;">
                            <img src="<?php echo $indochineStudio['image']; ?>" alt="<?php echo htmlspecialchars($indochineStudio['title']); ?>" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="mini-body" style="padding:10px;">
                            <div style="display:flex; justify-content:space-between; align-items:center;">
                                <strong style="font-size:14px; color:#111827;"><?php echo $indochineStudio['title']; ?></strong>
                                <span style="font-size:13px; color:#374151;"><?php echo $indochineStudio['price']; ?><span style="color:#6b7280;"> <?php echo $indochineStudio['per_night']; ?></span></span>
                            </div>
                            <p style="margin:8px 0 10px; font-size:12px; color:#4b5563;"><?php echo $indochineStudio['subtitle']; ?></p>
                            <a href="<?php echo $indochineStudio['link']; ?>" class="btn-room" style="display:block; text-align:center;">Xem chi tiết</a>
                        </div>
                    </article>

                    <!-- Modern Studio tile -->
                    <article class="mini-card" style="border:1px solid #eef2f7; border-radius:10px; overflow:hidden; background:#fafafa;">
                        <div class="mini-image" style="aspect-ratio:4/3; overflow:hidden;">
                            <img src="<?php echo $modernStudio['image']; ?>" alt="<?php echo htmlspecialchars($modernStudio['title']); ?>" style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="mini-body" style="padding:10px;">
                            <div style="display:flex; justify-content:space-between; align-items:center;">
                                <strong style="font-size:14px; color:#111827;"><?php echo $modernStudio['title']; ?></strong>
                                <span style="font-size:13px; color:#374151;"><?php echo $modernStudio['price']; ?><span style="color:#6b7280;"> <?php echo $modernStudio['per_night']; ?></span></span>
                            </div>
                            <p style="margin:8px 0 10px; font-size:12px; color:#4b5563;"><?php echo $modernStudio['subtitle']; ?></p>
                            <a href="<?php echo $modernStudio['link']; ?>" class="btn-room" style="display:block; text-align:center;">Xem chi tiết</a>
                        </div>
                    </article>
                </div>
            </div>

            <!-- 4 cột còn lại: để trống/null (giữ chỗ) -->
            <div class="placeholder" style="border:1px dashed #e5e7eb; border-radius:12px; background:#fff; min-height:120px; display:flex; align-items:center; justify-content:center; color:#9ca3af;">(Đang cập nhật)</div>
            <div class="placeholder" style="border:1px dashed #e5e7eb; border-radius:12px; background:#fff; min-height:120px; display:flex; align-items:center; justify-content:center; color:#9ca3af;">(Đang cập nhật)</div>
            <div class="placeholder" style="border:1px dashed #e5e7eb; border-radius:12px; background:#fff; min-height:120px; display:flex; align-items:center; justify-content:center; color:#9ca3af;">(Đang cập nhật)</div>
            <div class="placeholder" style="border:1px dashed #e5e7eb; border-radius:12px; background:#fff; min-height:120px; display:flex; align-items:center; justify-content:center; color:#9ca3af;">(Đang cập nhật)</div>
        </div>
    </div>
</section>

<!-- Tổng quan chỗ ở: layout 2 cột gọn gàng (Phòng nghỉ / Căn hộ) -->
<section class="accommodation-overview" style="padding:60px 0;">
    <div class="container">
        <div class="section-header" style="text-align:center; margin-bottom:32px;">
            <h2 class="section-title" style="margin-bottom:8px;"><?php echo $overview_title; ?></h2>
            <p class="section-subtitle" style="color:#6b7280;"><?php echo $overview_subtitle; ?></p>
        </div>

        <div class="two-columns" style="display:grid; grid-template-columns:repeat(2, 1fr); gap:24px;">
            <!-- Cột: Phòng nghỉ -->
            <article class="overview-card" style="border:1px solid #e5e7eb; border-radius:12px; overflow:hidden; background:#fff;">
                <div class="overview-image" style="max-height:300px; overflow:hidden;">
                    <img src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-1.jpg'); ?>" alt="Phòng nghỉ Aurora Hotel Plaza" class="img-fluid" style="width:100%; height:100%; object-fit:cover;">
                </div>
                <div class="overview-body" style="padding:20px;">
                <h3 id="rooms" style="margin-bottom:8px;"><?php echo $rooms_heading; ?></h3>
                    <p style="color:#4b5563;"><?php echo $rooms_intro; ?></p>

                    <ul class="feature-list" style="display:flex; flex-wrap:wrap; gap:12px; list-style:none; padding:0; margin:16px 0 20px;">
                        <?php foreach($rooms_features as $f): ?>
                        <li style="display:flex; align-items:center; gap:8px; color:#4b5563;">
                            <i class="<?php echo $f['icon']; ?>"></i> <?php echo $f['text']; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <h6 style="margin-bottom:12px; color:#374151;">Các hạng phòng</h6>
                    <div class="thumb-grid" style="display:grid; grid-template-columns:repeat(3, 1fr); gap:10px; margin:8px 0 16px;">
                        <img src="<?php echo asset('img/deluxe/DELUXE-ROOM-AURORA-3.jpg'); ?>" alt="Deluxe" style="width:100%; aspect-ratio: 4/3; object-fit:cover; border-radius:8px;">
                        <img src="<?php echo asset('img/premium deluxe/PREMIUM-DELUXE-AURORA-HOTEL-1.jpg'); ?>" alt="Premium Deluxe" style="width:100%; aspect-ratio: 4/3; object-fit:cover; border-radius:8px;">
                        <img src="<?php echo asset('img/premium twin/PREMIUM-DELUXE-TWIN-AURORA-1.jpg'); ?>" alt="Premium Twin" style="width:100%; aspect-ratio: 4/3; object-fit:cover; border-radius:8px;">
                    </div>
                    <div class="btn-grid" style="display:grid; grid-template-columns:repeat(2, 1fr); gap:10px; margin-bottom:16px;">
                        <?php foreach($rooms_types as $t): ?>
                        <a href="<?php echo url($t['link']); ?>" class="btn-room" style="text-align:center; display:block;"><?php echo $t['label']; ?></a>
                        <?php endforeach; ?>
                    </div>

                    <a href="<?php echo url('pages/phong.php'); ?>" class="btn-primary">
                        <i class="fas fa-eye" style="margin-right:8px;"></i> <?php echo $view_all_rooms_text; ?>
                    </a>
                </div>
            </article>

            <!-- Cột: Căn hộ dịch vụ -->
            <article class="overview-card" style="border:1px solid #e5e7eb; border-radius:12px; overflow:hidden; background:#fff;">
                <div class="overview-image" style="max-height:300px; overflow:hidden;">
                    <img src="<?php echo asset('img/premium apartment/CAN-HO-PREMIUM-AURORA-HOTEL-1.jpg'); ?>" alt="Căn hộ dịch vụ Aurora" class="img-fluid" style="width:100%; height:100%; object-fit:cover;">
                </div>
                <div class="overview-body" style="padding:20px;">
                <h3 id="apartments" style="margin-bottom:8px;"><?php echo $apartments_heading; ?></h3>
                    <p style="color:#4b5563;"><?php echo $apartments_intro; ?></p>

                    <ul class="feature-list" style="display:flex; flex-wrap:wrap; gap:12px; list-style:none; padding:0; margin:16px 0 20px;">
                        <?php foreach($apartments_features as $f): ?>
                        <li style="display:flex; align-items:center; gap:8px; color:#4b5563;">
                            <i class="<?php echo $f['icon']; ?>"></i> <?php echo $f['text']; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <h6 style="margin-bottom:12px; color:#374151;">Các loại căn hộ</h6>
                    <div class="thumb-grid" style="display:grid; grid-template-columns:repeat(3, 1fr); gap:10px; margin:8px 0 16px;">
                        <img src="<?php echo asset('img/studio apartment/CAN-HO-STUDIO-AURORA-HOTEL-1.jpg'); ?>" alt="Studio" style="width:100%; aspect-ratio: 4/3; object-fit:cover; border-radius:8px;">
                        <img src="<?php echo asset('img/premium apartment/CAN-HO-PREMIUM-AURORA-HOTEL-2.jpg'); ?>" alt="Premium" style="width:100%; aspect-ratio: 4/3; object-fit:cover; border-radius:8px;">
                        <img src="<?php echo asset('img/family apartment/CAN-HO-FAMILY-AURORA-HOTEL-5.jpg'); ?>" alt="Family" style="width:100%; aspect-ratio: 4/3; object-fit:cover; border-radius:8px;">
                    </div>
                    <div class="btn-grid" style="display:grid; grid-template-columns:repeat(2, 1fr); gap:10px; margin-bottom:16px;">
                        <?php foreach($apartment_types as $t): ?>
                        <a href="<?php echo url($t['link']); ?>" class="btn-room" style="text-align:center; display:block;"><?php echo $t['label']; ?></a>
                        <?php endforeach; ?>
                    </div>

                    <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn-primary">
                        <i class="fas fa-calendar-check" style="margin-right:8px;"></i> <?php echo $book_apartment_text; ?>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>