<?php
session_start();
if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] !== true) {
    header('Location: ../public/login.php');
    exit();
}

require_once('../config/database.php');

// Handle POST request to update settings
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $site_name = $_POST['site_name'];
    $maintenance_mode = isset($_POST['maintenance_mode']) ? 1 : 0;

    $query = "UPDATE settings SET site_name = :site_name, maintenance_mode = :maintenance_mode";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':site_name', $site_name);
    $stmt->bindParam(':maintenance_mode', $maintenance_mode);
    $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site Settings</title>
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <div class="container">
        <h1>Site Settings</h1>
        <form method="POST">
            <label for="site_name">Site Name:</label>
            <input type="text" id="site_name" name="site_name" value="Examify">

            <label for="maintenance_mode">Maintenance Mode:</label>
            <input type="checkbox" id="maintenance_mode" name="maintenance_mode">

            <button type="submit">Save Settings</button>
        </form>
    </div>
</body>
</html>
