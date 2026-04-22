<?php
require '../config/db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <section class="bg-pink-50 dark:bg-pink-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-pink-800 dark:border-pink-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-pink-900 md:text-2xl dark:text-white">
                  Create an account
              </h1>
              <form class="space-y-4 md:space-y-6"  method="POST" action="register_process.php">
                  <div>
                      <label for="fisrtName" class="block mb-2 text-sm font-medium text-pink-900 dark:text-white">Fisrt Name</label>
                      <input type="text" name="firstName" id="first_name" class="bg-pink-50 border border-pink-300 text-pink-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-pink-700 dark:border-pink-600 dark:placeholder-pink-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="firstName" required="">
                  </div>
                    <div>
                      <label for="lastName" class="block mb-2 text-sm font-medium text-pink-900 dark:text-white">Last Name</label>
                      <input type="text" name="lastName"  class="bg-pink-50 border border-pink-300 text-pink-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-pink-700 dark:border-pink-600 dark:placeholder-pink-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="lastName" required="">
                  </div>
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-pink-900 dark:text-white">Your email</label>
                      <input type="email" name="email"  class="bg-pink-50 border border-pink-300 text-pink-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-pink-700 dark:border-pink-600 dark:placeholder-pink-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-pink-900 dark:text-white">Password</label>
                      <input type="password" name="password"  placeholder="••••••••" class="bg-pink-50 border border-pink-300 text-pink-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-pink-700 dark:border-pink-600 dark:placeholder-pink-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div>
                      <label for="confirmPassword" class="block mb-2 text-sm font-medium text-pink-900 dark:text-white">Confirm password</label>
                      <input type="confirm-password" name="confirmPassword"  placeholder="••••••••" class="bg-pink-50 border border-pink-300 text-pink-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-pink-700 dark:border-pink-600 dark:placeholder-pink-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-pink-300 rounded bg-pink-50 focus:ring-3 focus:ring-primary-300 dark:bg-pink-700 dark:border-pink-600 dark:focus:ring-primary-600 dark:ring-offset-pink-800" required="">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="terms" class="font-light text-pink-500 dark:text-pink-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                      </div>
                  </div>
                  <button type="submit" class="w-full text-balck bg-pink-300 hover:bg-pink-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Create an account</button>
                  <p class="text-sm font-light text-pink-500 dark:text-pink-400">
                      Already have an account? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>
</body>
</html>