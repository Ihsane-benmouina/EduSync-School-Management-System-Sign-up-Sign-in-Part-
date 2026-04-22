<?php
require '../config/db.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['email' => $email]);

    $user = $stmt->fetch();

    if($user && password_verify($password, $user['passwork'])){
        
        $_SESSION['user_id'] = $user['id'];

        header("Location: ../dashboard/index.php");
        exit();
    } else {
        echo "Email ou mot de passe incorrect";
    }
}
?>