<?php session_start();  ?>
<?php 
require_once 'lib/func.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta   charset="utf-8">
	<!--Bootstrap-->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
	
  <!--Fonts Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Anton|Lobster|Noto+Sans+TC|Open+Sans+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Cuprum|Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="style/style.css">
<link rel="stylesheet" type="text/css" href="style/animate.css">
<?php #require 'style/style.php'; ?>
<?php# require 'style/animate.php'; ?>
<?php require 'js/wow.min.php'; ?>
<?php require 'js/jquery.spincrement.min.php'; ?>
<?php require 'js/custom.php'; ?>
<script>
  new WOW().init();
</script>

</head>
<body>
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
        <a class="nav-link" href="#">Медоноси<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Лікувальння бджолами<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Інше
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Форум</a>
          <a class="dropdown-item" href="#">Новини</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#">Цікаві факти</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Пошук" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Пошук</button>
    </form>
<li class="reg">
    <i class="fas fa-users"></i>
    <ul class="reg_it">
       <li>
        <?php 
        $title_enter = $_SESSION['success_title'];
        ?>
        <a href="reg.php"><?=$title_reg;?></a>
      </li> 
      <li>
        <a href="enter.php" name="title" id="auth"><?=$title_enter?></a>
      </li>
    </ul>
</li>
</div>
</nav> 



