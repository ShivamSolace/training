<?php




// Create connection
global $conn;
$conn = new mysqli(DBHOSTNAME, DBUSERNAME, DBPASSWORD,DBNAME);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo " ";




?>