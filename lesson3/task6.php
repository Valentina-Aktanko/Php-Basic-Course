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
    echo "<ul>";
    foreach ($arr as $item) {
        echo "<li>";
        echo "<a href=\"".$item["link"]."\">";
        echo $item["title"];
        echo "</a>";
        echo "</li>";

        if (!empty($item["children"])) {
            printMenu($item["children"]);
        }
    }
    echo "</ul>";
}

echo '<div>';
printMenu($menu);
echo '</div>';
