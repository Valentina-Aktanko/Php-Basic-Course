<?php

require_once __DIR__ . '\..\config\config.php';

//echo 'site_dir ' . SITE_DIR . '<br>';
//echo 'config ' . CONFIG_DIR . '<br>';
//echo 'data ' . DATA_DIR . '<br>';
//echo 'engine ' . ENGINE_DIR . '<br>';
//echo 'public ' . WWW_DIR . '<br>';
//echo 'templates ' . TEMPLATES_DIR . '<br>';

echo render(TEMPLATES_DIR . 'index.tpl', [
    'title' => 'Мой заголовок',
    'h1' => 'Мой текст',
    'content' => 'Мой контент',
]);