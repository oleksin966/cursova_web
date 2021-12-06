<?php    
if(!isset($_SESSION)) 
{ 
  session_start(); // Перевірка на наявність сесії
}    
require_once 'header.php';
require_once 'style/style-second.php'; 
require_once 'lib/func.php'; //Підключення CSS стилів та бібліотек PHP

if (strpos($_SERVER["HTTP_REFERER"],"/reg.php") == false)
{
 file_put_contents("reg_ref.txt",$_SERVER["HTTP_REFERER"]); // Повернення на сторынку попереднього перегляду
}
$bad_email = false;
$bad_login = false;
$bad_password = false;
$login = Null;
$email= Null;
$err = "";
if (isset($_POST["reg"])) {
  $login = $_POST["username"];
  $password = $_POST["password"];
  $r_password = $_POST["r_password"];
  $email = $_POST["email"];            // Витягнення данних з форми
  $bad = false;
  unset($_SESSION['error_login']);
  unset($_SESSION['error_password']);
  unset($_SESSION['reg_success']);
  unset($_SESSION['error_email']);  // Видалення поточної сесії


  if (strpos($email, '@') == false) {
    $bad_email = true;
    $bad = true;
  }                             //Перевірка наявності в полі email символа @

  if ((strlen($login) <= 3) || (strlen($login) >= 32)){
    $bad_login = true;
    $bad = true;                // Перевірка довжини логіна
  }
  if ((strlen($password) <= 6) || (strlen($password) >= 32)){
    $bad_password = true;
    $bad = true;
  }                             // Перевірка довжини пароля

  $mysqli = connectDB();   // зєднання з базою данних
  $check_login = $mysqli->query("SELECT id FROM users WHERE login='$login'");
  $check_login_array = mysqli_fetch_assoc($check_login);
  if (!empty($check_login_array['id'])) {
    $err = "Цей логін вже використовується!";
    $bad = true;
    closeDB($mysqli);
  }else{      
    if (!$bad) {
      regUser($login,$password,$email); // Реєстрація нового користувача
      $err = "Реєстрація пройшла успішно!<p><a href=".file_get_contents("reg_ref.txt").">Повернутися до попереднього перегляду?</a></p>";
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
          echo "<div class='col-md-12 form-inner'>".$err."</div>";
          ?>
          <!--Логін-->
          <?php 
            if ($bad_login) {
              echo "<div class='col-md-12 form-inner'><p style='color:red'>Введено некоректний логін</p></div>";
            }
          
          ?>
          <div class="col-md-12 form-inner">
            <input type="text" name="username" class="col-md-9" placeholder="Ім'я користувача" value="<?php echo($login);?>">
          </div>
          <!--Емайл--> 
          <?php 
            if ($bad_email) {
              echo "<div class='col-md-12 form-inner'><p style='color:red'>Введено некоректний email</p></div>";
            }
          ?>
          <div class="col-md-12 form-inner">
            <input type="text" name="email" class="col-md-9" placeholder="E-mail" value="<?php echo($email);?>">
          </div>
          <!--Пароль--> 
          <?php 
           if ($bad_password) {
              echo "<div class='col-md-12 form-inner'><p style='color:red'>Введено некоректний пароль</p></div>";
            } 
          ?>
          <div class="col-md-12 form-inner">
            <input type="password" name="password" class="col-md-9" placeholder="Пароль">
          </div>
          <div class="col-md-12 form-inner">
            <input type="password" name="r_password" class="col-md-9" placeholder="Повторіть пароль">
          </div> 
        </div>
        <div class="modal-footer">
          <a href="enter.php"><button type="button" class="btn btn-secondary">Увійти</button></a>
          <button type="submit" class="btn" name="reg" style="background-color: #d87d56;color:#fff;">Зареєструватися</button>
        </div>
      </form>
<?php 	
		require 'footer.php';
?>