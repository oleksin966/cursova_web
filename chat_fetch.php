<?php 
   if(!isset($_SESSION)) 
    { 
        session_start(); // Сесія
    }   
	$mes = file_get_contents("message.txt"); // Отримуємо всі данні з файлу
    $array = explode("\n", $mes);            // Створємо массив з слів розділених ";"
    $result = array();
    for ($i=0; $i < count($array); $i++) { 
        $temp = array_pad(explode(";","$array[$i]",3),3,null);
        $result[$i]["name"] = $temp[0];
        $result[$i]["message"] = $temp[1];
        $result[$i]["date"] = $temp[2]; // Вивід всіх повідомлень з файлу
    }
    for ($i=0; $i < count($array); $i++) { 
    echo "<li>
            <div class='commenterImage'>
                <strong id='name'>".$result[$i]['name']."</strong>
            </div>
            <div class='commentText'>
                <p id='mess'>".$result[$i]['message']."</p> 
                <span class='date sub-text' id='date'>".$result[$i]['date']."</span>
            </div>
    </li>";
}
?>


