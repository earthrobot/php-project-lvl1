<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function game($line, $questions, $correct_answers)
{
    line('Welcome to the Brain Game!');
    line($line);
    $name = prompt('May I have your name?');
    line("Hello, %s!\n", $name);
    for ($i = 0; $i < 3; $i++) {
        $question = $questions[$i];
        $correct_answer = $correct_answers[$i];
        line('Question: ' . $question);
        $answer = prompt('Your answer');
        if ($answer == $correct_answer) {
            $result = 'Correct!';
        } else {
            $result = $answer . " is wrong answer ;). Correct answer was " . $correct_answer;
            line($result);
            return;
        }
        line($result);
    }
    line("Congratulations, %s!\n", $name);
}
