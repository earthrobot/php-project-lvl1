<?php

namespace BrainGames\games\Progression;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUND_COUNT;

const GAME_TASK = 'What number is missing in the progression?';

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
    $GameData = [];
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $start = rand(1, 5);
        $step = rand(1, 10);
        $stepsNumber = 9;
        $prog = makeRandProgression($start, $step, $stepsNumber);
        $prog_missed = $prog;
        $randIndex = rand(0, $stepsNumber);
        $prog_missed[$randIndex] = '..';
        $str_prog = implode(" ", $prog_missed);
        $GameData[$i][] = $str_prog;
        $GameData[$i][] = $prog[$randIndex];
    }
    runGame($GameData, GAME_TASK);
}
