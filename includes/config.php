<?php
/**
 * Configuration file for Aurora Booking Website
 * Handles base URL and path calculations
 */

// Determine the base URL dynamically
function getBaseUrl() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $script_name = $_SERVER['SCRIPT_NAME'];

    // Directory of current script, e.g. /Aurora-booking-web/Users
    $path = dirname($script_name);

    // If path ends with /pages, /Users, or /admin, step up one level to project root
    if (preg_match('#/(pages|Users|admin)(/)?$#', $path)) {
        $path = dirname($path);
    }

    // Ensure trailing slash
    if ($path === '' || $path === '/') {
        $path = '/';
    } else {
        $path = rtrim($path, '/') . '/';
    }

    return $protocol . '://' . $host . $path;
}

// Get relative path to root from current location
function getRelativeRoot() {
    $script_name = $_SERVER['SCRIPT_NAME'];
    $depth = substr_count($script_name, '/') - 1;
    
    if ($depth <= 1) {
        return './';
    }
    
    return str_repeat('../', $depth - 1);
}

// Define constants
define('BASE_URL', getBaseUrl());
define('RELATIVE_ROOT', getRelativeRoot());

// Helper function to create proper URLs (absolute based on BASE_URL)
function url($path = '') {
    return BASE_URL . ltrim($path, '/');
}

// Helper function for assets (absolute path)
function asset($path = '') {
    return BASE_URL . 'assets/' . ltrim($path, '/');
}
?>