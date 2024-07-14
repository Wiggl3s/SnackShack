<?php

$host = 'localhost'; 
$username = 'CustomerName'; 
$password = 'password';
$dbname = 'snackshack'; 

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>