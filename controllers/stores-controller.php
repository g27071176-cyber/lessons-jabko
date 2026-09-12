<?php

// 1. Подготовка данных о магазинах
$cityName = 'Київ';
$storesCount = 17;

$stores = [
    [
        'id' => 1,
        'title' => 'м. Київ, ТРЦ "Victoria Gardens Kyiv"',
        'address' => 'ТРЦ "Victoria Gardens Kyiv"',
        'phone' => '+380 (67) 777 49 38',
        'schedule' => 'Щодня з 10:00 до 21:00',
        'desc' => '',
        'isOpen' => false
    ],
    [
        'id' => 2,
        'title' => 'м. Київ, вул. Басейна, 9',
        'address' => 'вул. Басейна, 9',
        'phone' => '+380 (67) 777 49 38',
        'schedule' => 'Щодня з 10:00 до 21:00',
        'desc' => 'Магазин Ябко розташований навпроти "Арена Сіті".',
        'isOpen' => true // Открыт по умолчанию в аккордеоне
    ],
    [
        'id' => 3,
        'title' => 'м. Київ, вул. Велика Васильківська, 14',
        'address' => 'вул. Велика Васильківська, 14',
        'phone' => '+380 (67) 777 49 38',
        'schedule' => 'Щодня з 10:00 до 21:00',
        'desc' => '',
        'isOpen' => false
    ],
    [
        'id' => 4,
        'title' => 'м. Київ, ТРЦ "Dream Yellow"',
        'address' => 'ТРЦ "Dream Yellow"',
        'phone' => '+380 (67) 777 49 38',
        'schedule' => 'Щодня з 10:00 до 21:00',
        'desc' => '',
        'isOpen' => false
    ]
];

// 2. Подключение файла представления (View)
require_once __DIR__ . '/../views/stores.view.php';