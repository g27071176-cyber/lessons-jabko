<?php
// 1. Подключаем саму базу данных SleekDB
require_once __DIR__ . '/libs/src/Store.php';

// 2. Указываем папку, где физически будут храниться файлы с товарами (JSON)
$dataDir = __DIR__ . '/global-data'; 

try {
    // 3. Создаем или открываем хранилище (таблицу) под названием "products"
    $productsStore = new \SleekDB\Store("products", $dataDir);

    // 4. Описываем карточку нового товара для магазина Ябко
    $newProduct = [
        "title" => "Apple iPhone 15 Pro Max",
        "price" => 45999,
        "color" => "Natural Titanium",
        "storage" => "256GB",
        "in_stock" => true
    ];

    // 5. Сохраняем этот товар в базу данных
    $savedProduct = $productsStore->insert($newProduct);

    echo "<h1>Ура! База данных SleekDB работает!</h1>";
    echo "<p>Товар успешно добавлен. Вот что сохранилось в файле:</p>";
    echo "<pre>";
    print_r($savedProduct);
    echo "</pre>";

} catch (\Exception $e) {
    echo "<h1>Ошибка подключения базы:</h1> " . $e->getMessage();
}