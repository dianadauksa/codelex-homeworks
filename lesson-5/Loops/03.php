<?php
$word1 = readline('Enter first word: ');
$word2 = readline('Enter second word: ');
echo $word1;
for ($i=0; $i<(30-strlen($word1)-strlen($word2)); $i++) {
    echo '.';
}
echo $word2 . PHP_EOL;;