<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Мы вбизнесе</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
a:link {
	color: #134366;
}
-->
</style></head>
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
                      <li><a href="index.html"><span>Главная </span></a></li>
                      <li class="over"><a href="uslugi.html"  class="over"><span>Услуги </span></a></li>
                      <li><a href="prace.html"><span>Цены </span></a></li>
                      <li><a href="poleznoe.html"><span> Полезное</span></a></li>
                      <li style="border:none;"><a href="contact.html"> <span> Контакты </span></a></li>
                    </ul>
                    <div class="clear"></div>
                  </div>
                </div>
          </div>
          <div id="main_top_righ_login_panel">
            <div class="main_top_search_controller">
<table width="105%" border="0">
<tr>
<th width="164" scope="col"><a href="index.html"><img src="images/logo.png" width="164" height="43" alt="Мы в бизнесе" /></a></th>
<th width="5" scope="col">&nbsp;</th>
                   <th scope="col"><strong>+7(812) 987-06-36</strong></th>
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
	  <div id="main_left_panel">
	  <div class="main_left_controller">
	  <div class="main_left_details">
	 <h4><strong>НАШИ УСЛУГИ:</strong>   </h4>
	 <ul>
	   <li><a  href="registracija firm.html"><span>Регистрация фирм </span></a></li>
	 <li class="list"><a  href="gotovye firmy.html" ><span>Готовые фирмы</span></a></li>
	 <li><a  href="likvidacija firm.html" ><span>Ликвидация фирм</span></a></li>
     <li><a  href="vnesenie izmenenij.html"><span>Внесение изменений</span></a></li>
	 <li><a  href="juridicheskie adresa.html"><span>Юридические адреса</span></a></li>
	 <li><a  href="zakaz vypisok.html"><span>Заказ выписок </span></a></li>
	 <li><a  href="otkrytie scheta.html"><span>Открытие счета</span></a></li>
	<div class="on_line_support_contorller">
<div style="position: absolute; margin-left: 62px; margin-top: 0px;" >
  <p class="clear" style="line-height:30px;"><strong><a href="#">ЗАКАЗАТЬ
 ЗВОНОК</a></a></strong></p></div>
	 <img src="images/img6.gif" alt="" width="192" height="58" border="0" /> </div>

<form method="post" action="mail.php">
          
 <table width="192" border="0">
  <tr>
    <th align="left" scope="col">Имя:</th>
    <th align="left" scope="col"><input type="text" name="name" size="20"/></th>
  </tr>
  <tr>
    <td>Телефон</td>
    <td><input name="email" type="text" size="20" /></td>
  </tr>
  <tr>
    <td>Время<br />
звонка
   :</td>
    <td><input name="mess" type="text" value="" size="20" /></td>
  </tr>
</table>
   <input type="submit" class="send" value="Отправить сообщение"/>
 </p>
 </form>
<p><img src="images/line.png" alt="" width="192" border="0" /></p>
<div class="on_line_support"> 

<div style="position: absolute; margin-left: 62px; margin-top: 0px; width: 100px;" >
  <p class="clear" style="line-height:14px;"><strong><a href="besplatnyj vyezd kur'era.html">БЕСПЛАТНЫЙ <br />
 ВЫЕЗД КУРЬЕРА</a></a></strong></p></div>
<img src="images/img7.gif" alt="" width="192" height="58" border="0" />
<p><img src="images/line.png" alt="" width="192" border="0" /></p>

<div style="position: absolute; margin-left: 62px; margin-top: 0px;" >
  <p class="clear" style="line-height:14px;"><strong><a href="besplatnyj vyezd jurista.html">БЕСПЛАТНЫЙ <br />
 ВЫЕЗД ЮРИСТА</a></strong></p></div>
	 <img src="images/img6.png" alt="" width="192" height="58" border="0" />
	 </ul>
	 
	  </div>
	  </div>
	  </div>
	  
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
 if (empty($name))
 {
	 $name = "Не указано имя!";
	  } 
 if (empty($email))
 {
	 $email = "Не указан Контактный номер!";
 }
 if (empty($mess))
 {
	$mess = "Не указано удобное время для звонка!";
 }
 $to = "v-dele2@yandex.ru, marfa@zmail.ru"; /*УКАЗАТЬ СВОЙ АДРЕС!*/
 $headers = "Content-type: text/plain; charset = utf-8";
 $subject = "Сообщение с вашего сайта";
 $message = "Имя пославшего: $name \nКонтактный номер: $email \nСообщение: $mess";
 $send = mail ($to, $subject, $message, $headers);
 if ($send == 'true')
 {
 echo "<b>Спасибо за отправку вашего сообщения!<p>";
 echo "<a href=index.html>Нажмите,</a> чтобы вернуться на главную страницу";
 }
 else 
 {
 echo "<p><b>Ошибка. Сообщение не отправлено!";
 }
 ?>
	      
	      </p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	  </div>
	  </div>
	  <div class="clear"></div>
	  </div>
	  <div class="clear"></div>
	  </div>
	  <div class="clear"></div>
	  </div>
	  <div class="clear"></div>
	  </div>
	   <div class="clear"></div>
	  </div>
	   <div class="clear"></div>
    </div>
	
<p>&nbsp;</p>
	    
        <p>&nbsp;</p>
	    <p>&nbsp;</p>
        <p>&nbsp;</p>
	 
        <p>&nbsp;</p>
        <p>&nbsp;</p>
	    <p>&nbsp;</p>
           <p>&nbsp;</p>
        <p>&nbsp;</p>
	    <p>&nbsp;</p>
           <p>&nbsp;</p>
        <p>&nbsp;</p>
	    <p>&nbsp;</p>
 <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<div id="main_footer_panel">
<div class="main_footer_controller">
<div class="main_center">
<div class="main_footer_details">
<p><a href="index.html">главная  </a>| <a href="uslugi.html"> услуги  </a> |<a href="prace.html">цены </a> |<a href="poleznoe.html">полезное </a> |<a href="contact.html"> контакты</a></p>
<h4>&copy; Юридическая фирма "МЫ вбизнесе"</h4>
<!-- Yandex.Metrika informer -->
<a href="http://metrika.yandex.ru/stat/?id=16944778&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/16944778/1_1_205173FF_003153FF_1_uniques" alt="Яндекс.Метрика" align="right"
style="width:80px; height:15px; border:0;" title="Яндекс.Метрика: данные за сегодня (уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:16944778,type:0,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
var yaParams = {/*Здесь параметры визита*/};
</script>

<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter16944778 = new Ya.Metrika({id:16944778, enableAll: true, webvisor:true,params:window.yaParams||{ }});
        } catch(e) { }
    });
    
    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/16944778" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</div>
</div>
</div>
</div>

</body>
</html>
