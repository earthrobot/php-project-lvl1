<?php

namespace BrainGames\Games;

use function BrainGames\Engine\runGame;

function primeGame()
{
    $questions = [];
    $correctAnswers = [];
    $roundNumber = 3;
    for ($i = 0; $i < $roundNumber; $i++) {
        $max = 100;
        $num = rand(1, $max);
        $correctAnswers[$i] = 'yes';
        if ($num > 0) {
            for ($ii = 2; $ii < $max; $ii++) {
                if ($ii != $num) {
                    if (($num % $ii) == 0) {
                        $correctAnswers[$i] = 'no';
                    }
                }
            }
        }
        $questions[$i] = $num;
    }
    $arrGameData = [];
    $arrGameData['questions'] = $questions;
    $arrGameData['correctAnswers'] = $correctAnswers;
    runGame($arrGameData);
}
