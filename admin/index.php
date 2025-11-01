<?php
require_once '../config/config.php';

// Simple admin authentication
session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = sanitize_input($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';
        
        // Simple authentication (in production, use proper password hashing)
        if ($username === 'admin' && $password === 'admin123') {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $username;
            header('Location: index.php');
            exit;
        } else {
            $error = 'Tên đăng nhập hoặc mật khẩu không đúng';
        }
    }
    
    // Show login form
    ?>
    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login - <?php echo SITE_NAME; ?></title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0;
            }
            .login-form {
                background: white;
                padding: 2rem;
                border-radius: 10px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.3);
                width: 100%;
                max-width: 400px;
            }
            .form-group {
                margin-bottom: 1rem;
            }
            label {
                display: block;
                margin-bottom: 0.5rem;
                font-weight: bold;
            }
            input[type="text"], input[type="password"] {
                width: 100%;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 5px;
                box-sizing: border-box;
            }
            .btn {
                width: 100%;
                padding: 12px;
                background: #667eea;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }
            .btn:hover {
                background: #5a6fd8;
            }
            .error {
                color: red;
                margin-bottom: 1rem;
                text-align: center;
            }
            h2 {
                text-align: center;
                margin-bottom: 2rem;
                color: #333;
            }
        </style>
    </head>
    <body>
        <form class="login-form" method="POST">
            <h2>Admin Login</h2>
            <?php if (isset($error)): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>
            <div class="form-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Đăng nhập</button>
        </form>
    </body>
    </html>
    <?php
    exit;
}

// Admin dashboard
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - <?php echo SITE_NAME; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f5f5f5;
        }
        .header {
            background: #333;
            color: white;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        .card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .card h3 {
            margin-top: 0;
            color: #333;
        }
        .card-number {
            font-size: 2rem;
            font-weight: bold;
            color: #667eea;
            margin: 1rem 0;
        }
        .logout-btn {
            background: #dc3545;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
        }
        .logout-btn:hover {
            background: #c82333;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Admin Dashboard - <?php echo SITE_NAME; ?></h1>
        <a href="?logout=1" class="logout-btn">Đăng xuất</a>
    </div>
    
    <div class="container">
        <div class="dashboard-grid">
            <div class="card">
                <h3>Tổng số phòng</h3>
                <div class="card-number">7</div>
                <p>Phòng có sẵn</p>
            </div>
            <div class="card">
                <h3>Đặt phòng hôm nay</h3>
                <div class="card-number">0</div>
                <p>Đặt phòng mới</p>
            </div>
            <div class="card">
                <h3>Khách hàng</h3>
                <div class="card-number">0</div>
                <p>Tổng khách hàng</p>
            </div>
            <div class="card">
                <h3>Doanh thu tháng</h3>
                <div class="card-number">0đ</div>
                <p>Doanh thu tháng này</p>
            </div>
        </div>
        
        <div class="card">
            <h3>Hướng dẫn sử dụng</h3>
            <p>Chào mừng bạn đến với trang quản trị Aurora Booking!</p>
            <ul style="text-align: left; max-width: 600px; margin: 0 auto;">
                <li>Database đã được tạo với file SQL trong thư mục config/</li>
                <li>Cấu trúc thư mục đã được tổ chức theo chuẩn SEO</li>
                <li>File .htaccess đã được cấu hình URL rewriting</li>
                <li>Robots.txt và sitemap.xml đã được tạo</li>
                <li>Các trang lỗi 404 và 500 đã được tùy chỉnh</li>
            </ul>
        </div>
    </div>
</body>
</html>

<?php
// Handle logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}
?>