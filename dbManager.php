<?php
$dbHost = 'localhost';
$ManagerName = 'root'; 
$Password = 'password'; 
$dbName = 'snackshack'; 

$conn = new mysqli($dbHost, $ManagerName, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
    