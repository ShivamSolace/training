<?php

$servername = "localhost";
$username = "root";        
$password = "";
$db = "Solace2";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error){
    die("NOt cOnnected ". $conn->connect_error);
}
  
// $sql = "SELECT * FROM persons";

// $sql = "SELECT PersonID, LastName, FirstName FROM persons";

// $sql = "SELECT LastName, FirstName FROM persons where PersonID =101";

// $sql = "SELECT LastName, FirstName FROM persons where PersonID < 105 and Address = 'mumbai naka'";

// $sql = "SELECT LastName, FirstName FROM persons where PersonID > 105 or Address = 'mumbai naka'";

// $sql = "SELECT LastName, FirstName FROM persons where not PersonID =101";

// $sql = "SELECT * FROM persons order by PersonID";

// $sql = "SELECT * FROM persons order by PersonID desc";

// $sql = "SELECT * FROM persons where LastName is null";

// $sql = "SELECT * FROM persons where LastName is not null";

// $sql = "UPDATE persons SET LastName = 'Alfred WHERE PersonID = 103";

// $sql = "DELETE FROM persons WHERE LastName='Alfred'";

// $sql = "SELECT * FROM persons LIMIT 3";

// $sql = "ALTER TABLE persons ADD income varchar(25)";

// $sql = "UPDATE Persons set income = 25000 where  PersonID = 101";

// $sql = "SELECT MIN(income) AS leastincome FROM persons";

// $sql = "SELECT Max(income) AS highestincome FROM persons";


// $sql = "SELECT count(income) FROM persons where income = 25000";

// $sql = "SELECT avg(income) FROM persons";

// $sql = "SELECT sum(income) as 'total income' FROM persons";

// $sql = "SELECT * FROM persons where Address in 'mumbai naka' ";

// $sql = "SELECT * FROM persons where Address not in 'mumbai naka' ";

// $sql = "SELECT * FROM persons where income between 35000 and 55000";

// $sql = "SELECT COUNT(income), LastName FROM persons GROUP BY Address  ORDER BY PersonID DESC" ;


// $sql = 'CREATE DATABASE solace';
// $sql = 'DROP DATABASE solace';

$a = $conn->query($sql);

if($a){
    echo "Query fired successfully!!";
}
else{
    echo "Query failed!!";
}
?>