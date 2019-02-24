<?php session_start();  ?>
<?php 	
		require 'header.php';
    require 'style/style-second.php'; 
          require_once 'lib/func.php';
?>
<head>
	<title>Вхід/Реєстрація</title>
	<style type="text/css">
		input,button{
			outline: none;
		}

	</style>
</head>
<?php
$_SESSION['success_title'] = "<a href='enter.php'>Увійти</a>";
if (isset($_POST['enter'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
  if (checkUser($login,$password)) {
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    $err = "Ви успішно зайшли на сайт!";
    $_SESSION['success_title'] = "<a href='logout.php'>Вихід</a>";

  }else{
    if (!checkUser($login,$password)) {
      $err = "Веденний вами пароль або логін некорректний";
    }
  }
}
?>
<div class="title1" align="center">
	<h1>Авторизація</h1>
</div>

         <form action="" method="POST" class="row text-center d-flex justify-content-center">
          <?php 
          echo "<div class='col-md-12 form-inner'>$err</div>";
          ?>
          <div class="col-md-12 form-inner">
            <input type="text" name="login" class="col-md-9" placeholder="Логін">
          </div>
          <div class="col-md-12 form-inner">
            <input type="text" name="password" class="col-md-9" placeholder="Пароль">
          </div>
          <div class="modal-footer col-md-12 d-flex justify-content-center">
          <?php 
            if ($_SESSION['success_auth'] == 1) {
              echo "<button type='button' class='btn btn-secondary'><a href='logout.php' style='color:#fff;'>Вийти</a></button>";
            }
          ?>
        	
        	<button type="submit" class="btn" name="enter" style="background-color: #d87d56;color:#fff;">Ввійти</button>
      	  </div>
        </form> 
      


<?php 	
		require 'footer.php';
?>