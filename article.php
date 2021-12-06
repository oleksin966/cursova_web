<?php  
	  if(!isset($_SESSION)) 
    { 
        session_start(); 
    };
	require 'header.php';
	require 'style/style-second.php';
	require_once 'lib/func.php';
	$id = $_GET['id'];
	$mysqli = connectDB();
    $result_set = $mysqli->query("SELECT * FROM `products1` WHERE `id` = '$id'");
    closeDB($mysqli);
?>
<?php
while ($user = mysqli_fetch_array($result_set)) {
?>
<head>
	<title><?=$user['title']?></title>
	<style type="text/css">
	ul{
		text-align: left;
	}
	img{
		max-width: 100%!important;
		height: auto;
	}
</style>
</head>
<body>
<div class="title1" align="center">
	<h1><?=$user['title']?></h1>
</div>
<div align="center"><img src="img/<?=$user['foto']?>"></div>
<div class="bee-text" style="padding: 20px;">
<p><?=$user['desc1']?></p>	
</div>
<?php } ?>	
</body>
<?php
	require 'footer.php';
?>
