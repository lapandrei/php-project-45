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

function getQuestion()
{
    $firstOperand = mt_rand(1, 40);
    $secondOperand = mt_rand(1, 40);
    $signsArray = [
                    '+' => $firstOperand + $secondOperand,
                    '-' => $firstOperand - $secondOperand,
                    '*' => $firstOperand * $secondOperand
    ];
    $randKey = array_rand($signsArray);
    line("Question: {$firstOperand} {$randKey} {$secondOperand} ");
    $result = $signsArray[$randKey];
    return strval($result);
}

function getRightAnswer($randValue)
{
    return $randValue;
}
