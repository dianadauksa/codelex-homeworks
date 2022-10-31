<?php

$mom = new stdClass();
    $mom->name = "Rachel";
    $mom->surname = "Green";
    $mom->age = 23;

$child = new stdClass();
    $child->name = "Emma";
    $child->surname = "Green";
    $child->age = 2;

function isAdult($person) {
    if($person->age >= 18) {
        echo "$person->name is an adult.";
    } else {
        echo "$person->name is not yet an adult.";
    }
}

isAdult($mom);
echo PHP_EOL;
isAdult($child);
echo PHP_EOL;
