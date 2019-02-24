<?php

// час: 1
// часа: 2, 3, 4
// часов: 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20

// минута: 1
// минуты: 2, 3, 4
// минут: 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20


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

echo("Сейчас " . timeNow(date("G"), date("i")));