<?php

$multiDimArray = array(
    array(2, 4, 5, 6),
    array(5, 6, 3, 7),
    array(9, 5, 3, 1)
);

for($i = 0; $i < count($multiDimArray); $i++){
    for($j = 0; $j < count($multiDimArray[$i]); $j++){
        echo $multiDimArray[$i][$j];
        echo " ";
    }
    echo "<br/>";
}

?>