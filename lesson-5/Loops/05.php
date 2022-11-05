<?php

class Piglet {
    public static function main(): void {
        echo "Welcome to Piglet!\n";
        $willRoll = strtoupper(readline('Want to roll? (Y/N) >> '));
        $points = 0;
        while($willRoll === 'Y') {
            $dice = rand(1, 6);
            echo "You rolled a " . $dice . "!\n";
            $points += $dice;
            if($dice === 1) {
                $points = 0;
                echo "You got $points points. Bye!\n";
                exit;
            }
            $rollAgain = strtoupper(readline('Want to roll again? (Y/N) >> '));
            if ($rollAgain !== 'Y') {
                echo "You got $points points. Bye!\n";
                exit;
            }
        }
    }
}

Piglet::main();