<?php

namespace BrainGames\games\Calc;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUND_COUNT;

const GAME_TASK = 'What is the result of the expression?';

function makeRandCalculation($num1, $num2, $operator)
{
    if ($operator == '+') {
        $result = $num1 + $num2;
    } elseif ($operator == '-') {
        $result = $num1 - $num2;
    } elseif ($operator == '*') {
        $result = $num1 * $num2;
    }
    return $result;
}

function calcGame()
{
    $GameData = [];
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $num1 = rand(1, 30);
        $num2 = rand(1, 30);
        $arrOper = ['+', '-', '*'];
        $randIndex = rand(0, 2);
        $operator = $arrOper[$randIndex];
        $GameData[$i][] = "$num1 $operator $num2";
        $result = makeRandCalculation($num1, $num2, $operator);
        $GameData[$i][] = $result;
    }
    runGame($GameData, GAME_TASK);
}
