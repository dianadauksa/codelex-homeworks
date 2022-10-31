<?php

$friend_1 = new stdClass();
    $friend_1->name = "Chandler";
    $friend_1->surname = "Bing";
    $friend_1->age = 26;

$friend_2 = new stdClass();
    $friend_2->name = "Joey";
    $friend_2->surname = "Tribbiani";
    $friend_2->age = 10;

$friend_3 = new stdClass();
    $friend_3->name = "Ross";
    $friend_3->surname = "Geller";
    $friend_3->age = 26;

$friends = [$friend_1, $friend_2, $friend_3];

function isAdult($persons) {
    foreach($persons as $person) {
        if($person->age >= 18) {
            echo "$person->name is an adult.\n";
        } else {
            echo "$person->name is not yet an adult.\n";
        }
    }
}

isAdult($friends);
