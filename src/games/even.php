<?php

namespace BrainGames\games\even;

use function BrainGames\index\run;

const DESCRIPTION = "Answer \"yes\" if number even otherwise answer \"no\".";
const MIN = 1;
const MAX = 100;

function isEven($number)
{
    return $number % 2 === 0;
}

function runEvenGame()
{
      $getData = function () {
        $question = random_int(MIN, MAX);
        $correctAnswer = isEven($question) ? 'yes' : 'no';
        $questionAnswerData = [$question, $correctAnswer];
        return $questionAnswerData;
      };
      
    run(DESCRIPTION, $getData);
}
