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
    
    <?php include 'blocks/product-advantages.php'; ?>


    <?php include 'blocks/product-option.php'; ?>
    

    <?php include 'blocks/product-recommend.php'; ?>


    <?php include 'blocks/product-alternative.php'; ?>


        
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

    <?php include 'blocks/product-delivery.php'; ?>
    
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