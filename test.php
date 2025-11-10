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
} else {
    echo '<p>Không thể kiểm tra dữ liệu vì kết nối DB lỗi.</p>';
}
?>