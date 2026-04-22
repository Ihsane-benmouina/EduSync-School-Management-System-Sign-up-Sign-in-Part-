<?php
require '../config/db.php';
session_start();

if($_SERVER["REQUEST_METHOD"]="POST"){
    $firstName=$_POST['firstName'];
    $lastName= trim($_POST['lastName']);
    $email= htmlspecialchars(trim($_POST['email']));
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];



    if ($password !== $confirmPassword) {
    echo "Les mots de passe ne correspondent pas!";
    exit();
}

$hashpassword=password_hash($password,PASSWORD_DEFAULT);


$sql="SELECT $ FROM users WHERE email=:email";
$stmt=$conn->prepare($sql);
$stmt->execute(['email'=>$email]);
$user=$stmt->fetch();

if($user){
    echo"email deja exict";
}



}


?>