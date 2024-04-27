<?php

// Ways to connect to a MySQL Database
// 1. MySQLi extension
// 2. PDO

// Connecting to the database

$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);
// Die if not connected
if(!$conn){
    die("Could not connect to the database: " . mysqli_connect_error());
}
echo "Connection established";

// create a db
$sql = "CREATE DATABASE dbRafee";
$result = mysqli_query($conn, $sql);

if($result){
    echo "Database created successfully <br/>";
}else{
    echo "Database not created successfully: " . mysqli_error($conn);
}
echo $result;
?>
