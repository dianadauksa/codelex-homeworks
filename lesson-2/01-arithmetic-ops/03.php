<?php

$min = 1;
$max = 100;

function sumAndAverage($min, $max): string
{
    $sum = array_sum(range($min, $max));
    $average = $sum/count(range($min, $max));
    return "The sum of $min to $max is $sum\n" . "The average is $average\n";
}

echo sumAndAverage(1, 100);


