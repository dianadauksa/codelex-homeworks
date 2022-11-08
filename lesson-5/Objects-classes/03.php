<?php

class FuelGauge {
    private int $currentAmountOfFuel;
    private int $maxAmountOfFuel = 70;
    function __construct( int $currentAmountOfFuel)
    {
        $this-> currentAmountOfFuel = $currentAmountOfFuel;
    }

    public function getCurrentAmountOfFuel(): string {
        return $this -> currentAmountOfFuel . ' liters' . PHP_EOL;
    }

    public function incrementFuelTank(int $liters = 1): void {
        if ($this->currentAmountOfFuel + $liters > $this->maxAmountOfFuel) {
            $this->currentAmountOfFuel = $this->maxAmountOfFuel;
        } else {
            $this->currentAmountOfFuel += $liters;
        }
    }

    public function decrementFuelTank() {
        $minAmountOfFuel = 0;
        if ($this->currentAmountOfFuel <= $minAmountOfFuel) {
            $this->currentAmountOfFuel = $minAmountOfFuel;
        } else {
            $this->currentAmountOfFuel--;
        }
    }
}

class Odometer {
    private int $currentMileage;
    private int $initialMileage;
    private int $maxMileage = 999999;
    private int $kilometersPerLiter = 10;
    function __construct(int $currentMileage = 0)
    {
        $this-> currentMileage = $currentMileage;
        $this->initialMileage = $currentMileage;
    }

    public function getCurrentMileage(): string {
        return $this -> currentMileage . ' kilometers' . PHP_EOL;
    }

    public function incrementMileage(int $amount = 1): void {
        if ($amount < 0) return;
        if ($this -> currentMileage + $amount >= $this->maxMileage) {
            $this->currentMileage = 0;
        } else {
            $this->currentMileage += $amount;
        }
    }

    public function burnFuel(object $FuelGauge): void {
        if(($this -> currentMileage - $this->initialMileage) % $this->kilometersPerLiter == 0) {
            $FuelGauge->decrementFuelTank();
        }
    }
}

$fuelGauge = new FuelGauge(50);
$odometer = new Odometer(10, 10);

$fuelGauge->incrementFuelTank(30);
echo $fuelGauge->getCurrentAmountOfFuel(); // 70 liters, even though filled 50 + 30 liters

while ($fuelGauge->getCurrentAmountOfFuel() > 0) {
    $odometer->incrementMileage();
    $odometer->burnFuel($fuelGauge);
    echo $odometer->getCurrentMileage();
    echo $fuelGauge->getCurrentAmountOfFuel();
}

