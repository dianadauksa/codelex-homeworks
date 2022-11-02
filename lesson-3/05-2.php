<?php
$text = strtoupper(readline("Enter your message >> "));
$letters = str_split($text);
$digit = 0;

foreach ($letters as $letter) {
    switch ($letter) {
        case 'A': case 'B': case 'C': $digit = 2; break;
        case 'D': case 'E': case 'F': $digit = 3; break;
        case 'G': case 'H': case 'I': $digit = 4; break;
        case 'J': case 'K': case 'L': $digit = 5; break;
        case 'M': case 'N': case 'O': $digit = 6; break;
        case 'P': case 'Q': case 'R': case 'S': $digit = 7; break;
        case 'T': case 'U': case 'V': $digit = 8; break;
        case 'W': case 'X': case 'Y': case 'Z': $digit = 9; break;
        case ' ': echo " "; break;
    }
    echo $digit;
}
echo PHP_EOL;

