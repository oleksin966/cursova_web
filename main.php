<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
	<!--Bootstrap-->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 

	<!--Bootstrap libs-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
  <!--Fonts Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Anton|Lobster|Noto+Sans+TC|Open+Sans+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Cuprum|Open+Sans|Open+Sans+Condensed:300" rel="stylesheet">

<?php require 'style/style.php'; ?>
<?php require 'style/animate.php'; ?>
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
        <a class="nav-link" href="#">Все про бджоли<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Продукти<span class="sr-only">(current)</span></a>
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
        <a data-toggle="modal"  data-target="#myModal">Зареєструватись</a>
      </li> 
      <li>
        <a data-toggle="modal"  data-target="#myModal1">Увійти</a>
      </li>
    </ul>
</li>
</div>
</nav> 



<!-- Модальне вікно реєстрація -->  
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-center">
        <h4 class="modal-title " id="myModalLabel">Реєстрація</h4>
      </div>
      <div class="modal-body container-fluid" class="col-md-12">
        <form class="row text-center">
          <div class="col-md-12 form-inner">
            <input type="text" name="username" class="col-md-9" placeholder="Ім'я користувача">
          </div>
          <div class="col-md-12 form-inner">
            <input type="text" name="email" class="col-md-9" placeholder="E-mail">
          </div>
          <div class="col-md-12 form-inner">
            <input type="text" name="password" class="col-md-9" placeholder="Пароль">
          </div>
          <div class="col-md-12 form-inner">
            <input type="text" name="r_password" class="col-md-9" placeholder="Повторіть пароль">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
        <button type="button" class="btn" style="background-color: #d87d56;color:#fff;">Зареєструватися</button>
      </div>
    </div>
  </div>
</div>
<!-- Модальне вікно реєстрація -->


<!-- Модальне вікно вхід -->  
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-center">
        <h4 class="modal-title" id="myModalLabel">Вхід</h4>
      </div>
      <div class="modal-body container-fluid">
       <form class="row text-center">
         <div class="col-md-12 form-inner">
            <input type="text" name="email" class="col-md-9" placeholder="E-mail">
          </div>
          <div class="col-md-12 form-inner">
            <input type="text" name="password" class="col-md-9" placeholder="Пароль">
          </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
        <button type="button" class="btn" style="background-color: #d87d56;color:#fff;">Зареєструватися</button>
      </div>
    </div>
  </div>
</div>
<!-- Модальне вікно вхід -->








<footer>
  <div class="footer-hiden">
    <div class="footer-hiden-content">
      <center>
        <div class="footer-logo">
          <img src="img/logo.png">
        </div>
          <p>Бджолина сім'я</p>
      </center>
    </div>
    <div class="footer-hiden-form">
      <form>
        <div class="d-flex justify-content-center">
          <div class="posta"><input type="text" name="name" placeholder="Ім'я"></div>
          <div class="posta"><input type="text" name="email" placeholder="E-mail"></div>
          <div class="posta"><input type="text" name="message" placeholder="Повідомлення"></div>
        </div>
        <center><button type="button" class="btn btn-dark">Відправити</button></center>
      </form>
    </div>
  </div>
  <div class="footer-center">
    <div class="footer-center-text">
      <p>спасибі за перегляд!</p>
      <div class="footer-center-foto">
        <div class="footer-center-foto-inner"><a href="#"><img src="img/footer.jpg"></a></div>
        <div class="footer-center-foto-inner"><a href="#"><img src="img/slider7.jpg"></a></div>
        <div class="footer-center-foto-inner"><a href="#"><img src="img/footer2.jpg"></a></div>
        <div class="footer-center-foto-inner"><a href="#"><img src="img/footer4.jpg"></a></div>
        <div class="footer-center-foto-inner"><a href="#"><img src="img/footer5.jpg"></a></div>
      </div>  
    </div>
  </div>

</footer> 



<script type="text/javascript">
  $(window).scroll(function(){
    $(".box-down-item").css("top","200px");
  })
</script> 


<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})

$('#myModal1').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>
<script type="text/javascript" src="js/js.js"></script>
<?php require 'js/wow.min.php'; ?>
</body>
</html>