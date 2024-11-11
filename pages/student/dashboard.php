<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header('Location: ../login.php'); // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include_once('../includes/header.php'); ?>

    <div class="container mx-auto mt-5">
        <h1 class="text-xl font-semibold">Welcome, <?php echo $_SESSION['user_name']; ?>!</h1>
        
        <!-- Exam Info -->
        <section class="mt-5">
            <h2 class="text-lg font-semibold">Upcoming Exams</h2>
            <p>You have no upcoming exams scheduled. Stay tuned!</p>
        </section>

        <!-- Links -->
        <section class="mt-5">
            <a href="take_exam.php" class="btn btn-primary">Take Exam</a>
            <a href="results.php" class="btn btn-secondary">View Results</a>
        </section>
    </div>
</body>
</html>
