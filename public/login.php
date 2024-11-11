<?php
session_start();
require_once('includes/functions/common.php');
require_once('includes/classes/User.php');

$email = $password = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        $error = "All fields are required!";
    } else {
        $user = new User();
        if ($user->authenticate($email, $password)) {
            $_SESSION['user_email'] = $email;
            $role = $user->getRole($email);

            if ($role == 'teacher') {
                header('Location: /teacher/dashboard.php');
            } else {
                header('Location: /student/dashboard.php');
            }
            exit();
        } else {
            $error = "Invalid email or password!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="max-w-md mx-auto mt-10 p-6 border border-gray-300 rounded-lg shadow-lg">
        <h2 class="text-2xl text-center">Login</h2>
        <form action="" method="POST" class="space-y-4 mt-4">
            <?php if ($error) { echo '<p class="text-red-500 text-sm">' . htmlspecialchars($error) . '</p>'; } ?>
            <div>
                <label for="email" class="block text-sm">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div>
                <label for="password" class="block text-sm">Password</label>
                <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Login</button>
        </form>
        <div class="mt-4">
            <form action="join_class.php" method="POST">
                <label for="class_code" class="block text-sm">Class Code</label>
                <input type="text" id="class_code" name="class_code" class="w-full p-2 border border-gray-300 rounded" required>
                <button type="submit" class="w-full py-2 mt-2 bg-green-500 text-white rounded hover:bg-green-700">Join Class</button>
            </form>
        </div>
    </div>
</body>
</html>