<?php
/** @var object $product */
?>

<ul class="product-tabs list-unstyled">

  <li class="product-tab">
    <a href="#">Accsssories</a>
  </li> 
  
  <li class="product-tab">
    <a href="#">Description</a>
  </li>  
  
  <li class="product-tab">
    <a href="#">Specification</a>
  </li> 
  
  <li class="product-tab">
    <a href="#">Revlews</a>
  </li>
  
  <li class="product-tab product-tab">
    <a href="?page=product-edit&product-id=<?= $product['_id']; ?>">
      <i class="bi bi-pencil"></i>
      <span>Edit</span>
    </a>
  </li>

    
  <li class="product-tab product-tab">
    <a href="?page=product-delete&product-id=<?= $product['_id']; ?>"
      onclick="return confirm('Are you sure?')"
    >
      <i class="bi bi-trash"></i>
      <span>Delete</span>
    </a>
  </li>

  <li class="product-tab product-tab-sku">
      <span>SKU: Artic</span>
    </li>
</ul>



