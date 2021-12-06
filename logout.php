<?php 
		session_start();
		unset($_SESSION['login']);
		unset($_SESSION['password']);
		if (isset($_SESSION['admin_panel']))
        {
        	unset($_SESSION['admin_panel']);
        };
		$_SESSION['success_title'] = "<a href='enter.php' class='dropdown-item'>Увійти</a>";
		header("Location: ".$_SERVER['HTTP_REFERER']);
		
?>