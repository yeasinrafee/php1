<?php

// Ways to connect to a MySQL Database
// 1. MySQLi extension
// 2. PDO

// Connecting to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbrafee";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if not connected
if(!$conn){
    die("Could not connect to the database: " . mysqli_connect_error());
}
echo "Connection established <br/>";

// // create a db
// $sql = "CREATE DATABASE dbRafee";
// $result = mysqli_query($conn, $sql);

// if($result){
//     echo "Database created successfully <br/>";
// }else{
//     echo "Database not created successfully: " . mysqli_error($conn);
// }
// echo $result;

// Creating table into DB
$sql = "CREATE TABLE `trip` (`sno` INT(6) NOT NULL AUTO_INCREMENT, `name` VARCHAR(12) NOT NULL, `dest` VARCHAR(6) NOT NULL, PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);
if($result){
    echo "The table is created successfully <br/>";
}else{
    echo "Table not created successfully: " . mysqli_error($conn);
}
?>
