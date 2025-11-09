<?php
// Thiết lập thông tin trang
$page_title = "Đặt phòng - Aurora Hotel Plaza";
$page_description = "Đặt phòng trực tuyến tại Aurora Hotel Plaza với giá tốt nhất và dịch vụ chuyên nghiệp";
$page_keywords = "đặt phòng, Aurora Hotel Plaza, booking, khách sạn";
$current_page = "booking";
$breadcrumb = [
    ['title' => 'Trang chủ', 'url' => 'index.php', 'active' => false],
    ['title' => 'Đặt phòng', 'url' => 'dat-phong.php', 'active' => true]
];

// CSS bổ sung cho trang đặt phòng
$additional_css = ['dat-phong.css'];

// Include header
include '../includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-bg">
        <img src="assets/image/rooms-hero.jpg" alt="Đặt phòng" onerror="this.src='https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'">
    </div>
    <div class="page-header-overlay"></div>
    <div class="container">
        <div class="page-header-content">
            <h1>Đặt phòng</h1>
            <p>Chọn phòng phù hợp và đặt ngay hôm nay</p>
        </div>
    </div>
</section>

<!-- Booking Section -->
<section class="booking-main-section">
    <div class="container">
        <div class="booking-container">
            <!-- Booking Form -->
            <div class="booking-form-container">
                <div class="booking-form-header">
                    <h2>Thông tin đặt phòng</h2>
                    <p>Vui lòng điền đầy đủ thông tin để hoàn tất đặt phòng</p>
                </div>

                <form id="booking-form" class="booking-form-main">
                    <!-- Step 1: Thông tin đặt phòng -->
                    <div class="booking-step active" id="step-1">
                        <h3>1. Thông tin đặt phòng</h3>
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="checkin-date">Ngày nhận phòng *</label>
                                <input type="date" id="checkin-date" name="checkin_date" required>
                            </div>
                            <div class="form-group">
                                <label for="checkout-date">Ngày trả phòng *</label>
                                <input type="date" id="checkout-date" name="checkout_date" required>
                            </div>
                            <div class="form-group">
                                <label for="adults">Số người lớn *</label>
                                <select id="adults" name="adults" required>
                                    <option value="">Chọn số người lớn</option>
                                    <option value="1">1 người lớn</option>
                                    <option value="2">2 người lớn</option>
                                    <option value="3">3 người lớn</option>
                                    <option value="4">4 người lớn</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="children">Số trẻ em</label>
                                <select id="children" name="children">
                                    <option value="0">Không có trẻ em</option>
                                    <option value="1">1 trẻ em</option>
                                    <option value="2">2 trẻ em</option>
                                    <option value="3">3 trẻ em</option>
                                </select>
                            </div>
                            <div class="form-group full-width">
                                <label for="room-type">Loại phòng *</label>
                                <select id="room-type" name="room_type" required>
                                    <option value="">Chọn loại phòng</option>
                                    <option value="standard" data-price="1200000">Phòng tiêu chuẩn - 1.200.000 VNĐ/đêm</option>
                                    <option value="deluxe" data-price="2000000">Phòng cao cấp - 2.000.000 VNĐ/đêm</option>
                                    <option value="suite" data-price="3500000">Phòng suite - 3.500.000 VNĐ/đêm</option>
                                </select>
                            </div>
                        </div>
                        <div class="step-actions">
                            <button type="button" class="btn-next" onclick="nextStep(2)">Tiếp theo</button>
                        </div>
                    </div>

                    <!-- Step 2: Thông tin khách hàng -->
                    <div class="booking-step" id="step-2">
                        <h3>2. Thông tin khách hàng</h3>
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="full-name">Họ và tên *</label>
                                <input type="text" id="full-name" name="full_name" placeholder="Nhập họ và tên đầy đủ" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" placeholder="example@email.com" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại *</label>
                                <input type="tel" id="phone" name="phone" placeholder="0123456789" required>
                            </div>
                            <div class="form-group">
                                <label for="id-number">Số CMND/CCCD</label>
                                <input type="text" id="id-number" name="id_number" placeholder="Số chứng minh nhân dân">
                            </div>
                            <div class="form-group full-width">
                                <label for="address">Địa chỉ</label>
                                <textarea id="address" name="address" rows="3" placeholder="Nhập địa chỉ của bạn"></textarea>
                            </div>
                        </div>
                        <div class="step-actions">
                            <button type="button" class="btn-prev" onclick="prevStep(1)">Quay lại</button>
                            <button type="button" class="btn-next" onclick="nextStep(3)">Tiếp theo</button>
                        </div>
                    </div>

                    <!-- Step 3: Dịch vụ bổ sung -->
                    <div class="booking-step" id="step-3">
                        <h3>3. Dịch vụ bổ sung</h3>
                        <div class="services-grid">
                            <div class="service-item">
                                <input type="checkbox" id="breakfast" name="services[]" value="breakfast" data-price="200000">
                                <label for="breakfast">
                                    <div class="service-info">
                                        <h4>Bữa sáng buffet</h4>
                                        <p>Buffet sáng phong phú với món Á - Âu</p>
                                        <span class="service-price">200.000 VNĐ/người/ngày</span>
                                    </div>
                                </label>
                            </div>
                            <div class="service-item">
                                <input type="checkbox" id="spa" name="services[]" value="spa" data-price="500000">
                                <label for="spa">
                                    <div class="service-info">
                                        <h4>Dịch vụ Spa</h4>
                                        <p>Massage thư giãn và chăm sóc sức khỏe</p>
                                        <span class="service-price">500.000 VNĐ/lần</span>
                                    </div>
                                </label>
                            </div>
                            <div class="service-item">
                                <input type="checkbox" id="airport-pickup" name="services[]" value="airport_pickup" data-price="300000">
                                <label for="airport-pickup">
                                    <div class="service-info">
                                        <h4>Đưa đón sân bay</h4>
                                        <p>Dịch vụ đưa đón từ sân bay đến khách sạn</p>
                                        <span class="service-price">300.000 VNĐ/lượt</span>
                                    </div>
                                </label>
                            </div>
                            <div class="service-item">
                                <input type="checkbox" id="laundry" name="services[]" value="laundry" data-price="100000">
                                <label for="laundry">
                                    <div class="service-info">
                                        <h4>Dịch vụ giặt ủi</h4>
                                        <p>Giặt ủi quần áo chuyên nghiệp</p>
                                        <span class="service-price">100.000 VNĐ/kg</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="form-group full-width">
                            <label for="special-requests">Yêu cầu đặc biệt</label>
                            <textarea id="special-requests" name="special_requests" rows="4" placeholder="Nhập các yêu cầu đặc biệt của bạn (nếu có)"></textarea>
                        </div>
                        <div class="step-actions">
                            <button type="button" class="btn-prev" onclick="prevStep(2)">Quay lại</button>
                            <button type="button" class="btn-next" onclick="nextStep(4)">Tiếp theo</button>
                        </div>
                    </div>

                    <!-- Step 4: Xác nhận và thanh toán -->
                    <div class="booking-step" id="step-4">
                        <h3>4. Xác nhận và thanh toán</h3>
                        <div class="booking-summary">
                            <h4>Tóm tắt đặt phòng</h4>
                            <div class="summary-item">
                                <span>Loại phòng:</span>
                                <span id="summary-room-type">-</span>
                            </div>
                            <div class="summary-item">
                                <span>Ngày nhận phòng:</span>
                                <span id="summary-checkin">-</span>
                            </div>
                            <div class="summary-item">
                                <span>Ngày trả phòng:</span>
                                <span id="summary-checkout">-</span>
                            </div>
                            <div class="summary-item">
                                <span>Số đêm:</span>
                                <span id="summary-nights">-</span>
                            </div>
                            <div class="summary-item">
                                <span>Số khách:</span>
                                <span id="summary-guests">-</span>
                            </div>
                            <div class="summary-item">
                                <span>Dịch vụ bổ sung:</span>
                                <span id="summary-services">Không có</span>
                            </div>
                            <div class="summary-total">
                                <span>Tổng cộng:</span>
                                <span id="total-price">0 VNĐ</span>
                            </div>
                        </div>

                        <div class="payment-methods">
                            <h4>Phương thức thanh toán</h4>
                            <div class="payment-options">
                                <div class="payment-option">
                                    <input type="radio" id="payment-cash" name="payment_method" value="cash" checked>
                                    <label for="payment-cash">
                                        <i class="fas fa-money-bill-wave"></i>
                                        <span>Thanh toán tại khách sạn</span>
                                    </label>
                                </div>
                                <div class="payment-option">
                                    <input type="radio" id="payment-card" name="payment_method" value="card">
                                    <label for="payment-card">
                                        <i class="fas fa-credit-card"></i>
                                        <span>Thẻ tín dụng/ghi nợ</span>
                                    </label>
                                </div>
                                <div class="payment-option">
                                    <input type="radio" id="payment-transfer" name="payment_method" value="transfer">
                                    <label for="payment-transfer">
                                        <i class="fas fa-university"></i>
                                        <span>Chuyển khoản ngân hàng</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="terms-conditions">
                            <label class="checkbox-label">
                                <input type="checkbox" id="agree-terms" name="agree_terms" required>
                                <span class="checkmark"></span>
                                Tôi đồng ý với <a href="#" target="_blank">điều khoản và điều kiện</a> của Aurora Hotel Plaza
                            </label>
                        </div>

                        <div class="step-actions">
                            <button type="button" class="btn-prev" onclick="prevStep(3)">Quay lại</button>
                            <button type="submit" class="btn-submit">Xác nhận đặt phòng</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Booking Summary Sidebar -->
            <div class="booking-sidebar">
                <div class="sidebar-content">
                    <h3>Thông tin đặt phòng</h3>
                    <div class="booking-info">
                        <div class="info-item">
                            <i class="fas fa-calendar-alt"></i>
                            <div>
                                <span class="label">Nhận phòng</span>
                                <span class="value" id="sidebar-checkin">Chọn ngày</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-calendar-alt"></i>
                            <div>
                                <span class="label">Trả phòng</span>
                                <span class="value" id="sidebar-checkout">Chọn ngày</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-users"></i>
                            <div>
                                <span class="label">Số khách</span>
                                <span class="value" id="sidebar-guests">Chọn số khách</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-bed"></i>
                            <div>
                                <span class="label">Loại phòng</span>
                                <span class="value" id="sidebar-room-type">Chọn phòng</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="price-breakdown">
                        <h4>Chi tiết giá</h4>
                        <div class="price-item">
                            <span>Giá phòng</span>
                            <span id="sidebar-room-price">0 VNĐ</span>
                        </div>
                        <div class="price-item">
                            <span>Dịch vụ bổ sung</span>
                            <span id="sidebar-services-price">0 VNĐ</span>
                        </div>
                        <div class="price-total">
                            <span>Tổng cộng</span>
                            <span id="sidebar-total-price">0 VNĐ</span>
                        </div>
                    </div>

                    <div class="contact-support">
                        <h4>Cần hỗ trợ?</h4>
                        <p>Liên hệ với chúng tôi:</p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <span>+84 28 1234 5678</span>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <span>booking@aurorahotel.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Modal -->
<div id="success-modal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <i class="fas fa-check-circle"></i>
            <h3>Đặt phòng thành công!</h3>
        </div>
        <div class="modal-body">
            <p>Cảm ơn bạn đã đặt phòng tại Aurora Hotel Plaza. Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất để xác nhận thông tin.</p>
            <div class="booking-code">
                <span>Mã đặt phòng của bạn:</span>
                <strong id="booking-code-display">AUR-2024-001</strong>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn-primary" onclick="closeModal()">Đóng</button>
            <a href="index.php" class="btn-secondary">Về trang chủ</a>
        </div>
    </div>
</div>

<?php
// Include footer
include '../includes/footer.php';
?>

<script src="assets/js/dat-phong.js"></script>