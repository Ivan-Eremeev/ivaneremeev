<?php 
  while ( have_rows('contact') ) : the_row();
    ?>
      <div class="wrapper">
        <!-- head-->
        <div class="head">
          <h1 class="head_title">Контакты</h1>
          <div class="head_subtitle">Как связаться со мной</div>
        </div>
        <!--	/head-->
        <!-- contact-->
        <div class="contact" data-aos="fade-up" data-aos-duration="1000">
          <div class="row">
            <div class="contact_col">
              <h2 class="contact_title">Написать в :</h2>
              <ul class="contact_list">
                <li class="contact_item"><a class="contact_link" href="https://t.me/IvanMessage" target="blank"><span class="contact_icon"><i class="fab fa-telegram-plane"></i></span><span class="contact_text">Telegram</span></a></li>
                <li class="contact_item"><a class="contact_link" href="https://join.skype.com/invite/bcaYnpFGIENN" target="blank"><span class="contact_icon"><i class="fab fa-skype"></i></span><span class="contact_text">Skype</span></a></li>
                <li class="contact_item"><a class="contact_link" href="mailto:ivan.frontcoder@gmail.com" target="blank"><span class="contact_icon"><i class="fa fa-envelope"></i></span><span class="contact_text">Email</span></a></li>
              </ul>
            </div>
            <div class="contact_col">
              <!-- form-->
              <form class="form" action="send.php">
                <div class="form_title">Оставить сообщение</div>
                <div class="form_input">
                  <input type="text" name="email" placeholder="Ваш email" required>
                </div>
                <div class="form_textarea">
                  <textarea placeholder="Сообщение (необязательно)" name="message"></textarea>
                </div>
                <button class="form_btn" type="submit">Отправить</button>
              </form>
              <!--	/form-->
            </div>
          </div>
          <!--	/contact-->
        </div>
      </div>
      <!-- modal-->
      <div class="modal" id="success">
        <div class="modal_body">
          <div class="modal_content">
            <p>Спасибо! Ваше сообщение отправлено</p>
            <div class="modal_close"></div>
          </div>
        </div>
      </div>
      <!-- /modal-->
      <!-- modal-->
      <div class="modal" id="error">
        <div class="modal_body">
          <div class="modal_content">
            <p>Произошла ошибка. Попробуйте еще раз.</p>
            <div class="modal_close"></div>
          </div>
        </div>
      </div>
      <!-- /modal-->
    <?php
  endwhile;
?>