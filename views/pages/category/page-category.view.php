  <?= view('blocks/site-top') ?>

  <?= view('header-navigation') ?>

  <?= view('header-search') ?>


  <div class="breadcrumbs-container container">
    <div class="row">
      <div class="col-sm-6">
        <?= view('breadcrumbs') ?>
      </div>

      <div class="col-sm-6">
        <?php if_page_the_view('category', 'blocks.sort');?>
      </div>
    </div>
  </div>

  <div class="main-container">

    <?php

if(!empty($_GET['search'])) {
  $search = htmlspecialchars($_GET['search']);

} else{
  $search = '';
}

?>


<div class="page-category">

  <div class="category-header row">
    <div class="col-md-6">
      <h3><?= $search ? 'Search results for" '. $search . '"' : 'Products' ?></h3>
    </div>
  
    <div class="col-md-6">
      <div class="rating-block">
        <div class="stars">
          <span class="star font-active">★</span>
          <span class="star font-active">★</span>
          <span class="star font-active">★</span>
          <span class="star font-active">★</span>
          <span class="star">★</span>
        </div>
        <span class="reviews-count">(63) Reviews</span>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="col-3">
      <div class="products-filters">
        <h2>Filters</h2>
      </div>
    </div>

    <div class="col-9">
      <?php 
        if (isset($_GET['rotated'])) {
          $productListView = 'pages.category.product-list-rotated';

        } else {
          $productListView = 'pages.category.product-list';
        }
          
          echo view ('pages.category.product-list', [
              'pageNum' => $pageNum,
              'perPage' => $perPage,
              'search' => $search,
              'totalProducts' => $totalProducts,
              'products' => $products,
              'totalPages' => $totalPages,
              'prevPage' => $prevPage,
              'nextPage' => $nextPage,
            ]);
      ?>
  </div>
</div>

  </div>

  <?= view('footer') ?>
  <?= view('modals') ?>

  <?php //include 'vacancies-form.php'; ?>
  
  <?= view('blocks.site-bottom') ?>


