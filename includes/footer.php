<?php
// Include configuration for dynamic paths
require_once __DIR__ . '/config.php';
?>
</main>
    <!-- Main Content End -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Aurora Hotel Plaza</h3>
                    <p>Khách sạn sang trọng với dịch vụ đẳng cấp quốc tế. Chúng tôi cam kết mang đến cho quý khách những trải nghiệm nghỉ dưỡng không thể nào quên.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4>Liên kết nhanh</h4>
                    <ul>
                        <li><a href="<?php echo url('index.php'); ?>">Trang chủ</a></li>
                        <li><a href="<?php echo url('pages/phong.php'); ?>">Phòng nghỉ</a></li>
                        <li><a href="<?php echo url('pages/dich-vu.php'); ?>">Dịch vụ</a></li>
                        <li><a href="<?php echo url('pages/thu-vien-anh.php'); ?>">Thư viện ảnh</a></li>
                        <li><a href="<?php echo url('pages/gioi-thieu.php'); ?>">Giới thiệu</a></li>
                        <li><a href="<?php echo url('pages/lien-he.php'); ?>">Liên hệ</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Dịch vụ</h4>
                    <ul>
                        <li><a href="<?php echo url('pages/nha-hang.php'); ?>">Nhà hàng</a></li>
                        <li><a href="<?php echo url('pages/spa.php'); ?>">Spa & Wellness</a></li>
                        <li><a href="<?php echo url('pages/hoi-nghi.php'); ?>">Phòng hội nghị</a></li>
                        <li><a href="<?php echo url('pages/gym.php'); ?>">Phòng gym</a></li>
                        <li><a href="<?php echo url('pages/ho-boi.php'); ?>">Hồ bơi</a></li>
                        <li><a href="<?php echo url('pages/dua-don-san-bay.php'); ?>">Đưa đón sân bay</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Thông tin liên hệ</h4>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i> 123 Đường Nguyễn Huệ, Quận 1, TP.HCM</p>
                        <p><i class="fas fa-phone"></i> <a href="tel:+842812345678">+84 28 1234 5678</a></p>
                        <p><i class="fas fa-envelope"></i> <a href="mailto:info@aurorahotel.com">info@aurorahotel.com</a></p>
                        <p><i class="fas fa-globe"></i> <a href="https://aurorahotel.com">www.aurorahotel.com</a></p>
                    </div>
                    
                    <div class="footer-newsletter">
                        <h5>Đăng ký nhận tin</h5>
                        <form class="newsletter-form" action="/subscribe.php" method="POST">
                            <div class="newsletter-input">
                                <input type="email" name="email" placeholder="Email của bạn" required>
                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p>&copy; <?php echo date('Y'); ?> Aurora Hotel Plaza. Tất cả quyền được bảo lưu.</p>
                    <div class="footer-links">
                        <a href="/chinh-sach-bao-mat.php">Chính sách bảo mật</a>
                        <a href="/dieu-khoan-su-dung.php">Điều khoản sử dụng</a>
                        <a href="/chinh-sach-huy-dat.php">Chính sách hủy đặt</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" aria-label="Về đầu trang">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner">
            <div class="spinner"></div>
            <p>Đang tải...</p>
        </div>
    </div>

    <!-- JavaScript Files -->
    <script src="<?php echo asset('js/main.js'); ?>"></script>
    <?php if(isset($additional_js)): ?>
        <?php foreach($additional_js as $js): ?>
            <script src="<?php echo asset($js); ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>
    
    <!-- Google Analytics (Replace with your tracking ID) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_TRACKING_ID');
    </script>

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Hotel",
        "name": "Aurora Hotel Plaza",
        "description": "Khách sạn sang trọng với dịch vụ đẳng cấp quốc tế tại TP.HCM",
        "url": "https://aurorahotel.com",
        "telephone": "+84-28-1234-5678",
        "email": "info@aurorahotel.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "123 Đường Nguyễn Huệ",
            "addressLocality": "Quận 1",
            "addressRegion": "TP.HCM",
            "addressCountry": "VN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "10.7769",
            "longitude": "106.7009"
        },
        "starRating": {
            "@type": "Rating",
            "ratingValue": "5"
        },
        "priceRange": "$$$$",
        "amenityFeature": [
            {
                "@type": "LocationFeatureSpecification",
                "name": "Free WiFi"
            },
            {
                "@type": "LocationFeatureSpecification", 
                "name": "Swimming Pool"
            },
            {
                "@type": "LocationFeatureSpecification",
                "name": "Spa"
            },
            {
                "@type": "LocationFeatureSpecification",
                "name": "Restaurant"
            },
            {
                "@type": "LocationFeatureSpecification",
                "name": "Fitness Center"
            }
        ]
    }
    </script>

</body>
</html>