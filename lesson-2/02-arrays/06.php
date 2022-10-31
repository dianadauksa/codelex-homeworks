<?php

$words = ['codelex', 'programming', 'typescript', 'javascript', 'bootcamp', 'acceleration', 'gravity'];
$word = $words[array_rand($words)];
$letters = str_split($word);
$targetWord = str_split(str_repeat('_', strlen($word)));
$misses = [];
$guesses = 0;
$maxGuesses= strlen($word) + 3;

echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . PHP_EOL;
echo "Word: " . implode(' ', $targetWord) . PHP_EOL;
echo "Misses: " . implode($misses) . PHP_EOL;

while($guesses<$maxGuesses) {
    $response = readline('Guess: ');
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . PHP_EOL;
    $letterPositions = array_keys($letters, $response);

    if(count($letterPositions)>0) {
        foreach($letterPositions as $position){
            $targetWord[$position] = $response;
        }
        if($word == implode('', $targetWord)) {
            echo 'Correct! The word is: ' . $word . PHP_EOL;
            break;
        }
    } else {
        $misses[] = $response;
    }
    $guesses++;
    echo "Word: " . implode(' ', $targetWord) . PHP_EOL;
    echo "Misses: " . implode($misses) . PHP_EOL;
}

if ($word != implode('', $targetWord)) {
    echo 'Wrong! The word was: ' . $word . PHP_EOL;
}
