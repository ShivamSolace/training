<?php
session_start();
include("classes.php");
$fetch = $user->userInfo(); //new line
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        .button {
            display: inline-block;
            border-radius: 12px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 15px;
            width: 150px;
            cursor: pointer;
            margin: 2px;
        }

    </style>
    <title>SWMS</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">
                <?php
                echo 'Hello user ' . $fetch['userId'];
                ?>
            </span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">XXXXXX</span>
                </a>
            </li>
            <li>
                <a href="addNewUser.php">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Add user</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Message</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-group'></i>
                    <span class="text">Team</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="../../logout.php" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>

            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="img/people.png" alt="SWMS">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>
                        <?php
                        echo "Welcome " . $fetch['firstName'] . " " . $fetch['lastName'];
                        ?>
                    </h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>XXXXX</h3>
                        <p>Active Chairperson</p>
                    </span>
                    <a href="allChairpersonList.php"><button class="button">Views Chairpersons</button></a>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3>XXXXX</h3>
                        <p>Total Society</p>
                    </span>
                    <a href="allSocietyList.php"><button class="button">Views Societies</button></a>
                </li>
                <li>
                <a href="addNewUser.php"><i class='bx bxs-group'></i></a>
                    <span class="text">
                        <h3>
                            XXXXX
                            <!-- <?php
                            echo "Welcome " . $fetch['userId'];
                            ?> -->
                        </h3>
                        <p>Total Users</p>
                    </span>
                    <a href="allUserList.php"><button class="button">Views Users</button></a>
                </li>
            </ul>


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Login</h3>
                        <!-- <i class='bx bx-search' ></i> -->
                        <!-- <i class='bx bx-filter' ></i> -->
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Last Login</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>a@gmail.com</p>
                                </td>
                                <td>today</td>
                                <td><span class="status completed">logged in</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <p>b@gmail.com</p>
                                </td>
                                <td>yesterday</td>
                                <td><span class="status pending">logged out</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="script.js"></script>
</body>

</html>