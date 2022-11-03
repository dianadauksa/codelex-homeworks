<?php

$board = [
    [' ',' ',' '],
    [' ',' ',' '],
    [' ',' ',' '],
];

function displayBoard($board)
{
    echo " {$board[0][0]} | {$board[0][1]} | {$board[0][2]} \n";
    echo "---+---+---\n";
    echo " {$board[1][0]} | {$board[1][1]} | {$board[1][2]} \n";
    echo "---+---+---\n";
    echo " {$board[2][0]} | {$board[2][1]} | {$board[2][2]} \n";
}
echo "Let the games begin!\n";
displayBoard($board);

$totalTurns = 0;
$player = 'X';

//Ongoing game
while (true) {
    $userChoice = readline("\n '{$player}', choose your location (row, column) (include space between both numbers!)>> ");
    $userLocations = explode(' ', $userChoice);

    if (count($userLocations) !== 2) {
        displayBoard($board);
        echo "\nInvalid input. Enter your choice as two numbers, seperated by a space, e.g. >> 0 1\n";
        continue;
    }

    if ($board[$userLocations[0]][$userLocations[1]] == ' ') {
        $board[$userLocations[0]][$userLocations[1]] = $player;
    } else {
        displayBoard($board);
        echo "\nCell is already filled. Choose another cell!\n";
        continue;
    }
    echo PHP_EOL;
    displayBoard($board);

    // Winning cases, exit the game
    if ($board[0][0] !== ' ' && $board[0][0] == $board[0][1] && $board[0][1] == $board[0][2]) {
        echo "\n Player {$board[0][0]} wins!\n";
        exit;
    }
    if ($board[1][0] !== ' ' && $board[1][0] == $board[1][1] && $board[1][1] == $board[1][2]) {
        echo "\nPlayer {$board[1][0]} wins!\n";
        exit;
    }
    if ($board[2][0] !== ' ' && $board[2][0] == $board[2][1] && $board[2][1] == $board[2][2]) {
        echo "\nPlayer {$board[2][0]} wins!\n";
        exit;
    }
    if ($board[0][0] !== ' ' && $board[0][0] == $board[1][0] && $board[1][0] == $board[2][0]) {
        echo "\nPlayer {$board[0][0]} wins!\n";
        exit;
    }
    if ($board[0][1] !== ' ' && $board[0][1] == $board[1][1] && $board[0][1] == $board[2][1]) {
        echo "\nPlayer {$board[0][1]} wins!\n";
        exit;
    }
    if ($board[0][2] !== ' ' && $board[0][2] == $board[1][2] && $board[0][2] == $board[2][2]) {
        echo "\nPlayer {$board[0][2]} wins!\n";
        exit;
    }
    if ($board[0][0] !== ' ' && $board[0][0] == $board[1][1] && $board[1][1] == $board[2][2]) {
        echo "\nPlayer {$board[0][0]} wins!\n";
        exit;
    }
    if ($board[0][2] !== ' ' && $board[0][2] == $board[1][1] && $board[1][1] == $board[2][0]) {
        echo "\nPlayer {$board[0][2]} wins!\n";
        exit;
    }

    // Game is a tie, exit the game
    $isATie = false;
    $checkedRows = 0;
    forEach ($board as $row) {
        if (!in_array(' ', $row)) {
            $checkedRows++;
        }
        if ($checkedRows == 3) {
            echo "Congratulations to both players! The game is a tie!\n";
            $isATie = true;
            exit;
        }
    }
    if ($isATie) {
        exit;
    }

    //Change player turns
    $player = $player === "O" ? "X" : "O";
}
