<?php

$number = 77;
switch ($number) {
    case $number>100:
        echo 'high';
        break;
    case $number>50:
        echo 'medium';
        break;
    case $number<50:
        echo 'low';
        break;
}
echo PHP_EOL;