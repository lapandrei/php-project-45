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

function getQuestion()
{
    $firstOperand = mt_rand(1, 40);
    $secondOperand = mt_rand(1, 40);
    line("Question: {$firstOperand} {$secondOperand}");
    return strval(findGcd($firstOperand, $secondOperand));
}

function getRightAnswer($randValue)
{
    return $randValue;
}

function findGcd($first, $second)
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
