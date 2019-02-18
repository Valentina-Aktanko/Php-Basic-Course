<?php

// час: 1
// часа: 2, 3, 4,
// часов: 5, 6, 7, 8, 9, 0, 11, 12, 13, 14,

// минут: 5, 6, 7, 8, 9, 0
// минута: 1,
// минуты: 2, 3, 4,

function getDeclension($number){
    switch ((int)substr($number, -1)) {
        case 1:
            return ['час', 'минута'];
        case 2:
        case 3:
        case 4:
            return ['часа', 'минуты'];
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
        case 0:
            return ['часов', 'минут'];
        default: ['-', '-'];
    }
}

$hour = Date("h");
$minute = Date("i");

echo("Сейчас $hour " . getDeclension($hour)[0] . " $minute " . getDeclension($minute)[1]);