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

function primeGame()
{
    $GameData = [];
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $max = 100;
        $num = rand(1, $max);
        $GameData[$i][] = $num;
        if (isPrime($num)) {
            $GameData[$i][] = 'yes';
        } else {
            $GameData[$i][] = 'no';
        }
    }
    runGame($GameData, GAME_TASK);
}
