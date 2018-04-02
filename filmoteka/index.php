<?php 
  $link = mysqli_connect("localhost", "root", "", "filmoteka");
  if ( mysqli_connect_error() ) {
      die( "Ошибка подключения к базе данных" );
  }
  if ( array_key_exists('title', $_POST) ){
    if ( $_POST['title'] == '' ) {
        // echo "введите название";
    }else if ( $_POST['genre'] == '' ){
        // echo "введите название";
    }else if ( $_POST['year'] == '' ){
      // echo "введите название";
    }else {
      $query = "INSERT INTO `films` (`title`, `genre`, `year`) VALUES (
        '" . mysqli_real_escape_string($link, $_POST['title']) . "',
        '" . mysqli_real_escape_string($link, $_POST['genre']) . "',
        '" . mysqli_real_escape_string($link, $_POST['year']) . "'
        )";
      if ( mysqli_query($link, $query) ) {
        // echo "фильм добавлен!";
      }else {
        echo "произошла ошибка, фильмы не добавлены!";
      }
    }
  }
  $query = "SELECT * FROM `films`";
  $films = array();
  if ( $result = mysqli_query( $link, $query) ) {
      while ( $row = mysqli_fetch_array($result) ) {
        $films[] = $row;
      }
  }
 ?>



<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8"/>
    <title>HW - MYSQL</title>
    <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/><!-- build:cssVendor css/vendor.css -->
    <link rel="stylesheet" href="libs/normalize-css/normalize.css"/>
    <link rel="stylesheet" href="libs/bootstrap-4-grid/grid.min.css"/>
    <link rel="stylesheet" href="libs/jquery-custom-scrollbar/jquery.custom-scrollbar.css"/><!-- endbuild -->
<!-- build:cssCustom css/main.css -->
    <link rel="stylesheet" href="./css/main.css"/><!-- endbuild -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;subset=cyrillic-ext" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="data:application/octet-stream;base64,LyoqCiogQHByZXNlcnZlIEhUTUw1IFNoaXYgMy43LjIgfCBAYWZhcmthcyBAamRhbHRvbiBAam9uX25lYWwgQHJlbSB8IE1JVC9HUEwyIExpY2Vuc2VkCiovCiFmdW5jdGlvbihhLGIpe2Z1bmN0aW9uIGMoYSxiKXt2YXIgYz1hLmNyZWF0ZUVsZW1lbnQoInAiKSxkPWEuZ2V0RWxlbWVudHNCeVRhZ05hbWUoImhlYWQiKVswXXx8YS5kb2N1bWVudEVsZW1lbnQ7cmV0dXJuIGMuaW5uZXJIVE1MPSJ4PHN0eWxlPiIrYisiPC9zdHlsZT4iLGQuaW5zZXJ0QmVmb3JlKGMubGFzdENoaWxkLGQuZmlyc3RDaGlsZCl9ZnVuY3Rpb24gZCgpe3ZhciBhPXQuZWxlbWVudHM7cmV0dXJuInN0cmluZyI9PXR5cGVvZiBhP2Euc3BsaXQoIiAiKTphfWZ1bmN0aW9uIGUoYSxiKXt2YXIgYz10LmVsZW1lbnRzOyJzdHJpbmciIT10eXBlb2YgYyYmKGM9Yy5qb2luKCIgIikpLCJzdHJpbmciIT10eXBlb2YgYSYmKGE9YS5qb2luKCIgIikpLHQuZWxlbWVudHM9YysiICIrYSxqKGIpfWZ1bmN0aW9uIGYoYSl7dmFyIGI9c1thW3FdXTtyZXR1cm4gYnx8KGI9e30scisrLGFbcV09cixzW3JdPWIpLGJ9ZnVuY3Rpb24gZyhhLGMsZCl7aWYoY3x8KGM9YiksbClyZXR1cm4gYy5jcmVhdGVFbGVtZW50KGEpO2R8fChkPWYoYykpO3ZhciBlO3JldHVybiBlPWQuY2FjaGVbYV0/ZC5jYWNoZVthXS5jbG9uZU5vZGUoKTpwLnRlc3QoYSk/KGQuY2FjaGVbYV09ZC5jcmVhdGVFbGVtKGEpKS5jbG9uZU5vZGUoKTpkLmNyZWF0ZUVsZW0oYSksIWUuY2FuSGF2ZUNoaWxkcmVufHxvLnRlc3QoYSl8fGUudGFnVXJuP2U6ZC5mcmFnLmFwcGVuZENoaWxkKGUpfWZ1bmN0aW9uIGgoYSxjKXtpZihhfHwoYT1iKSxsKXJldHVybiBhLmNyZWF0ZURvY3VtZW50RnJhZ21lbnQoKTtjPWN8fGYoYSk7Zm9yKHZhciBlPWMuZnJhZy5jbG9uZU5vZGUoKSxnPTAsaD1kKCksaT1oLmxlbmd0aDtpPmc7ZysrKWUuY3JlYXRlRWxlbWVudChoW2ddKTtyZXR1cm4gZX1mdW5jdGlvbiBpKGEsYil7Yi5jYWNoZXx8KGIuY2FjaGU9e30sYi5jcmVhdGVFbGVtPWEuY3JlYXRlRWxlbWVudCxiLmNyZWF0ZUZyYWc9YS5jcmVhdGVEb2N1bWVudEZyYWdtZW50LGIuZnJhZz1iLmNyZWF0ZUZyYWcoKSksYS5jcmVhdGVFbGVtZW50PWZ1bmN0aW9uKGMpe3JldHVybiB0LnNoaXZNZXRob2RzP2coYyxhLGIpOmIuY3JlYXRlRWxlbShjKX0sYS5jcmVhdGVEb2N1bWVudEZyYWdtZW50PUZ1bmN0aW9uKCJoLGYiLCJyZXR1cm4gZnVuY3Rpb24oKXt2YXIgbj1mLmNsb25lTm9kZSgpLGM9bi5jcmVhdGVFbGVtZW50O2guc2hpdk1ldGhvZHMmJigiK2QoKS5qb2luKCkucmVwbGFjZSgvW1x3XC06XSsvZyxmdW5jdGlvbihhKXtyZXR1cm4gYi5jcmVhdGVFbGVtKGEpLGIuZnJhZy5jcmVhdGVFbGVtZW50KGEpLCdjKCInK2ErJyIpJ30pKyIpO3JldHVybiBufSIpKHQsYi5mcmFnKX1mdW5jdGlvbiBqKGEpe2F8fChhPWIpO3ZhciBkPWYoYSk7cmV0dXJuIXQuc2hpdkNTU3x8a3x8ZC5oYXNDU1N8fChkLmhhc0NTUz0hIWMoYSwiYXJ0aWNsZSxhc2lkZSxkaWFsb2csZmlnY2FwdGlvbixmaWd1cmUsZm9vdGVyLGhlYWRlcixoZ3JvdXAsbWFpbixuYXYsc2VjdGlvbntkaXNwbGF5OmJsb2NrfW1hcmt7YmFja2dyb3VuZDojRkYwO2NvbG9yOiMwMDB9dGVtcGxhdGV7ZGlzcGxheTpub25lfSIpKSxsfHxpKGEsZCksYX12YXIgayxsLG09IjMuNy4yIixuPWEuaHRtbDV8fHt9LG89L148fF4oPzpidXR0b258bWFwfHNlbGVjdHx0ZXh0YXJlYXxvYmplY3R8aWZyYW1lfG9wdGlvbnxvcHRncm91cCkkL2kscD0vXig/OmF8Ynxjb2RlfGRpdnxmaWVsZHNldHxoMXxoMnxoM3xoNHxoNXxoNnxpfGxhYmVsfGxpfG9sfHB8cXxzcGFufHN0cm9uZ3xzdHlsZXx0YWJsZXx0Ym9keXx0ZHx0aHx0cnx1bCkkL2kscT0iX2h0bWw1c2hpdiIscj0wLHM9e307IWZ1bmN0aW9uKCl7dHJ5e3ZhciBhPWIuY3JlYXRlRWxlbWVudCgiYSIpO2EuaW5uZXJIVE1MPSI8eHl6PjwveHl6PiIsaz0iaGlkZGVuImluIGEsbD0xPT1hLmNoaWxkTm9kZXMubGVuZ3RofHxmdW5jdGlvbigpe2IuY3JlYXRlRWxlbWVudCgiYSIpO3ZhciBhPWIuY3JlYXRlRG9jdW1lbnRGcmFnbWVudCgpO3JldHVybiJ1bmRlZmluZWQiPT10eXBlb2YgYS5jbG9uZU5vZGV8fCJ1bmRlZmluZWQiPT10eXBlb2YgYS5jcmVhdGVEb2N1bWVudEZyYWdtZW50fHwidW5kZWZpbmVkIj09dHlwZW9mIGEuY3JlYXRlRWxlbWVudH0oKX1jYXRjaChjKXtrPSEwLGw9ITB9fSgpO3ZhciB0PXtlbGVtZW50czpuLmVsZW1lbnRzfHwiYWJiciBhcnRpY2xlIGFzaWRlIGF1ZGlvIGJkaSBjYW52YXMgZGF0YSBkYXRhbGlzdCBkZXRhaWxzIGRpYWxvZyBmaWdjYXB0aW9uIGZpZ3VyZSBmb290ZXIgaGVhZGVyIGhncm91cCBtYWluIG1hcmsgbWV0ZXIgbmF2IG91dHB1dCBwaWN0dXJlIHByb2dyZXNzIHNlY3Rpb24gc3VtbWFyeSB0ZW1wbGF0ZSB0aW1lIHZpZGVvIix2ZXJzaW9uOm0sc2hpdkNTUzpuLnNoaXZDU1MhPT0hMSxzdXBwb3J0c1Vua25vd25FbGVtZW50czpsLHNoaXZNZXRob2RzOm4uc2hpdk1ldGhvZHMhPT0hMSx0eXBlOiJkZWZhdWx0IixzaGl2RG9jdW1lbnQ6aixjcmVhdGVFbGVtZW50OmcsY3JlYXRlRG9jdW1lbnRGcmFnbWVudDpoLGFkZEVsZW1lbnRzOmV9O2EuaHRtbDU9dCxqKGIpfSh0aGlzLGRvY3VtZW50KTs="></script><![endif]-->
  </head>
  <body>
    
    <div class="container user-content pt-35">
      <h1 class="title-1"> Фильмотека</h1>
      
      <?php 
        foreach ($films as $key => $value) {
          // echo $films[$key]['id'];
          // echo $films[$key]['title'];
          // echo $films[$key]['genre'];
          // echo $films[$key]['year'];
      ?>

        <div class="card mb-20">
          <h4 class="title-4"><?php echo $films[$key]['title']?></h4>
          <div class="badge"><?php echo $films[$key]['genre']?></div>
          <div class="badge"><?php echo $films[$key]['year']?></div>
        </div>
        
      <?php
       }
      ?>


      <div class="panel-holder mt-80 mb-40">
        <div class="title-4 mt-0">Добавить фильм</div>
        <form id="form" action="index.php" method="POST">
          <div id="error-position"></div>
          <label class="label-title" name="title">Название фильма</label>
          <input class="input" type="text" placeholder="Такси 2" name="title" data-error-title="название"/>
          <div class="row">
            <div class="col">
              <label class="label-title">Жанр</label>
              <input class="input" type="text" placeholder="комедия" name="genre" data-error-genre="жанр"/>
            </div>
            <div class="col">
              <label class="label-title">Год</label>
              <input class="input" type="text" placeholder="2000" name="year" data-error-year="год"/>
            </div>
          </div><a id="button-submit" class="button" href="regular">Добавить </a>
        </form>
      </div>
    </div><!-- build:jsLibs js/libs.js -->
    <script src="libs/jquery/jquery.min.js"></script><!-- endbuild -->
<!-- build:jsVendor js/vendor.js -->
    <script src="libs/jquery-custom-scrollbar/jquery.custom-scrollbar.js"></script><!-- endbuild -->
<!-- build:jsMain js/main.js -->
    <script src="js/main.js"></script><!-- endbuild -->
    <script defer="defer" src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  </body>
</html>
