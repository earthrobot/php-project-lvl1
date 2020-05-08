<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}

function game()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
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
            return;
        }
        line($result);
    }
    line("Congratulations, %s!\n", $name);
}

function calc()
{
    line('Welcome to the Brain Game!');
    line('What is the result of expression?');
    $name = prompt('May I have your name?');
    line("Hello, %s!\n", $name);
    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(1, 30);
        $num2 = rand(1, 30);
        $res1 = array('+', $num1 + $num2);
        $res2 = array('-', $num1 - $num2);
        $res3 = array('*', $num1 * $num2);
        $operArr = array($res1, $res2, $res3);
        $ind = rand(0, 2);
        $oper = $operArr[$ind];
        line('Question: ' . $num1 . ' ' . $oper[0] . ' ' . $num2);
        $answer = prompt('Your answer');
        if ($answer == $oper[1]) {
            $result = 'Correct!';
        } else {
            $result = $answer . " is wrong answer ;). Correct answer was " . $oper[1];
            line($result);
            return;
        }
        line($result);
    }
    line("Congratulations, %s!\n", $name);
}

function findgcd($a, $b)
{
    return ($a % $b) ? findgcd($b, $a % $b) : $b;
}

function gcd()
{
    line('Welcome to the Brain Game!');
    line('Find the greatest common divisor of given numbers.');
    $name = prompt('May I have your name?');
    line("Hello, %s!\n", $name);
    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $gcd = findgcd($num1, $num2);
        line('Question: ' . $num1 . ' ' . $num2);
        $answer = prompt('Your answer');
        if ($answer == $gcd) {
            $result = 'Correct!';
        } else {
            $result = $answer . " is wrong answer ;). Correct answer was " . $gcd;
            line($result);
            return;
        }
        line($result);
    }
    line("Congratulations, %s!\n", $name);
}

function progression()
{
    line('Welcome to the Brain Game!');
    line('What number is missing in the progression?');
    $name = prompt('May I have your name?');
    line("Hello, %s!\n", $name);
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
        line('Question: ' . $str_prog);
        $answer = prompt('Your answer');
        if ($answer == $prog[$ind]) {
            $result = 'Correct!';
        } else {
            $result = $answer . " is wrong answer ;). Correct answer was " . $prog[$ind];
            line($result);
            return;
        }
        line($result);
    }
    line("Congratulations, %s!\n", $name);
}
