<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/index.js"></script>
</head>

<body class="bg-themecolor">
    <h1 class="text-3xl my-4 font-bold underline text-center">Assignment 1</h1>
    <p class="text-xl mt-6 text-center">
        Write a PHP program that will take css file as input. It should read the contents of the file, strip of comments and write it to a different file.
        <?php
        echo ($data);
        echo ($test);
        ?>
    </p>
    <div class="p-10">

        <textarea rows="10" cols="50" name="username" id="cssText" class="border-black border-2 block my-10 mx-auto w-4/5 p-[5px]" placeholder="Enter CSS with comments"></textarea>
        <div class="text-center">
            <button class="bg-black text-white p-[5px] w-2/5 my-5 border-black border-4 rounded-md" onclick="submit();"> Submit CSS </button>
        </div>
        <div id="result">

        </div>

    </div>

</body>

</html>