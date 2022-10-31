<?php

$elements = [2, 5, 7, 11.7, 'codelex'];

function makeDouble($number) {
    return $number*2;
}

for ($i=0; $i<count($elements); $i++) {
    if(is_int($elements[$i])) {
        echo makeDouble($elements[$i]) . PHP_EOL;
    }
}
