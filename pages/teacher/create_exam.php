<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header('Location: ../login.php'); // Redirect to login page if not logged in
    exit();
}

require_once('../config/database.php');
$teacher_id = $_SESSION['user_id']; // Assuming teacher_id is stored in session

// Handle form submission to create a new exam
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $exam_name = $_POST['exam_name'];
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $duration = $_POST['duration']; // Exam duration in minutes

    $query = "INSERT INTO exams (teacher_id, exam_name, subject, date, duration) 
              VALUES (:teacher_id, :exam_name, :subject, :date, :duration)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':teacher_id', $teacher_id);
    $stmt->bindParam(':exam_name', $exam_name);
    $stmt->bindParam(':subject', $subject);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':duration', $duration);
    $stmt->execute();

    echo "<script>alert('Exam created successfully!'); window.location.href='create_exam.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Exam</title>
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include_once('../includes/header.php'); ?>

    <div class="container mx-auto mt-5">
        <h1 class="text-xl font-semibold">Create a New Exam</h1>

        <form action="create_exam.php" method="POST" class="mt-5">
            <div class="mb-4">
                <label for="exam_name" class="block text-sm font-medium text-gray-700">Exam Name</label>
                <input type="text" name="exam_name" id="exam_name" required class="mt-1 block w-full border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                <input type="text" name="subject" id="subject" required class="mt-1 block w-full border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="date" class="block text-sm font-medium text-gray-700">Exam Date</label>
                <input type="date" name="date" id="date" required class="mt-1 block w-full border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="duration" class="block text-sm font-medium text-gray-700">Duration (in minutes)</label>
                <input type="number" name="duration" id="duration" required class="mt-1 block w-full border-gray-300 rounded-md">
            </div>
            <button type="submit" class="btn btn-primary">Create Exam</button>
        </form>
    </div>
</body>
</html>
