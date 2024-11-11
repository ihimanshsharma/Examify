<?php
session_start();
if (!isset($_SESSION['isAdmin']) || $_SESSION['isAdmin'] !== true) {
    header('Location: ../public/login.php');
    exit();
}

require_once('../config/database.php');

// Fetch statistics
$query = "SELECT COUNT(*) AS user_count FROM users";
$user_count = $pdo->query($query)->fetchColumn();

$query = "SELECT COUNT(*) AS exam_count FROM exams";
$exam_count = $pdo->query($query)->fetchColumn();

$query = "SELECT COUNT(*) AS teacher_count FROM users WHERE role = 'teacher'";
$teacher_count = $pdo->query($query)->fetchColumn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include('../includes/header.php'); ?>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div>
            <p>Total Users: <?php echo $user_count; ?></p>
            <p>Total Exams: <?php echo $exam_count; ?></p>
            <p>Total Teachers: <?php echo $teacher_count; ?></p>
        </div>
    </div>
</body>
</html>
