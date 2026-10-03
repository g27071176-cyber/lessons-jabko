<?php
/** @var object $product */
?>

<div class="product-info-wrapper">


  <div class="product-images">
    <div class="product-image">
      <img src="<?php echo $product['product-image-1']; ?>" alt="">
    </div>
    <div class="product-gallery">Gallery</div>
  </div>

  <div class="product-info">

    <div class="product-info-block">

      <h1 class="product-title"><?= $product['product-name']; ?></h1>


      <div class="product-reviews-summary">

        <div class="product-rating">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-half"></i>
          <i class="bi bi-star"></i>
          <span>(<?php echo rand(10, 200); ?>)</span>
        </div>

        <div class="product-availability in-stock">In stock</div>
        
      </div>

      <div class="product-price-wrapper">
        <div class="product-price"><?php echo $product['product-price']; ?> UAH</div>
        <div class="product-discount">-200 UAH.</div>
        <div class="product-code">Product code: 123456</div>
      </div>

      <div class="product-cashback">
        <div class="cashback-label">
          <i class="bi bi-cash-stack"></i>
          Cashback:
        </div>
        <div class="cashback-amount">+ 220 UAH.</div>
      </div>

    </div>

    <div class="product-info-block">
      <div class="product-info-cards">
        <div class="product-delivery">
        <i class="bi bi-truck"></i>
        <span>Free delivery</span>
      </div>
      </div>
    </div>




    
   <div class="product-info-block pd-cards-block">
  <div class="product-info-cards-grid">

    <?php if (!empty($productData->advantages)): ?>

        <?php foreach ($productData->advantages as $advantage): ?>

          <div class="info-card-item">
            <div class="info-card-icon text-delivery">
              <i class="bi bi-<?php echo $advantage->icon; ?>" style="color: <?php echo $advantage->icon_color; ?>;"></i>
            </div>
            <span class="info-card-text" style="color: <?php echo $advantage->text_color; ?>;"><?php echo $advantage->text; ?></span>
          </div>

        <?php endforeach; ?>

    <?php else: ?>

        <?php foreach ($defaultAdvantagesData as $advantage): ?>

          <div class="info-card-item">
            <div class="info-card-icon text-delivery">
              <i class="bi bi-<?php echo $advantage->icon; ?>" style="color: <?php echo $advantage->icon_color; ?>;"></i>
            </div>
            <span class="info-card-text" style="color: <?php echo $advantage->text_color; ?>;"><?php echo $advantage->text; ?></span>
          </div>

        <?php endforeach; ?>

    <?php endif; ?>

  </div>
</div>

<div class="product-info-block">

  <div class="product-info_choice-memory line_0 cross_black solder_0">
    <p class="product-info_choice-memory_title">
      <span class="opf">
        Version:
        <span class="info-circle product-delivery-info delivery-info-bg-grey" data-bs-toggle="modal" data-bs-target="#optionModal4">i</span>
      </span>
    </p>
    <div class="choice-info_row links_list"></div>
  </div>
  <div class="product-info_choice-version line_0 cross_black solder_0 last-item"></div>

</div>
    
<div class="product-info-block">
    <div class="product-recommend card-group-option has-features">

        <div class="product-recommend">
            <p class="title">We recommend purchasing:</p>

            <div class="option-row">
                <div class="left-side">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>
                    <span class="option-text">Protection against breakage</span>
                </div>
                <div class="right-side">
                    <span class="price">from 2 499 UAH</span>
                    <span class="info-icon">i</span>
                </div>
            </div>

            <div class="option-row">
                <div class="left-side">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>
                    <span class="option-text">Pure peace</span>
                </div>
                <div class="right-side">
                    <span class="price">from 5 499 UAH</span>
                    <span class="info-icon">i</span>
                </div>
            </div>
        </div>

    </div>

</div>

    <?php view('pages.product.page-product.blocks.product-alternative'); ?>

    <div class="product-info-block">

      <div class="product-variants-label">
        Device color:
      </div>

      <div class="product-variants">
        <a href="?color=grey"><div class="product-variant variant-grey active"></div></a>
        <a href="?color=blue"><div class="product-variant variant-blue"></div></a>
        <a href="?color=olive"><div class="product-variant variant-olive"></div></a>
        <a href="?color=black"><div class="product-variant variant-black"></div></a>
        <a href="?color=orange"><div class="product-variant variant-orange"></div></a>
      </div>

    </div>

    <div class="product-info-block product-buy-actions">
      <div class="product-buy-btn">
        <span>Buy now</span>
      </div>
      <div class="product-google-pay"></div>
    </div>

    <?php view('pages.product.page-product.blocks.product-delivery') ; ?>
    
    <div class="product-info-block">
      <div class="product-variant-label">
        Warranty and delivery:
      </div>
      
      <ul class="product-delivery-list list-unstyled">

        <li>
          <i class="bi bi-truck"></i>
          <span>Free shipping to stores and Nova Poshta branches</span>
          <span class="info-circle product-delivery-info" data-bs-toggle="modal" data-bs-target="#deliveryModal1">i</span>
          </li>
        <li>
          <i class="bi bi-shield-check"></i>
          <span>Manufacturer and store warranty</span>
          <span class="info-circle product-delivery-info" data-bs-toggle="modal" data-bs-target="#deliveryModal2">i</span>
        </li>
        <li>
          <i class="bi bi-arrow-left-right"></i>
        <span>Easy exchange and return within 14 days.</span>
        <span class="info-circle product-delivery-info" data-bs-toggle="modal" data-bs-target="#deliveryModal3">i</span>
      </li>
      </ul>
    </div>

  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const buyBtn = document.querySelector('.product-buy-btn');

  if (buyBtn) {
    buyBtn.addEventListener('click', function (e) {
      // Получаем размеры и позицию кнопки на экране
      const rect = this.getBoundingClientRect();
      
      // Вычисляем точные координаты клика относительно КНОПКИ
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      // Создаем элемент всплеска
      const ripple = document.createElement('span');
      ripple.classList.add('ripple');
      
      // Передаем координаты в стили
      ripple.style.left = `${x}px`;
      ripple.style.top = `${y}px`;

      // Добавляем круг в кнопку
      this.appendChild(ripple);

      // Как только анимация расширения закончилась — удаляем элемент из кода
      ripple.addEventListener('animationend', () => {
        ripple.remove();
      });
    });
  }
});
</script>