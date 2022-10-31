<?php

$my_number = 20;
$range_start = 10;
$range_end = 25;
if(($my_number > $range_start) && ($my_number <=$range_end) && ($my_number % 2 == 0)) {
    echo "All good. Number $my_number is between $range_start and $range_end, and is an even number.";
} elseif ($my_number % 2 != 0) {
    echo 'Number not an even number. Choose a different number';
} else {
    echo 'Number not valid. Try again with a different number';
}

echo PHP_EOL;