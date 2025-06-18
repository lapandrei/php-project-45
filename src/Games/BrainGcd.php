<?php

namespace Hexlet\Code\Games\BrainGcd;

use function cli\line;
use function Hexlet\Code\Cli\greetings;
use function Hexlet\Code\Engine\engine;

function run(): void
{
    $name = greetings();
    $prefix = 'Hexlet\Code\Games\BrainGcd';
    line('Find the greatest common divisor of given numbers.');
    engine($name, $prefix);
}

function getQuestion(): string
{
    $firstOperand = random_int(1, 40);
    $secondOperand = random_int(1, 40);
    line("Question: {$firstOperand} {$secondOperand}");
    return strval(getRightAnswer($firstOperand, $secondOperand));
}

function getRightAnswer(int $firstOperand, int $secondOperand): int
{
    return findGcd($firstOperand, $secondOperand);
}

function findGcd(int $first, int $second): int
{
    $max = max($first, $second);
    $min = min($first, $second);
    while ($min !== 0) {
        $remainder = $max % $min;
        $max = $min;
        $min = $remainder;
    }
    return $max;
}
