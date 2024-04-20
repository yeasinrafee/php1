<?php
$a = 79;
$b = 99;

function printNumber(){
    global $a, $b;
    echo "a: ". $a . " b: ". $b;
}
printNumber();

echo "<br>";

echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);
?>