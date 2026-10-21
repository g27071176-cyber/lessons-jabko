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

<div class="form-container">
    <h2 class="form-title">Відправляйте онлайн анкету щоб зв'язатися з Вами</h2>
    
    <form  onsubmit="submit_vacancies_form(this); return false">
      <div class="form-grid">
        <!-- Ліва колонка з інпутами -->
        <div class="left-column">
          <input type="text" name="name" class="input-field" placeholder="Ваше Ім'я та Прізвище*">
          <input type="text" name="city" class="input-field" placeholder="Місто проживання*" >
          <input type="text" name="contact" class="input-field" placeholder="Контактні дані*" >
        </div>
        
        <!-- Права колонка з текстовим полем та кнопками -->
        <div class="right-column">
          <textarea 
          name="message" 
          class="textarea-field" 
          placeholder="Яка вакансія Вас зацікавила та чому?&#10;Напишіть коротко про себе"></textarea>
          
          <div class="action-row">
            <button type="submit" class="submit-btn">Відправити анкету</button>
            
            <label class="file-upload-label">
              <span>Ваше резюме</span>
              <div class="paperclip-icon">
                <i class="bi bi-paperclip"></i>
              </div>
              <input type="file" class="file-input">
            </label>
          </div>

        </div>
      </div>
    </form>

    <p class="footer-text">
      А також Ви можете написати нам на поштову скриньку <a href="mailto:hr@jabko.ua">hr@jabko.ua</a>
    </p>
  </div>


  </div>

  <?= view('footer') ?>
  <?= view('modals') ?>

  <?php //include 'vacancies-form.php'; ?>
  
  <?= view('blocks.site-bottom') ?>


