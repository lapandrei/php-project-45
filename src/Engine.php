<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

function engine(string $name, string $prefix): void
{
    $i = 0;
    $answer = '';
    $getQuestion = $prefix . '\getQuestion';
    while ($i < 3) {
        if (is_callable($getQuestion)){
            $rightAnswer = $getQuestion();
        } else {
            echo 'Something gone wrong, sorry.';
            return;
        }        
        $answer = prompt("Answer");
        if ($answer !== $rightAnswer) {
            showWrongAnswer($answer, $name, $rightAnswer);
            return;
        }
        line("Correct!");
        $i += 1;
    }
    line("Congratulations, {$name}!");
}

function showWrongAnswer(string $answer, string $name, string $rightAnswer): void
{
    line("{$answer} is wrong answer ;(. Correct answer was {$rightAnswer}.");
    line("Let's try again, {$name}!");
}
