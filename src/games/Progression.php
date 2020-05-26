<?php

namespace BrainGames\games\Progression;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const GAME_TASK = 'What number is missing in the progression?';

function makeProgression($start, $step, $progressionLength)
{
    $progression = [];
    for ($i = 0; $i < $progressionLength; $i += 1) {
        $progression[] = $start + $step * $i;
    }
    return $progression;
}

function runProgressionGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $start = rand(1, 5);
        $step = rand(1, 10);
        $progressionLength = 10;
        $progression = makeProgression($start, $step, $progressionLength);
        $missedNumIndex = rand(0, $progressionLength - 1);
        $replacement = array($missedNumIndex => '..');
        $progressionTask = array_replace($progression, [$missedNumIndex => '..']);
        $question = implode(" ", $progressionTask);
        $correctAnswer = (string) $progression[$missedNumIndex];
        $gameData[$i] = [$question, $correctAnswer];
    }
    runGame($gameData, GAME_TASK);
}
