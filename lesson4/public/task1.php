<?php

require_once __DIR__ . '/../config/config.php';

echo render(TEMPLATES_DIR . 'gallery.tpl', [
    'title' => 'Галерея',
    'h1' => 'Галерея',
    'img1' => 'img/1.jpg',
    'img2' => 'img/2.jpg',
    'img3' => 'img/3.jpg',
    'img4' => 'img/4.jpg',
    'img5' => 'img/5.jpg',
    'img6' => 'img/6.jpg',
    'img7' => 'img/7.jpg',
    'img8' => 'img/8.jpg',
]);