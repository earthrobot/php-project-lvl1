<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;

function even_game($name)
{
    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 20);
        if ($num % 2 == 0) {
            $even = 'yes';
        } else {
            $even = 'no';
        }
        line('Question: ' . $num);
        $answer = prompt('Your answer');
        if ($answer == $even) {
            $result = 'Correct!';
        } else {
            $result = $answer . " is wrong answer ;). Correct answer was " . $even;
            line($result);
            return;
        }
        line($result);
    }
    line("Congratulations, %s!\n", $name);
}