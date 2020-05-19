<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUND_COUNT = 3;

function runGame($gameData, $gameTask)
{
    line('Welcome to the Brain Game!');
    line($gameTask);
    $name = prompt('May I have your name?');
    line("Hello, %s!\n", $name);
    foreach ($gameData as [$question, $correctAnswer]) {
        line("Question: $question");
        $answer = prompt('Your answer');
        if ($answer == $correctAnswer) {
            $result = 'Correct!';
        } else {
            $result = "$answer is wrong answer ;). Correct answer was $correctAnswer";
            line($result);
            return;
        }
        line($result);
    }
    line("Congratulations, %s!\n", $name);
}
