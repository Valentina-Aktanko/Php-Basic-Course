<?php

function power($val, $pow) {

    if ($pow === 1) {
        return $val;
    }

    if ($pow <= 0) {
        return power(1/$val, -$pow);
    }

    return $val * power($val, $pow-1);
}

$val = 2;
$pow = -4;
echo("число $val в степени $pow - это " . power($val, $pow) . '.');