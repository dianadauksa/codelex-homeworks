<?php

function BMI ($weightInKg, $heightInMeter) {
    $BMI =($weightInKg*2.205*703)/(($heightInMeter*39.37)**2);
    if ($BMI < 18.5) {
        echo "Your BMI is $BMI and you are considered to be underweight. :(" . PHP_EOL;
    } elseif ($BMI > 25) {
        echo "Your BMI is $BMI and you are considered to be overweight. :(" . PHP_EOL;
    } else {
        echo "Your BMI is $BMI and you have a completely optimal body composition. :)" . PHP_EOL;
    }
}

echo "Hi! Want to know your body mass index (BMI)? Give me your weight (in kg) and height (in meters) to calculate:\n";
$weight = readline('Enter your weight >> ');
$height = readline('Enter your height >> ');
BMI($weight, $height);