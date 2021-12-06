<?php    
if(!isset($_SESSION)) 
{ 
  session_start(); 
};  
require_once 'lib/func.php'; // підключення бібліотеки з функціями підключення до БД
unset($_SESSION['enter_title']); 
$_SESSION['success_title'] = "<a href='enter.php' class='dropdown-item'>Увійти</a>";
if (isset($_POST['enter'])) { // беремо дані з форми входу
  $_SESSION['admin_panel'] = Null;
  $_SESSION['auth_error'] = Null; // обнуляємо поточні сесії 
  $login = $_POST['login'];
  $password = $_POST['password'];
  $login = stripslashes($login);
  $login = htmlspecialchars($login);
  $password = stripslashes($password);
  $password = htmlspecialchars($password); 
  $login = trim($login);
  $password = trim($password); // видалення зайвих символів (пробілиБ крапки і т.п.)
  if (checkUser($login,$password)) { // функція для перевірки валідності введених данних 
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    $_SESSION['auth'] = "Ви успішно зайшли на сайт!";
    $logins =  $_SESSION['login'];
    if (checkAdmin($login)) { // функція для перевірки авторизації адміністратора
     $_SESSION['admin_panel'] = "<div class='col-md-12 form-inner'><a href='admin.php'>Увійти в панель адміністратора</a></div>";
    }
  }else{
    if (!checkUser($login,$password)) {
      $_SESSION['auth_error'] = "<div class='col-md-12 form-inner'>Веденний вами пароль або логін некорректний</div>";
    }
  }
  header("Location:".$_SERVER['HTTP_REFERER']);
}
  require 'header.php';
  require 'style/style-second.php'; 
?>
<head>
  <title>Вхід/Реєстрація</title>
  <style type="text/css">
    input,button{
      outline: none;
    }
  </style>
</head>
<div class="title1" align="center">
	<h1>Авторизація</h1>
</div>
         <form action="" method="POST" class="row text-center d-flex justify-content-center">
          <?php 
          if (isset($_SESSION['admin_panel']))
          {
            echo $_SESSION['admin_panel'];
          };
          if (isset($_SESSION['auth_error']))
          {
            echo $_SESSION['auth_error'];
          }
          if (!empty($_SESSION['password'])) {
             echo "<div class='col-md-12 form-inner'>".$_SESSION['auth']."<b>".$_SESSION['login']."</b></div>";
             $_SESSION['success_title'] = "<a href='logout.php' class='dropdown-item'>Вихід</a>";
             unset($_SESSION['auth_error']);
          }else{
              $_SESSION['success_title'] = "<a href='enter.php' class='dropdown-item'>Увійти</a>";
              unset($_SESSION['auth']);
              unset($_SESSION['login']);
          }
          ?>
          <div class="col-md-12 form-inner">
            <input type="text" name="login" class="col-md-9" placeholder="Логін">
          </div>
          <div class="col-md-12 form-inner">
            <input type="password" name="password" class="col-md-9" placeholder="Пароль">
          </div>
          <div class="modal-footer col-md-12 d-flex justify-content-center">
          <?php 
            if (!empty($_SESSION['auth'])) {
              echo "<button type='button' class='btn btn-secondary'><a href='logout.php' style='color:#fff;'>Вийти</a></button>";
            }
          ?>
        	
        	<button type="submit" class="btn" name="enter" style="background-color: #d87d56;color:#fff;">Увійти</button>
      	  </div>
        </form> 
      


<?php 	
		require 'footer.php';
?>