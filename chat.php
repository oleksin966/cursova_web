<?php 
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    }  
?>
<style type="text/css">
.detailBox {
    width:360px;
    border:1px solid #bbb;
    background: #fff;
}
.titleBox {
    background-color:#fdfdfd;
    padding:10px;
}
.titleBox label{
  color:#444;
  margin:0;
  display:inline-block;
}

.commentBox {
    padding:10px;
    border-top:1px dotted #bbb;
}
.commentBox .form-group:first-child, .actionBox .form-group:first-child {
    width:65%;
}
.commentBox .form-group:nth-child(2), .actionBox .form-group:nth-child(2) {
    width:35%;
}
.actionBox .form-group * {
    width:100%;
}
.taskDescription {
    margin-top:10px 0;
    width: 300px;
    font-family: 'Lobster',sans-serif;

}
.commentList {
    padding:0;
    list-style:none;
    min-height:200px;
    overflow:auto;
    resize: vertical;
}
.commentList li {
    margin:0;
    margin-top:10px;
}
.commentList li > div {
    display:table-cell;
}
.commenterImage {
    width:30px;
    height:100%;
}
.commentText p {
    margin:0;
}
.commentText{
	width: 240px!important;
	height: auto;
	padding: 3px;
	white-space: normal;

}
.sub-text {
    color:#aaa;
    font-family:verdana;
    font-size:11px;
}
.actionBox {
    border-top:1px dotted #bbb;
    padding:10px;
}
</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!--Імпорт бібліотеки JQuery-->
<script>
$(document).ready(function(){
$("#formx").on("submit", function(event) { // Обробка форми при відправленні
    event.preventDefault();   // Відміна перезагрузки сторінки
    var form_data = $(this).serialize(); // змінна у якій зберігається форматовані данні з форми
    $.ajax({
           url: "chat_add.php", // перенаправлення на файл де обробляється запит
          method: "POST",  // Метод відправлення форми
           data: form_data, // Зміна яка містить в собі данні з поля перед відправленням на сервер
           dataType:"html",
           success: function(data)
           {
              $('#formx')[0].reset(); // видалення данних з текстового поля після відправлення
              load_chat(); // загрузка всіх повідомлень 
           }
         })
});
load_chat(); // загрузка всіх повідомлень 
function load_chat() // функція загрузки всіх повідомлень
 {
  $.ajax({
   url:"chat_fetch.php", // файл який витягає всі повідомлення з бази данних
   method:"POST",
   success:function(data)
   {
    $("#scroll-down").html(data);
    var height = 0;
    var counter = 0;
    $('#scroll-down li').each(function(i, value){
    height += parseInt($(this).height());
    counter += 1;
    });
    height += '';
    $("#scroll-down").animate({scrollTop: counter*60}); 
   } // функція яка за замовчуванням виставляє повзунок внизу.
  })
 }
});
    $("#scroll-chat").click(function(){
    $("#scroll-down").animate({
        scrollTop: $("#scroll-down li").length * 60});
});
</script>
<div class="detailBox">
    <div class="commentBox">
        <button type="button" class="close" aria-hidden="true">&times;</button>
        <center><h1 class="taskDescription">Чат</h1></center>
    </div>
    <div class="actionBox">
        <ul class="commentList" id="scroll-down">
        </ul>
        <?php if (!empty($_SESSION["login"])) {
        	echo "<form class='form-inline' method='POST' id='formx'>
            <div class='form-group'>
                <input class='form-control' type='text' id='dataText' name='message' placeholder='Введіть повідомлення...' />
            </div>
            <div class='form-group'>
                <input type='submit' name='send_mess' id='send' class='btn btn-info' value='Надіслати' />
            </div>
        </form>";
        }else{
        	echo "<center><p style='width:240px;white-space:normal;'>Для того, щоб спілкувтися в чаті <a href='enter.php' style='color:red;'>Увійдіть</a> або <a href='reg.php' style='color:red;'>Зареєструйтесь</a> на нашому сайті<p></center>";
        }
        ?>
    </div>
</div>

