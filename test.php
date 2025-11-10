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
?>