<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header('Location: ../login.php'); // Redirect to login page if not logged in
    exit();
}

// Fetch the exam questions from the database
// Assuming you have an Exam class or a query fetching the questions for the student
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take Exam</title>
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <?php include_once('../includes/header.php'); ?>

    <div class="container mx-auto mt-5">
        <h1 class="text-xl font-semibold">Take Your Exam</h1>
        
        <!-- Display Exam -->
        <form action="submit_exam.php" method="POST">
            <?php
            // Loop through questions
            $questions = []; // Get from database
            foreach ($questions as $question) {
                echo "<div class='question'>";
                echo "<p>{$question['question_text']}</p>";
                // Render choices for each question
                // Assuming multiple-choice questions
                foreach ($question['choices'] as $choice) {
                    echo "<label><input type='radio' name='question_{$question['id']}' value='{$choice['id']}'> {$choice['text']}</label><br>";
                }
                echo "</div>";
            }
            ?>
            <button type="submit" class="btn btn-primary">Submit Exam</button>
        </form>
    </div>
</body>
</html>
