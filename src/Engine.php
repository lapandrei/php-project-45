<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

function startEngine(string $name, string $prefix): void
{
    $questionCounter = 0;
    $numberOfQuestions = 3;
    $answer = '';
    $getQuestion = $prefix . '\getQuestion';
    while ($questionCounter < $numberOfQuestions) {
        if (is_callable($getQuestion)) {
            $rightAnswer = $getQuestion();
        } else {
            line('Something gone wrong, sorry.');
            return;
        }
        $answer = prompt("Answer");
        if ($answer !== $rightAnswer) {
            showWrongAnswer($answer, $name, $rightAnswer);
            return;
        }
        line("Correct!");
        $questionCounter += 1;
    }
    line("Congratulations, {$name}!");
}

function showWrongAnswer(string $answer, string $name, string $rightAnswer): void
{
    line("{$answer} is wrong answer ;(. Correct answer was {$rightAnswer}.");
    line("Let's try again, {$name}!");
}
