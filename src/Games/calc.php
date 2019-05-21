<?php

namespace BrainGames\Games\calc;

use function BrainGames\index\run;

const DESCRIPTION = "What is the result of the expression?";

function runBrainCalcGame()
{
      $getAnswerQuestionData = function () {
        $operations = ["-", "+", "*"];
        $operation = $operations[array_rand($operations)];

        $operandOne = random_int(1, 100);
        $operandTwo = random_int(1, 100);

        $operationsAndFunctions = [
            "+" => function ($a, $b) {
                return ["{$a} + {$b}", (string)($a + $b)];
            },
            "-" => function ($a, $b) {
                return ["{$a} - {$b}", (string)($a - $b)];
            },
            "*" => function ($a, $b) {
                return ["{$a} * {$b}", (string)($a * $b)];
            }
        ];
        
        return $operationsAndFunctions[$operation]($operandOne, $operandTwo);
      };
    run(DESCRIPTION, $getAnswerQuestionData);
}
