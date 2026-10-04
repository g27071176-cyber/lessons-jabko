
  <div class="header-wrapper">
    <div class="header container">

      
      <a class="logo" href="/">
        Apple
      </a>

      <div class="catalog-menu sliced-comers">
        <span><i class="bi bi-list"></i>Catalog</span>
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