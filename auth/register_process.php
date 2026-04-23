<?php require '../config/db.php';
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstName=$_POST['firstName'];
    $lastName= trim($_POST['lastName']);
    $email= htmlspecialchars(trim($_POST['email']));
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];


if ($password !== $confirmPassword) {
    echo "Les mots de passe ne correspondent pas!";
    exit();
}

    $hashedpassword=password_hash($password, PASSWORD_DEFAULT);
    $sql=" SELECT * FROM users WHERE email=:email";
    $stmt= $conn->prepare($sql);
    $stmt->execute(['email'=>$email]);
    $user=$stmt->fetch();

      if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)) {
        header("Location:register.php?error=remplir tous les champs");
        exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: register.php?error=fomat unvalidate");
        exit();
    }

    if ($password !== $confirmPassword) {
        header("Location:register.php?error=password inconfirmd ");
        exit();
    }


    $role = 3;
    $sql="INSERT INTO users(`firstName`,`lasttName`,`email`,`passwork`,`id_role`) 
    VALUES(:prenom, :lastName, :email, :password,:id_role)";
    $stmt=$conn->prepare($sql);
    $stmt->execute([
        'prenom'=>$firstName,
        'lastName'=>$lastName,
        'email'=>$email,
        'password'=>$hashedpassword,
        'id_role'=>$role,
    ]);

$_SESSION['user_id'] = $conn->lastInsertId();


header("Location: ../dashboard/index.php");
exit();




    


};


?>