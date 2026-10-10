<?php
/**
 *@var array $bannerData,
 */
/**
 *@var array $menuData,
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
  <div class="hero-section">

    <aside class="sidebar-menu">
      <ul class="menu-list">
        <?php foreach ($menuData as $item): ?>
          <li class="menu-item">
            <a href="<?= $item['link'] ?>" class="menu-link">
              <img class="menu-icon" src="<?= $item['icon'] ?>" alt="">
              <span class="menu-title"><?= $item['title'] ?></span>
              <?php if (!empty($item['arrow'])): ?>
              <span class="menu-arrow">&rsaquo;</span>
              <?php endif; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </aside>

    <div class="carousel slide" 
    id="carouselExampleIndicators" 
    data-bs-ride="carousel" 
    data-bs-interval="4000">

      <div class="carousel-inner">

        <div class="carousel-item active">
          <div class="main-banner">
            <?php foreach ($bannerData as $imgUrl): ?>
              <div class="banner-card">
                <div class="btn-bg"></div>
                <img src="<?= $imgUrl ?>" alt="Banner">
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="carousel-item">
          <div class="main-banner">
            <?php foreach ($bannerData as $imgUrl): ?>
              <div class="banner-card">
                <div class="btn-bg"></div>
                <img src="<?= $imgUrl ?>" alt="Banner">
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="carousel-item">
          <div class="main-banner">
            <?php foreach ($bannerData as $imgUrl): ?>
              <div class="banner-card">
                <div class="btn-bg"></div>
                <img src="<?= $imgUrl ?>" alt="Banner">
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div> <!-- /carousel-inner -->

      <button 
        class="carousel-control-prev" 
        type="button" 
        data-bs-target="#carouselExampleIndicators" 
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button 
        class="carousel-control-next" 
        type="button" 
        data-bs-target="#carouselExampleIndicators" 
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

      <div class="carousel-indicators">
        <button 
          class="active"
          type="button" 
          data-bs-target="#carouselExampleIndicators" 
          data-bs-slide-to="0" 
          aria-current="true" 
          aria-label="Slide 1">
        </button>

        <button 
          type="button" 
          data-bs-target="#carouselExampleIndicators" 
          data-bs-slide-to="1" 
          aria-label="Slide 2">
        </button>

        <button 
          type="button" 
          data-bs-target="#carouselExampleIndicators" 
          data-bs-slide-to="2" 
          aria-label="Slide 3">
        </button>
      </div>

    </div> <!-- /carousel -->
  </div> 
</div><!-- /main container -->

<?= view('footer') ?>
<?= view('modals') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php //include 'vacancies-form.php'; ?>

<?= view('blocks.site-bottom') ?>

