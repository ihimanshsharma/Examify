<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header('Location: ../login.php');
    exit();
}

require_once('../config/database.php');
$teacher_id = $_SESSION['user_id']; // Assuming teacher_id is stored in session

// Fetch list of students enrolled in the teacher's classes
$query = "SELECT * FROM students WHERE teacher_id = :teacher_id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':teacher_id', $teacher_id);
$stmt->execute();
$students = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Students</title>
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
