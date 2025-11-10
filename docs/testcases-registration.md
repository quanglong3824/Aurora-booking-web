# Test Case Đăng Ký Tài Khoản (Aurora Booking Web)

Mục tiêu: xác minh tính đúng đắn, khả năng chống tấn công (SQLi/XSS) và trải nghiệm người dùng của tính năng đăng ký (`pages/auth/dang-ky.php` → `assets/php/backend/register.php`).

## Tiền đề
- Endpoint frontend: `pages/auth/dang-ky.php`
- Endpoint backend: `assets/php/backend/register.php`
- DB: sử dụng bảng `users` từ `assets/data/users.sql` (đã có `id_booking` và index)
- CSRF: token ẩn trong form; honeypot trường `website`; throttle tối đa 1 lần/3 giây
- Mật khẩu: yêu cầu tối thiểu 8 ký tự, kiểm tra độ mạnh ≥ 60% (server), có meter ở client
- Escape XSS: hiển thị `msg` dùng `htmlspecialchars`
- Redirect: dùng `RELATIVE_ROOT` về `pages/auth/dang-ky.php?type=...&msg=...`

## Cách chạy test thủ công (trình duyệt)
1. Mở trang đăng ký và quan sát hidden `csrf_token` (đã sinh mỗi lần tải trang).
2. Điền form và gửi; kiểm tra banner thông báo và/hoặc modal thành công.
3. Kiểm tra DB: bản ghi mới trong `users` với dữ liệu tương ứng, `role=customer`, `status=active`.

## Cách chạy test qua cURL (giữ phiên để mang CSRF)
```bash
# B1: tải trang để lấy token và cookie phiên
curl -c cookies.txt -s "https://<host>/Aurora-booking-web/pages/auth/dang-ky.php" -o page.html
csrf=$(php -r 'echo preg_match("/name=\"csrf_token\"[^>]*value=\"([^\"]+)\"/", file_get_contents("page.html"), $m) ? $m[1] : "";')

# B2: gửi POST kèm token và cookie
curl -b cookies.txt -c cookies.txt -s -X POST \
  -d "csrf_token=$csrf" \
  -d "full_name=Nguyen Van Test" \
  -d "email=test.user@example.com" \
  -d "phone=0901234567" \
  -d "password=Aa!23456789" \
  -d "confirm_password=Aa!23456789" \
  "https://<host>/Aurora-booking-web/assets/php/backend/register.php" -i
```

## Test dương (happy paths)
- [OK] Đăng ký chuẩn với họ tên, email hợp lệ, điện thoại tùy chọn, mật khẩu mạnh → trả về `type=success`, hiện modal; DB có bản ghi với `username` auto theo email (duy nhất).
- [OK] Không nhập điện thoại → vẫn thành công.
- [OK] Tên có dấu/Unicode (VD: "Trần Ánh Dương") → chấp nhận, lưu đúng UTF-8.

## Test âm (validation)
- [ERR] Thiếu họ tên hoặc < 2 ký tự → thông báo "Họ và tên không hợp lệ."
- [ERR] Email sai định dạng (VD: `foo@bar`, `a<>@b.com`) → "Email không hợp lệ." hoặc chặn bởi pattern client.
- [ERR] Mật khẩu < 8 ký tự → "Mật khẩu phải từ 8 ký tự trở lên."
- [ERR] Mật khẩu yếu (VD: `aaaaaaaaaa`, `password123`) → "Mật khẩu chưa đủ mạnh (x%)."
- [ERR] Xác nhận mật khẩu không khớp → "Mật khẩu xác nhận không khớp."
- [ERR] Điện thoại chứa ký tự không cho phép (VD: chữ cái) → "Số điện thoại không hợp lệ."
- [ERR] Trùng email đã tồn tại → "Email đã được sử dụng."
- [ERR] Submit quá nhanh 2 lần trong < 3s → "Bạn thao tác quá nhanh, vui lòng thử lại sau ít giây."

## Test an toàn (XSS/SQLi/CSRF/Honeypot)
- [XSS-CL] Nhập `<script>alert(1)</script>` vào họ tên/email/phone → client loại bỏ `< >` và/hoặc báo lỗi; server trả về "Không cho phép nhập mã...".
- [XSS-SV] Trên redirect, thử `msg` chứa HTML (giả lập) → trang hiển thị ở dạng text (do `htmlspecialchars`).
- [SQLi] Email như `abc@example.com' OR '1'='1` → bị chặn ở validator email; backend dùng prepared statements, không tiêm SQL.
- [CSRF] Token sai hoặc thiếu → "Xác thực CSRF không hợp lệ. Vui lòng thử lại."
- [Bot] Điền trường `website` (honeypot) → "Phát hiện hành vi tự động."

## Test giao diện (client-side constraints)
- Pattern inputs:
  - `full_name`: không chấp nhận `<` `>`; tối đa 100 ký tự.
  - `email`: pattern không cho `<` `>` và yêu cầu dạng tên miền.
  - `phone`: chỉ số/khoảng trắng/dấu `+ - .` (8–20).
- Meter mật khẩu: thay đổi theo ký tự; hiển thị phần trăm; gợi ý chuyển xanh khi đạt yêu cầu.
- Modal thành công: hiển thị khi `type=success` trong URL; nút "Đăng nhập ngay" và "Ở lại trang" hoạt động.

## Kiểm tra DB sau đăng ký
- Bảng `users` có bản ghi mới với các cột:
  - `username`: sinh từ local-part của email, đảm bảo duy nhất (nếu trùng sẽ thêm `_1`, `_2`, ...)
  - `email`, `password_hash` (bcrypt), `full_name`, `phone`
  - `role=customer`, `status=active`, `locale=vi_VN`, `timezone=Asia/Ho_Chi_Minh`, `id_booking=NULL`
- Có index trên `email` và `id_booking` (theo schema `users.sql`).

## Kiểm tra redirect và path
- Sau đăng ký thành công, Location header trỏ đến `RELATIVE_ROOT + pages/auth/dang-ky.php?type=success&msg=...`
- Không còn 404; đường dẫn tuyệt đối không bị trộn với `assets/php/backend/`.

## Dữ liệu mẫu tham khảo
- Họ tên: `Nguyễn Văn Test`
- Email: `test.user@example.com`
- Phone: `0901 234 567`
- Mật khẩu (mạnh): `Aa!23456789`
- Mật khẩu (yếu): `aaaaaaaaaa`, `password123`
- Payload XSS: `

## Ghi chú
- Client-side chỉ hỗ trợ người dùng; bảo mật chính nằm ở backend (CSRF, honeypot, throttle, reject code-like, prepared statements).
- Nếu cần tự động hóa, dùng cURL/k6/postman và đảm bảo gửi cookie phiên cùng CSRF token.