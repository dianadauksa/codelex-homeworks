<?php

$N = 10;

function factorial(int $rangeUpper): int {
    $factorial = 1;
    for ($i = 1; $i <= $rangeUpper; $i++){
        $factorial = $factorial * $i;
    }
    return $factorial;
}

echo factorial($N) .PHP_EOL; //3628800