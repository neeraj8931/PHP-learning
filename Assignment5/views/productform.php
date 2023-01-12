<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <?php  include dirname(__DIR__, 1).'/snippets/header-scripts-styles.php' ?>
    
</head>
<body>
<section id="product-form-container" class="mt-20">
    <h1 class="text-center text-3xl">Add Product</h1>
    <div class="flex pl-10 pr-10">
        <div class="border-black border-4 rounded-md flex-1 w-50">
            <input type="text" name="productname" id="productname" class="border-black border-2 block my-10 mx-auto w-4/5 p-[5px]" placeholder="Enter Product Name">
            <input type="text" name="productsku" id="productsku" class="border-black border-2 block my-10 mx-auto w-4/5 p-[5px]" placeholder="Product SKU">
            <input type="text" name="productprice" id="productprice" class="border-black border-2 block my-10 mx-auto w-4/5 p-[5px]" placeholder="Product Price">
            
            <div class="text-center">
                <button class="bg-black text-white p-[5px] w-2/5 my-5 border-black border-4 rounded-md" onclick="addProduct();"> Add Product </button>
            </div>

        </div>
    </div>
    <div class="sign-up-text text-center">
        <span class="sign-up-cta">view all products</span>
    </div>
    </section>
</body>
</html>