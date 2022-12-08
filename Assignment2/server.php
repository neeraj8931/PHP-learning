<?php

$users = array("neeraj1@gmail.com","neeraj2@gmail.com","neeraj3@gmail.com");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $postData = file_get_contents('php://input');
    $postData=json_decode($postData);
   array_push($users,$postData->userEmail);
    echo json_encode(array($users));
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo json_encode($users);
    return;
}
