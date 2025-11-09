<?php
$page_title = "Liên hệ - Aurora Hotel";
$page_description = "Liên hệ với Aurora Hotel để được tư vấn và hỗ trợ tốt nhất. Chúng tôi luôn sẵn sàng phục vụ bạn 24/7";
$page_keywords = "liên hệ aurora hotel, đặt phòng, tư vấn, hỗ trợ khách hàng, hotline";
$current_page = "lien-he";
$breadcrumb = [
    ['title' => 'Trang chủ', 'url' => 'index.php'],
    ['title' => 'Liên hệ', 'url' => 'lien-he.php', 'active' => true]
];
$page_header_title = "Liên hệ với Aurora Hotel";
$page_header_subtitle = "Chúng tôi luôn sẵn sàng hỗ trợ bạn 24/7";
$page_header_bg = "/assets/image/contact-hero.jpg";

include '../includes/header.php';
?>

<!-- Contact Methods -->
<section class="contact-methods">
    <div class="container">
        <div class="section-header">
            <h2>Nhiều cách để liên hệ với chúng tôi</h2>
            <p>Chọn phương thức liên hệ phù hợp nhất với bạn</p>
        </div>
        
        <div class="contact-grid">
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="contact-info">
                    <h3>Hotline 24/7</h3>
                    <p>Gọi ngay để được tư vấn và đặt phòng</p>
                    <div class="contact-details">
                        <a href="tel:+84901234567" class="contact-link">
                            <strong>+84 90 123 4567</strong>
                        </a>
                        <span class="availability">Phục vụ 24/7</span>
                    </div>
                </div>
            </div>
            
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-info">
                    <h3>Email</h3>
                    <p>Gửi email cho chúng tôi, phản hồi trong 2 giờ</p>
                    <div class="contact-details">
                        <a href="mailto:info@aurorahotel.com" class="contact-link">
                            <strong>info@aurorahotel.com</strong>
                        </a>
                        <span class="availability">Phản hồi trong 2h</span>
                    </div>
                </div>
            </div>
            
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <div class="contact-info">
                    <h3>Live Chat</h3>
                    <p>Chat trực tiếp với nhân viên tư vấn</p>
                    <div class="contact-details">
                        <button class="contact-link chat-btn" onclick="openLiveChat()">
                            <strong>Bắt đầu chat</strong>
                        </button>
                        <span class="availability">Online 6:00 - 24:00</span>
                    </div>
                </div>
            </div>
            
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <div class="contact-info">
                    <h3>WhatsApp</h3>
                    <p>Nhắn tin qua WhatsApp để được hỗ trợ nhanh</p>
                    <div class="contact-details">
                        <a href="https://wa.me/84901234567" class="contact-link" target="_blank">
                            <strong>+84 90 123 4567</strong>
                        </a>
                        <span class="availability">Phục vụ 8:00 - 22:00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Forms -->
<section class="contact-forms">
    <div class="container">
        <div class="forms-grid">
            <!-- General Contact Form -->
            <div class="form-container">
                <div class="form-header">
                    <h3>Gửi tin nhắn cho chúng tôi</h3>
                    <p>Điền thông tin bên dưới, chúng tôi sẽ liên hệ lại trong thời gian sớm nhất</p>
                </div>
                
                <form class="contact-form" id="generalContactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="fullName">Họ và tên *</label>
                            <input type="text" id="fullName" name="fullName" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Số điện thoại *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Chủ đề</label>
                            <select id="subject" name="subject">
                                <option value="">Chọn chủ đề</option>
                                <option value="booking">Đặt phòng</option>
                                <option value="services">Dịch vụ</option>
                                <option value="events">Tổ chức sự kiện</option>
                                <option value="complaint">Khiếu nại</option>
                                <option value="suggestion">Góp ý</option>
                                <option value="other">Khác</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Nội dung tin nhắn *</label>
                        <textarea id="message" name="message" rows="5" required placeholder="Nhập nội dung tin nhắn của bạn..."></textarea>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="newsletter" value="1">
                            <span class="checkmark"></span>
                            Tôi muốn nhận thông tin khuyến mãi và tin tức từ Aurora Hotel
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Gửi tin nhắn
                    </button>
                </form>
            </div>
            
            <!-- Quick Booking Form -->
            <div class="form-container">
                <div class="form-header">
                    <h3>Đặt phòng nhanh</h3>
                    <p>Điền thông tin để nhận báo giá và tư vấn đặt phòng</p>
                </div>
                
                <form class="contact-form" id="quickBookingForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="guestName">Họ và tên *</label>
                            <input type="text" id="guestName" name="guestName" required>
                        </div>
                        <div class="form-group">
                            <label for="guestPhone">Số điện thoại *</label>
                            <input type="tel" id="guestPhone" name="guestPhone" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="checkIn">Ngày nhận phòng *</label>
                            <input type="date" id="checkIn" name="checkIn" required>
                        </div>
                        <div class="form-group">
                            <label for="checkOut">Ngày trả phòng *</label>
                            <input type="date" id="checkOut" name="checkOut" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="roomType">Loại phòng</label>
                            <select id="roomType" name="roomType">
                                <option value="">Chọn loại phòng</option>
                                <option value="superior">Superior Room</option>
                                <option value="deluxe">Deluxe Room</option>
                                <option value="suite">Suite</option>
                                <option value="presidential">Presidential Suite</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="guests">Số khách</label>
                            <select id="guests" name="guests">
                                <option value="1">1 khách</option>
                                <option value="2">2 khách</option>
                                <option value="3">3 khách</option>
                                <option value="4">4 khách</option>
                                <option value="5+">5+ khách</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="specialRequests">Yêu cầu đặc biệt</label>
                        <textarea id="specialRequests" name="specialRequests" rows="3" placeholder="Ví dụ: phòng tầng cao, giường đôi, không hút thuốc..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-calendar-check"></i> Gửi yêu cầu đặt phòng
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Location & Map -->
<section class="location-map">
    <div class="container">
        <div class="location-content">
            <div class="location-info">
                <h2>Vị trí thuận lợi</h2>
                <p>Aurora Hotel tọa lạc tại vị trí đắc địa trong trung tâm thành phố, dễ dàng di chuyển đến các điểm tham quan và khu vực kinh doanh.</p>
                
                <div class="location-details">
                    <div class="location-item">
                        <div class="location-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="location-text">
                            <h4>Địa chỉ</h4>
                            <p>123 Đường Nguyễn Huệ, Quận 1, TP. Hồ Chí Minh</p>
                        </div>
                    </div>
                    
                    <div class="location-item">
                        <div class="location-icon">
                            <i class="fas fa-plane"></i>
                        </div>
                        <div class="location-text">
                            <h4>Từ sân bay</h4>
                            <p>25 phút lái xe từ sân bay Tân Sơn Nhất</p>
                        </div>
                    </div>
                    
                    <div class="location-item">
                        <div class="location-icon">
                            <i class="fas fa-subway"></i>
                        </div>
                        <div class="location-text">
                            <h4>Giao thông công cộng</h4>
                            <p>5 phút đi bộ đến ga Metro Bến Thành</p>
                        </div>
                    </div>
                    
                    <div class="location-item">
                        <div class="location-icon">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <div class="location-text">
                            <h4>Mua sắm</h4>
                            <p>Bên cạnh trung tâm thương mại Saigon Centre</p>
                        </div>
                    </div>
                </div>
                
                <div class="location-actions">
                    <a href="https://maps.google.com/?q=Aurora+Hotel+Ho+Chi+Minh" target="_blank" class="btn btn-outline">
                        <i class="fas fa-directions"></i> Chỉ đường
                    </a>
                    <button class="btn btn-primary" onclick="requestPickup()">
                        <i class="fas fa-car"></i> Yêu cầu đón
                    </button>
                </div>
            </div>
            
            <div class="map-container">
                <div class="map-placeholder">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4326!2d106.7017!3d10.7769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDQ2JzM2LjgiTiAxMDbCsDQyJzA2LjEiRQ!5e0!3m2!1sen!2s!4v1234567890"
                        width="100%" 
                        height="400" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="map-overlay">
                    <div class="map-info">
                        <h4>Aurora Hotel</h4>
                        <p>123 Đường Nguyễn Huệ, Quận 1</p>
                        <div class="map-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>4.8 (1,234 đánh giá)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="contact-info-detailed">
    <div class="container">
        <div class="info-grid">
            <div class="info-section">
                <h3>Thông tin liên hệ</h3>
                <div class="info-list">
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Hotline đặt phòng</strong>
                            <p>+84 90 123 4567</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-fax"></i>
                        <div>
                            <strong>Fax</strong>
                            <p>+84 28 3829 1234</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Email chung</strong>
                            <p>info@aurorahotel.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-calendar-alt"></i>
                        <div>
                            <strong>Đặt phòng</strong>
                            <p>booking@aurorahotel.com</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="info-section">
                <h3>Bộ phận chuyên biệt</h3>
                <div class="info-list">
                    <div class="info-item">
                        <i class="fas fa-glass-cheers"></i>
                        <div>
                            <strong>Tổ chức sự kiện</strong>
                            <p>events@aurorahotel.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-spa"></i>
                        <div>
                            <strong>Spa & Wellness</strong>
                            <p>spa@aurorahotel.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-utensils"></i>
                        <div>
                            <strong>Nhà hàng</strong>
                            <p>restaurant@aurorahotel.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-briefcase"></i>
                        <div>
                            <strong>Doanh nghiệp</strong>
                            <p>corporate@aurorahotel.com</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="info-section">
                <h3>Giờ phục vụ</h3>
                <div class="hours-list">
                    <div class="hours-item">
                        <strong>Lễ tân</strong>
                        <span>24/7</span>
                    </div>
                    <div class="hours-item">
                        <strong>Nhà hàng</strong>
                        <span>6:00 - 23:00</span>
                    </div>
                    <div class="hours-item">
                        <strong>Spa</strong>
                        <span>8:00 - 22:00</span>
                    </div>
                    <div class="hours-item">
                        <strong>Phòng gym</strong>
                        <span>5:00 - 24:00</span>
                    </div>
                    <div class="hours-item">
                        <strong>Hồ bơi</strong>
                        <span>6:00 - 22:00</span>
                    </div>
                    <div class="hours-item">
                        <strong>Business Center</strong>
                        <span>24/7</span>
                    </div>
                </div>
            </div>
            
            <div class="info-section">
                <h3>Kết nối với chúng tôi</h3>
                <div class="social-links">
                    <a href="#" class="social-link facebook">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook</span>
                    </a>
                    <a href="#" class="social-link instagram">
                        <i class="fab fa-instagram"></i>
                        <span>Instagram</span>
                    </a>
                    <a href="#" class="social-link youtube">
                        <i class="fab fa-youtube"></i>
                        <span>YouTube</span>
                    </a>
                    <a href="#" class="social-link linkedin">
                        <i class="fab fa-linkedin-in"></i>
                        <span>LinkedIn</span>
                    </a>
                </div>
                
                <div class="qr-code">
                    <img src="/assets/image/qr-contact.png" alt="QR Code liên hệ" loading="lazy">
                    <p>Quét mã QR để lưu thông tin liên hệ</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2>Câu hỏi thường gặp</h2>
            <p>Tìm câu trả lời nhanh chóng cho những thắc mắc phổ biến</p>
        </div>
        
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h4>Làm thế nào để đặt phòng tại Aurora Hotel?</h4>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Bạn có thể đặt phòng qua website, gọi hotline +84 90 123 4567, hoặc đến trực tiếp khách sạn. Chúng tôi cũng có mặt trên các nền tảng đặt phòng trực tuyến như Booking.com, Agoda.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h4>Thời gian check-in và check-out là khi nào?</h4>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Check-in: từ 14:00, Check-out: trước 12:00. Chúng tôi có thể hỗ trợ early check-in và late check-out tùy theo tình trạng phòng trống.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h4>Khách sạn có cung cấp dịch vụ đưa đón sân bay không?</h4>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Có, chúng tôi cung cấp dịch vụ đưa đón sân bay 24/7. Vui lòng liên hệ trước ít nhất 2 giờ để đặt lịch. Phí dịch vụ: 500.000 VNĐ/lượt.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h4>Chính sách hủy phòng như thế nào?</h4>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Hủy miễn phí trước 24 giờ so với thời gian check-in. Hủy trong vòng 24 giờ sẽ tính phí 1 đêm. Chính sách có thể khác nhau tùy theo loại phòng và chương trình khuyến mãi.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h4>Khách sạn có cho phép mang theo thú cưng không?</h4>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Chúng tôi chào đón thú cưng với phí bổ sung 200.000 VNĐ/đêm. Vui lòng thông báo trước khi đặt phòng và tuân thủ các quy định về thú cưng của khách sạn.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h4>Khách sạn có WiFi miễn phí không?</h4>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Có, WiFi tốc độ cao miễn phí trong toàn bộ khách sạn. Chúng tôi cũng có WiFi premium với băng thông cao hơn cho khách doanh nghiệp.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Contact Page Specific Styles */
.contact-methods {
    padding: 80px 0;
    background: white;
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    margin-top: 60px;
}

.contact-card {
    background: #f8f9fa;
    padding: 40px 30px;
    border-radius: 20px;
    text-align: center;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.contact-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    border-color: #cc9a2c;
}

.contact-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #cc9a2c, #f1c40f);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    transition: transform 0.3s ease;
}

.contact-card:hover .contact-icon {
    transform: scale(1.1);
}

.contact-icon i {
    font-size: 2rem;
    color: white;
}

.contact-info h3 {
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: #2c3e50;
}

.contact-info p {
    color: #6c757d;
    margin-bottom: 20px;
    line-height: 1.6;
}

.contact-details {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.contact-link {
    color: #cc9a2c;
    text-decoration: none;
    font-size: 1.1rem;
    transition: color 0.3s ease;
}

.contact-link:hover {
    color: #b8941f;
}

.chat-btn {
    background: none;
    border: none;
    cursor: pointer;
    padding: 0;
}

.availability {
    font-size: 0.85rem;
    color: #28a745;
    font-weight: 500;
}

.contact-forms {
    padding: 80px 0;
    background: #f8f9fa;
}

.forms-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
    gap: 60px;
}

.form-container {
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.form-header {
    margin-bottom: 30px;
    text-align: center;
}

.form-header h3 {
    font-size: 1.8rem;
    color: #2c3e50;
    margin-bottom: 10px;
}

.form-header p {
    color: #6c757d;
    line-height: 1.6;
}

.contact-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 8px;
    font-size: 0.9rem;
}

.form-group input,
.form-group select,
.form-group textarea {
    padding: 12px 15px;
    border: 2px solid #e9ecef;
    border-radius: 10px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
    font-family: inherit;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #cc9a2c;
}

.form-group textarea {
    resize: vertical;
    min-height: 100px;
}

.checkbox-group {
    flex-direction: row;
    align-items: center;
    gap: 10px;
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    font-size: 0.9rem;
    line-height: 1.4;
}

.checkbox-label input[type="checkbox"] {
    width: 18px;
    height: 18px;
    margin: 0;
}

.location-map {
    padding: 80px 0;
    background: white;
}

.location-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.location-info h2 {
    font-size: 2.5rem;
    color: #2c3e50;
    margin-bottom: 20px;
}

.location-info > p {
    font-size: 1.1rem;
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 40px;
}

.location-details {
    display: flex;
    flex-direction: column;
    gap: 25px;
    margin-bottom: 40px;
}

.location-item {
    display: flex;
    align-items: center;
    gap: 20px;
}

.location-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #cc9a2c, #f1c40f);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.location-icon i {
    color: white;
    font-size: 1.2rem;
}

.location-text h4 {
    font-size: 1.1rem;
    color: #2c3e50;
    margin-bottom: 5px;
}

.location-text p {
    color: #6c757d;
    font-size: 0.95rem;
}

.location-actions {
    display: flex;
    gap: 20px;
}

.map-container {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.map-placeholder iframe {
    width: 100%;
    height: 400px;
    border: none;
}

.map-overlay {
    position: absolute;
    top: 20px;
    left: 20px;
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    max-width: 250px;
}

.map-info h4 {
    color: #2c3e50;
    margin-bottom: 5px;
}

.map-info p {
    color: #6c757d;
    font-size: 0.9rem;
    margin-bottom: 10px;
}

.map-rating {
    display: flex;
    align-items: center;
    gap: 10px;
}

.stars {
    color: #f1c40f;
}

.map-rating span {
    font-size: 0.85rem;
    color: #6c757d;
}

.contact-info-detailed {
    padding: 80px 0;
    background: #f8f9fa;
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
}

.info-section {
    background: white;
    padding: 40px 30px;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.info-section h3 {
    font-size: 1.5rem;
    color: #2c3e50;
    margin-bottom: 25px;
    text-align: center;
}

.info-list {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 15px;
}

.info-item i {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, #cc9a2c, #f1c40f);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1rem;
    flex-shrink: 0;
}

.info-item div strong {
    display: block;
    color: #2c3e50;
    font-size: 0.95rem;
    margin-bottom: 3px;
}

.info-item div p {
    color: #6c757d;
    font-size: 0.9rem;
    margin: 0;
}

.hours-list {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.hours-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #e9ecef;
}

.hours-item:last-child {
    border-bottom: none;
}

.hours-item strong {
    color: #2c3e50;
    font-size: 0.95rem;
}

.hours-item span {
    color: #28a745;
    font-weight: 600;
    font-size: 0.9rem;
}

.social-links {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-bottom: 30px;
}

.social-link {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 12px 15px;
    border-radius: 10px;
    text-decoration: none;
    transition: all 0.3s ease;
    color: white;
}

.social-link.facebook { background: #3b5998; }
.social-link.instagram { background: #e4405f; }
.social-link.youtube { background: #ff0000; }
.social-link.linkedin { background: #0077b5; }

.social-link:hover {
    transform: translateX(5px);
    color: white;
}

.social-link i {
    font-size: 1.2rem;
}

.qr-code {
    text-align: center;
}

.qr-code img {
    width: 120px;
    height: 120px;
    border-radius: 10px;
    margin-bottom: 10px;
}

.qr-code p {
    font-size: 0.85rem;
    color: #6c757d;
    margin: 0;
}

.faq-section {
    padding: 80px 0;
    background: white;
}

.faq-container {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    border: 1px solid #e9ecef;
    border-radius: 15px;
    margin-bottom: 15px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item:hover {
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.faq-question {
    padding: 25px 30px;
    background: #f8f9fa;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: background-color 0.3s ease;
}

.faq-question:hover {
    background: #e9ecef;
}

.faq-question h4 {
    font-size: 1.1rem;
    color: #2c3e50;
    margin: 0;
    flex: 1;
}

.faq-question i {
    color: #cc9a2c;
    font-size: 1.2rem;
    transition: transform 0.3s ease;
}

.faq-item.active .faq-question i {
    transform: rotate(45deg);
}

.faq-answer {
    padding: 0 30px;
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item.active .faq-answer {
    padding: 25px 30px;
    max-height: 200px;
}

.faq-answer p {
    color: #6c757d;
    line-height: 1.6;
    margin: 0;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .forms-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .location-content {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .info-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .contact-card {
        padding: 30px 20px;
    }
    
    .form-container {
        padding: 30px 20px;
    }
    
    .form-row {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .location-actions {
        flex-direction: column;
        gap: 15px;
    }
    
    .info-grid {
        grid-template-columns: 1fr;
    }
    
    .info-section {
        padding: 30px 20px;
    }
    
    .map-overlay {
        position: static;
        margin-top: 20px;
        max-width: none;
    }
}

@media (max-width: 480px) {
    .contact-methods,
    .contact-forms,
    .location-map,
    .contact-info-detailed,
    .faq-section {
        padding: 40px 0;
    }
    
    .contact-icon {
        width: 60px;
        height: 60px;
    }
    
    .contact-icon i {
        font-size: 1.5rem;
    }
    
    .location-info h2 {
        font-size: 2rem;
    }
    
    .faq-question {
        padding: 20px;
    }
    
    .faq-item.active .faq-answer {
        padding: 20px;
    }
}
</style>

<script>
// Contact Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Form handling
    const generalForm = document.getElementById('generalContactForm');
    const bookingForm = document.getElementById('quickBookingForm');
    
    // General contact form
    if (generalForm) {
        generalForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Validate required fields
            if (!data.fullName || !data.phone || !data.email || !data.message) {
                showNotification('Vui lòng điền đầy đủ thông tin bắt buộc', 'error');
                return;
            }
            
            // Validate email
            if (!isValidEmail(data.email)) {
                showNotification('Email không hợp lệ', 'error');
                return;
            }
            
            // Validate phone
            if (!isValidPhone(data.phone)) {
                showNotification('Số điện thoại không hợp lệ', 'error');
                return;
            }
            
            // Submit form (simulate API call)
            submitContactForm(data, 'general');
        });
    }
    
    // Quick booking form
    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Validate required fields
            if (!data.guestName || !data.guestPhone || !data.checkIn || !data.checkOut) {
                showNotification('Vui lòng điền đầy đủ thông tin bắt buộc', 'error');
                return;
            }
            
            // Validate dates
            const checkIn = new Date(data.checkIn);
            const checkOut = new Date(data.checkOut);
            const today = new Date();
            
            if (checkIn < today) {
                showNotification('Ngày nhận phòng không thể là ngày trong quá khứ', 'error');
                return;
            }
            
            if (checkOut <= checkIn) {
                showNotification('Ngày trả phòng phải sau ngày nhận phòng', 'error');
                return;
            }
            
            // Validate phone
            if (!isValidPhone(data.guestPhone)) {
                showNotification('Số điện thoại không hợp lệ', 'error');
                return;
            }
            
            // Submit form (simulate API call)
            submitContactForm(data, 'booking');
        });
    }
    
    // Set minimum dates for booking form
    const checkInInput = document.getElementById('checkIn');
    const checkOutInput = document.getElementById('checkOut');
    
    if (checkInInput && checkOutInput) {
        const today = new Date().toISOString().split('T')[0];
        checkInInput.min = today;
        
        checkInInput.addEventListener('change', function() {
            const checkInDate = new Date(this.value);
            const nextDay = new Date(checkInDate);
            nextDay.setDate(nextDay.getDate() + 1);
            checkOutInput.min = nextDay.toISOString().split('T')[0];
            
            if (checkOutInput.value && new Date(checkOutInput.value) <= checkInDate) {
                checkOutInput.value = nextDay.toISOString().split('T')[0];
            }
        });
    }
    
    // FAQ functionality
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Close all other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current item
            if (isActive) {
                item.classList.remove('active');
            } else {
                item.classList.add('active');
            }
        });
    });
    
    // Utility functions
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
    
    function isValidPhone(phone) {
        const phoneRegex = /^[\+]?[0-9\s\-\(\)]{10,}$/;
        return phoneRegex.test(phone);
    }
    
    function submitContactForm(data, type) {
        // Show loading state
        const submitBtn = event.target.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Đang gửi...';
        submitBtn.disabled = true;
        
        // Simulate API call
        setTimeout(() => {
            // Reset button
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            
            // Show success message
            if (type === 'general') {
                showNotification('Tin nhắn đã được gửi thành công! Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất.', 'success');
                generalForm.reset();
            } else {
                showNotification('Yêu cầu đặt phòng đã được gửi! Chúng tôi sẽ liên hệ xác nhận trong 30 phút.', 'success');
                bookingForm.reset();
            }
            
            // Send to analytics
            if (typeof gtag !== 'undefined') {
                gtag('event', 'form_submit', {
                    'event_category': 'Contact',
                    'event_label': type
                });
            }
        }, 2000);
    }
    
    function showNotification(message, type) {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.innerHTML = `
            <div class="notification-content">
                <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i>
                <span>${message}</span>
                <button class="notification-close">&times;</button>
            </div>
        `;
        
        // Add styles
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${type === 'success' ? '#28a745' : '#dc3545'};
            color: white;
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            z-index: 10000;
            max-width: 400px;
            animation: slideIn 0.3s ease;
        `;
        
        // Add to page
        document.body.appendChild(notification);
        
        // Auto remove after 5 seconds
        setTimeout(() => {
            if (notification.parentNode) {
                notification.remove();
            }
        }, 5000);
        
        // Close button
        const closeBtn = notification.querySelector('.notification-close');
        closeBtn.addEventListener('click', () => {
            notification.remove();
        });
    }
});

// Global functions
function openLiveChat() {
    // Simulate opening live chat
    showNotification('Chức năng chat trực tuyến sẽ sớm được cập nhật!', 'info');
}

function requestPickup() {
    // Simulate pickup request
    showNotification('Chức năng yêu cầu đón sẽ sớm được cập nhật!', 'info');
}

function showNotification(message, type) {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <i class="fas ${type === 'success' ? 'fa-check-circle' : type === 'error' ? 'fa-exclamation-circle' : 'fa-info-circle'}"></i>
            <span>${message}</span>
            <button class="notification-close">&times;</button>
        </div>
    `;
    
    // Add styles
    const bgColor = type === 'success' ? '#28a745' : type === 'error' ? '#dc3545' : '#17a2b8';
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${bgColor};
        color: white;
        padding: 15px 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        z-index: 10000;
        max-width: 400px;
        animation: slideIn 0.3s ease;
    `;
    
    // Add animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        .notification-content {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .notification-close {
            background: none;
            border: none;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            margin-left: auto;
        }
    `;
    document.head.appendChild(style);
    
    // Add to page
    document.body.appendChild(notification);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        if (notification.parentNode) {
            notification.remove();
        }
    }, 5000);
    
    // Close button
    const closeBtn = notification.querySelector('.notification-close');
    closeBtn.addEventListener('click', () => {
        notification.remove();
    });
}
</script>

<?php include '../includes/footer.php'; ?>