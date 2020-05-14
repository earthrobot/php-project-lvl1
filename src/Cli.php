<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use function BrainGames\Games\even;

function game($line, $which_game)
{
    line('Welcome to the Brain Game!');
    line($line);
    $name = prompt('May I have your name?');
    line("Hello, %s!\n", $name);
    $which_game($name);
}
