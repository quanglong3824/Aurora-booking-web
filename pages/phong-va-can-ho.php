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