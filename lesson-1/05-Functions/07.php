<?php

/*Imagine you own a gun store. Only certain guns can be purchased with license types.
Create an object (person) that will be the requester to purchase a gun (object).
Person object has a name, valid licenses (multiple) & cash.
Guns are objects stored within an array. Each gun has license letter, price & name.
Using PHP in-built functions determine if the requester (person) can buy a gun from the store.*/

// First solution
$buyer = new stdClass();
    $buyer->name = 'Gunther';
    $buyer->licenses_valid = ['G', 'U', 'N'];
    $buyer->money_available = 500;

function createGun(string $name, string $license, int $price): stdClass {
    $gun = new stdClass();
    $gun->name = $name;
    $gun->license = $license;
    $gun->price = $price;
    return $gun;
}

$guns = [
    createGun('Kalashnikov', 'G', 100),
    createGun('Revolver', 'U', 300),
    createGun('Rifle', 'N', 900),
    createGun('Shotgun', 'S', 400)
];

foreach ($guns as $gun) {
    if(in_array($gun->license, $buyer->licenses_valid) && ($buyer->money_available>=$gun->price)) {
        echo "You can buy " . $gun->name . " for {$gun->price}EUR\n";
    }
}

echo "---------------------------\n";

// Second solution (interactive) based on lesson 2
$licensesOfBuyer = implode(',', $buyer->licenses_valid);
echo "Welcome, {$buyer->name} ({$buyer->money_available}EUR) [Valid licenses: $licensesOfBuyer]\n";
echo "Guns available at our store =>\n";

foreach($guns as $key=>$gun) {
    echo "[$key] $gun->name ({$gun->price}EUR) [License required: $gun->license]\n";
}
$selection = (int)readline('Choose gun (by number) to buy: ');

$selectedGun = $guns[$selection];

if($selectedGun === null) {
    echo 'Invalid selection';
    exit;
}

if ($buyer->money_available<$selectedGun->price) {
    echo "Insufficient funds :(\n";
    exit;
}

if(! in_array($selectedGun->license, $buyer->licenses_valid)) {
    echo "Invalid license";
    exit;
}

$change = $buyer->money_available -= $selectedGun->price;
echo "Thank you for purchasing {$selectedGun->name}!\n Here's your change=> {$change}EUR\n";