<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?= $title ?></title>
  <meta name="description" content="<?= $description ?>">
  <meta name="keywords" content="<?= $keywords ?>">
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
    a:link {
      color: #134366;
    }
  </style>
  <?= $extraStyles ?>
</head>
<body>
<div id="container">
  <div id="main_panel">
    <div class="main_center">
      <div id="main_top_panel">
        <div class="main_top_controller">
          <div id="main_navigation_panel">
            <div class="main_navigation_cotroller">
              <div id="topmenu">
                <ul>
                  <li></li>
                  <li><a href="/" class="<?= is_active('/') ?>"><span>Главная </span></a></li>
                  <li ><a href="uslugi.html" class="<?= is_active('uslugi.html') ?>"><span>Услуги </span></a></li>
                  <li><a href="prace.html" class="<?= is_active('prace.html') ?>"><span>Цены </span></a></li>
                  <li><a href="poleznoe.html" class="<?= is_active('poleznoe.html') ?>"><span> Полезное</span></a></li>
                  <li><a href="contact.html" class="<?= is_active('contact.html') ?>"> <span> Контакты </span></a></li>
                </ul>
                <div class="clear"></div>
              </div>
            </div>
          </div>
          <div id="main_top_righ_login_panel">
            <div class="main_top_search_controller">
              <table width="185%" border="0">
                <tr>
                  <th width="164" scope="col"><a href="/"><img src="images/logo.png" width="164" height="43" alt="Мы в бизнесе" /></a></th>
                  <th width="5" scope="col">&nbsp;</th>
                  <th scope="col"><strong>+7(812) 987-06-36</strong></th>
                  <th width="7" scope="col">&nbsp;</th>
                  <th>
                    <div class="contacts-wrapper">
                      <div class="">г. Санкт-Петербург, Невский пр., д.10</div>
                      <div class="">Часы работы: с 9:30 до 19:00</div>
                      <div class="">info@v-dele.com</div>
                    </div>
                  </th>
                </tr>
              </table>
              <div class="clear"></div>
            </div>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <div id="main_middle_panel">
        <div class="main_middle_controller">
        <?php require_once('sidebar.php') ?>