<?php

namespace BrainGames\index;

use function \cli\line;
use function \cli\prompt;

const ROUNDS_COUNT = 3;

function run($description, $questionAnswerData)
{
    line("Welcome to Brain Games!");
    line($description);
    line();
    $name = prompt('May I have your name?', 'Friend');
    line("Hello, %s!", $name);
    line();

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        [$currentQuestion, $correctAnswer] = $questionAnswerData();

        line("Question: %s", $currentQuestion);
        $playerAnswer = prompt('Your answer');
        if ($playerAnswer === $correctAnswer) {
            line("%gCorrect!%n");
            line();
        } else {
            line("%s %ris wrong answer%n ;(. Correct answer was %g%s%n", $playerAnswer, $correctAnswer);
            line("Let's try again, %s", $name);
            return;
        }
    }
        line("%bCongratulations, %s!%n", $name);
}
