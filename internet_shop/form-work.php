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