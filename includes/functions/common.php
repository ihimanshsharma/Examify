<?php
// Database connection
function getDB() {
    $host = 'localhost';
    $db = 'examify';
    $user = 'root';
    $pass = '';
    try {
        return new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}