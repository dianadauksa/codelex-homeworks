<?php

$mom = new stdClass();
    $mom->name = "Rachel";
    $mom->surname = "Green";
    $mom->age = 23;

$child = new stdClass();
    $child->name = "Emma";
    $child->surname = "Green";
    $child->age = 2;

function isAdult($person): string
{
    if($person->age >= 18) {
        return "$person->name is an adult.";
    } else {
        return "$person->name is not yet an adult.";
    }
}

echo isAdult($mom);
echo PHP_EOL;
echo isAdult($child);
echo PHP_EOL;
