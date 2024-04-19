<?php
$name = "Rafee";

echo strlen($name);    // it'll give the length of the string
echo "<br/>";
echo str_word_count($name);    // return the word numbers
echo "<br/>";
echo strrev($name);    // reverse the string
echo "<br/>";
echo strpos($name, "f");   //search the character and return the index number
echo "<br/>";
echo str_replace("ee", "i", $name);     // change the string or character
echo "<br/>";
echo str_repeat($name, 10);     // repeat the string 10 times
echo "<br/>";
echo rtrim("    Hello world   ");    // it'll trim the string from right side
echo "<br/>";
echo ltrim("    Hello world   ");    // it'll trim the string from left side

?>