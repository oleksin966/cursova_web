<?php  
	if (isset($_POST['send'])) {
		include 'db.php';
	$title = $_POST["title"];
	$desc = $_POST["desc"];
	$count = $_POST["count"];
	$price = $_POST["price"];
	$mysqli->query("INSERT INTO shop (`title`,`describes`,`price`,`count`) VALUES ('$title','$desc','$price','$count')");
		$mysqli->close();
		header("Location:".$_SERVER["HTTP_REFERER"]);
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style-shop.css">
    	<!-- Fonts Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
	<script>
		$(document).ready(function(){
			$("#send").submit(function (e) {
				e.preventDefault();
				//var msg = $("form").serialize();
				$.ajax({
					type:"POST",
					url:"load-comments.php",
					data: $(this).serialize(),
					dataType:"html",
					success: function (data) {
						alert("Все було добре");
						$("#response").html(data);
					}
				});
			});
		});
	</script>
	<form  method="POST" action="">
		<p><input type="text" name="title"></p>
		<p><input type="text" name="count"></p>
		<p><textarea type="text" name="desc" cols="30" rows="5"></textarea></p>
		<p><input type="text" name="price"></p>
		<p><input type="submit" name="send" id="send"></p>
	</form>
	<div id="response">
		<?php# require 'load-comments.php'; ?>
	</div>
</body>
</html>