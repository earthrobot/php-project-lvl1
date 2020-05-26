<?php

namespace BrainGames\games\Gcd;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const GAME_TASK = 'Find the greatest common divisor of given numbers.';

function findgcd($a, $b)
{
    return ($a % $b) ? findgcd($b, $a % $b) : $b;
}

function runGcdGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $question = "$num1 $num2";
        $correctAnswer = (string) findgcd($num1, $num2);
        $gameData[] = [$question, $correctAnswer];
    }
    runGame($gameData, GAME_TASK);
}
