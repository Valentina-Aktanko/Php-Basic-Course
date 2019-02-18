<?php

function add($arg1, $arg2)
{
    return $arg1 + $arg2;
}

function subtraction($arg1, $arg2)
{
    return $arg1 - $arg2;
}

function multiply($arg1, $arg2)
{
    return $arg1 * $arg2;
}

function division($arg1, $arg2)
{
    return (($arg2 !== 0) ? ($arg1 / $arg2) : ("Ошибка! Деление на 0")); // Скобки для наглядности
}

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case "add":
            echo("Сумма чисел $arg1 и $arg2: ");
            echo(add($arg1, $arg2));
            break;
        case "subtraction":
            echo("Разность чисел $arg1 и $arg2: ");
            echo(subtraction($arg1, $arg2));
            break;
        case "multiply":
            echo("Произведение чисел $arg1 и $arg2: ");
            echo(multiply($arg1, $arg2));
            break;
        case "division":
            echo("Результат деления числа $arg1 на число $arg2: ");
            echo(division($arg1, $arg2));
            break;
        default:
            echo("$operation - Неизвестная операция");
    }
}

mathOperation(10, 0,"division");
