<?php

$users = array("neeraj1@gmail.com","neeraj2@gmail.com","neeraj3@gmail.com");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo json_encode(array("message"=>"Data Posted"));
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo json_encode($users);
    return;
}


?>