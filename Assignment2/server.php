<?php


// Data base connection

$servername = "localhost";
$username = "neeraj";
$password = "Neeraj@123";
// Create connection
$conn = new mysqli($servername, $username, $password, "users");

// Check connection
if ($conn->connect_error) {
    $databseConnected = "NO" . $conn->connect_error;
} else {
    $databseConnected = "Yes";
};




$users = array("neeraj1@gmail.com", "neeraj2@gmail.com", "neeraj3@gmail.com");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $postData = file_get_contents('php://input');
    $dataToSend = json_decode($postData, true);
    $email = $dataToSend['userEmail'];
    $name = $dataToSend['userName'];
    $sql = "INSERT INTO userslist (email, username ) VALUES ('$email','$name')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(array("UserCreated" => "UserCreated", "useDetails" => $email . " " . $name));
    } else {
        echo "Error".$conn->error;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // echo json_encode($users);
    //-------------
    $sql = "SELECT username, email FROM userslist";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            array_push($users, $row["email"]);
        }
        echo json_encode($users);
    } else {
        echo "0";
    }
}
//-----------


$conn->close();
