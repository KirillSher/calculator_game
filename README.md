# Игра "Калькулятор"

Простая консольная игра, в которой нужно вычислять арифметические выражения. Игра поддерживает бесконечное количество раундов и позволяет выйти в любой момент.

## Установка

1. Убедитесь, что у вас установлен [Composer](https://getcomposer.org/).
2. Клонируйте репозиторий:
    ```bash
    git clone https://github.com/KirillSher/calculator_game.git
    ```
3. Перейдите в каталог проекта:
    ```bash
    cd calculator
    ```
4. Установите зависимости:
    ```bash
    composer install
    ```
5. Запустите игру:
   ```bash
   php bin/calculator
   ```

## Установка через Packagist

1. Убедитесь, что Composer установлен глобально.
2. Установите игру:
    ```bash
    composer global require ваш-логин/calculator
    ```
3. Запустите игру из командной строки:
    ```bash
    calculator
    ```

## Как играть

1. Вам будет показано случайное арифметическое выражение, например: `45+12*3-7`.
2. Введите правильный ответ.
3. Если ответ верный, вы получите сообщение `Правильно!`.
4. Если ответ неверный, вы увидите правильный ответ.
5. После каждого раунда вам будет предложено сыграть еще раз:
    - Введите `y`, чтобы продолжить.
    - Введите `n`, чтобы выйти.

## Пример игры

    ```
    Добро пожаловать в игру "Калькулятор"!
    Вам будет показано арифметическое выражение, которое нужно вычислить.
    Поехали!
    Вычислите выражение: 45+12*3-7
    Ваш ответ: 74
    Правильно!
    Хотите сыграть еще раз? (y/n): y
    Вычислите выражение: 10-5*2+8
    Ваш ответ: 18
    Неправильно. Правильный ответ: 8
    Хотите сыграть еще раз? (y/n): n
    Спасибо за игру! До встречи!
    ```

## Зависимости

- [wp-cli/php-cli-tools](https://github.com/wp-cli/php-cli-tools) — библиотека для работы с консольным вводом/выводом.

## Автор

- **KirillSher**
- GitHub: [KirillSher](https://github.com/KirillSher)

## Ссылки

- Packagist: [Calculator Game](https://github.com/KirillSher)
- [Репозиторий на GitHub](https://github.com/KirillSher/calculator_game.git)
