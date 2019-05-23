<?php

namespace BrainGames\Games\prime;

use function BrainGames\index\run;

const DESCRIPTION = "Answer \"yes\" if given number is prime. "
                  . "Otherwise answer \"no\".";

function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }
    $stop = floor($num / 2);
    for ($i = 2; $i <= $stop; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function runBrainPrimeGame()
{
    $getData = function () {
        $question = rand(2, 278);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';

        $questionAnswerData = [$question, $correctAnswer];
        return $questionAnswerData;
    };

    run(DESCRIPTION, $getData);
}
