<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function runGame($arrGameData)
{
    line('Welcome to the Brain Game!');
    line(GAME_NAME);
    $name = prompt('May I have your name?');
    line("Hello, %s!\n", $name);
    $roundNumber = 3;
    for ($i = 0; $i < $roundNumber; $i++) {
        $question = $arrGameData['questions'][$i];
        $correctAnswer = $arrGameData['correctAnswers'][$i];
        line('Question: ' . $question);
        $answer = prompt('Your answer');
        if ($answer == $correctAnswer) {
            $result = 'Correct!';
        } else {
            $result = $answer . " is wrong answer ;). Correct answer was " . $correctAnswer;
            line($result);
            return;
        }
        line($result);
    }
    line("Congratulations, %s!\n", $name);
}
