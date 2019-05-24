<?php

namespace BrainGames\games\gcd;

use function BrainGames\index\run;

const DESCRIPTION = "Find the greatest common divisor of given numbers.";

function getGcd($a, $b)
{
    if ($b === 0) {
        return $a;
    }
    return getGcd($b, $a % $b);
}

function runGcdGame()
{
    $getData = function () {
        $numberOne = random_int(1, 100);
        $numberTwo = random_int(1, 100);

        $question = "$numberOne $numberTwo";
        $correctAnswer = (string) getGcd($numberOne, $numberTwo);

        $questionAnswerData = [$question, $correctAnswer];
        return $questionAnswerData;
    };

    run(DESCRIPTION, $getData);
}
