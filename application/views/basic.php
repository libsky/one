<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Образовательная система</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="/css/layout.css" type="text/css" />
<link rel="stylesheet" href="/css/jdpicker.css" type="text/css">
<!-- Featured Slider Elements -->
<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery-s3slider.js"></script>
<script type="text/javascript" src="scripts/jquery-s3slider.setup.js"></script>
<script type="text/javascript" src="scripts/jquery.jdpicker.js"> </script>
<script type="text/javascript">$($.date_input.initialize);</script>

<!-- End Featured Slider Elements -->
</head>
<body id="top">
<div class="wrapper row1">
  <div id="topnav">
    <ul>
        <li class="active"><a href="<? echo URL::site();?>"><strong>Главная</strong></a></li>
      <li><a href="<? echo URL::site('content');?>"><strong>Контент</strong></a></li>
      <li><a href="<? echo URL::site('gallery');?>"><strong>Галлерея</strong></a></li>
      <li class="last"><a href="<? echo URL::site('last');?>"><strong>Последняя страница</strong></a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="<? echo URL::site();?>">Образовательная система</a></h1>
      <p>Центр сертефикации</p>
    </div>
    <div class="fl_right">
      <p><? $request = Request::factory('auth/form');
                                                $response = $request->execute();
                                                echo $response;?></p>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div id="featured_slide_">
    <ul id="featured_slide_Content">
      <li class="featured_slide_Image"><a href="#"><img src="img/demo/940x340.gif" alt="" /></a>
        <div class="introtext">
          <h2>Описание чего-нибудь</h2>
          <p>Здаров всем! Парни, в шаблоне нужно реализовать вот что: Сайт выглядит след образом: Слева меню, справа контент.  Если не трудно, распишите подробно. </p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><img src="img/demo/940x340.gif" alt="" /></a>
        <div class="introtext">
          <h2>Описание чего-нибудь 2</h2>
          <p>Нужно что бы при переходе на фронтпэйдж сайта отображался бэкфон_1 и НЕ отображалось контента. А при клике на ссылку в меню, отображался бэкфон_2 и соответственно выводился контент.</p>
        </div>
      </li>
      <li class="featured_slide_Image"><a href="#"><img src="img/demo/940x340.gif" alt="" /></a>
        <div class="introtext">
          <h2>Описание чего-нибудь 3</h2>
          <p>Полазил в поиске, но не нашёл то что нужно. Заранее благодарен!.</p>
        </div>
      </li>
      <li class="clear featured_slide_Image">
        <!-- Important - Leave This Empty -->
      </li>
    </ul>
  </div>
  <div id="hpage_featured_info" class="clear">
    <ul>
      <li><a href="#"><img src="img/smlogo.jpg" alt="" /> <strong>Microsoft</strong></a></li>
      <li><a href="#"><img src="img/sclogo.jpg" alt="" /> <strong>Cisco</strong></a></li>
      <li class="last"><a href="#"><img src="img/demo/140x120.gif" alt="" /> <strong>Что-то еще</strong></a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="quicknav" class="clear">
    <ul>
      <li><a href="#">Студентам очникам</a>
        <ul>
          <li><a href="#">&raquo;блабла1</a></li>
          <li><a href="#">&raquo;блабла2</a></li>
          <li><a href="#">&raquo;блабла3</a></li>
          <li class="last"><a href="#">&raquo;блабла4</a></li>
        </ul>
      </li>
      <li><a href="#">Студентам дистанционно</a>
        <ul>
          <li><a href="#">&raquo;блабла1</a></li>
          <li><a href="#">&raquo;блабла2</a></li>
          <li><a href="#">&raquo;блабла3</a></li>
          <li class="last"><a href="#">&raquo;блабла4</a></li>
        </ul>
      </li>
      <li><a href="#">Преподавателям</a>
        <ul>
          <li><a href="#">&raquo;блабла1</a></li>
          <li><a href="#">&raquo;блабла2</a></li>
          <li><a href="#">&raquo;блабла3</a></li>
          <li class="last"><a href="#">&raquo;блабла4</a></li>
        </ul>
      </li>
      <li class="last"><a href="#">Программа и материалы</a>
        <ul>
          <li><a href="#">&raquo;блабла1</a></li>
          <li><a href="#">&raquo;блабла2</a></li>
          <li><a href="#">&raquo;блабла3</a></li>
          <li class="last"><a href="#">&raquo;блабла4</a></li>
        </ul>
      </li>
    </ul>  
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
           		<div id="homepage">
			<?php echo $content ?>
                        </div>
<!-- ############################################################################ -->
<form action="#">
<p>
<input type="text" name="date" class="date_input">
</p>
</form>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer" class="clear">
    <!-- ####################################################################################################### -->
    <div class="fl_left clear">
      <div class="fl_left center"><img src="img/demo/worldmap.gif" alt="" /><br />
        <a href="#">Найти нас с помощью Google Maps &raquo;</a></div>
      <address>
      Адресаня строка 1   ул. Калинина 13<br />
      Город   Краснодар<br />
      <br />
      Tel: 8861ХХХХХХ<br />
      Email: <a href="#">XXX@kubsau.ru</a>
      </address>
    </div>
    <div class="fl_right">
      <div id="newsletter">
        <form action="#" method="post">
          <fieldset>
            <legend>Подписаться на наши новости:</legend>
            <input type="text" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
            <input type="text" id="subscribe" value="Submit" />
          </fieldset>
        </form>
      </div>
    </div>
    <div id="copyright" class="clear">
      <p class="fl_left">Копирайтинг &copy; 2012 - Все права защищены - <a href="#">kubsau</a></p>
      <p class="fl_right">Кушнаренко Артем Сергеевич</p>
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>

<script type="text/javascript">
    		$(function() {
  $("#jdpicker").date_input();
});
	</script>
</body>
</html>