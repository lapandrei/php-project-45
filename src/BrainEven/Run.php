<?php

namespace PhpProject45\BrainEven\Run;

use function cli\prompt;
use function PhpProject45\BrainEven\BrainEvenFunctions\isAnswerTrue;
use function PhpProject45\BrainEven\BrainEvenFunctions\showResult;

function run(string $name): void
{
    $isCorrect = true;
    for ($i = 0; $i < 3; $i++) {
        $randNumber = rand(0, 100);
        print_r("Question: {$randNumber}\n");
        $answer = prompt("Your answer");
        if (isAnswerTrue($randNumber, $answer)) {
            echo "Correct!\n";
        } else {
            $isCorrect = false;
            break;
        }
    }
    showResult($isCorrect, $name, $answer);
}
