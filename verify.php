<?php
session_start();
include 'dbManager.php';
if (!isset($_SESSION['ManagerName'])) {
  header("Location: login.php");
  exit();
}

function login($username, $password) {
 
  $conn = new mysqli('localhost', 'ManagerName', 'password', 'database');

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $sql = "SELECT * FROM manager WHERE ManagerName = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('s', $username);
  $stmt->execute();
  $result = $stmt->get_result(); 

  if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
      
      $_SESSION['ManagerName'] = $username;
      $_SESSION['role'] = $user['role'];
      return true;
    } else {
        return false;
}
    }
  }

 

function isLoggedIn() {
    
  return isset($_SESSION['ManagerName']);
}