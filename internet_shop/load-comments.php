<?php  
include 'db.php';
			$sql = "SELECT * FROM shop";
			$result = $mysqli->query($sql);
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<p>";
				echo $row["title"];
				echo "</p>";
				echo "<p>";
				echo $row["describes"];
				echo "</p>";
				echo "<p>";
				echo $row["price"];
				echo "</p>";
				echo "<hr />";
				//echo date("h:m:s");
			}
		?>