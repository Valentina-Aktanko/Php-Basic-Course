<?php

$number = 0;
while ($number <= 100) {
    if ($number%3 !== 0) {
        $number++;
        continue;
    }
    echo $number . "<br>";
    $number++;
}