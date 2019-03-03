<?php

function replace($str) {
    return str_replace(" ", "_", $str);
}

echo replace("Строка с пробелами");