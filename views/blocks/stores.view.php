<div class="store-container">
  <div class="container">
    
    <!-- Шапка блока -->
    <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
      <h3 class="h3 mb-0 fw-bold text-white">Магазини у місті Київ</h3>
      <button type="button" class="btn btn-light btn-sm fw-bold">Змінити</button>
    </div>

    <!-- Аккордеон Bootstrap -->
    <div class="accordion accordion-jabko" id="storesAccordion">

      <!-- Карточка 1 (Закрыта) -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            м. Київ, ТРЦ "Victoria Gardens Kyiv"
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#storesAccordion">
          <div class="accordion-body">
            Інформація про магазин...
          </div>
        </div>
      </div>

      <!-- Карточка 2 (Открыта по умолчанию) -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            м. Київ, вул. Басейна, 9
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#storesAccordion">
          <div class="accordion-body">
            <div class="store-address fw-bold mb-2">вул. Басейна, 9</div>
            <div class="d-flex justify-content-between align-items-center mb-2">
              <div>Номер телефону <strong>+380 (67) 777 49 38</strong></div>
              <div class="text-muted">Щодня з 10:00 до 21:00</div>
            </div>
            <div class="store-desc text-muted mb-3">
              Магазин Ябко розташований навпроти "Арена Сіті".
            </div>
            <div class="row g-2">
              <div class="col-6">
                <a href="tel:+380677774938" class="btn btn-outline-light w-100">Дзвінок</a>
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-light w-100">Прокласти маршрут</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Карточка 3 (Закрыта) -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            м. Київ, вул. Велика Васильківська, 14
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#storesAccordion">
          <div class="accordion-body">
            Інформація про магазин...
          </div>
        </div>
      </div>

    </div>

    <!-- Кнопка снизу -->
    <div class="text-center mt-4">
      <button type="button" class="btn btn-light fw-bold px-4">Показати всі (17)</button>
    </div>

  </div>
</div>