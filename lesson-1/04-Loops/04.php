<?php

$randomNums = [1, 4, 6, 7, 3, 2, 8, 10, 14, 15, 9, 21, 20, 30, 50, 81];
foreach ($randomNums as $randomNum) {
    if ($randomNum % 3 == 0) {
        echo "$randomNum \n";
    }
}
echo PHP_EOL;