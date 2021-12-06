<?php
   if (isset($_POST["send_mess"])) {
        $name = $_SESSION["login"];
        $message = $_POST["message"];
        $date = date('Y-m-d H:i');
        $file = 'message.txt';
        $current = file_get_contents($file);
        $current .= "$name;$message;$date\n";
        file_put_contents($file,$current);
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
    $mes = file_get_contents("message.txt");
    $array = explode("\n", $mes);
    $result = array();
    for ($i=0; $i < count($array); $i++) { 
        $temp = array_pad(explode(";","$array[$i]",3),3,null);
        $result[$i]["name"] = $temp[0];
        $result[$i]["message"] = $temp[1];
        $result[$i]["date"] = $temp[2];
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
    max-height:200px;
    overflow:auto;
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="detailBox">
    <div class="commentBox">
        <button type="button" class="close" aria-hidden="true">&times;</button>
        <center><h1 class="taskDescription">Чат</h1></center>
    </div>
    <div class="actionBox">
        <ul class="commentList" id="scroll-down">
          <?php  
            for ($i=0; $i < count($array); $i++) { ?>
              <li>
                <div class='commenterImage'>
                  <strong id='name'><?=$result[$i]['name']?></strong>
                </div>
                <div class='commentText'>
                  <p id='mess'><?=$result[$i]['message']?></p> 
                  <span class='date sub-text' id='date'><?=$result[$i]['date']?></span>
                </div>
              </li>     
          <?php } ?>
        </ul>
        <?php if (!empty($_SESSION["login"])) {
        	echo "<form class='form-inline' id='formx' action='' method='POST'>
            <div class='form-group'>
                <input class='form-control' type='text' id='dataText' name='message' placeholder='Введіть повідомлення...' />
            </div>
            <div class='form-group'>
                <button class='btn btn-default' type='submit' id='send' name='send_mess'>Відправити</button>
            </div>
        </form>";
        }else{
        	echo "<center><p style='width:240px;white-space:normal;'>Для того, щоб спілкувтися в чаті <a href='enter.php' style='color:red;'>Увійдіть</a> або <a href='reg.php' style='color:red;'>Зареєструйтесь</a> на нашому сайті<p></center>";
        }
        ?>

    </div>
</div>

