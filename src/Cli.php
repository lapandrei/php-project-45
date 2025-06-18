<?php

namespace Hexlet\Code\Cli;

use function cli\line;
use function cli\prompt;

function greetings(): string
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
