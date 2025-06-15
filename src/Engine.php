<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

function engine($name, $prefix)
{
    $i = 0;
    $answer = '';
    $getQuestion = $prefix . '\getQuestion';
    $getRightAnswer = $prefix . '\getRightAnswer';
    while ($i < 3) {
        $randValue = $getQuestion();
        $answer = prompt("Answer");
        $rightAnswer = $getRightAnswer($randValue);
        if ($answer !== $rightAnswer) {
            showWrongAnswer($answer, $name, $rightAnswer);
            return;
        }
        line("Correct!");
        $i += 1;
    }
    line("Congratulations, {$name}!");
}

function showWrongAnswer($answer, $name, $rightAnswer)
{
    line("{$answer} is wrong answer ;(. Correct answer was {$rightAnswer}.");
    line("Let's try again, {$name}");
}
