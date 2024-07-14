<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming the 'username' field is used for both managers and customers
    $username = $_POST['username'] ?? $_POST['ManagerName'] ?? $_POST['CustomerName'];
    $password = $_POST['password'];

    
    if (login($username, $password)) {
        
        switch ($_SESSION['role']) {
            case 'customer':
                header("Location: menu.php");
                break;
            case 'General Manager':
                header("Location: TeamManagement.php");
                break;
            case 'Financial Manager':
                header("Location: financial.php");
                break;
            case 'Staff Manager':
                header("Location: TeamManagement.php");
                break;
            case 'Cashier':
                header("Location: cashier.php");
                break;
            
            default:
                // Optional: handle unknown roles
                header("Location: login.php");
                $_SESSION['error'] = "Invalid role";
                break;
        }
        exit();
    } else {
        // Display error message on the login form
        $_SESSION['error'] = "Invalid username or password";
        header("Location: login.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI</title>
    <link rel="stylesheet" type="text/css" href="login.css">

</head>

<body>
    <div class="welcome-message">
        <h1>Welcome to Snack Shack</h1>
    </div>
    <div class="wrapper">

        <div class="form-wrapper sign-in">
            <form action="indexlogin.php" method="post">
                <h2>Log In</h2>
                <?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])) { ?>
                    <p class="Invalid User"><?php echo $_SESSION['error']; ?></p>
                    <?php unset($_SESSION['error']);  ?>
                <?php } ?>

                <div class="input-group">

                    <input type="text" name="ManagerName" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div>
                <button type="submit">Login</button>
                <div class="signUp-link">
                    <p>Are you a customer? <a href="#" class="signUpBtn-link">Yes</a></p>
                    
                </div>
            </form>
        </div>

        


        <div class="form-wrapper sign-up">
            <form action="signup.php" method="post">
                <div class="input-group">
                    <input type="text" name="CustomerName" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="email" name="Email" required>
                    <label for="">Email</label>
                </div>
                <div class="input-group">
                    <input type="text" name="ContactNumber" required>
                    <label for="">Contact Number</label>
                </div>
                <div class="input-group">
                    <input type="text" name="Address" required>
                    <label for="">Address</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div>
                <div class="remember">
                    <label>
                        <input type="checkbox" name="terms" value="agree" required> I agree to the terms & conditions
                    </label>
                </div>
                <?php if (!empty($registerError)) : ?>
                    <div class="error-message"><?php echo $registerError; ?></div>
                <?php endif; ?>
                <button type="submit">Sign Up</button>
                <div class="signUp-link">
                    <p>Already have an account? <a href="#" class="signInBtn-link">Sign In</a></p>
                </div>
            </form>
        </div>
        
    </div>
    <script src="script.js"></script>
</body>

</html>