<?php

require_once __DIR__ . '/../config/config.php';

echo render(TEMPLATES_DIR . 'gallery.tpl', [
    'title' => 'Галерея',
    'h1' => 'Галерея',
    'src1' => 'img/1.jpg',
    'src2' => 'img/2.jpg',
    'src3' => 'img/3.jpg',
    'src4' => 'img/4.jpg',
    'src5' => 'img/5.jpg',
    'src6' => 'img/6.jpg',
    'src7' => 'img/7.jpg',
    'src8' => 'img/8.jpg',
]);