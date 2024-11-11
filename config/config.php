<?php
// config.php

// Set the default timezone
date_default_timezone_set('Asia/Delhi'); // Change this to your preferred timezone

// Enable or disable error reporting based on the environment (development/production)
define('ENVIRONMENT', 'development'); // Change to 'production' for live sites

if (ENVIRONMENT == 'development') {
    error_reporting(E_ALL); // Display all errors in development
    ini_set('display_errors', 1);
} else {
    error_reporting(0); // Hide errors in production
    ini_set('display_errors', 0);
}

// Base URL of the application (adjust according to your hosting setup)
define('BASE_URL', 'http://localhost/Examify'); // Use your local or production URL here

// Security settings
define('SESSION_LIFETIME', 3600); // Set session timeout duration in seconds (e.g., 1 hour)

// You can add more configuration settings here as needed
?>
