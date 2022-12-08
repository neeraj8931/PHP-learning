<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="index.js"></script>

    <style>
        .spinner {
            width: 25px;
            height: 25px;
            margin: 20px auto;
            border: 4px solid rgba(0, 0, 0, .1);
            border-left: 4px solid #000;
            border-right: 4px solid #000;
            animation: spinner 1s linear infinite forwards;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -o-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%
        }

        @keyframes spinner {
            0% {
                transform: rotate(0deg)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        .spinner-section {
            position: fixed;
            top: 0;
            width: 100%;
            height: 100vw;
            background: lightgrey;
            opacity: 0.8;
            display: flex;
            align-items: center;

        }
    </style>
</head>

<body class="bg-themecolor">
    <h1 class="text-3xl my-4 font-bold underline text-center">Assignment 2</h1>
    <p class="text-xl mt-6 text-center">
        Build a User Information for which takes name and email as inputs and saves in the database user table. </br>
        Show list of all user information on a list page
    </p>
    <div class="flex p-10">
        <div class="border-black border-4 rounded-md flex-1 w-50">
            <input type="text" name="username" id="username" class="border-black border-2 block my-10 mx-auto w-4/5 p-[5px]" placeholder="Enter Name">
            <input type="email" name="useremail" id="useremail" class="border-black border-2 block my-10 mx-auto w-4/5 p-[5px]" placeholder="Enter Email">
            <div class="text-center">
                <button class="bg-black text-white p-[5px] w-2/5 my-5 border-black border-4 rounded-md" onclick="setUser();"> Add User</button>
            </div>

        </div>

        <div id="users" class="flex-1 w-50">
            <p class="text-xl mt-6 text-center">
                No users yet.
            </p>
        </div>
    </div>


</body>

</html>