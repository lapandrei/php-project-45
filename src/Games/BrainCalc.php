<?php

namespace Hexlet\Code\Games\BrainCalc;

use function cli\line;
use function Hexlet\Code\Cli\greetings;
use function Hexlet\Code\Engine\engine;

function run(): void
{
    $name = greetings();
    line('What is the result of the expression?');
    $prefix = 'Hexlet\Code\Games\BrainCalc';
    engine($name, $prefix);
}

function getQuestion(): string
{
    $firstOperand = random_int(1, 40);
    $secondOperand = random_int(1, 40);
    $signsArray = [
                    '+' => $firstOperand + $secondOperand,
                    '-' => $firstOperand - $secondOperand,
                    '*' => $firstOperand * $secondOperand
    ];
    $randKey = array_rand($signsArray);
    line("Question: {$firstOperand} {$randKey} {$secondOperand} ");
    return strval(getRightAnswer($randKey, $signsArray));
}

function getRightAnswer(string $randKey, array $signsArray): int
{
    return $signsArray[$randKey];
}
