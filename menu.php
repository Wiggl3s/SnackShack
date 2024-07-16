
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UI</title>

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- styles -->
    <link rel="stylesheet" href="menu.css" type="text/css" />
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
                
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                
                
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
 
            <?php endif; ?>
        </ul>
        </details>
        </div>
        </div>
        <div class="box-content">

            <div class="head-content">
                <i class="bx bx-store"></i>
                <h1>Menu</h1>
                <a href="order.php" class="add-btn">Add order</a>
            </div>

            <!-- STARTERS -->
            <div class="data__table">
                <div class="table-header">
                    <h2>Available Orders</h2>
                    <h1>Starters</h1>

                    <div class="search-box">
                        <input type="search" placeholder="Search">
                        <i class='bx bx-search-alt'></i>
                    </div>
                </div>
                <div class="food-cards-container">
                <div class="food-card">
                    <img src="img/GarlicFries.jpg">
                    <div class="overlay">
                    </div>
                    <h3>Parmesan Fries</h3>
                    <p>Price: PHP 90</p>
                    <p>Flavor: Garlic</p>
                    <form method="post" action="">
                        <input type="hidden" name="FoodName" value="Food Name">
                        <input type="hidden" name="price" value="Food Price">
                        <input type="hidden" name="flavor" value="Food Flavor">
                        
                    </form>
                </div>

                <div class="food-card">
                    <img src="img/nachos.jpg">
                    <div class="overlay">
                    </div>
                    <h3>Loaded Nachos</h3>
                    <p>Price: PHP 130</p>
                    <p>Flavor: Cheese</p>
                    <form method="post" action="">
                        <input type="hidden" name="FoodName" value="Food Name">
                        <input type="hidden" name="price" value="Food Price">
                        <input type="hidden" name="flavor" value="Food Flavor">
                    </form>
                </div>

                <div class="food-card">
                    <img src="img/bonelesswings .jpg">
                    <div class="overlay">
                    </div>
                    <h3>Boneless Wings Pack</h3>
                    <p>Price: 250</p>
                    <p>Flavor: Spicy Garlic</p>
                    <form method="post" action="">
                        <input type="hidden" name="FoodName" value="Food Name">
                        <input type="hidden" name="price" value="Food Price">
                        <input type="hidden" name="flavor" value="Food Flavor">
                    </form>
                </div>
                </div>



                <!-- BURGER -->
                <div class="data__table">
                    <div class="table-header">
                        <h2>Available Orders</h2>
                        <h1>Burgers</h1>

                        <div class="search-box">
                            
                            <i class='bx bx-food-tag'></i>
                        </div>
                    </div>
                    <div class="food-cards-container">
                    <div class="food-card">
                        <img src="img/burgersig.jpg">
                        <div class="overlay">
                        </div>
                        <h3>Shack Burger</h3>
                        <p>Price: 150</p>

                        <form method="post" action="">
                            <input type="hidden" name="FoodName" value="Food Name">
                            <input type="hidden" name="Price" value="Food Price">

                        </form>
                    </div>

                    <div class="food-card">
                        <img src="img/grilledburger.jpg">
                        <div class="overlay">
                        </div>
                        <h3>Classic Cheeseburger</h3>
                        <p>Price: 120</p>
 
                        <form method="post" action="">
                            <input type="hidden" name="FoodName" value="Food Name">
                            <input type="hidden" name="price" value="Food Price">
    
                        </form>
                    </div>
                    <div class="food-card">
                        <img src="img/baconburger.jpg">
                        <div class="overlay">
                        </div>
                        <h3>Bacon Burger</h3>
                        <p>Price: 140</p>
 
                        <form method="post" action="">
                            <input type="hidden" name="FoodName" value="Food Name">
                            <input type="hidden" name="price" value="Food Price">
                            
                        </form>
                    </div>
                </div>



                <!-- DRINKS -->
                <div class="data__table">
                    <div class="table-header">
                        <h2>Available Orders</h2>
                        <h1>Drinks</h1>

                        <div class="search-box">
                            
                            <i class='bx bx-food-tag'></i>
                        </div>
                    </div>
                    <div class="food-cards-container">
                    <div class="food-card">
                        <img src="img/sprite.png">
                        <div class="overlay">
                        </div>
                        <h3>Sprite</h3>
                        <p>Price: 20</p>
                        <form method="post" action="">
                            <input type="hidden" name="FoodName" value="Food Name">
                            <input type="hidden" name="price" value="Food Price">
                            
                        </form>
                    </div>

                    <div class="food-card">
                        <img src="img/coke.jpg">
                        <div class="overlay">
                        </div>
                        <h3>Coke</h3>
                        <p>Price: 20</p>
 
                        <form method="post" action="add_to_order.php">
                            <input type="hidden" name="FoodName" value="Food Name">
                            <input type="hidden" name="price" value="Food Price">
                            
                        </form>
                    </div>
                    <div class="food-card">
                        <img src="img/Fanta.png">
                        <div class="overlay">
                        </div>
                        <h3>Fanta</h3>
                        <p>Price: 20</p>
 
                        <form method="post" action="add_to_order.php">
                            <input type="hidden" name="FoodName" value="Food Name">
                            <input type="hidden" name="price" value="Food Price">
                            
                        </form>
                    </div>
                </div>

                  
</body>

</html>