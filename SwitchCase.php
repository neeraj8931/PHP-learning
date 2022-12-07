<?php
$postCount = 5;

switch ($postCount){
    case 0:
        $message = "Not any post";
        break;
    case 1:
    case 2:
    case 3:
        $message = "Few posts available";
      break;
    default:
        $message = "There are many Posts";
}

echo($message . "\n")

?>