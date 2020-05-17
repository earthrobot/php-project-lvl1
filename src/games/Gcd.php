<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\game;

function findgcd($a, $b)
{
    return ($a % $b) ? findgcd($b, $a % $b) : $b;
}

function gcd()
{
    $line = 'Find the greatest common divisor of given numbers.';
    $questions = [];
    $correct_answers = [];
    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $correct_answers[$i] = findgcd($num1, $num2);
        $questions[$i] = $num1 . ' ' . $num2;
    }
    game($line, $questions, $correct_answers);
}
