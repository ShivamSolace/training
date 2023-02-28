<!-- -----------------------SQL-------------------- -->
<?php

    $servername = "localhost";
    $username = "root";         //bydefault root
    $password = "";
    $db = "Solace2";

    
    // $conn = mysqli_connect($servername, $username, $password);   //-Procedural
    $conn = new mysqli($servername, $username, $password, $db);
    // if (!$conn) {                                                //-Procedural
    //     die("Connection failed: " . mysqli_connect_error());     //-Procedural
    // }                                                            //-Procedural
    // echo "Connection was successful";                            //-Procedural
    if($conn->connect_error){
        die("NOt cOnnected ". $conn->connect_error);
    }
    // $sql = "create database solace2";       //to create DB-OOP
    // mysqli_query($conn, $sql);              //to create DB-Procedural
    // $sql ="use database Solace2";               //to use db



    // $sql = "CREATE TABLE trail (             //2nd table created
    //     P_ID int,
    //     P_LastName varchar(25),
    //     P_FirstName varchar(25)
    //     )";


    // $sql = "drop table trail";               //2nd table dropped
    
    // $sql = "CREATE TABLE Persons (           //to create table
    //     PersonID int,
    //     LastName varchar(255),
    //     FirstName varchar(255),
    //     Address varchar(255),
    //     City varchar(255)
    // )";


    // $sql = "INSERT INTO Persons                                      //to insert values
    // (PersonID, LastName, FirstName, City)        
    // VALUES 
    // (102, 'Yadav', 'Shivaay', 'bhandu nagari', 'nashik')";

    // $sql = "INSERT INTO Persons (PersonID, LastName, FirstName, City) VALUES (103, 'ambe', 'abbda', 'latur')";
    // $sql = "INSERT INTO Persons (PersonID, LastName, FirstName, City) VALUES (104, 'bambe', 'kaabda', 'satur')";
    // $sql = "INSERT INTO Persons (PersonID, LastName, FirstName, City) VALUES (106, 'khambe', 'tadoda', 'datur')";
    // $sql = "INSERT INTO Persons (PersonID, LastName, FirstName, City) VALUES (105, 'lambe', 'hododa',  'dabur')";

    // $sql = "UPDATE Persons set address = 'mumbai naka' where  PersonID = 104 ";                  // update
    // $sql = "UPDATE Persons set address = 'mumbai naka' where  PersonID BETWEEN 105 AND 106 ";    // update multiple
    // $sql = "DELETE FROM Persons WHERE PersonID = 102";               // delete row


    // $sql = "Select * from Persons WHERE city like 'nashik'";               //select row
    $sql = "DESC persons";              //shows table details

    $a = $conn->query($sql);

    // if($a){
    //     echo "table created";S
    // }
    // else{
    //     echo "table not created";
    // }
    if($a){
        echo "Query fired successfully!!";
    }
    else{
        echo "Query failed!!";
    }
?>

<!-- inbuilt methods for Mysqli O.O

    $a = $conn->(SQL query);
    $a->fetch_assoc();
    $a->fetch_array();
    $a->fetch_row();
    $a->fetch_all();
    $a->fetch_field();
    $conn->query(SQL query);
    $conn->affected_rows();          //  to check changes
    $conn->connect_error();
    $conn->connect_errno();
    $conn->error();
    $conn->error_list();
-->

<!-- inbuilt methods for Mysqli procedural

    mysqli_fetch_assoc();
    mysqli_fetch_array();
    mysqli_fetch_row();
    mysqli_fetch_all();
    mysqli_fetch_field();
    mysqli_affected_rows();     //  to check changes
    mysqli_connect_error();
    mysqli_connect_errno();
    mysqli_error();
    mysqli_error_list();
-->

<!--  -->