<?php
session_start();
if (!isset($_SESSION['ManagerName']) || $_SESSION['Role'] !== 'cashier') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UI</title>

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- styles -->
    <link rel="stylesheet" href="index.css" type="text/css" />
</head>

<body>
    <div class="side-nav">
        <div class="logo__placeholder">Snack Shack</div>
        <nav class="nav-list">
            <ul class="menu_list">
                <li>
                    <a href="cashier.php"><i class="bx bx-store"></i><span>Cashier Management</span></a>
                </li>
               
            </ul>
        </nav>
    </div>

    <div class="contain__box">
        <div class="box-header">
            <div class="header text__display">
                <span class="title">Dashboard</span>
                <div class="vl"></div>
                <span class="sub-title">Fast Food Management</span>
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
        <div class="box-content">

            <div class="head-content">
                <i class="bx bx-store"></i>
                <h1>Cashier</h1>
            </div>

            <div class="cards data__cards">

                <div class="d-card card__orders">
                    <div class="v-line"></div>
                    <i class='bx bx-basket'></i>
                    <div class="text-disp">
                        <span class="count">0</span>
                        <span class="title">Orders</span>
                    </div>
                </div>

                <div class="d-card card__customers">
                    <div class="v-line"></div>
                    <i class='bx bx-group'></i>
                    <div class="text-disp">
                        <span class="count">0</span>
                        <span class="title">Customers</span>
                    </div>
                </div>

                <div class="d-card card__stocks">
                    <div class="v-line"></div>
                    <i class='bx bx-box'></i>
                    <div class="text-disp">
                        <span class="count">0</span>
                        <span class="title">Menu Items</span>
                    </div>
                </div>

            </div>

            <div class="data__table">
                <div class="table-header">
                    <h2>Recent Orders</h2>
                    <div class="search-box">
                        <input type="search" placeholder="Search">
                        <i class='bx bx-search-alt'></i>
                    </div>
                </div>

                <table class="table_custm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Ordered Snack</th>
                            <th>Amount</th>
                            <th>Date Order</th>
                            <th>Contact No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>.....</td>
                            <td>.....</td>
                            <td>.....</td>
                            <td>08/07/2024</td>
                            <td>090909099</td>

                        </tr>
                    </tbody>
                </table>

            </div>


        </div>
    </div>
</body>

</html>