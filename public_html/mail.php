<?php require_once('../init.php') ?>
<?php site_header(); ?>

<div id="main_s_panel">
  <div class="main_s_contorller">
    <div class="main_s_details">
      <div class="main_s_sec_contorller">
        <div class="main_s_sec_details">
          <p>
            <?php

            if (isset($_POST['name'])) {$name = $_POST['name'];}
            if (isset($_POST['email'])) {$email = $_POST['email'];}
            if (isset($_POST['mess'])) {$mess = $_POST['mess'];}
            if (empty($name)){
              $name = "Не указано имя!";
            } 

            if (empty($email)){
              $email = "Не указан Контактный номер!";
            }

            if (empty($mess)){
              $mess = "Не указано удобное время для звонка!";
            }

            $to = "v-dele2@yandex.ru, marfa@zmail.ru"; /*УКАЗАТЬ СВОЙ АДРЕС!*/
            $headers = "Content-type: text/plain; charset = utf-8";
            $subject = "Сообщение с вашего сайта";
            $message = "Имя пославшего: $name \nКонтактный номер: $email \nСообщение: $mess";
            $send = mail ($to, $subject, $message, $headers);

            if ($send == 'true'){
              echo "<b>Спасибо за отправку вашего сообщения!<p>";
              echo "<a href='/'>Нажмите,</a> чтобы вернуться на главную страницу";
            } else {
              echo "<p><b>Ошибка. Сообщение не отправлено!";
            }
            ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once('../inc/footer.php') ?>