<?php
  $productName = "T-Shirt";
  $isAvailable = false;
  $isOnSale = false;

if($isAvailable && $isOnSale){
    echo("Product is available to purchase on Discount \n");
}elseif ($isAvailable){
    echo("Product is available to purchase \n");
}else{
    echo("Product is not available! \n");
}
?>