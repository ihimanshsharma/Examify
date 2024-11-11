<?php
session_start();
require_once('includes/functions/common.php');
require_once('includes/classes/User.php');

$name = $email = $password = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($name) || empty($email) || empty($password)) {
        $error = "All fields are required!";
    } else {
        $user = new User();
        if ($user->checkEmailExists($email)) {
            $error = "Email already registered!";
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            if ($user->register($name, $email, $hashedPassword)) {
                $_SESSION['user_email'] = $email;
                header('Location: login.php');
                exit();
            } else {
                $error = "Registration failed!";
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="max-w-md mx-auto mt-10 p-6 border border-gray-300 rounded-lg shadow-lg">
        <h2 class="text-2xl text-center">Signup</h2>
        <form action="" method="POST" class="space-y-4 mt-4">
            <?php if ($error) { echo '<p class="text-red-500 text-sm">' . htmlspecialchars($error) . '</p>'; } ?>
            <div>
                <label for="name" class="block text-sm">Name</label>
                <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div>
                <label for="email" class="block text-sm">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div>
                <label for="password" class="block text-sm">Password</label>
                <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Signup</button>
        </form>
    </div>
</body>
</html>
