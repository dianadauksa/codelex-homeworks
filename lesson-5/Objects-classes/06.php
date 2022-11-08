<?php

$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;

function calculate_energy_drinkers(float $purchased_energy_drinks): int
{
    global $surveyed;
    return round($purchased_energy_drinks * $surveyed);
    //throw new LogicException(";(");
}

function calculate_prefer_citrus(float $purchased_energy_drinks, float $prefer_citrus_drinks): int
{
    global $surveyed;
    return round($purchased_energy_drinks * $prefer_citrus_drinks * $surveyed);
    //throw new LogicException(";(");
}

echo "Total number of people surveyed " . $surveyed . PHP_EOL; // Total number of people surveyed 12467
echo "Approximately " . calculate_energy_drinkers($purchased_energy_drinks) . " bought at least one energy drink" . PHP_EOL; // Approximately 1745 bought at least one energy drink
echo calculate_prefer_citrus($purchased_energy_drinks, $prefer_citrus_drinks) . " of those " . "prefer citrus flavored energy drinks." . PHP_EOL; // 1117 of those prefer citrus flavored energy drinks.

/*
fixme
*/