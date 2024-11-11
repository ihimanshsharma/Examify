<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examify</title>

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">

    <!-- Animate.css CDN for animations -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <!-- Font Awesome CDN for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts CDN (example: Poppins font) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Custom styles -->
    <link href="public/assets/css/style.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100 text-gray-900">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="text-xl font-semibold">
            <a href="index.php" class="text-white hover:text-gray-200">Examify</a>
        </div>
        
        <!-- Navigation Menu -->
        <nav>
            <ul class="flex space-x-6">
                <li><a href="index.php" class="hover:text-gray-200">Home</a></li>
                <li><a href="about.php" class="hover:text-gray-200">About</a></li>
                <li><a href="contact.php" class="hover:text-gray-200">Contact</a></li>

                <?php if ($isLoggedIn): ?>
                    <li><a href="pages/student/dashboard.php" class="hover:text-gray-200">Dashboard</a></li>
                    <li><a href="logout.php" class="hover:text-gray-200">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php" class="hover:text-gray-200">Login</a></li>
                    <li><a href="register.php" class="hover:text-gray-200">Register</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</body>
</html>
