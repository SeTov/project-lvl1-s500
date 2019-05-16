<?php

namespace BrainGames\Games\BrainProg;

use function BrainGames\Index\run;

function runBrainProgressionGame()
{
    $description = "
Welcome to Brain Games!
What number is missing in the progression?";

    $getAnswerQuestionData = function () {

        $lengthArray = 10;
        $start = rand(1, 20);
        $step = rand(2, 9);
        $stop = ($lengthArray * $step + $start) - 1;
        
        $progArray = range($start, $stop, $step);
        $randKey = array_rand($progArray);
        $correctAnswer = $progArray[$randKey];
        $progArray[$randKey] = '..';
        $question = implode(' ', $progArray);

        $questionAnswerData = [$question, $correctAnswer];
        return $questionAnswerData;
    };

    run($description, $getAnswerQuestionData);
}
