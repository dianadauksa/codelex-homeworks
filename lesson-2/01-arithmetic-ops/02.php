<?php

function CheckOddEven (int $number) {
    echo $number . " is an " . (($number % 2 === 0) ? "even number, " : "odd number, ");
    echo "bye!\n";
}

echo "Let's check if a number of your choice is an even or odd number.\n";
$number = readline('Enter your number >> ');
CheckOddEven($number);


