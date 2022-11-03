<?php
$text = strtoupper(readline("Enter your message >> "));
$letters = str_split($text);
$key = 0;

foreach ($letters as $letter) {
    switch ($letter) {
        case 'A': case 'B': case 'C': $key = 2; break;
        case 'D': case 'E': case 'F': $key = 3; break;
        case 'G': case 'H': case 'I': $key = 4; break;
        case 'J': case 'K': case 'L': $key = 5; break;
        case 'M': case 'N': case 'O': $key = 6; break;
        case 'P': case 'Q': case 'R': case 'S': $key = 7; break;
        case 'T': case 'U': case 'V': $key = 8; break;
        case 'W': case 'X': case 'Y': case 'Z': $key = 9; break;
        case ' ': echo " "; break;
    }
    echo $key;
}
echo PHP_EOL;

