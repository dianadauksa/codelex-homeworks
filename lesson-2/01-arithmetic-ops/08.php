<?php

class FooCorpSalaryPayout {
    public int $employeeCount;
    public float $basePay;
    public int $hoursWorked;
    public float $minWage = 8.0;
    public int $maxHoursAllowed = 60;
    function __construct($employeeCount) {
       $this->employeeCount = $employeeCount;
    }
    public function main() {
        for ($i = 1; $i<=$this->employeeCount; $i++) {
            echo "For Employee Number: " . $i. PHP_EOL;
            $this->basePay = readline("Enter Base Pay: ");
            $this->hoursWorked = readline("Enter Hours Worked: ");
            $this->salaryCalculation();
        }
    }
    function salaryCalculation() {
        if (($this->basePay < $this->minWage) || ($this->hoursWorked > $this->maxHoursAllowed)) {
            echo "Error!\n";
        } elseif ($this->hoursWorked > 40) {
            $salary = round($this->basePay*40 + 1.5*$this->basePay*($this->hoursWorked-40), 2);
            echo "Your total salary is $" . $salary . PHP_EOL;
        } else {
            $salary = $this->basePay*$this->hoursWorked;
            echo "Your total salary is $" . $salary . PHP_EOL;
        }
    }
}

$salaryPayout = new FooCorpSalaryPayout(3);
$salaryPayout->main();


