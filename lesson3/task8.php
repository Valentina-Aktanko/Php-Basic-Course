<?php

$regions = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская  область" => ["Санкт-Петербур", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская  область" => ["Рязань", "Рыбное", "Касимов"],
];

$str = "";

foreach ($regions as $region => $towns) {
    echo "$region:<br>";
    foreach ($towns as $town) {
        $firstLetter = mb_strtoupper(mb_substr($town, 0, 1));
        if (strcasecmp($firstLetter, "К") === 0) {
            $str .= $town . ", ";
        }
    }

    $encoding = mb_detect_encoding($str);
    $strCount =  mb_strlen($str, $encoding);
    echo mb_substr($str, 0, $strCount -2) . "<br>";
    $str = "";
}