<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use function cli\choose;

function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}

function game()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if the numder is even, otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!\n", $name);
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
            break;
        }
        line($result);
    }
    line("Congratulations, %s!\n", $name);
}
