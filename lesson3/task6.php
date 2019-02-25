<?php

$menu = [
    [
        'title' => 'HOME',
        'link' => '/',
    ],
    [
        'title' => 'MEN',
        'link' => '/catalog/men/',
    ],
    [
        'title' => 'WOMEN',
        'link' => '/catalog/women/',
        'children' => [
            [
                'title' => 'Dresses',
                'link' => '/catalog/women/dresses/'
            ],
            [
                'title' => 'Tops',
                'link' => '/catalog/women/tops/'
            ],
            [
                'title' => 'Sweaters/Knits',
                'link' => '/catalog/women/sweaters-knits/'
            ],
            [
                'title' => 'Jackets/Coats',
                'link' => '/catalog/women/jackets-coats/'
            ],
            [
                'title' => 'Blazers',
                'link' => '/catalog/women/blazers/'
            ],
            [
                'title' => 'Denim',
                'link' => '/catalog/women/denim/'
            ],
            [
                'title' => 'Leggins/Pants',
                'link' => '/catalog/women/leggins-pants/'
            ],
            [
                'title' => 'Skirts/Shorts',
                'link' => '/catalog/women/skirts-shorts/'
            ],
            [
                'title' => 'Accessories',
                'link' => '/catalog/women/accessories/'
            ],
        ],
    ],
    [
        'title' => 'KIDS',
        'link' => '/catalog/kids/',
    ],
    [
        'title' => 'ACCESSORIES',
        'link' => '/catalog/accessories/',
    ],
    [
        'title' => 'FEATURED',
        'link' => '/catalog/featured/',
    ],
    [
        'title' => 'HOT DEAIL',
        'link' => '/catalog/hot-deals/',
    ],
];

// рекурсивная функция вывода меню
function printMenu($arr)
{
    foreach ($arr as $item) {
        echo "<ul>\n";
        echo "<li><a href='".$item["link"]."'>".$item["title"]."</a></li>\n";
        if (key_exists("children", $item)) {
            printMenu($item["children"]);
        }
        echo "</ul>\n";
    }
}

//Вывод меню на экран рекурсивно
echo '<div>';
//var_dump($menu);
printMenu($menu);
echo '</div>';
