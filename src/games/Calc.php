<?php

namespace BrainGames\games\Calc;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUND_COUNT;

const GAME_TASK = 'What is the result of the expression?';

function calculate($num1, $num2, $operator)
{
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
    }
}

function runCalcGame()
{
    $gameData = [];
    $operations = ['+', '-', '*'];
    for ($i = 0; $i < ROUND_COUNT; $i += 1) {
        $num1 = rand(1, 30);
        $num2 = rand(1, 30);
        $operator = $operations[array_rand($operations)];
        $result = calculate($num1, $num2, $operator);
        $gameData[$i] = ["$num1 $operator $num2", $result];
    }
    runGame($gameData, GAME_TASK);
}
