<?php

function addition($arg1, $arg2) {
    return $arg1 + $arg2;
}
function subtraction($arg1, $arg2) {
    return $arg1 - $arg2;
}
function multiplication($arg1, $arg2) {
    return $arg1 * $arg2;
}
function division($arg1, $arg2) {
    return (($arg2 !== 0) ? ($arg1 / $arg2) : ("Ошибка! Деление на 0")); // Скобки для наглядности
}

$arg1 = 10;
$arg2 = 2;

echo("Сумма чисел $arg1 и $arg2: ");
echo(addition($arg1, $arg2). "<br>");

echo("Разность чисел $arg1 и $arg2: ");
echo(subtraction($arg1, $arg2). "<br>");

echo("Произведение чисел $arg1 и $arg2: ");
echo(multiplication($arg1, $arg2). "<br>");

echo("Частное чисел $arg1 и $arg2: ");
echo(division($arg1, $arg2). "<br>");