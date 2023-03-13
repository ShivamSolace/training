<?php
// include('../includes/database.php');
//new lines starts
define("DBUSERNAME", "root");
define("DBPASSWORD", "");
define("DBHOSTNAME", "localhost");
define("DBNAME", "swms");
class User
{
    function userInfo()             // user name
    {
        $con = new mysqli(DBHOSTNAME, DBUSERNAME, DBPASSWORD, DBNAME);
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        if (isset($_SESSION['userMail'])) {
            $existingUserMail = $_SESSION['userMail'];
        } else {
            die("Data not found");
        }

        $que = "SELECT * FROM user WHERE eMail = '$existingUserMail'";
        $fetch = $con->query($que);
        $row = mysqli_fetch_assoc($fetch);

        return $row;
    }
    function get($userId)           //get specific user by userId
    {
        $field = "";
        //code to get single user details from database.
        $con = new mysqli(DBHOSTNAME, DBUSERNAME, DBPASSWORD, DBNAME);
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        $userData = array();
        $userGet = mysqli_query($con, "SELECT * FROM `user` WHERE `userId`='$userId'");
        $userResult = mysqli_fetch_assoc($userGet);

        if ($field === "userId") {
            array_push($userData, $userResult['dp_user_id']);
        }
        return $userData;
        // $sql = "SELECT COUNT FROM users";
        // $mysqliStatus = $mysqli->query($sql);
        // $rows_count_value = mysqli_num_rows($mysqliStatus);

    }

    function list()                 //view list of all users
    {
        //code to get all users 
        $con = new mysqli(DBHOSTNAME, DBUSERNAME, DBPASSWORD, DBNAME);

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        $sql = "SELECT * FROM `user`";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        // echo '$num';

        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $userList[] = $row;
            }
            return $userList;
        } else {
            return 0;
        }
    }

    function add()                  //adding new user
    {
        //code to add new user entry
        $con = new mysqli(DBHOSTNAME, DBUSERNAME, DBPASSWORD, DBNAME);
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
    }
}

$user = new User();
//new line ends


?>