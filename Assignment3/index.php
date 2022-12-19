<!DOCTYPE html>
<?php
session_start();
if($_SESSION['loggedIn']==TRUE ){
  header("Location: /home.php");
  echo $_SESSION['loggedin'];
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Assignment 3</title>
    <?php include 'talwind-scripts.php'; ?>
    
  </head>
  <body>
    <h1 class="text-3xl my-4 font-bold underline text-center">Assignment 2</h1>
    <p class="text-xl mt-6 text-center">
      Build User Sign up and login functionality. After logging in I can see the
      username and email of the logged in user.
    </p>

    <div class="bx-buttons mx-auto w-4/5 flex m-10">
        <button id="signinButton" class="p-2  text-center w-4/5 border-2 border-black" onclick="showSignInBox();">Sign In</button>
        <button id="signupButton" class=" p-2 text-center w-4/5" onclick="showSignUpBox();">Sign Up</button>
    </div>
    <div id="signin-signup-warnings" class="text-center text-red-700">
       
       </div>
    <div id="sign-in-box" class="p-5 border-4 border-black w-4/5 mx-auto mt-10">
         <h2 class="text-2xl">Sign In</h2>
          <input type="email" name="email" id="userSignInEmail" placeholder="example@email.com" class="w-4/5 block border-2 border-black mx-auto m-10 p-2 rounded"/>
          <input type="password" name="password" id="userSignInPassword" placeholder="password" class="w-4/5 block border-2 border-black mx-auto m-10 p-2 rounded"/>
          <button id="sign-in-button" class="w-2/5 block border-2 border-black mx-auto m-10 p-2 rounded" onclick="signIn();">Sign In</button>
        </div>
    <div id="sign-up-box" style="display: none;" class="p-5 border-4 border-black w-4/5 mx-auto mt-10">
        <h2 class="text-2xl">Sign Up</h2>
        <input type="email" name="email" id="userEmail" placeholder="example@email.com" class="w-4/5 block border-2 border-black mx-auto m-10 p-2 rounded"/>
        <input type="text" name="name" id="userName" placeholder="name" class="w-4/5 block border-2 border-black mx-auto m-10 p-2 rounded"/>
        <input type="password" name="password" id="userPassword" placeholder="password" class="w-4/5 block border-2 border-black mx-auto m-10 p-2 rounded"/>
        <button id="signup-button" class="w-2/5 block border-2 border-black mx-auto m-10 p-2 rounded" onclick="signUp();">Sign Up</button>
    </div>
   
    
  </body>
</html>
