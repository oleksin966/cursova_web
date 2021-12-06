<?php 	 
	session_start();
	require_once '../lib/func.php';
	$mysqli = connectDB();
	
	close($mysqli);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style-shop.css">
    	 <!--Fonts Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	<div class="basket">
		<i class="fa fa-shopping-cart"></i>
		<!-- <i class="fas fa-shopping-cart"></i> -->
	</div>
<div style="max-width:1200px;margin: 50px auto;">
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="https://banner2.kisspng.com/20180512/kew/kisspng-honey-food-sugar-substitute-sweetness-5af6dcda8560c1.3477177815261278345463.jpg" alt="Card image cap">
    <div class="card-body">
    	<div class="flex-block">
    		<h5 class="card-title">Мед гречаний(<span>5</span>)</h5>
    		<span>$100</span>
    	</div>

      <p class="card-text">дуже класний мед ням ням ням))))</p>
      <div class="flex-block">
      		<input type="number" name="" style="width: 50px" value="0" min="0">
      		<span>$300</span>
      		<button class="btn btn-danger">В корзину</button>
  	  </div>
      <p class="card-text"><small class="text-muted"><?=date('Y-m-d')?></small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div>
</body>
</html>