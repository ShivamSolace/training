<?php
session_start();
include('classes.php');
// $result=$user->list();
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
    <title>SWMS</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs'></i>
            User List
            <!-- <span class="text">
            <?php
            echo 'Hello user ' . $fetch['userId'];
            ?>
            </span> -->
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="dashboard.php">
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
                <a href="#">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">XXXXXX</span>
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
                        List of All users
                    </h1>
                </div>
            </div>

            <ul class="box-info">
                <li>
                    <!-- <i class='bx bxs-smile'></i> -->
                    <span class="text">
                        <h3>
                            <!-- <table>
                                <tr>
                                    <th>User Id</th>
                                    <th>User Name</th>
                                    <th>User Mail</th>
                                </tr>
                                <?php
                                $result = $user->list();

                                foreach ($result as $key => $value)
                                // {
                                ?>
                                <tr>
                                    <td>
                                        <?php $value['userId'] ?>
                                    </td>
                                    <td>
                                        <?php $value['firstName'] . " " . $value['lastName'] ?>
                                    </td>
                                    <td>
                                        <?php $value['eMail'] ?>
                                    </td>
                                </tr>
                            </table> -->

                            <?php
                            $result = $user->list(); foreach ($result as $key => $value) {

                                echo $value['userId'] . "  " . $value['firstName'] . " " . $value['lastName'];
                                echo '<br>';
                            }
                            ?>
                        </h3>
                    </span>
                </li>

                <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="script.js"></script>
</body>

</html>