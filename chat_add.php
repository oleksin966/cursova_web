<?php
        session_start(); // сесія
    if (!isset($_POST["send_mess"])) { // Обробка POST-запиту з форми 
        $name = $_SESSION["login"];    // Логін авторизованого користувача, який відправляє повідомлення
        $message = $_POST["message"];  // Відправлене повідомлення
        $date = date('Y-m-d H:i');     // Дата відправлення
        $file = 'message.txt';         // Файл де зберігаються повідомлення
        $current = file_get_contents($file); // Дістаємо данні з файлу
        $current .= "$name;$message;$date\n"; // добавляння нового повідомленя (логін,повідомлення,дата)
        file_put_contents($file,$current);    // записуємо всі данні у файл
    }else{
    	echo var_dump(isset($_POST["send_mess"])); // Тестування 
    }  

?>