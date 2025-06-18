<?php

namespace Hexlet\Code\Games\BrainPrime;

use function cli\line;
use function Hexlet\Code\Cli\greetings;
use function Hexlet\Code\Engine\engine;

function run(): void
{
    $name = greetings();
    $prefix = 'Hexlet\Code\Games\BrainPrime';
    line('Answer "yes" if given number is prime. Otherwise answer "no".');
    engine($name, $prefix);
}

function getQuestion(): string
{
    $randValue = random_int(0, 100);
    line("Question: {$randValue}");
    return strval(getRightAnswer($randValue));
}

function getRightAnswer(int $randValue): string
{
    return isPrime($randValue) ? "yes" : "no";
}

function isPrime(int $value): bool
{
    if ($value === 0) {
        return false;
    }
    for ($i = 2; $i < $value; $i++) {
        if ($value % $i === 0) {
            return false;
        }
    }
    return true;
}
