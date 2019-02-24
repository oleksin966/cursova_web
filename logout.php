<?php 
		session_start();
		unset($_SESSION['login']);
		unset($_SESSION['password']);
		$_SESSION['success_title'] = "<a href='enter.php'>Увійти</a>";
		header("Location: ".$_SERVER['HTTP_REFERER']);
		
?>