<?php

$board = [
    [' ',' ',' '],
    [' ',' ',' '],
    [' ',' ',' '],
];

$winningCombos = [
    //horizontal
    [[0,0], [0,1], [0,2]],
    [[1,0], [1,1], [1,2]],
    [[2,0], [2,1], [2,2]],
    //vertical
    [[0,0], [1,0], [2,0]],
    [[0,1], [1,1], [2,1]],
    [[0,2], [1,2], [2,2]],
    //diagonal
    [[0,0], [1,1], [2,2]],
    [[0,2], [1,1], [2,0]]
];

function displayBoard(array $board)
{
    echo " {$board[0][0]} | {$board[0][1]} | {$board[0][2]} \n";
    echo "---+---+---\n";
    echo " {$board[1][0]} | {$board[1][1]} | {$board[1][2]} \n";
    echo "---+---+---\n";
    echo " {$board[2][0]} | {$board[2][1]} | {$board[2][2]} \n";
}
echo "Let the games begin!\n";
displayBoard($board);

$playerA = '#';
$playerB = '$';
$currentPlayer = $playerA;
$turns = 0;
$gameStatus = 'on';

//Ongoing game
while ($gameStatus == 'on') {
    $turns++;
    $userChoice = readline("\n '{$currentPlayer}', choose your location (row, column) (include space between both numbers!)>> ");
    [$x, $y] = explode(' ', $userChoice);

    if ($x == null || $y == null) {
        displayBoard($board);
        echo "\nInvalid input. Enter your choice as two numbers, seperated by a space, e.g. >> 0 1\n";
        continue;
    }

    if ($board[$x][$y] == ' ') {
        $board[$x][$y] = $currentPlayer;
    } else {
        displayBoard($board);
        echo "\nCell is already filled. Choose another cell!\n";
        continue;
    }
    echo PHP_EOL;
    displayBoard($board);

    foreach ($winningCombos as $combo) {
        $conditionCounter = 0;
        foreach ($combo as $position) {
            [$x, $y] = $position;
            if ($board[$x][$y] !== $currentPlayer) {
                break;
            }
            $conditionCounter++;
        }
        if ($conditionCounter == count($combo)) {
            echo "\nPlayer {$currentPlayer} wins!\n";
            exit;
        }
    }

    // Game is a tie, exit the game
    if ($turns === 9) {
        echo "\nCongratulations to both players! It's a tie.\n";
        exit;
    }

    //Change player turns
    $currentPlayer = $currentPlayer === $playerA ? $playerB : $playerA;
}
