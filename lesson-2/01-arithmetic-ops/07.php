<?php
// x(t) = 0,5*at^2+v(i)t+x(i); v(i) = 0; x(i) = 0 => x(t) = 0,5*at^2

$fallTime = 10;
$acceleration = 9.81;
$initialVelocity = 0;

function distance(int $time): float
{
    global $acceleration;
    return 0.5*$acceleration*($time**2);
}

echo distance($fallTime) . PHP_EOL; //490.5
echo distance(20) . PHP_EOL; //1962