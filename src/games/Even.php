<?php

namespace BrainGames\games\Even;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const GAME_TASK = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven($num)
{
    return $num % 2 === 0;
}

function runEvenGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $num = rand(1, 20);
        $question = $num;
        $correctAnswer = isEven($num) ? 'yes' : 'no';
        $gameData[$i] = [$question, $correctAnswer];
    }
    runGame($gameData, GAME_TASK);
}
