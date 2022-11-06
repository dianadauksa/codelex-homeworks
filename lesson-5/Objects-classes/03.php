<?php

class FuelGauge {
    public int $currentAmountOfFuel;
    private int $maxAmountOfFuel = 70;
    function __construct( int $currentAmountOfFuel)
    {
        $this-> currentAmountOfFuel = $currentAmountOfFuel;
    }

    public function getCurrentAmountOfFuel(): string {
        return $this -> currentAmountOfFuel . ' liters' . PHP_EOL;
    }

    public function incrementFuelTank($liters) {
        if ($this->currentAmountOfFuel < $this -> maxAmountOfFuel) {
            $this->currentAmountOfFuel += $liters;
        }
    }

    public function decrementFuelTank() {
        if($this -> currentAmountOfFuel > 0) {
            $this->currentAmountOfFuel--;
        } else {
            return "No more fuel in tank! :(\n";
        }
    }
}

class Odometer {
    public int $currentMileage;
    private int $initialMileage;
    private int $maxMileage = 999999;
    public int $kilometersPerLiter = 10;
    function __construct(int $currentMileage, int $initialMileage)
    {
        $this-> currentMileage = $currentMileage;
        $this-> initialMileage = $initialMileage;
    }

    public function getCurrentMileage(): string {
        return $this -> currentMileage . ' kilometers' . PHP_EOL;
    }

    public function incrementMileage() {
        if ($this->currentMileage < $this->maxMileage) {
            $this->currentMileage++;
        }
        if ($this -> currentMileage === $this->maxMileage) {
            $this->currentMileage = 0;
        }
    }

    public function burnFuel($FuelGauge) {
        if($this -> currentMileage - $this->initialMileage % $this->kilometersPerLiter == 0) {
            $FuelGauge->decrementFuelTank();
        }
    }
}
/* Simulate filling the car up with fuel, and then run a loop that increments the odometer until the car runs out of fuel.
During each loop iteration, print the car’s current mileage and amount of fuel.*/

$fuelGauge = new FuelGauge(50);
$odometer = new Odometer(10, 10);

$fuelGauge->incrementFuelTank(10);
echo $fuelGauge->getCurrentAmountOfFuel(); // 60 liters

/* not working yet
while ($fuelGauge->getCurrentAmountOfFuel() > 0) {
    $odometer->incrementMileage();
    $odometer->burnFuel($fuelGauge);
    echo $odometer->getCurrentMileage();
    echo $fuelGauge->getCurrentAmountOfFuel();
}
*/
