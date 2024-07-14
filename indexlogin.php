<?php
session_start();
include 'dbManager.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ManagerName = mysqli_real_escape_string($conn, $_POST['ManagerName']);
    $password = $_POST['password'];

    // SQL query to retrieve user details including hashed password
    $sql = "SELECT ManagerID, ManagerName, ContactNumber, Email, HireDate, password, Role FROM manager WHERE ManagerName=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $ManagerName);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];

        // Debugging: Print hashed password and entered password
        error_log("Hashed Password from DB: " . $hashedPassword);
        error_log("Password entered by user: " . $password);

        // Verify password
        if (password_verify($password, $hashedPassword)) {
            // Password verified, set session variables
            $_SESSION['ManagerName'] = $row['ManagerName'];
            $_SESSION['ManagerID'] = $row['ManagerID'];
            $_SESSION['email'] = $row['Email']; // Assuming 'Email' field in database
            $_SESSION['HireDate'] = $row['HireDate']; 
            $_SESSION['Role'] = $row['Role']; 

            // Redirect based on role
            switch ($_SESSION['Role']) {
                case 'general manager':
                    header("Location: TeamManagement.php");
                    break;
                case 'cashier':
                    header("Location: cashier.php");
                    break;
                case 'financial manager':
                    header("Location: financial.php");
                    break;
                case 'staff manager':
                    header("Location: TeamManagement.php");
                    break;
                // Add additional roles and their redirects as needed
                default:
                    header("Location: verify.php");
                    break;
            }
            exit();
        } else {
            $_SESSION['error'] = "Incorrect Password";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Username does not exist";
        header("Location: login.php");
        exit();
    }
}
?>
