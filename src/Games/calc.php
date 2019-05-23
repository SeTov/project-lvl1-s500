<?php

namespace BrainGames\Games\calc;

use function BrainGames\index\run;

const DESCRIPTION = "What is the result of the expression?";
const OPERATIONS = ["-", "+", "*"];

function runBrainCalcGame()
{
      $getData = function () {
        $operation = OPERATIONS[array_rand(OPERATIONS)];

        $operandOne = random_int(1, 100);
        $operandTwo = random_int(1, 100);

        $operationsFunctions  = [
            "+" => function ($a, $b) {
                return $a + $b;
            },
            "-" => function ($a, $b) {
                return $a - $b;
            },
            "*" => function ($a, $b) {
                return $a * $b;
            }
        ];
        
        $question = "$operandOne $operation $operandTwo";
        $answer = $operationsFunctions[$operation]($operandOne, $operandTwo);
        $answer = (string)$answer;
        
        return [$question, $answer];
      };
    run(DESCRIPTION, $getData);
}
