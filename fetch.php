
<?php 
	if (!empty($_GET['q'])) { // Перевірка на наявність символів в полі Пошуку
		$mysqli = new mysqli("rudy.zzz.com.ua","oleksin9666","Stoner456","oleksin_9666"); // Підключення до БД
		$q = $_GET['q'];      // Змінна в якій передається пошуковий запит
		$query = "SELECT * FROM `products1` WHERE `num` != '3' AND `title` LIKE '%".$q."%'"; // Запит в базу данних
		$result = $mysqli->query($query); // Формування результату
		while ($itog = mysqli_fetch_array($result)) {
       echo "<a href='article.php?id=".$itog["id"]."'>".$itog["title"]."</a>"; // Вивід результату пошуку
   }
 }
?>

