<?php

namespace BrainGames\games\Prime;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const GAME_TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($num, $max)
{
    if (empty($num)) {
        return null;
    }
    if ($num > 0) {
        for ($i = 2; $i < $max; $i++) {
            if ($i != $num) {
                if (($num % $i) == 0) {
                    return false;
                }
            }
        }
    }
    return true;
}

function runPrimeGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $max = 100;
        $num = rand(1, $max);
        $question = $num;
        if (isPrime($num, $max)) {
            $correctAnswer = 'yes';
        } else {
            $correctAnswer = 'no';
        }
        $gameData[$i] = [$question, $correctAnswer];
    }
    runGame($gameData, GAME_TASK);
}
