<?php

namespace BrainGames\games\Gcd;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUND_COUNT;

const GAME_TASK = 'Find the greatest common divisor of given numbers.';

function findgcd($a, $b)
{
    return ($a % $b) ? findgcd($b, $a % $b) : $b;
}

function runGcdGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUND_COUNT; $i += 1) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $gameData[$i][] = "$num1 $num2";
        $gameData[$i][] = findgcd($num1, $num2);
    }
    runGame($gameData, GAME_TASK);
}
