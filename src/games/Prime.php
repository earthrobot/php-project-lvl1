<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\game;

function prime()
{
    $line = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $questions = [];
    $correct_answers = [];
    for ($i = 0; $i < 3; $i++) {
        $max = 100;
        $num = rand(1, $max);
        $correct_answers[$i] = 'yes';
        if ($num > 0) {
            for ($ii = 2; $ii < $max; $ii++) {
                if ($ii != $num) {
                    if (($num % $ii) == 0) {
                        $correct_answers[$i] = 'no';
                    }
                }
            }
        }
        $questions[$i] = $num;
    }
    game($line, $questions, $correct_answers);
}
