<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header('Location: ../login.php'); // Redirect to login page if not logged in
    exit();
}

require_once('../config/database.php');
$teacher_id = $_SESSION['user_id']; // Assuming teacher_id is stored in session

// Fetch exams created by the teacher
$query = "SELECT * FROM exams WHERE teacher_id = :teacher_id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':teacher_id', $teacher_id);
$stmt->execute();
$exams = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Results</title>
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include_once('../includes/header.php'); ?>

    <div class="container mx-auto mt-5">
        <h1 class="text-xl font-semibold">Manage Exam Results</h1>

        <table class="min-w-full mt-4">
            <thead>
                <tr>
                    <th class="px-6 py-2 text-left">Exam Name</th>
                    <th class="px-6 py-2 text-left">Subject</th>
                    <th class="px-6 py-2 text-left">Date</th>
                    <th class="px-6 py-2 text-left">Duration</th>
                    <th class="px-6 py-2 text-left">View Results</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($exams as $exam): ?>
                    <tr>
                        <td class="px-6 py-2"><?php echo $exam['exam_name']; ?></td>
                        <td class="px-6 py-2"><?php echo $exam['subject']; ?></td>
                        <td class="px-6 py-2"><?php echo $exam['date']; ?></td>
                        <td class="px-6 py-2"><?php echo $exam['duration']; ?> min</td>
                        <td class="px-6 py-2">
                            <a href="view_results.php?exam_id=<?php echo $exam['id']; ?>" class="btn btn-primary">View Results</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>