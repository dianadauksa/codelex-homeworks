<?php

class Date {
    private int $day;
    private int $month;
    private int $year;
    private const DAYS_IN_MONTH = array(31,28,31,30,31,30,31,31,30,31,30,31);

    function __construct(int $day,int $month,int $year){
        if($year > 0){
            $this->year = $year;
        } else throw new Error('Invalid year, try again!'. PHP_EOL);
        if ($month > 0 && $month <= 12){
            $this->month = $month;
        } else throw new Error('Invalid month, try again!'. PHP_EOL);
        if ($day > 0 && $day <= Date::DAYS_IN_MONTH[$month-1]){ // don't know how to check when 366 day (leap) year though
            $this->day=$day;
        } else throw new Error('Invalid day, try again!' . PHP_EOL);
    }

    public function setDay(int $day): void {
        if ($day > 0 && $day <= Date::DAYS_IN_MONTH[$this->month-1] ) {
            $this->day = $day;
        } else {
            echo 'Invalid day' . PHP_EOL;
        }
    }

    public function getDay(): int {
        return $this->day;
    }


    public function setMonth(int $month): void {
        if($month > 0 && $month <= 12 && $this->day <= $this::DAYS_IN_MONTH[$month-1]) {
            $this->month = $month;
        } else {
            echo 'Invalid month' . PHP_EOL;
        }
    }

    public function getMonth(): int {
        return $this->month;
    }

    public function setYear(int $year) {
        if ($this->year >= 0) {
            $this->year = $year;
        } else {
            echo 'Invalid year' . PHP_EOL;
        }
    }

    public function getYear(): int {
        return $this->year;
    }

    public function displayDate(): string {
        return "{$this->month}/{$this->day}/{$this->year}" . PHP_EOL;
    }

}

$goodDateTest = new Date(11, 12, 1990);
echo $goodDateTest->displayDate(); // 12/11/1990

$dateTest = new Date(31, 4, 1); // In april only 30 days, so throws PHP Fatal error:  Uncaught Error: Invalid day, try again!
echo $dateTest->displayDate(); // does not show the date, throws errors :)

