<?php
 $a = -100;
 $b = -20;

 if ($a >= 0 && $b >= 0) {
     $result = $a - $b;
     echo "Разность чисел a и b: $result";
 } else if ($a < 0 && $b < 0) {
     $result = $a * $b;
     echo "Произведение чисел a и b: $result";
 } else {
     $result = $a + $b;
     echo "Сумма чисел a и b: $result";
 }