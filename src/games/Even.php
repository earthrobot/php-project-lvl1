<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\game;

function even()
{
    $line = 'Answer "yes" if the number is even, otherwise answer "no".';
    $questions = [];
    $correct_answers = [];
    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 20);
        $questions[$i] = $num;
        if ($num % 2 == 0) {
            $correct_answers[$i] = 'yes';
        } else {
            $correct_answers[$i] = 'no';
        }
    }
    game($line, $questions, $correct_answers);
}
