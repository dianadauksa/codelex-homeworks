<?php

$i = readline("Input number: ") ;
$n = readline("Input the power: ");
$answer = 1;

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function
for ($j=1; $j<=$n; $j++) {
    $answer *= $i;
}
echo $answer . PHP_EOL;