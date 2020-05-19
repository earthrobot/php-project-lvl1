<?php

namespace BrainGames\games\Even;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUND_COUNT;

const GAME_TASK = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven($num)
{
    if ($num % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

function runEvenGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUND_COUNT; $i += 1) {
        $num = rand(1, 20);
        $gameData[$i][] = $num;
        $gameData[$i][] = isEven($num) ? 'yes' : 'no';
    }
    runGame($gameData, GAME_TASK);
}
