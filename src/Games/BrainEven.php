<?php

namespace Hexlet\Code\Games\BrainEven;

use function cli\line;
use function Hexlet\Code\Cli\greetings;
use function Hexlet\Code\Engine\startEngine;

function run(): void
{
    $name = greetings();
    $prefix = 'Hexlet\Code\Games\BrainEven';
    line('Answer "yes" if the number is even, otherwise answer "no".');
    startEngine($name, $prefix);
}

function getQuestion(): string
{
    $randValue = random_int(0, 1000);
    line("Question: {$randValue}");
    return strval(getRightAnswer($randValue));
}

function getRightAnswer(int $randValue): string
{
    return $randValue % 2 === 0 ? "yes" : "no";
}
