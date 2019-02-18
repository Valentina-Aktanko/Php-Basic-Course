<?php

//$val – заданное число, $pow – степень.
function power($val, $pow) {
//    var_dump($val, $pow);
    if ($pow === 0) {
        return 1;
    }
    return $val * power($val, --$pow);
}

$val = 2;
$pow = 4;
echo("число $val в степени $pow - это " . power($val, $pow) . '.');