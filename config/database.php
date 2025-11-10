<?php
/**
 * Aurora Booking Website - Database Configuration
 * ===============================================
 */

// Database configuration
/** The name of the database for WordPress */
define( 'DB_NAME', 'auroraho_web_2025' );

/** Database username */
define( 'DB_USER', 'auroraho_longdev' );

/** Database password */
define( 'DB_PASSWORD', '@longdev3824' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

// Database connection class
class Database {
    private $host = DB_HOST;
    private $db_name = DB_NAME;
    private $username = DB_USER;
    private $password = DB_PASSWORD;
    private $charset = DB_CHARSET;
    public $conn;

    // Get database connection
    public function getConnection() {
        $this->conn = null;
        
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=" . $this->charset;
            $this->conn = new PDO($dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $exception) {
            error_log("Connection error: " . $exception->getMessage());
            return false;
        }
        
        return $this->conn;
    }
    
    // Close connection
    public function closeConnection() {
        $this->conn = null;
    }
}

// Create database instance
function getDB() {
    $database = new Database();
    return $database->getConnection();
}
?>