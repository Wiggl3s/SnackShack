<?php
session_start();
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Assuming the 'username' field is used for both managers and customers
//     $username = $_POST['username'] ?? $_POST['ManagerName'] ?? $_POST['CustomerName'];
//     $password = $_POST['password'];

//     if (login($username, $password)) {
//         switch ($_SESSION['role']) {
//             case 'customer':
//                 header("Location: menu.php");
//                 break;
//             case 'General Manager':
//                 header("Location: TeamManagement.php");
//                 break;
//             case 'Financial Manager':
//                 header("Location: financial.php");
//                 break;
//             case 'Staff Manager':
//                 header("Location: TeamManagement.php");
//                 break;
//             case 'cashier':
//                 header("Location: cashier.php");
//                 break;
//             default:
//                 // Optional: handle unknown roles
//                 $_SESSION['error'] = "Invalid role";
//                 header("Location: login.php");
//                 break;
//         }
//         exit();
//     } else {
//         // Display error message on the login form
//         $_SESSION['error'] = "Invalid username or password";
//         header("Location: login.php");
//         exit();
//     }
// }
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
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <h2>Log In</h2>

                <div class="input-group">
                    <input type="text" name="username" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" required>
                    <label for="">Password</label>
                </div>
                <button type="submit" name="login">Login</button>
                <?php
                include("dbManager.php");
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {

                    if (empty($_POST["username"]) && empty($_POST["password"])) {
                        echo "<p style= 'text-align: center;' id='msg'>Please enter your username and password!</p>";
                    } else if (empty($_POST["username"])) {
                        echo "<p style= 'text-align: center;' id='msg'>Please enter your username!</p>";
                    } else if (empty($_POST["password"])) {
                        echo "<p style= 'text-align: center;' id='msg'>Please enter your password!</p>";
                    } else if (isset($_POST["username"]) && isset($_POST["password"])) {

                        $username = $_POST["username"];
                        $password = $_POST["password"];



                        $stmt = $conn->prepare("SELECT * FROM customer WHERE CustomerName = ?");
                        $stmt->bind_param("s", $username);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {

                            $user = $result->fetch_assoc();
                            if (password_verify($password, $user["password"])) {
                                header("Location: homepage.php");
                                exit;
                            } else {
                                echo "Incorrect password!";
                            }
                        } else {

                            $stmt = $conn->prepare("SELECT * FROM manager WHERE ManagerName = ?");
                            $stmt->bind_param("s", $username);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {

                                $user = $result->fetch_assoc();
                                if (password_verify($password, $user["password"])) {
                                    header("Location: TeamManagement.php");
                                    exit;
                                } else {
                                    echo "Incorrect password!";
                                }
                            } else {

                                $stmt = $conn->prepare("SELECT * FROM employee WHERE EmployeeName = ?");
                                $stmt->bind_param("s", $username);
                                $stmt->execute();
                                $result = $stmt->get_result();

                                if ($result->num_rows > 0) {

                                    $user = $result->fetch_assoc();
                                    if (password_verify($password, $user["password"])) {
                                        header("Location: cashier.php");
                                        exit;
                                    } else {
                                        echo "Incorrect password!";
                                    }
                                } else {

                                    echo "<p style= 'text-align: center;' id='msg'>Username not found!</p>";
                                }
                            }
                        }
                    }
                }
                $conn->close();

                ?>

                <div class="signUp-link">
                    <p>Are you a customer? <a href="#" class="signUpBtn-link">Yes</a></p>
                </div>
            </form>
        </div>

        <div class="form-wrapper sign-up">
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
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
                <button type="submit" name="signup">Sign Up</button>
                <?php
                include('dbManager.php');

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {

                    $customerName = $_POST["CustomerName"];

                    $contactNumber = $_POST["ContactNumber"];
                    $email = $_POST["Email"];
                    $address = $_POST["Address"];
                    $password = $_POST["password"];

                    
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                    $stmt = $conn->prepare("INSERT INTO customer (CustomerName, ContactNumber, Email, Address, password) VALUES (?,?,?,?,?)");
                    $stmt->bind_param("sssss", $customerName, $contactNumber, $email, $address, $hashed_password);

                    if ($stmt->execute()) {

                        echo "User registered successfully!";
                        // Redirect to home.html or any other page

                        header("Location: homepage.php");
                    } else {
                        echo "Error: " . $stmt->error;
                    }
                }



                // Close the database connection
                $conn->close();
                ?>



                <div class="signUp-link">
                    <p>Already have an account? <a href="#" class="signInBtn-link">Sign In</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>