<?php

$a = 3;
$b = 5;

//$a+=+$b-$b=$a;

$a = $a + $b; // a = 8, b = 5
$b = $a - $b; // a = 8, b = 3
$a = $a - $b; // a = 5, b = 3

echo("a = $a");
echo('<br>');
echo("b = $b");