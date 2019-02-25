<?php

function toTranslate($string) {

    $letters = [
        "а" => "a",
        "б" => "b",
        "в" => "v",
        "г" => "g",
        "д" => "d",
        "е" => "e",
        "ё" => "yo",
        "ж" => "zh",
        "з" => "z",
        "и" => "i",
        "й" => "j",
        "к" => "k",
        "л" => "l",
        "м" => "m",
        "н" => "n",
        "о" => "o",
        "п" => "p",
        "р" => "r",
        "с" => "s",
        "т" => "t",
        "у" => "u",
        "ф" => "f",
        "х" => "kh",
        "ц" => "c",
        "ч" => "ch",
        "ш" => "sh",
        "щ" => "shch",
        "ъ" => "``",
        "ы" => "y",
        "ь" => "`",
        "э" => "e",
        "ю" => "yu",
        "я" => "ya",
        " " => " ",
    ];

    $newString = "";
    $encoding = mb_detect_encoding($string); // получаем кодировку строки
    $strCount =  mb_strlen($string, $encoding); // определяем длину строки в соответствующей кодировке

    for ($i = 0; $i < $strCount; $i++) {
        $symbol = mb_substr($string, $i, 1); // получаем символ строки по индексу
        $symbol = mb_strtolower($symbol); // преобразуем символ в нижний регистр
        if (array_key_exists($symbol, $letters)) { // если ключ найден
            $newString .= $letters[$symbol]; // выполняем транслитерацию
        }
    }

    return $newString;
}

echo toTranslate("КОРовa");