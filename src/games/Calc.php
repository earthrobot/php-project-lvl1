<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;

function makeRandCalculation($num1, $num2)
{
    $res1 = array('+', $num1 + $num2);
    $res2 = array('-', $num1 - $num2);
    $res3 = array('*', $num1 * $num2);
    $operArr = array($res1, $res2, $res3);
    $randIndex = rand(0, 2);
    $oper = $operArr[$randIndex];
    return $oper;
}

function calcGame()
{
    $questions = [];
    $correctAnswers = [];
    $roundNumber = 3;
    for ($i = 0; $i < $roundNumber; $i++) {
        $num1 = rand(1, 30);
        $num2 = rand(1, 30);
        $oper = makeRandCalculation($num1, $num2);
        $correctAnswers[$i] = $oper[1];
        $questions[$i] = $num1 . ' ' . $oper[0] . ' ' . $num2;
    }
    $arrGameData = [];
    $arrGameData['questions'] = $questions;
    $arrGameData['correctAnswers'] = $correctAnswers;
    runGame($arrGameData);
}
