<?php

namespace kirillsher\Calculator\View;

use function cli\line;

function showWelcomeMessage()
{
    line('Добро пожаловать в игру "Калькулятор"!');
    line('Вам будет показано арифметическое выражение, которое нужно вычислить.');
    line('Поехали!');
}