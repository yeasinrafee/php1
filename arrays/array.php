<?php

$arr = array("Hello", "World", "How", "Are", "You");

// Associative array
$favCol = array(
    "Rafee" => "Black",
    "Yeasin" => "White",
    "Arafat" => "Red"
);

foreach($favCol as $key => $val){
    echo "Favorite color of $key is $val<br/>";
}

echo $favCol["Rafee"];
echo "<br/>";
echo $favCol["Yeasin"];
?>