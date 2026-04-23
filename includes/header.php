<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-pink-50">

<header class="bg-pink-500 text-white p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">EduSync</h1>

    <div class="space-x-3">
        <a href="/School_mangement/auth/login.php" class="bg-white text-pink-500 px-4 py-2 rounded-lg">
            Login
        </a>

        <a href="/School_mangement/auth/register.php" class="bg-pink-700 px-4 py-2 rounded-lg">
            Register
        </a>
    </div>
</header>