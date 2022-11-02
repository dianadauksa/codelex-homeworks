<?php

$dayNumber = readline("Enter a number from 0 to 6 to see respective day of the week (Sun-Sat) >> ");

switch ($dayNumber) {
    case 0:
        echo "Sunday" . PHP_EOL;
        break;
    case 1:
        echo "Monday" . PHP_EOL;
        break;
    case 2:
        echo "Tuesday" . PHP_EOL;
        break;
    case 3:
        echo "Wednesday" . PHP_EOL;
        break;
    case 4:
        echo "Thursday" . PHP_EOL;
        break;
    case 5:
        echo "Friday" . PHP_EOL;
        break;
    case 6:
        echo "Saturday" . PHP_EOL;
        break;
    default:
        echo "Not a valid day" . PHP_EOL;
        break;
}