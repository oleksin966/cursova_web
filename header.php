<?php 
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
require_once 'lib/func.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta   charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Bootstrap-->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
	
  <!--Fonts Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Anton|Lobster|Noto+Sans+TC|Open+Sans+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Cuprum|Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="style/animate.css">
<?php
 require 'js/wow.min.php'; 
 require 'js/jquery.spincrement.min.php'; 
 require 'js/custom.php'; 
?>
<script>
    new WOW().init();
</script>

</head>
<body onload="chatOpen();">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="img/logo1.png" width="60" height="60"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Головна<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="aboutbee.php">Все про бджоли<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="product.php">Продукти<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="flowers.php">Медоноси<span class="sr-only">(current)</span></a>
      </li>
      <?php 
        if(isset($_SESSION['admin_panel']))
        {
          echo "<li class='nav-item active'>
        <a class='nav-link' href='admin.php'>Адмін-панель<span class='sr-only'>(current)</span></a>
      </li>";
        }
      ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Інше
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="com.php">Форум</a>
          <a class="dropdown-item" href="news.php">Новини</a>
          <a class="dropdown-item" href="treatment.php">Лікувальння бджолами</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#">Цікаві факти</a>
        </div>
      </li>
    </ul>
<style type="text/css">
.reg{
  color: #fff;
}
.reg i{
  color:#fff;
  font-size: 30px;
}
.reg a{
  color: #000;
}
.reg .dropdown-toggle::after{
  display: none;
}
.reg .dropdown-menu{
  background: silver;
  left: -60px;
}
.reg .dropdown-menu:nth-child(2)::after{
   left: 90px;
}
.reg .dropdown-menu::after{
   position: absolute;
    left: 55%;
    top: -15px;
    width: 0;
    height: 0;
    content: '';
    border-left: 20px solid transparent;
    border-right: 20px solid transparent;
    border-bottom: 20px solid silver;
}
@media screen and (max-width: 1024px){
.reg .dropdown-menu{
    left: -20px;
  }
.reg .dropdown-menu::after{
  left: 55px;
}
.reg .dropdown-menu:nth-child(2)::after{
   left: 50px;
}
}

</style>
      <li class="nav-item dropdown reg" id="scroll-chat">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">
          Чат
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php 
          require_once 'chat.php'; 
          ?>
        </div>
      </li>
   <form class="form-inline my-2 my-lg-0">
       <?php require 'search.php'; // відображення згенерованого пошуковим запитом результату?>
    </form> 
    <script>
$(document).ready(function(e){
  $("#text").keyup(function(){  // перевірка на наявність символів в пошуковомі полі
    $("#here").css("display","block"); // додавання css властивості
    var x = $(this).val();             // Отримання данних з поля пошуку
    $.ajax({
      type:'GET',                      // Метод відправлення
      url:'fetch.php',                 // Файл де обробляється пошуковий запит та виводиться результат
      data:'q='+x,
      success:function(data){
        $("#here").html(data);        // вивід результату
      }
    })
    if (x == '') {
      $("#here").css("display","none"); 
    }
  });
  });
</script>
      <li class="nav-item dropdown reg">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-users"></i>
        </a>
        <?php 
        $title_enter = $_SESSION['success_title'];
        if ($title_enter == null)
        {
          $title_enter = "<a href='enter.php' class='dropdown-item'>Увійти</a>";
        }
        ?>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="reg.php">Зареєструватись</a>
<?=$title_enter?>
        </div>
      </li>
</div>
</nav> 

