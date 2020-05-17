<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\game;

function calc()
{
    $line = 'What is the result of the expression?';
    $questions = [];
    $correct_answers = [];
    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(1, 30);
        $num2 = rand(1, 30);
        $res1 = array('+', $num1 + $num2);
        $res2 = array('-', $num1 - $num2);
        $res3 = array('*', $num1 * $num2);
        $operArr = array($res1, $res2, $res3);
        $ind = rand(0, 2);
        $oper = $operArr[$ind];
        $correct_answers[$i] = $oper[1];
        $questions[$i] = $num1 . ' ' . $oper[0] . ' ' . $num2;
    }
    game($line, $questions, $correct_answers);
}
