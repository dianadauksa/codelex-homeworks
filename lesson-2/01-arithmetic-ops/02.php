<?php

function CheckOddEven (int $number): string
{
    return $number . " is an " . (($number % 2 === 0) ? "even number, bye!\n" : "odd number, bye!\n");
}

echo "Let's check if a number of your choice is an even or odd number.\n";
$number = readline('Enter your number >> ');
echo CheckOddEven($number);


