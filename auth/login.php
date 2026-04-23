<?php include '../includes/header.php'; ?>

<?php include '../config/db.php' ;   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
   <?php if (isset($_GET['error'])) {
            if ($_GET['error'] == "Tous les champs sont obligatoires") {
                echo " <div class='bg-red-100 text-red-700 p-3 rounded-lg mb-4'>
                Tous les champs sont obligatoires
            </div>";
            }
            if ($_GET['error'] == "fomat unvalidate") {
                echo " <div class='bg-red-100 text-red-700 p-3 rounded-lg mb-4'>
                format d'email invalidate
            </div>";
            }
             if ($_GET['error'] == "Email ou mot de passe incorrect") {
                echo " <div class='bg-red-100 text-red-700 p-3 rounded-lg mb-4'>
                Email ou mot de passe incorrect
            </div>";
            }
           
        }
        ?>
    <form method="POST" action="login_process.php">
    <section class="bg-pink-50 dark:bg-pink-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
   
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-pink-800 dark:border-pink-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-pink-900 md:text-2xl dark:text-white">
                  Sign in to your account
              </h1>
              <form class="space-y-4 md:space-y-6"  method="POST" action="login_process.php">
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-pink-900 dark:text-white">Your email</label>
                      <input type="text" name="email" class="bg-pink-50 border border-pink-300 text-pink-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-pink-700 dark:border-pink-600 dark:placeholder-pink-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" >
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-pink-900 dark:text-white">Password</label>
                      <input type="password" name="password"  placeholder="••••••••" class="bg-pink-50 border border-pink-300 text-pink-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-pink-700 dark:border-pink-600 dark:placeholder-pink-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-pink-300 rounded bg-pink-50 focus:ring-3 focus:ring-primary-300 dark:bg-pink-700 dark:border-pink-600 dark:focus:ring-primary-600 dark:ring-offset-pink-800" >
                          </div>
                          <div class="ml-3 text-sm">
                            <label for="remember" class="text-pink-500 dark:text-pink-300">Remember me</label>
                          </div>
                      </div>
                      <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
                  </div>
                  <button type="submit" class="w-full text-white bg-pink-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
                  <p class="text-sm font-light text-pink-500 dark:text-pink-400">
                      Don’t have an account yet? <a href="#" class="font-medium text-black-600 hover:underline dark:text-pink-500">Sign up</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>

</body>
</html>
<?php include '../includes/footer.php'; ?>
