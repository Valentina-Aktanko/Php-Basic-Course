<?php

function toTranslate($str) {

    $letters = [
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z',
        'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r',
        'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch',
        'ъ' => '"', 'ы' => 'y', 'ь' => '\'', 'э' => 'ie', 'ю' => 'yu', 'я' => 'ya'
    ];

    $str = mb_strtolower($str);
    $res = strtr($str, $letters);

    return $res;
}

function replace($str) {
    return str_replace(" ", "_", $str);
}

$str = 'Строка с пробелами';
echo replace(toTranslate($str));

