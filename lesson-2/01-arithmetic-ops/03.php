<?php

$min = 1;
$max = 100;

function sumAndAverage($min, $max) {
    $sum = array_sum(range($min, $max));
    $average = $sum/count(range($min, $max));
    echo "The sum of $min to $max is $sum\n";
    echo "The average is $average\n";
}

sumAndAverage(1, 100);


