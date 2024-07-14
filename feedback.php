
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UI</title>

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- styles -->
    <link rel="stylesheet" href="feedback.css" type="text/css" />
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
                
            </div>
            <div class="profile__btn">
                <details class="user__dropdown">
                    <summary class="user_icon">
                        <i class="bx bxs-user"></i>
                        <span class="username-text">Unknown</span>
                        <i class='bx bxs-down-arrow'></i>
                    </summary>
                    <ul class="dropdown-list">
                        <li><a href="login.php">Login</a></li>
                        <li><a href="login.php">Register</a></li>
                    </ul>
                </details>
            </div>
        </div>
    
        <div class="head-content">
            
                <i class="bx bx-message-square-dots"></i>
                <h1>Suggestions</h1>
</div>

                <div class="feedback-form">
                <form action="submit_feedback.php" method="post">
                    <div class="input-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label for="suggestions">Suggestions:</label>
                        <textarea id="suggestions" name="suggestions" rows="4" required></textarea>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        
    </div>
</body>

</html>