<?php

function withSpaces($string) {
    return str_replace(" ", "_", $string);
}

echo withSpaces("Строка с пробелами");