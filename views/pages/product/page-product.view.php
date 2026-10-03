  <?= view('blocks/site-top') ?>

  <?= view('header-navigation') ?>

  <?= view('header-search') ?>
  
<?php 

echo view('pages.product.page-product.product-tabs', ['product' => $product]);

echo view('pages.product.page-product.product-info', [
    'product' => $product,
    'defaultAdvantagesData' => $defaultAdvantagesData,
]);

echo view('pages.product.page-product.product-recommendations', ['product' => $product]);

echo view('pages.product.page-product.product-description', ['product' => $product]);

echo view('pages.product.page-product.product-characteristics', ['product' => $product]);

echo view('pages.product.page-product.product-reviews', [
    'product' => $product,
]);

?>

  <?= view('footer') ?>
  <?= view('modals') ?>

  <?php //include 'vacancies-form.php'; ?>
  
  <?= view('blocks.site-bottom') ?>