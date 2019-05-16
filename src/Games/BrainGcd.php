<?php

namespace BrainGames\Games\BrainGcd;

use function BrainGames\Index\run;

function gcd($a, $b)
{
    if ($b === 0) {
        return $a;
    }
    return gcd($b, $a % $b);
}

function runBrainGcdGame()
{
    $description = "
Welcome to Brain Games!
Find the greatest common divisor of given numbers.";

    $getAnswerQuestionData = function () {
        $numberOne = random_int(1, 100);
        $numberTwo = random_int(1, 100);

        $question = "{$numberOne} {$numberTwo}";
        $correctAnswer = gcd($numberOne, $numberTwo);

        $questionAnswerData = [$question, $correctAnswer];
        return $questionAnswerData;
    };

    run($description, $getAnswerQuestionData);
}