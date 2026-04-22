<?php
require '../config/db.php';
session_start();

if($_SERVER["REQUEST_METHOD"]="POST"){
    $firstName=$_POST['firstName'];
    $lastName= trim($_POST['lastName']);
    $email= htmlspecialchars(trim($_POST['email']));
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];


}


?>