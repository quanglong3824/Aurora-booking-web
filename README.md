# 🏨 Aurora Booking Web

Đây là dự án website đặt phòng (khách sạn, căn hộ, homestay...) được xây dựng chủ yếu bằng PHP thuần.

## ✨ Tính năng nổi bật

Dựa trên cấu trúc dự án, các tính năng chính bao gồm:

* **Trang quản trị (Admin Panel):** Giao diện quản lý toàn bộ hệ thống (trong thư mục `/admin`).
* **Quản lý người dùng:** Đăng nhập, đăng ký, quản lý thông tin người dùng.
* **Quản lý đặt phòng:** Xử lý các yêu cầu đặt phòng, xem lịch sử.
* **Quản lý phòng/dịch vụ:** Thêm, xóa, sửa thông tin phòng, giá cả, tiện ích.
* **Giao diện người dùng:** Trang chủ, trang chi tiết phòng, trang tìm kiếm và đặt phòng (trong `/pages` và `index.php`).
* **Tối ưu SEO:** Cấu hình cơ bản qua `.htaccess` và `robots.txt`.
* **Trang lỗi tùy chỉnh:** Giao diện thân thiện cho lỗi 404 và 500.

---

## 💻 Công nghệ sử dụng

* **Backend:** PHP (Dường như là PHP thuần, không dùng framework)
* **Frontend:** HTML, CSS, JavaScript
* **Web Server:** Apache (dựa trên sự tồn tại của file `.htaccess`)
* **Cơ sở dữ liệu:** (Rất có thể là) MySQL hoặc MariaDB

---

## 🚀 Cài đặt và Chạy dự án (Development)

Để chạy dự án này trên máy local, bạn cần một môi trường server như XAMPP, WAMP hoặc MAMP.

1.  **Clone dự án:**
    ```bash
    git clone [https://github.com/quanglong3824/Aurora-booking-web.git](https://github.com/quanglong3824/Aurora-booking-web.git)
    ```

2.  **Di chuyển vào thư mục server:**
    * Sao chép toàn bộ thư mục dự án vào `htdocs` (đối với XAMPP) hoặc `www` (đối với WAMP/MAMP).

3.  **Cơ sở dữ liệu (Database):**
    * Tạo một cơ sở dữ liệu mới trong phpMyAdmin (ví dụ: `aurora_db`).
    * Import file `.sql` (nếu có) của dự án vào CSDL vừa tạo. *(Bạn nên cung cấp file .sql nếu chia sẻ dự án)*.

4.  **Cấu hình kết nối:**
    * Tìm đến file cấu hình, có thể là `config/config.php` hoặc `config/db.php`.
    * Chỉnh sửa thông tin kết nối CSDL (tên CSDL, username, password) cho phù hợp với môi trường local của bạn.

5.  **Chạy dự án:**
    * Mở trình duyệt và truy cập vào `http://localhost/Aurora-booking-web`

---

## 📁 Cấu trúc thư mục (Sơ lược)
