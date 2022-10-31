<?php
/* Version 1
function checkNumber(int $num1, int $num2): string {
    if ($num1 === 15 || $num2 === 15 || ($num1+$num2) === 15 || (abs($num1-$num2) === 15)) {
        return 'true';
    } return 'false';
}

echo checkNumber(15, 1) . PHP_EOL; //true
echo checkNumber(10, 5) . PHP_EOL; //true
echo checkNumber(5, 20) . PHP_EOL; //true
echo checkNumber(1, 15) . PHP_EOL; //true
echo checkNumber(3, 5) . PHP_EOL; //false
*/

// Interactive version
$numbers = [];
function checkNumbers($numbers): string {
    return ($numbers[0] == 15 || $numbers[1] == 15 || array_sum($numbers) == 15 || abs($numbers[0] - $numbers[1]) == 15) ?
        "true\n" : "false\n";
}
$numbers[] = readline('Enter first number to compare >> ');
$numbers[] = readline('Enter second number to compare >> ');
echo checkNumbers($numbers);
