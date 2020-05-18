<?php

namespace BrainGames\games\Even;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUND_COUNT;

const GAME_TASK = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven($num)
{
    if ($num % 2 == 0) {
        $even = true;
    } else {
        $even = false;
    }
    return $even;
}

function evenGame()
{
    $GameData = [];
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $num = rand(1, 20);
        $GameData[$i][] = $num;
        if (isEven($num)) {
            $GameData[$i][] = 'yes';
        } else {
            $GameData[$i][] = 'no';
        }
    }
    runGame($GameData, GAME_TASK);
}
