<?php
session_start();
//add_comment.php
$connect = new PDO('mysql:host=ruby.zzz.com.ua;dbname=oleksin_9666', 'oleksin9666', 'Stoner456');
$error = '';
$comment_name = '';
$comment_content = '';
if (empty($_SESSION['login'])) {
	$error .= '<p class="text-danger">Увійдіть або зареєструйтесь, щоб спілкуватись на форумі!</p>';
}
else
{
	$comment_name = $_SESSION['login'];
}
if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Введіть текст!</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO tbl_comment 
 (parent_comment_id, comment, comment_sender_name) 
 VALUES (:parent_comment_id, :comment, :comment_sender_name)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name
  )
 );
 $error = '<label class="text-success">Коментарій успішно додано</label>';
}
$data = array(
 'error'  => $error
);
echo json_encode($data);
//$connect->close();
$dbh = null;
?>


<!-- 
// if(empty($_POST["comment_name"]))
// {
//  $error .= '<p class="text-danger">Введіть імя!</p>';
// }
// else
// {
//  $comment_name = $_POST["comment_name"];
// } -->
