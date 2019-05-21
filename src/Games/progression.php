<?php

namespace BrainGames\Games\progression;

use function BrainGames\index\run;

const DESCRIPTION = "What number is missing in the progression?";
const LENGTH_PROGRESSION = 10;

function getProgression()
{
    $start = rand(1, 20);
    $step = rand(2, 9);
    $stop = (LENGTH_PROGRESSION * $step + $start) - 1;
    $progression = range($start, $stop, $step);
    return $progression;
}

function runBrainProgressionGame()
{
    $getAnswerQuestionData = function () {
        $progArray = getProgression();
        $randKey = array_rand($progArray);
        $correctAnswer = $progArray[$randKey];
        $progArray[$randKey] = '..';
        $question = implode(' ', $progArray);

        $questionAnswerData = [$question, "{$correctAnswer}"];
        return $questionAnswerData;
    };

    run(DESCRIPTION, $getAnswerQuestionData);
}
