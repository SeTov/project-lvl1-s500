<?php

namespace BrainGames\Games\BrainPrime;

use function BrainGames\Index\run;

function isPrime($num)
{
    if ($num === 1) {
        return false;
    }
    if ($num <= 3) {
        return true;
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
    $description = "
Welcome to Brain Games!
Answer \"yes\" if given number is prime. Otherwise answer \"no\".";

    $getAnswerQuestionData = function () {
        
        $numbers = range(2, 278);
        $randKey = array_rand($numbers);
        $question = $numbers[$randKey];
        $correctAnswer = isPrime($question) ? 'yes' : 'no';

        $questionAnswerData = [$question, $correctAnswer];
        return $questionAnswerData;
    };

    run($description, $getAnswerQuestionData);
}
