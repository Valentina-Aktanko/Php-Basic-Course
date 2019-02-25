<?php

echo( file_get_contents('file.txt'));
echo( file_put_contents('file.txt', "Some Data", FILE_APPEND));