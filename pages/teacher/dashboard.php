<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header('Location: ../login.php'); // Redirect to login page if not logged in
    exit();
}

// Fetch teacher-specific data (e.g., number of exams created, students enrolled)
require_once('../config/database.php');
$teacher_id = $_SESSION['user_id']; // Assuming teacher_id is stored in session

$query = "SELECT COUNT(*) FROM exams WHERE teacher_id = :teacher_id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':teacher_id', $teacher_id);
$stmt->execute();
$exam_count = $stmt->fetchColumn();

$query = "SELECT COUNT(*) FROM students WHERE teacher_id = :teacher_id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':teacher_id', $teacher_id);
$stmt->execute();
$student_count = $stmt->fetchColumn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include_once('../includes/header.php'); ?>

    <div class="container mx-auto mt-5">
        <h1 class="text-xl font-semibold">Teacher Dashboard</h1>
        <div class="grid grid-cols-3 gap-4 mt-4">
            <div class="bg-gray-200 p-5 text-center rounded-md">
                <h2 class="text-lg font-bold">Exams Created</h2>
                <p><?php echo $exam_count; ?></p>
            </div>
            <div class="bg-gray-200 p-5 text-center rounded-md">
                <h2 class="text-lg font-bold">Students Enrolled</h2>
                <p><?php echo $student_count; ?></p>
            </div>
            <div class="bg-gray-200 p-5 text-center rounded-md">
                <h2 class="text-lg font-bold">Manage Exams</h2>
                <a href="create_exam.php" class="btn btn-primary">Create New Exam</a>
            </div>
        </div>
    </div>
</body>
</html>