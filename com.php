<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
require 'header.php';
/*require_once 'style/comment.php';*/
?>
<title>Форум</title>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type="text/css">
  h2{
    font-family: 'Lobster',sans-serif;
    color:#b5a642;
  }
</style>
  <br />
  <br />
  <div class="container">
   <form method="POST" id="comment_form">
    <div class="form-group">
      <?php
        if (isset($_SESSION['login']))
        {
          echo "<h2 style='margin: 30px auto 0px;'>".$_SESSION['login']."</h2>";
        }
        else
        {
          echo "<h3 style='margin: 30px auto 0px;'>Для того, щоб почати спілкувтися на форумі <a href='enter.php' style='color:red;'>Увійдіть</a> або <a href='reg.php' style='color:red;'>Зареєструйтесь</a> на нашому сайті<h3>";
        }
      ?>
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Введіть текст..." rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Надіслати" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
  <script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>

</body>
</html>


