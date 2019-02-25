<?php

$file = fopen('file.txt', 'r');
if (!$file) {
    echo("Ошибка чтения файла");
    die;
}