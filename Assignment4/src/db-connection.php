<?php

$severName="localhost";
$dbUseraName = "neeraj";
$dbPassword="Neeraj@123";
$dbTable="users";

// Create connection
$conn = new mysqli($severName, $dbUseraName, $dbPassword, $dbTable);

// Check connection
if ($conn->connect_error) {
    $databseConnected = "NO" . $conn->connect_error;
} else {
    $databseConnected = "Yes";
};

?>