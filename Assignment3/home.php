<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <?php include 'talwind-scripts.php'; ?>
</head>

<body>
    <?php
    session_start();
    ?>

    <div class="text-center">
        <h1 class="text-3xl my-4 font-bold text-center"><?php echo 'Welcome ' . $_SESSION['userName'] . '!'; ?></h1>

        <a href="logout.php">Logout</a>
         <!-- <button class="bg-black text-white p-[10px] ml-10" onclick="editProfile();"> Edit Profile </button> -->
    </div>



</body>

</html>