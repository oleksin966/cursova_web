<?php 	 
	session_start();
?>
<?php 	 
	require_once 'header.php';
	require_once 'style/style-second.php';
	require_once 'lib/func.php';
?>
<?php  
	$mysqli = connectDB();
	$info = $mysqli->query("SELECT * FROM products1 WHERE num = '3' ORDER BY `id` DESC");
	closeDB($mysqli);
?>
<head>
	<title>Новини</title>
</head>
<div class="title1" align="center">
	<h1>Новини</h1>
</div>
<div class="news">
	<?php  
		while($products = mysqli_fetch_assoc($info)){
	?>
	<div class="news-item">
		<div class="news-img">
			<img src="img/<?=$products['foto']?>" width="200" height="200">
		</div>
		<div class="news-text">
			<h4 class="news-title"><?=$products['title']?></h4>
			<span><?=date("Y-m-d h:m")?></span>
			<p><?=$products['desc1']?></p>
		</div>
		<div class="news-button">
			<i class="fas fa-chevron-up arrow"></i>
		</div>
</div>
	<?php } ?>
</div>


<script>
$(document).ready(function(){
	$(".news-button").click(function(){
		if ($(this).parents().closest(".news-item").css("height") === "210px") {
			$(this).parents().closest(".news-item").css("height","auto");
			$(this).children().css("transform","rotate(180deg)");
		}else{
			$(this).parents().closest(".news-item").css("height","210px");
			$(this).children().css("transform","rotate(360deg)");
		}
	});

	
});
</script>
<?php 	
	require 'footer.php';
?>