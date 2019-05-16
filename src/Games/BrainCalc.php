<?php

namespace BrainGames\Games\BrainCalc;

use function BrainGames\Index\run;

function runBrainCalcGame()
{
    $description = "
Welcome to Brain Games!
What is the result of the expression?";


  
      $getAnswerQuestionData = function () {
        $numberOne = random_int(1, 100);
        $numberTwo = random_int(1, 100);

        $addAnswer = $numberOne + $numberTwo;
        $subtractAnswer = $numberOne >= $numberTwo ? $numberOne - $numberTwo :
        $numberTwo - $numberOne;
        $multAnswer = $numberOne * $numberTwo;

        $subtractQuestion = $numberOne >= $numberTwo ? "${numberOne} - ${numberTwo}" :
        "${numberTwo} - ${numberOne}";

        $addExpression = ["{$numberOne} + {$numberTwo}", $addAnswer];
        $subtractExpression = [$subtractQuestion, $subtractAnswer];
        $multExpression = ["{$numberOne} * {$numberTwo}", $multAnswer];

        $expressions = [$addExpression, $subtractExpression, $multExpression];
        
        $randKey = array_rand($expressions);
        $expression = $expressions[$randKey];

        return $expression;
      };
    run($description, $getAnswerQuestionData);
}
