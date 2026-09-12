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

    <h1>HOME</h1>

  </div>

  <?= view('footer') ?>
  <?= view('modals') ?>

  <?php //include 'vacancies-form.php'; ?>
  
  <?= view('blocks.site-bottom') ?>


