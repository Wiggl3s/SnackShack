<?php
session_start();
include 'dbManager.php';

$query = "SELECT * FROM manager";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UI</title>

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- styles -->
    <link rel="stylesheet" href="TeamManagement.css" type="text/css" />
</head>

<body>
    <div class="side-nav">
        <div class="logo__placeholder">Snack Shack</div>
        <nav class="nav-list">
            <ul class="menu_list">
                <li>
                    <a href="cashier.php"><i class="bx bx-store"></i><span>Cashier Management</span></a>
                </li>
                <li>
                    <a href="TeamManagement.php"><i class="bx bxs-group"></i><span>Staff Management</span></a>
                </li>
                <li>
                    <a href="finance.php"><i class="bx bxs-credit-card-front"></i><span>Finance Management</span></a>
                </li>


            </ul>
        </nav>
    </div>

    <div class="contain__box">
        <div class="box-header">
            <div class="header text__display">
                <span class="title">Admin Dashboard</span>
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

                    </ul>
                </details>
            </div>
        </div>
        <div class="box-content">

            <div class="head-content">
                <i class='bx bx-group'></i>
                <h1>Team</h1>
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

                    <div class="search-box">
                        <input type="search" placeholder="Search">
                        <i class='bx bx-search-alt'></i>
                    </div>
                </div>

                <table class="table_custm">
                    <thead>
                        <tr>
                            <th>ID/RoleID</th>
                            <th>Staff Name</th>
                            <th>Role</th>
                            <th>Hire Date</th>
                            <th>Contact No.</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        if (mysqli_num_rows($result) > 0) {

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row["ManagerID"] . "</td>";
                                echo "<td>" . $row["ManagerName"] . "</td>";
                                echo "<td>" . $row["Role"] . "</td>";
                                echo "<td>" . $row["HireDate"] . "</td>";
                                echo "<td>" . $row["ContactNumber"] . "</td>";
                                echo "<td class='opt-cell'><a href=''><i class='bx bx-show-alt'></i></a><a href=''><i class='bx bxs-edit'></i></a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>No results found</td></tr>";
                        }

                        ?>
                    </tbody>
                </table>

            </div>


        </div>
    </div>
</body>

</html>