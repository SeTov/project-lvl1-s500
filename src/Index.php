<?php

namespace BrainGames\Index;

use function \cli\line;
use function \cli\prompt;

function run($description, $questionAnswerData)
{
    line($description);
    line();
    $countRound = 3;
    $round = 0;
    $name = prompt('May I have your name?', 'Friend');
    line("Hello, %s!", $name);
    line();

    for ($round; $round < $countRound; $round++) {
        [$currentQuestion, $correctAnswer] = $questionAnswerData();
        // line($currentQuestion);
        // line($correctAnswer);

        line("Question: %s", $currentQuestion);
        $playerAnswer = prompt('Your answer: ');
        if ($playerAnswer == $correctAnswer) {
            line("Correct!");
            line();
        } else {
            print_r("{$playerAnswer} is wrong answer ;(. ");
            line("Correct answer was %s", $correctAnswer);
            line("Let's try again, %s", $name);
            break;
        }
    }
    if ($round === $countRound) {
        line("Congratulations, %s!", $name);
    }
}
