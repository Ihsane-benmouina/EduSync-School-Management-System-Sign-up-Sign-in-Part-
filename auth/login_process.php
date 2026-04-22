<?php 
require '../config/db.php';
if($_SERVER["REQUEST_METHOD"=="POST"]){
    $email= htmlspecialchars($_POST['email']);
    $password=$_POST['password'];

    $sql="SELECT * FROM users WHERE $email=:email";
    $stmt=$conn->prepare($sql);
    $stmt->execute(['email'=>$email]);
    $user= $stmt->fetch();

    




};






?>