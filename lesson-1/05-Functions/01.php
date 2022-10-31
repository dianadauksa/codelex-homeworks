<?php

function addCodelex($text): string {
    return $text . ' ' . 'codelex';
}
echo addCodelex('Great day at');
echo PHP_EOL;
