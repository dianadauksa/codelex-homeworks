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
    private int $currentMileage;
    private int $initialMileage;
    private int $maxMileage = 999999;
    private int $kilometersPerLiter = 10;
    function __construct(int $currentMileage = 0, int $initialMileage = 0)
    {
        $this-> currentMileage = $currentMileage;
        $this-> initialMileage = $initialMileage;
    }

    public function getCurrentMileage(): string {
        return $this -> currentMileage . ' kilometers' . PHP_EOL;
    }

    public function incrementMileage(): void {
        if ($this->currentMileage < $this->maxMileage) {
            $this->currentMileage++;
        }
        if ($this -> currentMileage === $this->maxMileage) {
            $this->currentMileage = 0;
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

$fuelGauge->incrementFuelTank(10);
echo $fuelGauge->getCurrentAmountOfFuel(); // 60 liters

while ($fuelGauge->getCurrentAmountOfFuel() > 0) {
    $odometer->incrementMileage();
    $odometer->burnFuel($fuelGauge);
    echo $odometer->getCurrentMileage();
    echo $fuelGauge->getCurrentAmountOfFuel();
}

