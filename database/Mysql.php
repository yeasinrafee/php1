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

if(!$conn){
    die("Could not connect to the database: " . mysqli_connect_error());
}
echo "Connection established";
?>