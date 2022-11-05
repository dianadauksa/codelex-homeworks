<?php
class FizzBuzz {
    public static function main(): void {
        $numberOfElements = intval(readline('Enter the max value with which to play FizzBuzz: >> '));
        $elementsPerLine = 20;
        for ($i = 1; $i <= $numberOfElements; $i++) {
            if ($i % 15 == 0) {
                echo "FizzBuzz" . ' ';
            } elseif ($i % 5 == 0) {
                echo "Buzz" . ' ';
            } elseif ($i % 3 == 0) {
                echo "Fizz" . ' ';
            } else {
                echo $i . ' ';
            }
            if ($i % $elementsPerLine == 0) {
                echo PHP_EOL;
            }
        }
    }
}

FizzBuzz::main();
echo PHP_EOL;