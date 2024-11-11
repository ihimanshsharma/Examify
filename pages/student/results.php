<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header('Location: ../login.php'); // Redirect to login page if not logged in
    exit();
}

// Fetch results from the database for this student
// Example: $results = getStudentResults($_SESSION['user_name']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Results</title>
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include_once('../includes/header.php'); ?>

    <div class="container mx-auto mt-5">
        <h1 class="text-xl font-semibold">Your Exam Results</h1>

        <!-- Display Results -->
        <section class="mt-5">
            <?php if (empty($results)): ?>
                <p>No exam results available yet.</p>
            <?php else: ?>
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th>Exam Name</th>
                            <th>Score</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($results as $result): ?>
                            <tr>
                                <td><?php echo $result['exam_name']; ?></td>
                                <td><?php echo $result['score']; ?>%</td>
                                <td><?php echo $result['date_taken']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </section>
    </div>
</body>
</html>
