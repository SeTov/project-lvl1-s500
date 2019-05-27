<?php

namespace BrainGames\games\progression;

use function BrainGames\index\run;

const DESCRIPTION = "What number is missing in the progression?";
const LENGTH_PROGRESSION = 10;

function getProgression($start, $step, $length)
{
    $stop = ($length * $step + $start) - 1;
    $progression = range($start, $stop, $step);
    return $progression;
}

function runProgressionGame()
{
    $getData = function () {
        $startSequence = rand(1, 20);
        $stepSequence = rand(2, 9);

        $progression = getProgression($startSequence, $stepSequence, LENGTH_PROGRESSION);

        $randKey = array_rand($progression);
        $correctAnswer = (string)$progression[$randKey];

        $progression[$randKey] = '..';
        $question = implode(' ', $progression);

        $questionAnswerData = [$question, $correctAnswer];
        return $questionAnswerData;
    };

    run(DESCRIPTION, $getData);
}
