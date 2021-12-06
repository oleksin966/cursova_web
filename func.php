<?php 
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
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
  function admin($title,$text,$file,$keys){
        $mysqli = connectDB();
        $sql = "INSERT INTO products1 (`title`,`desc1`,`foto`,`num`) VALUES ('".$title."','".$text."','".$file."','".$keys."')";
        $mysqli->query($sql);
        $mysqli->close();
  }
	$title_reg = "Зареєструватися";

 function checkAdmin($login){
    $mysqli = connectDB();
    $result_set = $mysqli->query("SELECT * FROM users WHERE login = '$login'");
    $user = mysqli_fetch_array($result_set);
    if (empty($user['login'])) {
        return false;
    }else{
        if ($user['login']=="adminivan") {
        return true;
        }
    }
    closeDB($mysqli);
 }
function commentSend($name,$text,$date){
    $mysqli = connectDB();
    $mysqli->query("INSERT INTO comment (`name`,`text`,`data`) VALUES ('".$name."','".$text."','".$date."')");
    closeDB($mysqli);
}

?>