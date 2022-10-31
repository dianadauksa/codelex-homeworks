<?php

/*Create a 2D associative array in 2nd dimension with fruits and their weight.
 Create a function that determines if fruit has weight over 10kg.
 Create a secondary array with shipping costs per weight.
 Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
 Using foreach loop print out the values of the fruits and how much it would cost to ship this product.*/

$fruits = [
    ['name'=>'apple', 'weight'=>3],
    ['name'=>'banana', 'weight'=>5],
    ['name'=>'orange', 'weight'=>12],
    ['name'=>'watermelon', 'weight'=>15]
];

function isHeavy($fruit): bool {
     return $fruit['weight'] > 10;
}

$ship_costs = [
    ['weight' => 'under 10', 'cost' => 1],
    ['weight' => 'over 10', 'cost' => 2]
];

foreach($fruits as $fruit) {
    echo $fruit['name']. ': ' . $fruit['weight'] . 'kg, shipping costs: ' . (isHeavy($fruit) ? $ship_costs[1]['cost'] : $ship_costs[0]['cost']) . ' EUR' . PHP_EOL;
}


