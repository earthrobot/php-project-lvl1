<?php

namespace BrainGames\games\Prime;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const GAME_TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i < $num; $i += 1) {
        if (($num % $i) == 0) {
            return false;
        }
    }
    return true;
}

function runPrimeGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $num = rand(1, 100);
        $question = (string) $num;
        if (isPrime($num)) {
            $correctAnswer = 'yes';
        } else {
            $correctAnswer = 'no';
        }
        $gameData[] = [$question, $correctAnswer];
    }
    runGame($gameData, GAME_TASK);
}
