<?php

namespace BrainGames\games\Prime;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUND_COUNT;

const GAME_TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($num)
{
    $prime = true;
    $max = 100;
    if ($num > 0) {
        for ($i = 2; $i < $max; $i++) {
            if ($i != $num) {
                if (($num % $i) == 0) {
                    $prime = false;
                }
            }
        }
    }
    return $prime;
}

function runPrimeGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUND_COUNT; $i += 1) {
        $max = 100;
        $num = rand(1, $max);
        $gameData[$i][] = $num;
        if (isPrime($num)) {
            $gameData[$i][] = 'yes';
        } else {
            $gameData[$i][] = 'no';
        }
    }
    runGame($gameData, GAME_TASK);
}
