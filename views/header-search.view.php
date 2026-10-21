  <div class="header-wrapper">
    <div class="header container container">

      
      <a class="logo" href="/">
        Ябко
      </a>

      <div class="catalog-wrapper">

        <div class="catalog-menu sliced-comers">
          <span><i class="bi bi-list"></i>Catalog</span>
        </div>

        <aside class="sidebar-menu">
          <ul class="menu-list">
            <?php foreach (get_catalog_items() as $item): ?>

              <li class="menu-item position-relative">

                <a href="<?= $item['link'] ?>" class="menu-link">
                  <img class="menu-icon" src="<?= $item['icon'] ?>" alt="">
                  <span class="menu-title"><?= $item['title'] ?></span>
                  <?php if (!empty($item['submenu'])): ?>
                  <span class="menu-arrow">&rsaquo;</span>
                  <?php endif; ?>
                  
                </a>

                <?php if (!empty($item['submenu']) && is_array($item['submenu'])): ?>
                <ul class="submenu">
                  <?php foreach ($item['submenu'] as $subitem): ?>

                  <li>
                    <a href="<?= $subitem['link'] ?>"><?= $subitem['title'] ?>
                    </a>
                  </li>
                  <?php endforeach; ?>

                </ul>

                <?php endif; ?>


              </li>
            <?php endforeach; ?>
          </ul>
        </aside>
      </div>


      <form class="search">

        <button type="submit"><i class="bi bi-search"></i></button>
              
        <input type="hidden" name="page" value="category">
        <input type="text" class="sliced-corners" name="search" value="<?= htmlspecialchars($_GET['search'] ?? '') ?>"
        autocomplete="off">
      </form>

      <ul class="right-menu list-unstyled">
        <li class="right-menu-item">
          <a href="?page=category" class="sliced-comers">
            <span>Products<i class="bi bi-airplane"></i></span>
          </a>
        </li>
        <li class="right-menu-item">
          <a class="sliced-comers" href="?page=product-edit">
            <span>Add product <i class="bi bi-airplane"></i></span>
          </a>
        </li>
        <li class="right-menu-item">
          <a href="/seed-products.php" class="sliced-comers" target="_blank">
            <span>Seed
              <i class="bi bi-airplane"></i></span>
          </a>
        </li>
        <li class="right-menu-item">
          <a class="sliced-comers" href="#">
            <span>Cart <i class="bi bi-airplane"></i></span>
          </a>
        </li>
      </ul>
    </div>
  </div>