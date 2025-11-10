<?php
 error_reporting(E_ALL);
    ini_set('display_errors', 1);
// Test database connection
require_once 'config/database.php';
$db = new Database();
$conn = $db->getConnection();
if($conn) {
    echo "Database connection successful!";
} else {
    echo "Database connection failed!";
}
?>