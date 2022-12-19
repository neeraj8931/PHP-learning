<?php
// session started
session_start();

require 'db-connection.php';

$sql="INSERT INTO `newusers` (`username`, `useremail`, `userpassword`, `userimage`) VALUES (?, ?, ?, '');";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $signUpName, $signUpEmail, $signUpPassword);


    if($_SERVER['REQUEST_METHOD']=="POST"){
        header("HTTP/1.1 200 OK");
        $bodyJson=file_get_contents('php://input');
        $signUpCredentials=json_decode($bodyJson);
        $signUpEmail=$signUpCredentials->email;
        $signUpPassword=$signUpCredentials->password;
        $signUpName=$signUpCredentials->name;

        if($signUpEmail =="" ||  $signUpPassword=="" || $signUpName==""){
            echo json_encode(array("message"=>"Fill all fields","LoggedIn"=>$_SESSION['loggedIn']));
            exit;
        }

        $signupSql="SELECT * FROM `newusers` WHERE `useremail` = '$signUpEmail'";
        $signupResult = $conn->query($signupSql);
        if ($signupResult->num_rows > 0) {
            // output data of each row
            echo json_encode(array("message"=>"Account already exists with email- $signUpEmail","LoggedIn"=>$_SESSION['loggedIn']));
        } else{
            $stmt->execute();
            $_SESSION['loggedIn'] = TRUE;
            $_SESSION['userName'] = $signUpName;
            $_SESSION['$userImage'] = null;
            $_SESSION['$userIEmail'] = $signUpEmail;
            echo json_encode(array("message"=>"Logged  successfully","LoggedIn"=>$_SESSION['loggedIn']));
        }

       
    }
   

   




    


// connection close
$conn->close();