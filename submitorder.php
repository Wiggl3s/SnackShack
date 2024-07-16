<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UI</title>

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- styles -->
    <link rel="stylesheet" href="order.css" type="text/css" />
</head>

<body>
    <div class="side-nav">
        <div class="logo__placeholder">Snack Shack</div>
        <nav class="nav-list">
            <ul class="menu_list">
                
                <li>
                    <a href="menu.php"><i class='bx bx-food-menu'></i></i><span>Menu</span></a>
                </li>
                <li>
                    <a href="order.php"><i class='bx bx-basket'></i></i><span>Order</span></a>
                </li>
                <li>
                    <a href="feedback.php"><i class='bx bx-message-square-dots'></i></i><span>Suggestions</span></a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="contain__box">
        <div class="box-header">
            <div class="header text__display">
                <span class="title">Fast Food Management</span>
                <div class="vl"></div>
                <span class="sub-title"></span>
            </div>
            <div class="profile__btn">
    <details class="user__dropdown">
        <summary class="user_icon">
            <i class="bx bxs-user"></i>
            <span class="username-text">
                <?php
                
            
                
                echo isset($_SESSION['CustomerName']) ? $_SESSION['CustomerName'] : 'Unknown';
                ?>
            </span>
            <i class='bx bxs-down-arrow'></i>
        </summary>
        <ul class="dropdown-list">
            <?php if(isset($_SESSION['CustomerName'])): ?>
                
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            <?php endif; ?>
        </ul>
    </details>
</div>
        </div>



        <div class="box-content">
    <div class="head-content">
        <i class="bx bx-store"></i>
        <h1>Order</h1> 
        
    </div>
    <h1>Order Placed</h1>
    




</form>
</div>
        
        
            

                    
</body>

</html>