<?php
if(session_status()===PHP_SESSION_NONE){
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-pink-50">

<nav class="bg-pink-500 p-4 flex justify-between items-center text-white">
    <h1 class="text-lg font-bold">Student Dashboard</h1>
    
    <div class="flex items-center gap-4">
        <span>
            👋 <?= $_SESSION['firstName']; ?>
        </span>

        <a href="../auth/logout.php" class="bg-white text-pink-500 px-4 py-2 rounded-lg hover:bg-pink-100">
            Logout
        </a>
    </div>
</nav>

<div class="p-6">

    <h2 class="text-2xl font-bold text-pink-700 mb-6">
        Welcome, <?= $_SESSION['firstName']; ?> 👋
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <h3 class="text-lg font-semibold text-pink-600">My Courses</h3>
            <p class="text-sm text-gray-500 mt-2">View your courses</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <h3 class="text-lg font-semibold text-pink-600">My Grades</h3>
            <p class="text-sm text-gray-500 mt-2">Check your results</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <h3 class="text-lg font-semibold text-pink-600">Profile</h3>
            <p class="text-sm text-gray-500 mt-2">Update your info</p>
        </div>

    </div>

</div>

</body>
</html>