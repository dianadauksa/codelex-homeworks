<?php

$person_1 = new stdClass();
    $person_1->name = "Rachel";
    $person_1->surname = "Green";
    $person_1->age = 23;
    $person_1->birthday = "01.07.1999";

$person_2 = new stdClass();
    $person_2->name = "Monica";
    $person_2->surname = "Geller";
    $person_2->age = 23;
    $person_2->birthday = "10.05.1999";

$person_3 = new stdClass();
    $person_3->name = "Phoebe";
    $person_3->surname = "Buffay";
    $person_3->age = 24;
    $person_3->birthday = "07.01.1998";


$multiple_persons = [$person_1, $person_2, $person_3];

foreach ($multiple_persons as $person) {
    foreach($person as $key=>$value) {
        echo "$value ";
    }
}
echo PHP_EOL;