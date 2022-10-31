<?php

$numbers = [];
$numbers2 = [];
for ($i=0; $i<10; $i++) {
    $numbers[] = rand(1, 100);
}
for ($i = 0; $i<count($numbers); $i++) {
    $numbers2[] = $numbers[$i];
}
$numbers[count($numbers)-1] = -7; // or $numbers[9] = -7;

echo "Array 1 : " . implode(" ", $numbers) . PHP_EOL;
echo "Array 2 : " . implode(" ", $numbers2) . PHP_EOL;


