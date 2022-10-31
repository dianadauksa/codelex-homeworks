<?php

$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];
var_dump($person['name'], $person['surname'], $person['age']);
echo PHP_EOL;

var_dump(array_values($person));