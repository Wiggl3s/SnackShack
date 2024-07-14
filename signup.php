<?php
session_start();

$host = "localhost";
$dbUser = "root";
$password = "";
$db = "snackshack";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$data = mysqli_connect($host, $dbUser, $password, $db);
if ($data === false) {
    die("Connection error");
}

$registerError = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customerName = mysqli_real_escape_string($data, $_POST["CustomerName"]);
    $contactNumber = mysqli_real_escape_string($data, $_POST['ContactNumber']);
    $email = mysqli_real_escape_string($data, $_POST['Email']);
    $address = mysqli_real_escape_string($data, $_POST['Address']);

    if (isset($_POST['password'])) {
        $password = mysqli_real_escape_string($data, $_POST['password']);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    } else {
        $registerError = "Password is required.";
    }

    if (!isset($_POST['terms']) || $_POST['terms'] != 'agree') {
        $registerError = "You must agree to the Terms and Conditions.";
    }

    if (empty($registerError)) {
        $checkEmail = "SELECT * FROM customer WHERE Email=?";
        $stmt = mysqli_prepare($data, $checkEmail);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_fetch_array($result)) {
            $registerError = "Email already exists.";
        } else {
            $sql = "INSERT INTO customer (CustomerName, ContactNumber, Email, Address, Password) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($data, $sql);
if ($stmt === false) {
    $registerError = "Error preparing statement: " . mysqli_error($data);
} else {
    mysqli_stmt_bind_param($stmt, "sssss", $customerName, $contactNumber, $email, $address, $hashedPassword);
    if (mysqli_stmt_execute($stmt)) {
        $_SESSION['CustomerName'] = $customerName;
        header("location: Menu.php");
        exit();
    } else {
        $registerError = "Registration failed: " . mysqli_stmt_error($stmt);
    }
}

    }
}
}
?>