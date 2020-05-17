<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;

function makeRandProgression($start, $step, $stepsNumber)
{
    $prog = [$start];
    for ($i = 0; $i < $stepsNumber; $i++, $start = $start + $step) {
        $prog[] = $start + $step;
    }
    return $prog;
}

function progressionGame()
{
    $questions = [];
    $correctAnswers = [];
    $roundNumber = 3;
    for ($i = 0; $i < $roundNumber; $i++) {
        $start = rand(1, 5);
        $step = rand(1, 10);
        $stepsNumber = 9;
        $prog = makeRandProgression($start, $step, $stepsNumber);
        $prog_missed = $prog;
        $randIndex = rand(0, $stepsNumber);
        $prog_missed[$randIndex] = '..';
        $str_prog = implode(" ", $prog_missed);
        $correctAnswers[$i] = $prog[$randIndex];
        $questions[] = $str_prog;
    }
    $arrGameData = [];
    $arrGameData['questions'] = $questions;
    $arrGameData['correctAnswers'] = $correctAnswers;
    runGame($arrGameData);
}
