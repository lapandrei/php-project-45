<?php

namespace Hexlet\Code\Games\BrainProgression;

use function cli\line;
use function Hexlet\Code\Cli\greetings;
use function Hexlet\Code\Engine\engine;

function run(): void
{
    $name = greetings();
    $prefix = 'Hexlet\Code\Games\BrainProgression';
    line('What number is missing in the progression?');
    engine($name, $prefix);
}

function getQuestion()
{
    $progression = createProgression();
    $missElement = mt_rand(0, count($progression) - 1);
    $questionLine = createQuestionLine($progression, $missElement);
    line("Question: {$questionLine}");
    return strval($progression[$missElement]);
}

function getRightAnswer($randValue)
{
    return $randValue;
}

function createProgression()
{
    $progression = [];
    $lprogLenth = mt_rand(5, 10);
    $start = mt_rand(1, 100);
    $step = mt_rand(1, 10);
    for ($i = 0; $i < $lprogLenth; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}

function createQuestionLine($array, $missElement)
{
    $result = [];
    foreach ($array as $key => $element) {
        $result[] = $key === $missElement ? ".. " : "{$element} ";
    }
    return implode("", $result);
}
