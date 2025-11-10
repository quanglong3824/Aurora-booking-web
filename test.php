<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/logs/php_errors.log');
ini_set('log_errors_max_len', 0);
ini_set('ignore_repeated_errors', 0);

require_once 'config/database.php';

echo '<h2>Kiểm tra kết nối Database</h2>';
echo '<pre>' .
    'DB_HOST: ' . DB_HOST . "\n" .
    'DB_NAME: ' . DB_NAME . "\n" .
    'DB_USER: ' . DB_USER . "\n" .
    'DB_CHARSET: ' . DB_CHARSET .
    '</pre>';

$result = checkDBConnection(true);
if ($result['success']) {
    echo '<p style="color: green;">Database connection successful.</p>';
} else {
    echo '<p style="color: red;">Database connection failed.</p>';
}
function readSqlFile($path) {
    if (!file_exists($path)) return false;
    return file_get_contents($path);
}
function extractTableName($sqlContent) {
    if (!$sqlContent) return null;
    $pattern = '/CREATE\s+TABLE\s+IF\s+NOT\s+EXISTS\s+`?([a-zA-Z0-9_]+)`?/i';
    if (preg_match($pattern, $sqlContent, $m)) {
        return $m[1];
    }
    return null;
}
function splitSqlStatements($sql) {
    $sql = preg_replace('/\/\*.*?\*\//s', '', $sql);
    $lines = explode("\n", $sql);
    $clean = [];
    foreach ($lines as $line) {
        if (preg_match('/^\s*--/', $line)) continue;
        $clean[] = $line;
    }
    $sql = implode("\n", $clean);
    $parts = array_filter(array_map('trim', explode(';', $sql)));
    return $parts;
}
function runSqlFile(PDO $conn, $path) {
    $content = readSqlFile($path);
    if ($content === false) return [ 'success' => false, 'message' => "Không tìm thấy file: {$path}" ];
    try {
        $stmts = splitSqlStatements($content);
        foreach ($stmts as $stmt) {
            if ($stmt === '') continue;
            $conn->exec($stmt);
        }
        return [ 'success' => true, 'message' => "Đã import: {$path}" ];
    } catch (Throwable $e) {
        return [ 'success' => false, 'message' => $e->getMessage() ];
    }
}
function tableExists(PDO $conn, $table) {
    try {
        $conn->query("SELECT 1 FROM `{$table}` LIMIT 1");
        return true;
    } catch (Throwable $e) {
        return false;
    }
}
function tableRowCount(PDO $conn, $table) {
    try {
        $stmt = $conn->query("SELECT COUNT(*) AS c FROM `{$table}`");
        $row = $stmt->fetch();
        return (int)($row['c'] ?? 0);
    } catch (Throwable $e) {
        return 0;
    }
}
function fetchLatestRow(PDO $conn, $table) {
    try {
        $stmt = $conn->query("SELECT * FROM `{$table}` ORDER BY id DESC LIMIT 1");
        return $stmt->fetch();
    } catch (Throwable $e) {
        return null;
    }
}
$sqlFiles = [
    'assets/data/users.sql',
    'assets/data/can_ho_family_gia_dinh.sql',
    'assets/data/can_ho_premium_sang_trong.sql',
    'assets/data/can_ho_studio_hien_dai.sql',
    'assets/data/can_ho.sql',
    'assets/data/deluxe_sang_trong.sql',
    'assets/data/dich_vu.sql',
    'assets/data/gioi_thieu.sql',
    'assets/data/home_index.sql',
    'assets/data/phong_va_can_ho.sql',
    'assets/data/premium_deluxe_cao_cap.sql',
    'assets/data/premium_deluxe_twin_doi.sql',
    'assets/data/studio_vip_dang_cap.sql',
];
echo '<h2>Import & Xuất dữ liệu từ SQL</h2>';
echo '<p><a href="?import=1">Nhấn để import tất cả SQL (chỉ chạy khi cần)</a></p>';
if ($result['success']) {
    $conn = getDB();
    // Xử lý URD cho bảng users (test thay đổi text trên giao diện)
    $urdMessage = null;
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
        try {
            if ($_POST['action'] === 'update_user') {
                $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
                if ($id > 0) {
                    $fields = [];
                    $params = [];
                    // Cho phép sửa nhanh một số trường text phổ biến
                    $allow = ['full_name','phone','locale','timezone','status'];
                    foreach ($allow as $key) {
                        if (isset($_POST[$key])) {
                            $fields[] = "`{$key}` = ?";
                            $params[] = trim((string)$_POST[$key]);
                        }
                    }
                    if (!empty($fields)) {
                        $sql = 'UPDATE `users` SET ' . implode(', ', $fields) . ' WHERE `id` = ? LIMIT 1';
                        $params[] = $id;
                        $stmt = $conn->prepare($sql);
                        $stmt->execute($params);
                        $urdMessage = ['type' => 'success', 'text' => 'Đã cập nhật người dùng ID '.$id];
                    } else {
                        $urdMessage = ['type' => 'error', 'text' => 'Không có trường nào để cập nhật.'];
                    }
                } else {
                    $urdMessage = ['type' => 'error', 'text' => 'ID không hợp lệ.'];
                }
            } elseif ($_POST['action'] === 'delete_user') {
                $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
                if ($id > 0) {
                    $stmt = $conn->prepare('DELETE FROM `users` WHERE `id` = ? LIMIT 1');
                    $stmt->execute([$id]);
                    $urdMessage = ['type' => 'success', 'text' => 'Đã xoá người dùng ID '.$id];
                } else {
                    $urdMessage = ['type' => 'error', 'text' => 'ID không hợp lệ.'];
                }
            }
        } catch (Throwable $e) {
            $urdMessage = ['type' => 'error', 'text' => 'Lỗi thao tác: '.$e->getMessage()];
        }
    }
    if (isset($_GET['import']) && $_GET['import'] == '1') {
        echo '<h3>Đang import các file SQL...</h3><ul>';
        foreach ($sqlFiles as $file) {
            $res = runSqlFile($conn, $file);
            $color = $res['success'] ? 'green' : 'red';
            echo '<li><span style="color:' . $color . ';">' . htmlspecialchars($res['message']) . '</span></li>';
        }
        echo '</ul>';
    }
    echo '<h3>Trạng thái bảng và mẫu dữ liệu</h3>';
    foreach ($sqlFiles as $file) {
        $content = readSqlFile($file);
        $table = extractTableName($content);
        echo '<div style="border:1px solid #ddd;padding:10px;margin:10px 0;">';
        echo '<strong>File:</strong> ' . htmlspecialchars($file) . '<br />';
        echo '<strong>Bảng:</strong> ' . htmlspecialchars($table ?? '(không xác định)') . '<br />';
        if ($table && tableExists($conn, $table)) {
            $count = tableRowCount($conn, $table);
            echo '<strong>Tồn tại:</strong> <span style="color:green;">Có</span> — <strong>Số dòng:</strong> ' . $count . '<br />';
            $row = fetchLatestRow($conn, $table);
            if ($row) {
                echo '<details><summary>Xem bản ghi mới nhất</summary><pre>' . htmlspecialchars(json_encode($row, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) . '</pre></details>';
            } else {
                echo '<em>Chưa có dữ liệu.</em>';
            }
        } else {
            echo '<strong>Tồn tại:</strong> <span style="color:red;">Không</span> — <em>Hãy import để tạo bảng.</em>';
        }
        echo '</div>';
    }

    // Khu vực URD bảng users
    echo '<h2>URD nhanh cho bảng users</h2>';
    if ($urdMessage) {
        $color = $urdMessage['type'] === 'success' ? '#03543f' : '#b91c1c';
        $bg = $urdMessage['type'] === 'success' ? '#e6ffed' : '#ffe6e6';
        echo '<div style="padding:10px;border:1px solid #ddd;border-radius:8px;background:'.$bg.';color:'.$color.';margin:10px 0;">'.htmlspecialchars($urdMessage['text']).'</div>';
    }

    // Danh sách 10 người dùng mới nhất
    echo '<div style="border:1px solid #ddd;border-radius:8px;padding:10px;margin:10px 0;">';
    echo '<strong>Danh sách người dùng (10 mới nhất)</strong>';
    try {
        $stmt = $conn->query('SELECT id, username, email, full_name, phone, status, locale, timezone FROM `users` ORDER BY id DESC LIMIT 10');
        $users = $stmt->fetchAll();
        if (!$users) {
            echo '<p style="color:#666;">Chưa có dữ liệu người dùng.</p>';
        } else {
            echo '<table style="width:100%;border-collapse:collapse;margin-top:8px;">';
            echo '<thead><tr style="border-bottom:1px solid #eee;">'
                .'<th style="padding:8px;text-align:left;">ID</th>'
                .'<th style="padding:8px;text-align:left;">Username</th>'
                .'<th style="padding:8px;text-align:left;">Email</th>'
                .'<th style="padding:8px;text-align:left;">Họ tên</th>'
                .'<th style="padding:8px;text-align:left;">SĐT</th>'
                .'<th style="padding:8px;text-align:left;">Status</th>'
                .'<th style="padding:8px;text-align:left;">Locale</th>'
                .'<th style="padding:8px;text-align:left;">Timezone</th>'
                .'<th style="padding:8px;text-align:left;">Hành động</th>'
                .'</tr></thead><tbody>';
            foreach ($users as $u) {
                echo '<tr style="border-bottom:1px solid #f3f3f3;">';
                echo '<td style="padding:8px;">'.(int)$u['id'].'</td>';
                echo '<td style="padding:8px;">'.htmlspecialchars($u['username']).'</td>';
                echo '<td style="padding:8px;">'.htmlspecialchars($u['email']).'</td>';
                echo '<td style="padding:8px;">';
                echo '<form method="post" action="" style="display:flex; gap:6px; align-items:center;">';
                echo '<input type="hidden" name="action" value="update_user" />';
                echo '<input type="hidden" name="id" value="'.(int)$u['id'].'" />';
                echo '<input type="text" name="full_name" value="'.htmlspecialchars((string)$u['full_name']).'" placeholder="Họ tên" style="padding:6px;border:1px solid #ddd;border-radius:6px;" />';
                echo '</td>';
                echo '<td style="padding:8px;">';
                echo '<input type="text" name="phone" value="'.htmlspecialchars((string)$u['phone']).'" placeholder="Số điện thoại" style="padding:6px;border:1px solid #ddd;border-radius:6px;" />';
                echo '</td>';
                echo '<td style="padding:8px;">';
                echo '<select name="status" style="padding:6px;border:1px solid #ddd;border-radius:6px;">';
                $statuses = ['active'=>'active','inactive'=>'inactive','banned'=>'banned','pending'=>'pending'];
                foreach ($statuses as $val => $label) {
                    $sel = ($u['status'] === $val) ? 'selected' : '';
                    echo '<option value="'.$val.'" '.$sel.'>'.$label.'</option>';
                }
                echo '</select>';
                echo '</td>';
                echo '<td style="padding:8px;">';
                echo '<input type="text" name="locale" value="'.htmlspecialchars((string)$u['locale']).'" placeholder="vi_VN" style="padding:6px;border:1px solid #ddd;border-radius:6px;width:100px;" />';
                echo '</td>';
                echo '<td style="padding:8px;">';
                echo '<input type="text" name="timezone" value="'.htmlspecialchars((string)$u['timezone']).'" placeholder="Asia/Ho_Chi_Minh" style="padding:6px;border:1px solid #ddd;border-radius:6px;width:150px;" />';
                echo '</td>';
                echo '<td style="padding:8px; display:flex; gap:6px;">';
                echo '<button type="submit" style="padding:6px 10px;border:none;border-radius:6px;background:#1a73e8;color:#fff;">Cập nhật</button>';
                echo '</form>';
                echo '<form method="post" action="" onsubmit="return confirm(\'Xác nhận xoá người dùng?\');">';
                echo '<input type="hidden" name="action" value="delete_user" />';
                echo '<input type="hidden" name="id" value="'.(int)$u['id'].'" />';
                echo '<button type="submit" style="padding:6px 10px;border:1px solid #e53e3e;border-radius:6px;background:#ffe6e6;color:#b91c1c;">Xoá</button>';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
            }
            echo '</tbody></table>';
        }
    } catch (Throwable $e) {
        echo '<p style="color:red;">Lỗi đọc bảng users: '.htmlspecialchars($e->getMessage()).'</p>';
    }
    echo '</div>';
} else {
    echo '<p>Không thể kiểm tra dữ liệu vì kết nối DB lỗi.</p>';
}
?>