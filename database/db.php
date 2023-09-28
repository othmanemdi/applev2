<?php

$categories = [
    1 => [
        "icon" => "phone",
        "name" => "iphone"
    ],
    2 => [
        "icon" => "pc-display-horizontal",
        "name" => "imac"
    ],
    3 => [
        "icon" => "laptop",
        "name" => "macbook"
    ],
    4 => [
        "icon" => "tablet",
        "name" => "ipad"
    ],
    5 => [
        "icon" => "earbuds",
        "name" => "air pods"
    ],
];

// dd($categories);

$colors = ["black", "gray", "originale", "cyan", "blue", "green", "yellow", "orange", "red", "pink", "purple"];

$products = [
    1 => [
        "id" => 1,
        "name" => "Iphone 13 Pro Max Blue 255 GO",
        "image" => "1.jpg",
        "price" => 13000.00,
        "old_price" => 13500.00,
        "category" => $categories[1]['name'],
        "color" => $colors[4],
    ],
    2 => [
        "id" => 2,
        "name" => "Iphone 13 Pro Max Gold 255 GO",
        "image" => "2.jpg",
        "price" => 13000.00,
        "old_price" => 13500.00,
        "category" => $categories[1]['name'],
        "color" => $colors[6],
    ],
    3 => [
        "id" => 3,
        "name" => "Imac 24 Pouce Pink 255 GO",
        "image" => "3.jpg",
        "price" => "20000.00",
        "old_price" => "23500.00",
        "categorie" => $categories[2]['name'],
        "color" => $colors[9],
    ],
    4 => [
        "id" => 4,
        "name" => "Imac 24 Pouce Gray 255 GO",
        "image" => "4.jpg",
        "price" => "20000.00",
        "old_price" => "23500.00",
        "categorie" => $categories[2]['name'],
        "color" => $colors[1],
    ],

    5 => [
        "id" => 5,
        "name" => "Imac 24 Pouce Blue 255 GO",
        "image" => "5.jpg",
        "price" => "20000.00",
        "old_price" => "23500.00",
        "categorie" => $categories[2]['name'],
        "color" => $colors[4],
    ],

    6 => [
        "id" => 6,
        "name" => "Imac 24 Pouce Yellow 255 GO",
        "image" => "6.jpg",
        "price" => "20000.00",
        "old_price" => "23500.00",
        "categorie" => $categories[2]['name'],
        "color" => $colors[6],
    ],

    7 => [
        "id" => 7,
        "name" => "Imac 24 Pouce Green 255 GO",
        "image" => "7.jpg",
        "price" => "20000.00",
        "old_price" => "23500.00",
        "categorie" => $categories[2]['name'],
        "color" => $colors[5],
    ],
];
