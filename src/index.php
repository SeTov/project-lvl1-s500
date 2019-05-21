<?php

namespace BrainGames\index;

use function \cli\line;
use function \cli\prompt;

const COUNT_ROUND = 3;

function run($description, $questionAnswerData)
{
    line("Welcome to Brain Games!");
    line($description);
    line();
    $name = prompt('May I have your name?', 'Friend');
    line("Hello, %s!", $name);
    line();

    for ($i = 0; $i < COUNT_ROUND; $i++) {
        [$currentQuestion, $correctAnswer] = $questionAnswerData();
        // line($currentQuestion);
        // line($correctAnswer);

        line("Question: %s", $currentQuestion);
        $playerAnswer = prompt('Your answer');
        if ($playerAnswer === $correctAnswer) {
            line("%gCorrect!%n");
            line();
        } else {
            $messagePartOne = "{$playerAnswer} %ris wrong answer%n ;(. ";
            $messagePartTwo = "Correct answer was %g{$correctAnswer}%n";
            line($messagePartOne . $messagePartTwo);
            line("Let's try again, %s", $name);
            return;
        }
    }
        line("%bCongratulations, %s!%n", $name);
}
