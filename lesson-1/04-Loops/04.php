<?php

$random_nums = [1, 4, 6, 7, 3, 2, 8, 10, 14, 15, 9, 21, 20, 30, 50, 81];
foreach ($random_nums as $random_num) {
    if ($random_num % 3 == 0) {
        echo "$random_num \n";
    }
}
echo PHP_EOL;