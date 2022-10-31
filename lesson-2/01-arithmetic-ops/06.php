<?php

function cozaLozaWoza($numberOfElements, $elementsPerLine) {
    for ($i = 1; $i <= $numberOfElements; $i++) {
        if ($i % 35 == 0) {
            echo "LozaWoza" . ' ';
        } elseif ($i % 21 == 0) {
            echo "CozaWoza" . ' ';
        } elseif ($i % 15 == 0) {
            echo "CozaLoza" . ' ';
        } elseif ($i % 3 == 0) {
            echo "Coza" . ' ';
        } elseif ($i % 5 == 0) {
            echo "Loza" . ' ';
        } elseif ($i % 7 == 0) {
            echo "Woza" . ' ';
        } else {
            echo $i . ' ';
        }
        if ($i % $elementsPerLine == 0) {
            echo PHP_EOL;
        }
    }
}

cozaLozaWoza(110, 11);