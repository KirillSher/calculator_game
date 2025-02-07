<?php

namespace kirillsher\Calculator\Controller;

use function cli\line;
use function cli\prompt;
use kirillsher\Calculator\View;

function startGame()
{
    View\showWelcomeMessage();

    while (true) {
        $expression = generateExpression();
        $correctAnswer = calculateExpression($expression);

        line("Вычислите выражение: $expression");
        $userAnswer = prompt('Ваш ответ');

        if ($userAnswer == $correctAnswer) {
            line('Правильно!');
        } else {
            line("Неправильно. Правильный ответ: $correctAnswer");
        }

        // Предложение продолжить или выйти
        $choice = prompt('Хотите сыграть еще раз? (y/n)');
        if (strtolower($choice) !== 'y') {
            line('Спасибо за игру! До встречи!');
            break;
        }
    }
}

function generateExpression()
{
    $operands = [rand(1, 100), rand(1, 100), rand(1, 100), rand(1, 100)];
    $operators = ['+', '-', '*'];
    $expression = $operands[0] . $operators[array_rand($operators)] .
                  $operands[1] . $operators[array_rand($operators)] .
                  $operands[2] . $operators[array_rand($operators)] .
                  $operands[3];
    return $expression;
}

function calculateExpression($expression)
{
    return eval("return $expression;");
}