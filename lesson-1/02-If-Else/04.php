<?php

$myNumber = 20;
$rangeStart = 10;
$rangeEnd = 25;
if(($myNumber > $rangeStart) && ($myNumber <=$rangeEnd) && ($myNumber % 2 == 0)) {
    echo "All good. Number $myNumber is between $rangeStart and $rangeEnd, and is an even number.";
} elseif ($myNumber % 2 != 0) {
    echo 'Number not an even number. Choose a different number';
} else {
    echo 'Number not valid. Try again with a different number';
}

echo PHP_EOL;