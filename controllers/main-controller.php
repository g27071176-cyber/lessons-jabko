<?php

$bannerData = [
    'https://img.jabko.ua/image/cache/catalog/products/2026/09/241328/12rok%D1%96v-Desktop-max-1700.png.webp',
    'https://img.jabko.ua/image/cache/catalog/products/2026/09/241506/Aksesuari-Desktop-(1)-max-1700.png.webp',
    'https://img.jabko.ua/image/cache/catalog/products/2026/10/081538/17-pro-max-Desktop-max-1700.png.webp',
    'https://img.jabko.ua/image/cache/catalog/products/2026/09/241508/Noutbuki-Desktop-(1)-max-1700.png.webp',
    // 'https://img.jabko.ua/image/cache/catalog/products/2026/10/061733/garmin-Enduro-4-Desktop-max-1700.png.webp',
    // 'https://img.jabko.ua/image/cache/catalog/products/2026/09/241820/Apple-Desktop-max-1700.png.webp',
];


echo view('main', [
    'bannerData' => $bannerData,
]);