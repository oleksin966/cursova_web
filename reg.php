<?php session_start();  ?>
<?php   
   require_once 'header.php';
    require_once 'style/style-second.php'; 
      require_once 'lib/func.php';
?>
<?php 
  if (isset($_POST["reg"])) {
      $login = htmlspecialchars($_POST["username"]);
      $password = htmlspecialchars($_POST["password"]);
      $r_password = htmlspecialchars($_POST["r_password"]);
      $email = htmlspecialchars($_POST["email"]);
      $bad = false;
      $login = stripslashes($login);
      $login = htmlspecialchars($login);
      $password = stripslashes($password);
      $password = htmlspecialchars($password);
      $login = trim($login);
      $password = trim($password);
      unset($_SESSION['error_login']);
      unset($_SESSION['error_password']);
      unset($_SESSION['reg_success']);
      unset($_SESSION['error_email']);
      if (strpos($email, '@') == false) {
        $_SESSION['error_email'] = 1;
        $bad = true;
      }
      if ((strlen($login) < 3) || (strlen($login) > 32)){
        $_SESSION['error_login'] = 1;
        $bad = true;
      }
      if ((strlen($password) < 6) || (strlen($password) > 32)){
        $_SESSION['error_password'] = 1;
        $bad = true;
      }
       $mysqli = connectDB();
       $check_login = $mysqli->query("SELECT id FROM users WHERE login='$login'");
       $check_login_array = mysqli_fetch_assoc($check_login);
        if (!empty($check_login_array['id'])) {
        $_SESSION['error_logins'] = 1;
          $err = "Цей логін вже використовується!";
          $bad = true;
          closeDB($mysqli);
      }else{      
        if (!$bad) {
        regUser($login,$password,$email);
        $err = "Реєстрація пройшла успішно!";
      }
      }
    }
    

      


      
 

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
	<h1>Реєстрація</h1>
</div>




       <form action="" method="post">
        <div  class="row text-center d-flex justify-content-center">
          <?php 
          echo "<div class='col-md-12 form-inner'>$err</div>";
          ?>
          <!--Логін-->
          <?php 
            if ($_SESSION['error_login'] == 1) {
              echo "<div class='col-md-12 form-inner'><p style='color:red'>Введено некоректний логін</p></div>";
            }
          
          ?>
          <div class="col-md-12 form-inner">
            <input type="text" name="username" class="col-md-9" placeholder="Ім'я користувача">
          </div>
          <!--Емайл--> 
          <?php 
            if ($_SESSION['error_email'] == 1) {
              echo "<div class='col-md-12 form-inner'><p style='color:red'>Введено некоректний email</p></div>";
            }
          ?>
          <div class="col-md-12 form-inner">
            <input type="text" name="email" class="col-md-9" placeholder="E-mail">
          </div>
          <!--Пароль--> 
          <?php 
           if ($_SESSION['error_password'] == 1) {
              echo "<div class='col-md-12 form-inner'><p style='color:red'>Введено некоректний пароль</p></div>";
            } 
          ?>
          <div class="col-md-12 form-inner">
            <input type="text" name="password" class="col-md-9" placeholder="Пароль">
          </div>
          <div class="col-md-12 form-inner">
            <input type="text" name="r_password" class="col-md-9" placeholder="Повторіть пароль">
          </div> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" >Закрити</button>
          <button type="submit" class="btn" name="reg" style="background-color: #d87d56;color:#fff;">Зареєструватися</button>
        </div>
      </form>



      


<?php 	
		require 'footer.php';
?>