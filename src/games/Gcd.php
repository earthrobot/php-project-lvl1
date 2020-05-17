<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;

function findgcd($a, $b)
{
    return ($a % $b) ? findgcd($b, $a % $b) : $b;
}

function gcdGame()
{
    $questions = [];
    $correctAnswers = [];
    $roundNumber = 3;
    for ($i = 0; $i < $roundNumber; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $correctAnswers[$i] = findgcd($num1, $num2);
        $questions[$i] = $num1 . ' ' . $num2;
    }
    $arrGameData = [];
    $arrGameData['questions'] = $questions;
    $arrGameData['correctAnswers'] = $correctAnswers;
    runGame($arrGameData);
}
