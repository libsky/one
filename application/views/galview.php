<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
    <title>Образовательная система | Галлерея</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="css/layout.css" type="text/css" />
<!-- Gallery Specific Elements -->
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded'
    });
});
</script>
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-prettyPhoto.js"></script>
<!-- End Gallery Specific Elements -->
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
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="gallery">
      <!-- ########### -->
      <div class="gallerycontainer clear">
        <div class="fl_left">
          <h2>Всякое &amp; Разное</h2>
          <p>Описание...</p>
          <p>текст бла бла...</p>
        </div>
        <div class="fl_right">
          <ul>
            <li><a href="img/demo/940x340.gif" rel="prettyPhoto[gallery1]" title="Image 1"><img src="img/demo/150x150.gif" alt="" /></a></li>
            <li><a href="img/demo/940x340.gif" rel="prettyPhoto[gallery1]" title="Image 2"><img src="img/demo/150x150.gif" alt="" /></a></li>
            <li><a href="img/demo/940x340.gif" rel="prettyPhoto[gallery1]" title="Image 3"><img src="img/demo/150x150.gif" alt="" /></a></li>
            <li class="last"><a href="img/demo/940x340.gif" rel="prettyPhoto[gallery1]" title="Image 4"><img src="img/demo/150x150.gif" alt="" /></a></li>
            <li><a href="img/demo/940x340.gif" rel="prettyPhoto[gallery1]" title="Image 5"><img src="img/demo/150x150.gif" alt="" /></a></li>
            <li><a href="img/demo/940x340.gif" rel="prettyPhoto[gallery1]" title="Image 6"><img src="img/demo/150x150.gif" alt="" /></a></li>
            <li><a href="img/demo/940x340.gif" rel="prettyPhoto[gallery1]" title="Image 7"><img src="img/demo/150x150.gif" alt="" /></a></li>
            <li class="last"><a href="images/demo/940x340.gif" rel="prettyPhoto[gallery1]" title="Image 8"><img src="img/demo/150x150.gif" alt="" /></a></li>
          </ul>
        </div>
      </div>
      <!-- ########### -->
    </div>
    <!-- ####################################################################################################### -->
    <div class="pagination">
      <ul>
        <li class="prev"><a href="#">&laquo; Предыдущая стр.</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li class="splitter">&hellip;</li>
        <li><a href="#">6</a></li>
        <li class="current">7</li>
        <li><a href="#">8</a></li>
        <li><a href="#">9</a></li>
        <li class="splitter">&hellip;</li>
        <li><a href="#">14</a></li>
        <li><a href="#">15</a></li>
        <li class="next"><a href="#">Следующая стр. &raquo;</a></li>
      </ul>
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->

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
</body>
</html>