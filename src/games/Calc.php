<?php

namespace BrainGames\games\Calc;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const GAME_TASK = 'What is the result of the expression?';

function calculate($num1, $num2, $operator)
{
    switch ($operator) {
        case '+':
            return $num1 + $num2;
            break;
        case '-':
            return $num1 - $num2;
            break;
        case '*':
            return $num1 * $num2;
            break;
    }
}

function runCalcGame()
{
    $gameData = [];
    $operations = ['+', '-', '*'];
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $num1 = rand(1, 30);
        $num2 = rand(1, 30);
        $operator = $operations[array_rand($operations)];
        $question = "$num1 $operator $num2";
        $correctAnswer = (string) calculate($num1, $num2, $operator);
        $gameData[$i] = [$question, $correctAnswer];
    }
    runGame($gameData, GAME_TASK);
}
