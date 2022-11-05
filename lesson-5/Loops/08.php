<?php

class NumberSquare {
    public static function main(): void {
        $min= intval(readline("Enter minimum value: >> "));
        $max= intval(readline("Enter maximum value: >> "));
        for($i = $min; $i <= $max; $i++) {
            for ($j = $i; $j <= $max; $j++) {
                echo $j;
            }
            for ($k = 0; $k < $i - $min; $k++) {
                echo($min + $k);
            }
            echo PHP_EOL;
        }
    }
}

NumberSquare::main();