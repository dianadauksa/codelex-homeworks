<?php

$number = readline("Enter a positive number to count its digits >> ");

if ($number > 0) {
    $digits = str_split($number);
    $digitCount = count($digits);
    echo "{$number} has {$digitCount} digits" . PHP_EOL;
} else {
    echo "{$number} is not a positive number, try again!". PHP_EOL;
}