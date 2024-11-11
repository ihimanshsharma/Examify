<?php
session_start();
require_once('includes/functions/common.php');
require_once('includes/classes/User.php');

$class_code = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $class_code = trim($_POST['class_code']);
    $user = new User();

    $stmt = $user->db->prepare("SELECT id FROM classes WHERE class_code = ?");
    $stmt->execute([$class_code]);
    $class = $stmt->fetch();

    if ($class) {
        // Enroll the student in the class
        $stmt = $user->db->prepare("INSERT INTO class_enrollments (class_id, user_id) VALUES (?, ?)");
        if ($stmt->execute([$class['id'], $_SESSION['user_id']])) {
            header('Location: student/dashboard.php');
            exit();
        } else {
            $error = "Failed to enroll in class.";
        }
    } else {
        $error = "Invalid class code.";
    }
}
?>
