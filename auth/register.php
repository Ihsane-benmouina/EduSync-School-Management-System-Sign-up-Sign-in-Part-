<?php include '../includes/header.php'; ?>
<?php require '../config/db.php'; ?>

<div class="min-h-screen flex items-center justify-center px-4">

    <div class="bg-white w-full max-w-lg p-8 rounded-2xl shadow-lg">

        <h1 class="text-2xl font-bold text-pink-700 mb-6">
            Create an account
        </h1>

        <?php if (isset($_GET['error'])) {
             if ($_GET['error'] == "First name invalide") {
                echo " <div class='bg-red-100 text-red-700 p-3 rounded-lg mb-4'>
                First name invalide
            </div>";
            }
             if ($_GET['error'] == "Last name invalide") {
                echo " <div class='bg-red-100 text-red-700 p-3 rounded-lg mb-4'>
                Last name invalide
            </div>";
            }

            if ($_GET['error'] == "password inconfirmd") {
                echo " <div class='bg-red-100 text-red-700 p-3 rounded-lg mb-4'>
                password incomfirmed
            </div>";
            }
            if ($_GET['error'] == "fomat unvalidate") {
                echo " <div class='bg-red-100 text-red-700 p-3 rounded-lg mb-4'>
                format d'email invalidate
            </div>";
            }
            if ($_GET['error'] == "remplir tous les champs") {
                echo " <div class='bg-red-100 text-red-700 p-3 rounded-lg mb-4'>
                tous les champs sont obligatoires
            </div>";
            }
            if ($_GET['error'] == "email deja exict") {
                echo " <div class='bg-red-100 text-red-700 p-3 rounded-lg mb-4'>
                email deja exict
            </div>";
            }
        }

        ?>

        <form method="POST" action="register_process.php" class="space-y-4">

            <input type="text" name="firstName" placeholder="First Name"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-pink-400">

            <input type="text" name="lastName" placeholder="Last Name"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-pink-400">

            <input type="text" name="email" placeholder="Email"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-pink-400">

            <input type="password" name="password" placeholder="Password"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-pink-400">

            <input type="password" name="confirmPassword" placeholder="Confirm Password"
                class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-pink-400">

            <button type="submit"
                class="w-full bg-pink-500 text-white py-3 rounded-lg hover:bg-pink-600">
                Create Account
            </button>

        </form>

    </div>

</div>

<?php include '../includes/footer.php'; ?>