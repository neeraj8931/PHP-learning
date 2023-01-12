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

         <!-- add a product form -->
         <div id="add-product-box" class="p-5 border-4 border-black w-4/5 mx-auto mt-10">
         <h2 class="text-2xl">Add a product</h2>
          <input type="text" name="productTitle" id="productTitle" placeholder="Product Title" class="w-4/5 block border-2 border-black mx-auto m-10 p-2 rounded"/>
          <input type="text" name="productPrice" id="productPrice" placeholder="Price" class="w-4/5 block border-2 border-black mx-auto m-10 p-2 rounded"/>
          <input type="textarea" name="productDescription" id="productDescription" placeholder="Description" class="w-4/5 block border-2 border-black mx-auto m-10 p-2 rounded"/>
          <input type="file" name="productImage" id="productImage">
          <button id="add-product-button" class="w-2/5 block border-2 border-black mx-auto m-10 p-2 rounded" onclick="addProduct();">Add Product</button>
        </div>
    </div>



</body>

</html>