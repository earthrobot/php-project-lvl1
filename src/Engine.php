<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGame($gameData, $gameTask)
{
    line('Welcome to the Brain Game!');
    line($gameTask);
    $name = prompt('May I have your name?');
    line("Hello, %s!\n", $name);
    foreach ($gameData as [$question, $correctAnswer]) {
        line("Question: $question");
        $userAnswer = prompt('Your answer');
        if ($userAnswer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'$userAnswer' is wrong answer ;). Correct answer was '$correctAnswer'");
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
