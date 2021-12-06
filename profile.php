<?php  
/*
Імя
Прізвище
Фото
Дата народження
Країна, Місто
Дата приєднання
Пошта
Соц мережі
Про себе
*/
 session_start();
 require_once 'header.php';
 require_once 'style/style-profile.php';
 require_once 'lib/func.php';
?>
<?php  
	$flag = $_SESSION['login'];
	$mysqli = connectDB();
	$result = $mysqli->query("SELECT * FROM users WHERE login = '$flag'");
	closeDB($mysqli);
?>

 <div class="profile">
	<?php  
	// while ($res = mysqli_fetch_array($result)) {
	// 	echo $res["id"];
	// 	echo $res["login"];
	// 	echo $res["password"];
	

	?>
</div> 


