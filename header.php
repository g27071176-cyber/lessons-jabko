<header class="main-head">
  <div class="header-top"> 
    <div class="wrap-site-top">

      <div class="head-city">
        <div class="nav-cities">
          <div class="nav-choose-city">
            <i class="bi bi-geo-alt"></i>
            <div class="city-name">Киев</div>
            <i class="bi bi-caret-down"></i>

            <div class="cities-blok">
              <div class="cities-list">
                <div class="city-item">Броды</div>
                <div class="city-item">Берегово</div>
                <div class="city-item">Борисполь</div>
                <div class="city-item">Белая Церковь</div>
                <div class="city-item">Бровары</div>
                <div class="city-item">Бердичев</div>
                <div class="city-item">Виноградов</div>
                <div class="city-item">Вараш</div>
                <div class="city-item">Винница</div>
                <div class="city-item">Владимир</div>
                <div class="city-item regional-center">Днепр</div>
                <div class="city-item">Дрогобыч</div>
                <div class="city-item">Дубно</div>
                <div class="city-item">Житомир</div>
                <div class="city-item">Запорожье</div>
                <div class="city-item regional-center">Киев</div>
                <div class="city-item">Ивано-Франковск</div>
                <div class="city-item">Камянец-Подольский</div>
                <div class="city-item">Калуш</div>
                <div class="city-item">Каменское</div>
                <div class="city-item">Ковель</div>
                <div class="city-item">Коломия</div>
                <div class="city-item">Кривой Рог</div>
                <div class="city-item">Кременчук</div>
                <div class="city-item">Кропивницкий</div>
                <div class="city-item">Луцк</div>
                <div class="city-item regional-center">Львов</div>
                <div class="city-item">Николаев</div>
                <div class="city-item">Мукачево</div>
                <div class="city-item regional-center">Одесса</div>
                <div class="city-item">Александрия</div>
                <div class="city-item">Нетешин</div>
                <div class="city-item">Новый Роздол</div>
                <div class="city-item">Нововолынск</div>
                <div class="city-item">Павлоград</div>
                <div class="city-item">Полтава</div>
                <div class="city-item">Ровно</div>
              </div>

              <div class="cities-search">
                <input type="text" placeholder="Enter city name">
              </div>
            </div>
            
          </div>
        </div>
      </div>

      <nav class="first-nav">
        <div class="nav-menu">
          <div class="nav-menu-item"><a href="">Магазины</a></div>
          <div class="nav-menu-item"><a href="">Кешбэк</a></div>
          <div class="nav-menu-item"><a href="">Акции</a></div>
          <div class="nav-menu-item"><a href="">Уценка</a></div>
          <div class="nav-menu-item"><a href="">Новинки</a></div>
          <div class="nav-menu-item"><a href="">Вакансии</a></div>
          <div class="nav-menu-item"><a href="?page=login">login</a></div>
        </div>
      </nav>

      <div class="phone">
        <div class="nav-langs">
            <div class="phone"><?= session_get('name', 'Guest'); ?></div>
            <label class="langs-switch">
              <input  class="langs-switch-checkbox" type="checkbox">
              <div class="langs-ua">UA</div>
              <div class="langs-switch-holder">
                <div class="langs-switch-round"></div>
              </div>
              <div class="langs-en">EN</div>
            </label>
          </div>
      </div>
    </div>
  </div>

  <div class="header-cent">
    <div class="wrap-site-cent">

      <div class="logo-catalog-blok">
        <div class="logo-logo">Apple</div>
        <div class="header-bottom-menu">
          <button class="catalog-btn sliced-corners">
            <span><i class="bi bi-list"></i>Catalog</span>
          </button>
        </div>
      </div>

      <div class="search-block sliced-corners active">
        <div class="search-block-field">
          <div class=""></div>
        </div>
        <button class="search-btn" type="submit">
          <i class="bi bi-search"></i>
        </button>
        <input type="text" class="search-input" placeholder="Поиск товара..." autocomplete="off">
        
      </div>

      <div class="header-buttons">

        <a class="header-button header-button-desktop" href="#">Products</a>
        
        <a class="header-button header-button-desktop" href="#">Ремонт</a>
        
        <a class="header-button header-button-desktop" href="#">Кабинет</a>

        <a class="header-button header-button-desktop" href="#">Корзина</a>

      </div>
        
    </div>

  </div>
  






    
      <div class="header ">
        <div class="logo">Apple</div>

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
  </div>
</header> 