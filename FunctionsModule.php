<?php

require('Classes/Author.php');



function myName($name){
    
    $author1 = new Author('Neeraj',24);
    $author2 = new Author('Vishal', 27);
    echo($author1->getName() . $author1->getAge() . " \n");
    echo($author2->getName() . $author2->getAge() . " \n");
    return "My name is $name \n";
}

function numPosts($posts){
    return $posts===0?"No Posts Available":"$posts posts are available \n";
}

function cityNames(): array{ // function with return type
    $cities =["Pune","Delhi","Mumbai","Goa"];
    return $cities;
}
?>