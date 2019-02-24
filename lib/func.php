<?php 
	session_start();
	function connectDB(){
		return new mysqli("localhost","root","","bee-family");
	}
	function closeDB($mysqli){
		$mysqli->close();
	}
	function regUser($login,$password,$email){
		$mysqli = connectDB();
		$mysqli->query("INSERT INTO users (`login`,`password`,`email`) VALUES ('$login','$password','$email')");
		closeDB($mysqli);
	}
	function checkUser($login,$password){
    // if (($login = "")||($password = "")) {
    //   return false;
    // }
    $mysqli = connectDB();
    $result_set = $mysqli->query("SELECT password FROM users WHERE login = '$login'");
    $user = mysqli_fetch_array($result_set);
    if (empty($user['password'])) {
    	return false;
    }else{
    	if ($user['password']==$password) {
    	return true;
    	}
    }
    closeDB($mysqli);
  }
	$title_reg = "Зареєструватися";


?>