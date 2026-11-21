<?php

$productStore = get_products_store();

$alertMassage = '';

if (!empty($_POST['product-name']) && empty($_GET['product-id'])) {
    $productData = [

    'product-name' => $_POST['product-name'],
    'product-price' => $_POST['product-price'],
    'product-image-1' => $_POST['product-image-1'],
    'product-image-2' => $_POST['product-image-2'],
    'product-image-3' => $_POST['product-image-3'],
    'product-description' => $_POST['product-description'],
    ];

    $product = $productStore->insert($productData);

    $alertMassage = 'Product added successfully';

}

echo view('pages.product.page-product-add', [

]); 

