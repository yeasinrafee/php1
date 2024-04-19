<?php

function overAllMarks($marks){
    $sum = 0;
    foreach($marks as $mark){
        $sum += $mark;
    }
    return $sum;
}

$marks = [56, 45, 78, 87, 56, 88];
$totalMarks = overAllMarks($marks);

echo "Total marks: " . $totalMarks;
?>