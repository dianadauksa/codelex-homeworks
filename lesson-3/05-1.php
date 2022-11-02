<?php

$text = strtoupper(readline("Enter your message >> "));
$letters = str_split($text);

$keypad = '';

forEach ($letters as $letter) {
    switch ($letter) {
        case 'A':
            $keypad .= '2 ';
            break;
        case 'B':
            $keypad .= '22 ';
            break;
        case 'C':
            $keypad .= '222 ';
            break;
        case 'D':
            $keypad .= '3 ';
            break;
        case 'E':
            $keypad .= '33 ';
            break;
        case 'F':
            $keypad .= '333 ';
            break;
        case 'G':
            $keypad .= '4 ';
            break;
        case 'H':
            $keypad .= '44 ';
            break;
        case 'I':
            $keypad .= '444 ';
            break;
        case 'J':
            $keypad .= '5 ';
            break;
        case 'K':
            $keypad .= '55 ';
            break;
        case 'L':
            $keypad .= '555 ';
            break;
        case 'M':
            $keypad .= '6 ';
            break;
        case 'N':
            $keypad .= '66 ';
            break;
        case 'O':
            $keypad .= '666 ';
            break;
        case 'P':
            $keypad .= '7 ';
            break;
        case 'Q':
            $keypad .= '77 ';
            break;
        case 'R':
            $keypad .= '777 ';
            break;
        case 'S':
            $keypad .= '7777 ';
            break;
        case 'T':
            $keypad .= '8 ';
            break;
        case 'U':
            $keypad .= '88 ';
            break;
        case 'V':
            $keypad .= '888 ';
            break;
        case 'W':
            $keypad .= '9 ';
            break;
        case 'X':
            $keypad .= '99 ';
            break;
        case 'Y':
            $keypad .= '999 ';
            break;
        case 'Z':
            $keypad .= '9999 ';
            break;
        case ' ':
            $keypad .= '0 ';
            break;
        default:
            echo "Invalid input" . PHP_EOL;
            exit;
    }
}

echo $keypad . PHP_EOL;