
<div class="flex justify-center mt-10">
    <h2 class="text-2xl font-bold text-pink-700">Login</h2>
</div>


<?php include '../includes/footer.php'; ?>
<?php
require '../config/db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);
    $password = $_POST['password'];


    if(empty($email) || empty($password)){
        header("Location:login.php?error=Tous les champs sont obligatoires");
        exit();
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header(("Location:login.php?error=Format d'email non valide"));
        exit();

    }



    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['email' => $email]);

    $user = $stmt->fetch();

    if (!$user || !password_verify($password, $user['passwork'])) {
        header("Location:login.php?error=Email ou mot de passe incorrect");
        exit();
    }

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['firstName'] = $user['firstName'];
        $_SESSION['lastName'] = $user['lasttName'];

        header("Location: ../dashboard/index.php");
        exit();

}
?>
