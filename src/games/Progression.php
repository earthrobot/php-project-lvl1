<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\game;

function progression()
{
    $line = 'What number is missing in the progression?';
    $questions = [];
    $correct_answers = [];
    for ($i = 0; $i < 3; $i++) {
        $start = rand(1, 5);
        $step = rand(1, 10);
        $prog = [$start];
        for ($ii = 0; $ii < 9; $ii++, $start = $start + $step) {
            $prog[] = $start + $step;
        }
        $prog_missed = $prog;
        $ind = rand(0, 9);
        $prog_missed[$ind] = '..';
        $str_prog = implode(" ", $prog_missed);
        $correct_answers[$i] = $prog[$ind];
        $questions[] = $str_prog;
    }
    game($line, $questions, $correct_answers);
}
