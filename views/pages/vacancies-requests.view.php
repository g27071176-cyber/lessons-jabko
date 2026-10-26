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

  <div class="main-container">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">City</th>
                <th scope="col">Contact</th>
                <th scope="col">Message</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vacanciesRequests as $vacanciesRequest): ?>
                <tr>
                    <td><?= $vacanciesRequest['_id'] ?></td>
                    <td><?= $vacanciesRequest['name'] ?></td>
                    <td><?= $vacanciesRequest['city'] ?></td>
                    <td><?= $vacanciesRequest['contact'] ?></td>
                    <td><?= $vacanciesRequest['message'] ?></td>
                    <td>
                      <a href="<?= query(['delete-vacancy-request' => $vacanciesRequest['_id']]) ?>"
                        onclick="return confirm('are you sure')"
                        title="DeL">
                      <i class="bi bi-trash3 text-danger"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>able>

  </div>

  <?= view('footer') ?>
  <?= view('modals') ?>

  <?php //include 'vacancies-form.php'; ?>
  
  <?= view('blocks.site-bottom') ?>


