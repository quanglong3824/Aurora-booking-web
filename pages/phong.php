<?php
$page_title = "Phòng nghỉ - Aurora Hotel Plaza";
$page_description = "Khám phá các loại phòng nghỉ sang trọng tại Aurora Hotel Plaza: Deluxe, Premium Deluxe, Premium Deluxe Twin, Studio VIP với đầy đủ tiện nghi hiện đại";
$page_keywords = "phòng nghỉ Aurora Hotel Plaza, đặt phòng, phòng deluxe, phòng premium, phòng studio vip, khách sạn sang trọng";
$current_page = "phong";
$breadcrumb = [
    ['title' => 'Trang chủ', 'url' => '../index.php'],
    ['title' => 'Phòng nghỉ', 'url' => 'phong.php', 'active' => true]
];
$page_header = true;
$page_header_title = "Phòng nghỉ Aurora Hotel Plaza";
$page_header_subtitle = "Không gian nghỉ dưỡng sang trọng với tiêu chuẩn 5 sao";
$page_header_bg = "/assets/image/rooms-hero.jpg";

include '../includes/header.php';
?>

<!-- Room Filter & Search -->
<section class="room-filter">
    <div class="container">
        <div class="filter-controls">
            <div class="filter-tabs">
                <button class="filter-btn active" data-filter="all">Tất cả phòng</button>
                <button class="filter-btn" data-filter="deluxe">Deluxe</button>
                <button class="filter-btn" data-filter="premium">Premium</button>
                <button class="filter-btn" data-filter="studio">Studio VIP</button>
            </div>
        </div>
    </div>
</section>

<!-- Rooms Grid -->
<section class="rooms-showcase">
    <div class="container">
        <!-- Deluxe Rooms -->
        <div class="room-category" data-category="deluxe">
            <div class="category-header">
                <h2>Phòng Deluxe</h2>
                <p>Không gian sang trọng với thiết kế tinh tế và view tuyệt đẹp</p>
            </div>

            <div class="rooms-grid">
                <div class="room-card featured" data-room-type="deluxe">
                    <div class="room-image-container">
                        <img src="<?php echo asset('image/room-deluxe.jpg'); ?>" alt="Phòng Deluxe Sang Trọng" loading="lazy">
                        <div class="room-badge">Phổ biến</div>
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <span>12 ảnh</span>
                        </div>
                    </div>

                    <div class="room-content">
                        <div class="room-header">
                            <h3>Phòng Deluxe Sang Trọng</h3>
                            <div class="room-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">4.8/5</span>
                            </div>
                        </div>

                        <div class="room-details">
                            <div class="room-specs">
                                <span><i class="fas fa-bed"></i> 1 giường King</span>
                                <span><i class="fas fa-users"></i> 2 khách</span>
                                <span><i class="fas fa-expand-arrows-alt"></i> 35m²</span>
                                <span><i class="fas fa-eye"></i> View biển/thành phố</span>
                            </div>

                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-wifi"></i>
                                    <span>WiFi miễn phí</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-tv"></i>
                                    <span>Smart TV 55"</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-snowflake"></i>
                                    <span>Điều hòa thông minh</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-coffee"></i>
                                    <span>Minibar cao cấp</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-bath"></i>
                                    <span>Phòng tắm marble</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-concierge-bell"></i>
                                    <span>Dịch vụ 24/7</span>
                                </div>
                            </div>
                        </div>

                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">2.500.000 VNĐ</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>

                        <div class="room-actions">
                            <a href="<?php echo url('pages/phong/deluxe-sang-trong.php'); ?>" class="btn-secondary room-details-btn">Xem chi tiết</a>
                            <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn-primary room-book-btn">Đặt ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Premium Deluxe Rooms -->
        <div class="room-category" data-category="premium">
            <div class="category-header">
                <h2>Phòng Premium Deluxe</h2>
                <p>Đẳng cấp cao nhất với không gian rộng rãi và tiện nghi hoàn hảo</p>
            </div>

            <div class="rooms-grid">
                <div class="room-card" data-room-type="premium">
                    <div class="room-image-container">
                        <img src="<?php echo asset('image/room-suite.jpg'); ?>" alt="Phòng Premium Deluxe Cao Cấp" loading="lazy">
                        <div class="room-badge">Cao cấp</div>
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <span>15 ảnh</span>
                        </div>
                    </div>

                    <div class="room-content">
                        <div class="room-header">
                            <h3>Phòng Premium Deluxe Cao Cấp</h3>
                            <div class="room-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">4.9/5</span>
                            </div>
                        </div>

                        <div class="room-details">
                            <div class="room-specs">
                                <span><i class="fas fa-bed"></i> 1 giường King</span>
                                <span><i class="fas fa-users"></i> 2-3 khách</span>
                                <span><i class="fas fa-expand-arrows-alt"></i> 45m²</span>
                                <span><i class="fas fa-eye"></i> View biển panorama</span>
                            </div>

                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-wifi"></i>
                                    <span>WiFi tốc độ cao</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-tv"></i>
                                    <span>Smart TV 65"</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-hot-tub"></i>
                                    <span>Jacuzzi riêng</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-glass-cheers"></i>
                                    <span>Bar mini cao cấp</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-spa"></i>
                                    <span>Khu vực thư giãn</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-crown"></i>
                                    <span>Dịch vụ VIP</span>
                                </div>
                            </div>
                        </div>

                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">4.200.000 VNĐ</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>

                        <div class="room-actions">
                            <a href="<?php echo url('pages/phong/premium-deluxe-cao-cap.php'); ?>" class="btn-secondary room-details-btn">Xem chi tiết</a>
                            <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn-primary room-book-btn">Đặt ngay</a>
                        </div>
                    </div>
                </div>

                <div class="room-card" data-room-type="premium">
                    <div class="room-image-container">
                        <img src="<?php echo asset('image/room-suite-ocean.jpg'); ?>" alt="Phòng Premium Deluxe Twin Đôi" loading="lazy">
                        <div class="room-badge">Gia đình</div>
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <span>14 ảnh</span>
                        </div>
                    </div>

                    <div class="room-content">
                        <div class="room-header">
                            <h3>Phòng Premium Deluxe Twin Đôi</h3>
                            <div class="room-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">4.7/5</span>
                            </div>
                        </div>

                        <div class="room-details">
                            <div class="room-specs">
                                <span><i class="fas fa-bed"></i> 2 giường đơn</span>
                                <span><i class="fas fa-users"></i> 2-4 khách</span>
                                <span><i class="fas fa-expand-arrows-alt"></i> 42m²</span>
                                <span><i class="fas fa-eye"></i> View biển</span>
                            </div>

                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-wifi"></i>
                                    <span>WiFi tốc độ cao</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-tv"></i>
                                    <span>2 Smart TV 50"</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-couch"></i>
                                    <span>Khu vực nghỉ ngơi</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-coffee"></i>
                                    <span>Máy pha cà phê</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-bath"></i>
                                    <span>2 phòng tắm</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-concierge-bell"></i>
                                    <span>Dịch vụ cao cấp</span>
                                </div>
                            </div>
                        </div>

                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">3.800.000 VNĐ</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>

                        <div class="room-actions">
                            <a href="<?php echo url('pages/phong/premium-deluxe-twin-doi.php'); ?>" class="btn-secondary room-details-btn">Xem chi tiết</a>
                            <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn-primary room-book-btn">Đặt ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Studio VIP Rooms -->
        <div class="room-category" data-category="studio">
            <div class="category-header">
                <h2>Phòng Studio VIP</h2>
                <p>Không gian sống hiện đại với thiết kế thông minh và dịch vụ VIP</p>
            </div>

            <div class="rooms-grid">
                <div class="room-card" data-room-type="studio">
                    <div class="room-image-container">
                        <img src="<?php echo asset('image/room-presidential.jpg'); ?>" alt="Phòng Studio VIP Đẳng Cấp" loading="lazy">
                        <div class="room-badge">VIP</div>
                        <div class="room-gallery-btn">
                            <i class="fas fa-images"></i>
                            <span>18 ảnh</span>
                        </div>
                    </div>

                    <div class="room-content">
                        <div class="room-header">
                            <h3>Phòng Studio VIP Đẳng Cấp</h3>
                            <div class="room-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">5.0/5</span>
                            </div>
                        </div>

                        <div class="room-details">
                            <div class="room-specs">
                                <span><i class="fas fa-bed"></i> 1 giường King</span>
                                <span><i class="fas fa-users"></i> 2 khách</span>
                                <span><i class="fas fa-expand-arrows-alt"></i> 55m²</span>
                                <span><i class="fas fa-eye"></i> View 360° thành phố</span>
                            </div>

                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-crown"></i>
                                    <span>Dịch vụ Butler</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-tv"></i>
                                    <span>Smart TV 75"</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-utensils"></i>
                                    <span>Bếp mini cao cấp</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-wine-glass"></i>
                                    <span>Wine cellar riêng</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-spa"></i>
                                    <span>Spa mini trong phòng</span>
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-helicopter"></i>
                                    <span>Dịch vụ helicopter</span>
                                </div>
                            </div>
                        </div>

                        <div class="room-pricing">
                            <div class="price-info">
                                <span class="current-price">8.500.000 VNĐ</span>
                                <span class="price-period">/đêm</span>
                            </div>
                        </div>

                        <div class="room-actions">
                            <a href="<?php echo url('pages/phong/studio-vip-dang-cap.php'); ?>" class="btn-secondary room-details-btn">Xem chi tiết</a>
                            <a href="<?php echo url('pages/dat-phong.php'); ?>" class="btn-primary room-book-btn">Đặt ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Room Comparison -->
<section class="room-comparison">
    <div class="container">
        <div class="section-header">
            <h2>So sánh các loại phòng</h2>
            <p>Tìm hiểu chi tiết về từng loại phòng để lựa chọn phù hợp nhất</p>
        </div>

        <div class="comparison-table">
            <table>
                <thead>
                    <tr>
                        <th>Tiện ích</th>
                        <th>Standard</th>
                        <th>Deluxe</th>
                        <th>Suite</th>
                        <th>Presidential</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Diện tích</td>
                        <td>25-28m²</td>
                        <td>35-40m²</td>
                        <td>65-80m²</td>
                        <td>150m²</td>
                    </tr>
                    <tr>
                        <td>Số khách tối đa</td>
                        <td>2 khách</td>
                        <td>2-4 khách</td>
                        <td>4-6 khách</td>
                        <td>6-8 khách</td>
                    </tr>
                    <tr>
                        <td>WiFi miễn phí</td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td>Room Service 24/7</td>
                        <td><i class="fas fa-times text-danger"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td>Bồn tắm Jacuzzi</td>
                        <td><i class="fas fa-times text-danger"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td>Butler Service</td>
                        <td><i class="fas fa-times text-danger"></i></td>
                        <td><i class="fas fa-times text-danger"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td>Hồ bơi riêng</td>
                        <td><i class="fas fa-times text-danger"></i></td>
                        <td><i class="fas fa-times text-danger"></i></td>
                        <td><i class="fas fa-times text-danger"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Special Offers -->
<section class="special-offers">
    <div class="container">
        <div class="section-header">
            <h2>Ưu đãi đặc biệt</h2>
            <p>Những gói ưu đãi hấp dẫn dành cho quý khách</p>
        </div>

        <div class="offers-grid">
            <div class="offer-card">
                <div class="offer-badge">Giảm 30%</div>
                <h3>Gói nghỉ dưỡng cuối tuần</h3>
                <p>Đặt phòng 2 đêm cuối tuần, nhận ngay ưu đãi 30% và bữa sáng miễn phí</p>
                <div class="offer-validity">Có hiệu lực đến 31/12/2024</div>
                <button class="btn-offer">Đặt ngay</button>
            </div>

            <div class="offer-card">
                <div class="offer-badge">Miễn phí</div>
                <h3>Gói trăng mật</h3>
                <p>Trang trí phòng lãng mạn, champagne và spa couple miễn phí cho cặp đôi mới cưới</p>
                <div class="offer-validity">Áp dụng quanh năm</div>
                <button class="btn-offer">Tìm hiểu thêm</button>
            </div>

            <div class="offer-card">
                <div class="offer-badge">Tặng kèm</div>
                <h3>Gói gia đình</h3>
                <p>Đặt Suite, nhận miễn phí phòng trẻ em và vé tham quan cho cả gia đình</p>
                <div class="offer-validity">Áp dụng từ T2-T6</div>
                <button class="btn-offer">Đặt ngay</button>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

<script>
    // Room filtering functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const roomCategories = document.querySelectorAll('.room-category');
        const priceFilter = document.getElementById('priceRange');
        const capacityFilter = document.getElementById('capacity');
        const viewFilter = document.getElementById('view');

        // Category filtering
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const filter = this.dataset.filter;

                // Update active button
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                // Show/hide categories
                roomCategories.forEach(category => {
                    if (filter === 'all' || category.dataset.category === filter) {
                        category.style.display = 'block';
                    } else {
                        category.style.display = 'none';
                    }
                });
            });
        });

        // Advanced filtering
        function applyFilters() {
            const priceRange = priceFilter.value;
            const capacity = capacityFilter.value;
            const view = viewFilter.value;

            document.querySelectorAll('.room-card').forEach(card => {
                let show = true;

                // Price filter
                if (priceRange) {
                    const cardPrice = parseInt(card.dataset.price);
                    const [min, max] = priceRange.includes('+') ?
                        [parseInt(priceRange.replace('+', '')), Infinity] :
                        priceRange.split('-').map(p => parseInt(p));

                    if (cardPrice < min || cardPrice > max) {
                        show = false;
                    }
                }

                // Capacity filter
                if (capacity && card.dataset.capacity) {
                    const cardCapacity = parseInt(card.dataset.capacity);
                    if (capacity === '1-2' && cardCapacity > 2) show = false;
                    if (capacity === '3-4' && (cardCapacity < 3 || cardCapacity > 4)) show = false;
                    if (capacity === '5+' && cardCapacity < 5) show = false;
                }

                // View filter
                if (view && card.dataset.view !== view) {
                    show = false;
                }

                card.style.display = show ? 'block' : 'none';
            });
        }

        priceFilter.addEventListener('change', applyFilters);
        capacityFilter.addEventListener('change', applyFilters);
        viewFilter.addEventListener('change', applyFilters);

        // Room booking functionality
        document.querySelectorAll('.room-book-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const roomCard = this.closest('.room-card');
                const roomType = roomCard.querySelector('h3').textContent;
                const price = roomCard.querySelector('.current-price').textContent;

                // Redirect to booking page with room info
                window.location.href = `dat-phong.php?room=${encodeURIComponent(roomType)}&price=${encodeURIComponent(price)}`;
            });
        });

        // Room details modal (placeholder)
        document.querySelectorAll('.room-details-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const roomCard = this.closest('.room-card');
                const roomType = roomCard.querySelector('h3').textContent;
                alert(`Chi tiết phòng ${roomType} sẽ được hiển thị trong modal`);
            });
        });
    });
</script>