<?php

namespace BrainGames\Even;

use function BrainGames\Engine\runGame;

function isEven($num)
{
    if ($num % 2 == 0) {
        $even = 'yes';
    } else {
        $even = 'no';
    }
    return $even;
}

function evenGame()
{
    $questions = [];
    $correctAnswers = [];
    $roundNumber = 3;
    for ($i = 0; $i < $roundNumber; $i++) {
        $num = rand(1, 20);
        $questions[$i] = $num;
        $correctAnswers[$i] = isEven($num);
    }
    $arrGameData = [];
    $arrGameData['questions'] = $questions;
    $arrGameData['correctAnswers'] = $correctAnswers;
    runGame($arrGameData);
}
