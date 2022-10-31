<?php

echo "I'm going to think of a number between 1 and 100 (inclusive). Do you think you can guess it?\n";
$num = rand(1, 100);
echo "Make your guess:\n";
$guess = intval(readline(">> "));
if ($guess > $num) {
    echo "Sorry, you are too high. I was thinking of $num.\n";
} elseif ($guess < $num) {
    echo "Sorry, you are too low.  I was thinking of $num.\n";
} elseif ($guess == $num) {
    echo "You guessed it!  What are the odds?!?\n";
}

