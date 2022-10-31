<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";
$response = (int) readline(">> ");

if($response == null) {
    echo 'Invalid input.';
    exit;
}

//todo check if an array contains a value user entered
if (in_array($response, $numbers)) {
    echo "You are lucky, $response is in our secret array! :)\n";
} else {
    echo "Sorry, $response is not in our secret array. :(\n";
}