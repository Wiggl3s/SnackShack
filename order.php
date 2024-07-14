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
                
            
                
                // Check if the user is logged in and display the username
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
    <form action="submit_order.php" method="post">
    <h2>Create Your Order</h2>
    <div class="form-group">
    <label for="starter-item">Select Starter:</label>
    <select name="starter_item" id="starter-item">
        <option value="fries">Parmesan Fries</option>
        <option value="nachos">Loaded Nachos</option>
        <option value="nachos">Boneless Wings</option>
       
    </select>
</div>

<div class="form-group">
    <label for="burger-item">Select Burger:</label>
    <select name="burger_item" id="burger-item">
        <option value="cheeseburger">Classic Cheeseburger</option>
        <option value="veggieburger">Shack Burger</option>
        <option value="veggieburger">Bacon Burger</option>
        
    </select>
</div>

<div class="form-group">
     <label for="drink-item">Select Drink:</label>
    <select name="drink_item" id="drink-item">
        <option value="sprite">Sprite</option>
        <option value="coke">Coke</option>
        <option value="fanta">Fanta</option>
        
    
    </select>
</div>

<div class="form-group">
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="1" value="1">
</div>
<!-- Payment Section -->
<h3>Payment Information</h3>
<div class="form-group">
    <label for="payment-amount">Amount:</label>
    <input type="text" id="payment-amount" name="payment_amount" placeholder="Enter your payment amount">
</div>


<!-- Additional form elements or payment details go here -->

<button type="submit" class="submit-btn">Place Order</button>
</form>
</div>
        
        
            

                    
</body>

</html>