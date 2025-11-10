<?php
$page_title = "Thư viện ảnh - Aurora Hotel Plaza";
$page_description = "Khám phá vẻ đẹp của Aurora Hotel Plaza qua bộ sưu tập hình ảnh về phòng nghỉ, tiện ích và không gian sang trọng";
$page_keywords = "thư viện ảnh Aurora Hotel Plaza, hình ảnh khách sạn, phòng nghỉ, tiện ích, gallery";
$current_page = "thu-vien-anh";
$breadcrumb = [
    ['title' => 'Trang chủ', 'url' => 'index.php'],
    ['title' => 'Thư viện ảnh', 'url' => 'thu-vien-anh.php', 'active' => true]
];
$page_header_title = "Thư viện ảnh Aurora Hotel Plaza";
$page_header_subtitle = "Khám phá vẻ đẹp sang trọng qua từng khung hình";
$page_header = true;
$page_header_bg = "/assets/img/hero banner/AURORA-HOTEL-BIEN-HOA-1.jpg";

// Liên kết CSS/JS riêng cho trang Thư viện ảnh
$additional_css = ['thu-vien-anh.css'];
$additional_js = ['js/thu-vien-anh.js'];

include '../includes/header.php';
// Include dữ liệu ảnh để sử dụng trong gallery
include_once '../includes/data-pages/data-image.php';
?>

<!-- Gallery Filter -->
<section class="gallery-filter">
    <div class="container">
        <div class="filter-tabs">
            <button class="filter-btn active" data-filter="all">Tất cả</button>
            <button class="filter-btn" data-filter="rooms">Phòng nghỉ</button>
            <button class="filter-btn" data-filter="restaurant">Nhà hàng</button>
            <button class="filter-btn" data-filter="spa">Spa & Wellness</button>
            <button class="filter-btn" data-filter="pool">Hồ bơi</button>
            <button class="filter-btn" data-filter="facilities">Tiện ích</button>
            <button class="filter-btn" data-filter="events">Sự kiện</button>
            <button class="filter-btn" data-filter="exterior">Ngoại thất</button>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="gallery-grid">
    <div class="container">
        <div class="masonry-grid" id="galleryGrid">
            <?php
            // Hàm chuyển danh mục thành slug cho data-category
            if (!function_exists('slugify_category')) {
                function slugify_category(string $category): string
                {
                    $slug = strtolower(preg_replace('/[^A-Za-z0-9]+/', '-', trim($category)));
                    $slug = trim($slug, '-');
                    return $slug !== '' ? $slug : 'misc';
                }
            }

            // Hàm tạo alt từ tên file
            if (!function_exists('alt_from_filename')) {
                function alt_from_filename(string $filename): string
                {
                    $name = preg_replace('/\.[^.]+$/', '', $filename);
                    $name = str_replace(['-', '_'], ' ', $name);
                    return ucfirst($name);
                }
            }

            // Render động toàn bộ ảnh từ assets/img
            if (isset($IMAGES_BY_CATEGORY) && is_array($IMAGES_BY_CATEGORY)) {
                // Map danh mục (theo thư mục) sang các tab filter UI
                if (!function_exists('ui_category_for_path')) {
                    function ui_category_for_path(string $category): ?string
                    {
                        $c = strtolower(trim($category));
                        if ($c === '' || str_starts_with($c, 'src')) return null; // bỏ ảnh logo/ui
                        // chuẩn hoá khoảng trắng thừa
                        $c = preg_replace('/\s+/', ' ', $c);

                        // mapping cụ thể
                        if (str_starts_with($c, 'restaurant')) return 'restaurant';
                        if (str_starts_with($c, 'post') || str_contains($c, 'wedding')) return 'events';
                        if (str_starts_with($c, 'service')) return 'facilities';
                        if (str_contains($c, 'spa')) return 'spa';
                        if (str_contains($c, 'pool')) return 'pool';
                        if (str_contains($c, 'hero banner')) return 'exterior';
                        // các thư mục phòng nghỉ
                        if (
                            str_contains($c, 'deluxe') ||
                            str_contains($c, 'premium') ||
                            str_contains($c, 'studio apartment') ||
                            str_contains($c, 'family apartment') ||
                            str_contains($c, 'vip')
                        ) return 'rooms';

                        return 'rooms';
                    }
                }

                if (!function_exists('ui_label_for_slug')) {
                    function ui_label_for_slug(string $slug): string
                    {
                        return [
                            'all' => 'Tất cả',
                            'rooms' => 'Phòng nghỉ',
                            'restaurant' => 'Nhà hàng',
                            'spa' => 'Spa & Wellness',
                            'pool' => 'Hồ bơi',
                            'facilities' => 'Tiện ích',
                            'events' => 'Sự kiện',
                            'exterior' => 'Ngoại thất',
                        ][$slug] ?? 'Khác';
                    }
                }
                foreach ($IMAGES_BY_CATEGORY as $category => $files) {
                    $uiSlug = ui_category_for_path($category);
                    if ($uiSlug === null) { continue; }
                    foreach ($files as $file) {
                        // Dùng đường dẫn tương đối từ thư mục pages tới assets/img
                        $src = '../assets/img' . ($category !== '' ? '/' . $category : '') . '/' . $file;
                        $alt = alt_from_filename($file);
                        $title = $category !== '' ? ucwords(str_replace(['-', '_', '/'], ' ', trim($category))) : 'Aurora Image';
                        $badge = ui_label_for_slug($uiSlug);
                        ?>
                        <div class="gallery-item" data-category="<?php echo htmlspecialchars($uiSlug); ?>">
                            <div class="gallery-image">
                                <span class="gallery-badge"><?php echo htmlspecialchars($badge); ?></span>
                                <img src="<?php echo htmlspecialchars($src); ?>" alt="<?php echo htmlspecialchars($alt); ?>" loading="lazy">
                                <div class="gallery-overlay">
                                    <div class="gallery-info">
                                        <h4><?php echo htmlspecialchars($title); ?></h4>
                                        <p><?php echo htmlspecialchars($alt); ?></p>
                                    </div>
                                    <button class="gallery-zoom" data-src="<?php echo htmlspecialchars($src); ?>">
                                        <i class="fas fa-search-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="gallery-caption">
                                <p class="caption-title"><?php echo htmlspecialchars($title); ?></p>
                                <p class="caption-sub"><?php echo htmlspecialchars($alt); ?></p>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
            ?>
            <!-- Static seed images removed: all images are rendered dynamically from assets/img via data-image.php -->
        </div>
        
        <!-- Pagination -->
        <div class="pagination-container" style="text-align:center; margin-top: 24px;">
            <div id="pagination" class="pagination" aria-label="Phân trang thư viện"></div>
        </div>
    </div>
</section>

<!-- Gallery Stats -->
<section class="gallery-stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-number" data-count="500">0</span>
                    <span class="stat-label">Hình ảnh chất lượng cao</span>
                </div>
            </div>
            
            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-bed"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-number" data-count="150">0</span>
                    <span class="stat-label">Phòng nghỉ được chụp</span>
                </div>
            </div>
            
            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-number" data-count="25">0</span>
                    <span class="stat-label">Khu vực tiện ích</span>
                </div>
            </div>
            
            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-number" data-count="100">0</span>
                    <span class="stat-label">Sự kiện được ghi lại</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Virtual Tour CTA -->
<section class="virtual-tour-cta">
    <div class="container">
        <div class="cta-content">
            <div class="cta-text">
                <h2>Khám phá Aurora Hotel Plaza với Virtual Tour 360°</h2>
                <p>Trải nghiệm không gian khách sạn một cách sống động và chân thực nhất</p>
                <div class="cta-features">
                    <div class="feature">
                        <i class="fas fa-vr-cardboard"></i>
                        <span>Công nghệ VR</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-360-degrees"></i>
                        <span>Góc nhìn 360°</span>
                    </div>
                    <div class="feature">
                        <i class="fas fa-mobile-alt"></i>
                        <span>Tương thích mọi thiết bị</span>
                    </div>
                </div>
                <a href="/virtual-tour.php" class="btn btn-primary">
                    <i class="fas fa-play"></i> Bắt đầu tour
                </a>
            </div>
            <div class="cta-image">
                <img src="/assets/image/virtual-tour-preview.jpg" alt="Virtual Tour Preview" loading="lazy">
                <div class="play-overlay">
                    <div class="play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Image Lightbox -->
<div class="lightbox" id="lightbox">
    <div class="lightbox-content">
        <button class="lightbox-close" id="lightboxClose">&times;</button>
        <button class="lightbox-prev" id="lightboxPrev">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="lightbox-next" id="lightboxNext">
            <i class="fas fa-chevron-right"></i>
        </button>
        <div class="lightbox-image-container">
            <img id="lightboxImage" src="" alt="">
            <div class="lightbox-info">
                <h4 id="lightboxTitle"></h4>
                <p id="lightboxDescription"></p>
            </div>
        </div>
        <div class="lightbox-counter">
            <span id="lightboxCounter">1 / 20</span>
        </div>
</div>
</div>

<!-- Styles moved to assets/css/thu-vien-anh.css -->

<!-- Scripts moved to assets/js/thu-vien-anh.js via $additional_js -->

<?php include '../includes/footer.php'; ?>