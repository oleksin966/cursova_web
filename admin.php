<?php  
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	require 'header.php';
	require_once 'lib/func.php';
	require 'style/style-second.php';
?>
<?php 
if (isset($_POST['send'])) {
	$title = $_POST['title'];
	$file = $_POST['file'];
	$text = $_POST['text'];
	if (!empty($_POST['articles'])) {
		foreach ($_POST['articles'] as $key) {
			$keys = $key;
		}
	}else{
		$_SESSION['error_input'] = "<center><p style='color:red'>Виберіть категорію!</p></center>";
	}
	if (empty($_POST['title']) || empty($_POST['text'])) {
		$_SESSION['error_input'] = "<center><p style='color:red'>Заповніть всі поля!</p></center>";
		   }else{ 
		   	$mysqli = connectDB();
    		$result_set = $mysqli->query("SELECT id FROM products1 WHERE title = '$title'");
    		$user = mysqli_fetch_array($result_set);
    		if (!empty($user['id'])) {
    			$err = 1;
    		}else{
    			$err = 0;
    		}
    	}
    	if ($err  == 0) {
    		admin($title,$text,$file,$keys);
    	}else{
    		$_SESSION['error_input'] = "<center><p style='color:red'>Заповніть всі поля!</p></center>";
    	}
}
?>
<head>
	<link rel="stylesheet" type="text/css" href="style/admin.css">
	<title>Адмінка</title>
	<style type="">
		.sidebar-sticky{
	border-radius: 12px; 
}
#products{
	background:#b5a642;
	display: block;
	border-radius: 12px;
}
#medonosy{
	background:lime; 
	display: none;
	border-radius: 12px;

}
html{
	background-image:url(img/fone.jpg); 
}
.nav{
	position: absolute;
	left: 0px;
	background-color:#444;
	border-radius: 12px;
	padding: 10px;
	color: #fff;
}
.nav ul li{
	padding: 3px;
	list-style-type: none;
	cursor: pointer; 
}
.nav ul li p{
	font-weight: bold;
	font-size: 20px;
}
textarea,input{
	border-radius: 12px;
	border:none;
	font-style: italic;
	color:gray; 
}
input{
	padding: 5px;
}
.title-admin{
	font-family: 'Lobster',sans-serif;
	color:#fff;
	font-size: 45px;
}
a,a:hover{
	color: #fff;
}
	</style>
</head>

<div class="title1" align="center">
	<h1>Адмін панель</h1>
</div>
<?php
if (isset($_SESSION["error_input"]))
{echo $_SESSION['error_input'];}
?>

<form method="post" action="">
	<div class="nav">
		<ul>
			<li><center><img src="img/logo1.png" width="60" height="60"></center></li>
			<li><p>Меню</p></li>
			<li><a href="#" name="prod">Продукти</a>
				<input type="radio" name="articles[]" value="1"></li>
			<li><a href="#" name="med">Медоноси</a>
				<input type="radio" name="articles[]" value="2"></li>
			<li><a href="#" name="prod">Новини</a>
				<input type="radio" name="articles[]" value="3"></li>
			<li><a href="#" name="med">Цікаві факти</a>
				<input type="radio" name="articles[]" value="4"></li>
		</ul>
	</div>
<div class="admin">
	<div id="products">
		<img src="img/admin-honey.png" width="180" height="180" style="position: absolute;">
		<div class="container">
			<div class="row">
				<div class="col-md-12  d-flex justify-content-center" style="padding: 15px;">
				<input type="text" name="title" class="col-md-3" placeholder="Заголовок">
				</div>
				<div class="col-md-12  d-flex justify-content-center" style="padding: 15px;">
				<input type="file" name="file" class="col-md-3">
				</div> 
				<div class="col-md-12 d-flex justify-content-center" style="padding: 15px;">
				<textarea name="text" class="col-md-12" cols="40" rows="10" placeholder="Введіть текст..."></textarea>
				</div>
				<div class="col-md-12  d-flex justify-content-center" style="padding: 15px;">
				<input type="submit" name="send" class="col-md-3" placeholder="Відправити">
				</div>
			</div>
		</div>
	</div>
</form>
</div>
<?php
/* unset($_SESSION['error_input']);*/
// $_SESSION['error_input'] = null;
		require 'footer.php';
?>
