<?php
class RollTwiceDice {
    public static function main(): void {
        $desiredSum = intval(readline("Enter desired sum: >> "));
        do {
            $dice1 = rand(1, 6);
            $dice2 = rand(1, 6);
            $diceSum = $dice1 +$dice2;
            echo "$dice1 and $dice2 = $diceSum \n";
        } while ($desiredSum !== $diceSum);
    }
}

RollTwiceDice::main();