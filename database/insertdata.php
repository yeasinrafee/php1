<?php

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

$name = "Rafee";
$destination = "Dhaka";
// Insert data into database
$sql = "INSERT INTO `trip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);
if($result){
    echo "Data inserted successfully <br/>";
}else{
    echo "Data did not inserted: " . mysqli_error($conn);
}
?>
