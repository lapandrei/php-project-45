<?php

namespace Hexlet\Code\BrainEven;

use function cli\line;
use function cli\prompt;

function run($name): void
{
    $i = 0;
    $answer = '';
    line('Answer "yes" if the number is even, otherwise answer "no".');
    while ($i < 3) {
        $randValue = mt_rand(1, 1000);
        line("Question: {$randValue}");
        $answer = prompt("Answer");
        if ($answer !== getRightAnswer($randValue)) {
            showWrongAnswer($answer, $name, $randValue);
            return;
        }
        line("Correct!");
        $i += 1;
    }
    line("Congratulations, {$name}!");
}

function getRightAnswer($randValue)
{
    return $randValue % 2 === 0 ? "yes" : "no";
}

function showWrongAnswer($answer, $name, $randValue)
{
    $rightAnswer = getRightAnswer($randValue);
    line("{$answer} is wrong answer ;(. Correct answer was {$rightAnswer}.");
    line("Let's try again, {$name}");
}
