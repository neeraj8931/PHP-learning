<?php
// session started
session_start();
require 'db-connection.php';






if($_SERVER['REQUEST_METHOD']=="POST"){
    header("HTTP/1.1 200 OK");
    $bodyJson=file_get_contents('php://input');
    $loginCredentials=json_decode($bodyJson);
    $LoginEmail=$loginCredentials->email;
    $LoginPassword=$loginCredentials->password;

    $loginSql="SELECT * FROM `newusers` WHERE `useremail` = '$LoginEmail'";
    $loginResult = $conn->query($loginSql);
    if ($loginResult->num_rows > 1) {
        // output data of each row
        while ($row = $loginResult->fetch_assoc()) {
        array_push($user, $row["useremail"]);
        }
        echo json_encode(array("message"=>"Many users with $LoginEmail"));
    } else if ($loginResult->num_rows == 0) {
            // output data of each row
            
            echo json_encode(array("message"=>"No account with email-  $LoginEmail"));
        } 
    else {
         // output data of each row
         while ($row = $loginResult->fetch_assoc()) {
          $useremail=$row["useremail"];
          $userpassword=$row["userpassword"];
          $username=$row["username"];
          $userimage=$row["userimage"];
         }

         if( $userpassword == $LoginPassword ){
            $_SESSION['loggedIn'] = TRUE;
            $_SESSION['userName'] = $username;
            $_SESSION['$userImage'] = $userimage;
            $_SESSION['$userIEmail'] = $useremail;
            echo json_encode(array("message"=>"Logged  successfully","LoggedIn"=>$_SESSION['loggedIn']));
        
         }else{
            $_SESSION['loggedIn'] = FALSE;
           

        echo json_encode(array("message"=>"Wrong Password","LoggedIn"=>$_SESSION['loggedIn']));
     }
        
        
        // echo json_encode(array("message"=>"Many users with $LoginEmail","database connected"=>$databseConnected));
    
}

}
// connection close
$conn->close();