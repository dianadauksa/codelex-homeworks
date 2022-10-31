<?php
// x(t) = 0,5*at^2+v(i)t+x(i); v(i) = 0; x(i) = 0 => x(t) = 0,5*at^2

$fallTime = 10;
$acceleration = 9.81;
$initialVelocity = 0;

function distance($time) {
    global $acceleration;
    $distance = 0.5*$acceleration*($time**2);
    echo $distance . PHP_EOL;
}

distance($fallTime); //490.5
distance(20); //1962