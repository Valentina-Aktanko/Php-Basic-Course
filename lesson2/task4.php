<?php

function addition($arg1, $arg2){
    return $arg1 + $arg2;
}

function subtraction($arg1, $arg2){
    return $arg1 - $arg2;
}

function multiplication($arg1, $arg2){
    return $arg1 * $arg2;
}

function division($arg1, $arg2){
    return (($arg2 !== 0) ? ($arg1 / $arg2) : ("Ошибка! Деление на 0")); // Скобки для наглядности
}

function mathOperation($arg1, $arg2, $operation){
    switch ($operation) {
        case "addition":
            echo("Сумма чисел $arg1 и $arg2: " . addition($arg1, $arg2));
            break;
        case "subtraction":
            echo("Разность чисел $arg1 и $arg2: " . subtraction($arg1, $arg2));
            break;
        case "multiplication":
            echo("Произведение чисел $arg1 и $arg2: " . multiplication($arg1, $arg2));
            break;
        case "division":
            echo("Результат деления числа $arg1 на число $arg2: " . division($arg1, $arg2));
            break;
        default:
            echo("$operation - Неизвестная операция");
    }
}

mathOperation(10, 10,"division");
