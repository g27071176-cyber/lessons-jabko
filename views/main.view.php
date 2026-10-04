  <?php
  /**
   *@var array $bannerData *
   */
  ?>
  
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

  <div class="main container">

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="main-banner">
        <?php foreach ($bannerData as $imgUrl): ?>
        <div class="banner-card">
          <img src="<?= $imgUrl ?>">
        </div>
        <?php endforeach; ?>
    </div>
    </div>
    <div class="carousel-item">
      
      <div class="main-banner">
        <?php foreach ($bannerData as $imgUrl): ?>
        <div class="banner-card">
          <img src="<?= $imgUrl ?>">
        </div>
        <?php endforeach; ?>
    </div>
    </div>

    <div class="carousel-item">
      
      <div class="main-banner">
        <?php foreach ($bannerData as $imgUrl): ?>
        <div class="banner-card">
          <img src="<?= $imgUrl ?>">
        </div>
        <?php endforeach; ?>
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




  </div>

  <?= view('footer') ?>
  <?= view('modals') ?>

  <?php //include 'vacancies-form.php'; ?>
  
  <?= view('blocks.site-bottom') ?>


