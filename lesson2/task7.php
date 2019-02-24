<?php

// час: 1
// часа: 2, 3, 4
// часов: 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20

// минута: 1
// минуты: 2, 3, 4
// минут: 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20

// первый вариант
function timeNow($hour, $minute){

    $result = "";

    if($hour%100 == 0 || ($hour%100 >= 5 && $hour%100 <= 20)) {
        $result .= $hour.' часов ';
    } elseif ($hour%10 == 1){
        $result .= $hour.' час ';
    } else {
        $result .= $hour.' часа ';
    }

    if($minute%10 == 0 || ($minute%10 >= 5 && $hour%10 <= 9) || ($minute%100 >= 11 && $minute%100 <=14)) {
        $result .= $minute.' минут';
    } elseif ($minute%10 == 1){
        $result .= $minute.' минута';
    } else {
        $result .= $minute.' минуты';
    }

    return $result;
}

// второй вариант
function getWordDeclension ($n, $one, $two, $five) {
    $n100 = $n % 100;
    if ($n100 > 10 && $n100 < 20) {
        return "$n $five";
    }

    $n10 = $n % 10;
    if ($n10 === 1) {
        return "$n $one";
    }

    if ($n10 >= 2 && $n10 <= 4) {
        return "$n $two";
    }

    return "$n $five";
}

// первый вариант
echo("Сейчас " . timeNow(date("G"), date("i")));
echo "<br>";
echo "<hr>";

// второй вариант
$h = rand(0, 23);
echo getWordDeclension($h, "час", "часа", "часов") . " ";
$m = rand(0, 59);
echo getWordDeclension($m, "минута", "минуты", "минут");

// универсальная функция
echo "<br>";
echo "<hr>";
echo getWordDeclension(rand(0, 99999999), "корова", "коровы", "коров");
