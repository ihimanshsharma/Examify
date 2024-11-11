<?php
// database.php

$host = 'localhost'; // Database host (typically localhost)
$dbname = 'exam_portal'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password (default for XAMPP is an empty string)

try {
    // Create a PDO instance (connect to the database)
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception
} catch (PDOException $e) {
    // Catch connection errors and display a message
    die("Connection failed: " . $e->getMessage());
}
?>
