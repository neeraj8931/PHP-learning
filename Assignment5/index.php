<!DOCTYPE html>
<html lang="en">
    <?php
     // Start the session
     session_start();
     
     if($_SESSION["loggedIn"] == true){
        header('Location: /views/productform.php');
     }
     

    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 5</title>
    <?php  include __DIR__.'/snippets/header-scripts-styles.php' ?>
</head>
<body class="bg-themecolor">
    <h1 class="text-3xl my-4 font-bold underline text-center">Assignment 5</h1>
    <p class="text-xl mt-6 text-center">
    Build a Product Information form. Only logged in users should be able to see this form. Logged in User can  add Product name,sku,price. Sku of the product should be unique. Store this product data in a table. Build a product listing page where this data is shown. Even non-logged in users should be able to see this data. 
    </p>
    
    <div id="error-container" class="text-center m-10"></div>

   <!-- Sign in Container -->

    <section id="sign-in-container">
    <div class="flex pl-10 pr-10">
        <div class="border-black border-4 rounded-md flex-1 w-50">
            <input type="email" name="useremail" id="useremail" class="border-black border-2 block my-10 mx-auto w-4/5 p-[5px]" placeholder="Enter Email">
            <input type="password" name="userpassword" id="userpassword" class="border-black border-2 block my-10 mx-auto w-4/5 p-[5px]" placeholder="Enter Password">
            <div class="text-center">
                <button class="bg-black text-white p-[5px] w-2/5 my-5 border-black border-4 rounded-md" onclick="signIn();"> Sign In </button>
            </div>

        </div>
    </div>
    <div class="sign-up-text text-center">
        <span class="sign-up-cta" onclick="showSignUp()">Create an account</span>
    </div>
    </section>


    <!-- Sign Up Container -->

    <section id="sign-up-container" style="display:none;">
    <div class="flex pl-10 pr-10">
        <div class="border-black border-4 rounded-md flex-1 w-50">
            <input type="text" name="username" id="signupusername" class="border-black border-2 block my-10 mx-auto w-4/5 p-[5px]" placeholder="Enter Name"/>
            <input type="email" name="useremail" id="signupuseremail" class="border-black border-2 block my-10 mx-auto w-4/5 p-[5px]" placeholder="Enter Email">
            <input type="password" name="userpassword" id="signupuserpassword" class="border-black border-2 block my-10 mx-auto w-4/5 p-[5px]" placeholder="Set Password">
            <input type="password" name="confirmuserpassword" id="signupconfirmuserpassword" class="border-black border-2 block my-10 mx-auto w-4/5 p-[5px]" placeholder="Confirm Password">
           
            <div class="text-center">
                <button class="bg-black text-white p-[5px] w-2/5 my-5 border-black border-4 rounded-md" onclick="signUp();"> Sign Up </button>
            </div>

        </div>
    </div>
    <div class="sign-up-text text-center">
        <span class="sign-up-cta" onclick="showSignIn()">Already an account? sign in</span>
    </div>
    </section>

    
</body>
</html>