<?php   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
require 'header.php'; 
require 'style/style-second.php'; 
require_once 'lib/func.php' ?>
<head>
	<title>Бджолині продукти</title>
</head>
	<?php 
		$mysqli = connectDB();
		$info = $mysqli->query("SELECT * FROM products1 WHERE num = '1' ORDER BY `id` DESC");
		closeDB($mysqli);
	?>
<div class="title1" align="center">
	<h1>Бджолині продукти</h1>
</div>

<div class="container-fluid col-md-9">
	<div class="row d-flex justify-content-center">
	<?php 
		while ($products = mysqli_fetch_assoc($info)) {
			$_SESSION['title'] = $products['title'];
 			$_SESSION['foto'] = $products['foto'];
            $_SESSION['text'] = $products['desc1'];
	?>
	<div class='products-block col-md-6 col-xs-6 col-lg-3'>
		<div class='products-inner'>
			<img src="img/<?=$products['foto']?>">
				<div class='banner d-flex justify-content-center align-items-center'>
					<h4><?=$products['title']?></h4>
				</div>
				<div align='center' class='text'>
					<p><?=mb_strimwidth($products['desc1'],0,200,"...");?></p>
				</div>
				 <center><button class="button-article"><a href="article.php?id=<?=$products['id']?>">Читати дальше</a></button></center> 
			</div>
		</div>
 <?php 
}
?>
	</div>
</div>

<?php require 'footer.php'; ?>