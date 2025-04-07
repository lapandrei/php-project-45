<?php

namespace PhpProject45\BrainEven\BrainEvenFunctions;

use function cli\line;
use function cli\prompt;

function isEven($value): bool
{
    return $value % 2 == 0;
}

function isAnswerTrue(int $randNumber, string $answer): bool
{
    $result = false;
    if (
        isEven($randNumber) && trim($answer) === "yes"
        || !isEven($randNumber) && trim($answer) === "no"
    ) {
        $result = true;
    }
    return $result;
}

function greetings(): string
{
    line('Welcome to the Brain-Even Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("\nAnswer \"yes\" if the number is even, otherwise answer \"no\".\n");
    return $name;
}

function showResult(bool $isCorrect, string $name, string $answer): void
{
    $arrayYesNo = $answer === "yes" ? ["yes", "no"] : ["no", "yes"];
    if ($isCorrect) {
        print_r("Congratulating, {$name}!\n");
    } elseif ($answer !== "yes" && $answer !== "no") {
        print_r("you must enter \"yes\" or \"no\" you enter {$answer} \n");
        print_r("Let's try again, {$name}\n");
    } else {
        print_r("'{$arrayYesNo[0]}' is wrong answer ;(. Correct answer was '{$arrayYesNo[1]}' .\n");
        print_r("Let's try again, {$name}!\n");
    }
}
