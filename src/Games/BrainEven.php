<?php

namespace BrainGames\Games\BrainEven;

use function \cli\line;
use function BrainGames\Index\run;



function runBrainEvenGame()
{
    $description = "
Welcome to Brain Games!
Answer \"yes\" if number even otherwise answer \"no\".";
  
      $getAnswerQuestionData = function () {
        $question = random_int(1, 100);
        $correctAnswer = $question % 2 === 0 ? 'yes' : 'no';
        $questionAnswerData = [$question, $correctAnswer];
        return $questionAnswerData;
      };
    run($description, $getAnswerQuestionData);
}





