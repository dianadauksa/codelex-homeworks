<?php
//echo strlen('////////\\\\\\\\') . PHP_EOL; // 3 lines, 16 symbols, 8 each side , then 4, then 0
//echo strlen('////////////////\\\\\\\\\\\\\\\\') . PHP_EOL; // 5 lines, 32 symbols, 16 each side, then 12, then 8, then 4, then 0

class AsciiFigure {
    public static function main(): void {
        $lines = intval(readline("How many lines of the drawing you want? >> "));
        $starIncrease = 8;
        $sideIncrease = 4;
        for ($i = 1; $i <= $lines; $i++) {
            for ($j = 1; $j <= ($lines-$i)*$sideIncrease; $j++){
                echo '/';
            }
            for ($k = 1; $k <= (($starIncrease*$i)-$starIncrease); $k++) {
                echo '*';
            }
            for ($m = 1; $m <= ($lines-$i)*$sideIncrease; $m++) {
                echo '\\';
            }
            echo PHP_EOL;
        }
    }
}

AsciiFigure::main();

