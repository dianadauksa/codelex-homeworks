<?php

$plateNumber = 'DD1001';
switch ($plateNumber) {
    case 'DD1000':
        echo 'Not your car.';
        break;
    case 'DD1001':
        echo 'Your car!';
        break;
    default:
        echo 'Not your car!';
}

echo PHP_EOL;