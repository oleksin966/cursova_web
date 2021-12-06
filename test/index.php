<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Article FRUCTCODE.COM. How to send html-form with Ajax.</title>
  <meta name="description" content="Article FRUCTCODE.COM. How to send ajax form.">
  <meta name="author" content="fructcode.com">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script>
    /* Article FructCode.com */
$( document ).ready(function() {
    $("#btn").click(
    function(){
      sendAjaxForm('result_form', 'ajax_form', 'action_ajax_form.php');
      return false; 
    }
  );
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "text", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
          //result = $.parseJSON(response);
          $('#result_form').html(response);
      },
      error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
      }
  });
}
  </script>

</head>

<body>
    <form method="post" id="ajax_form">
        <input type="text" name="name" placeholder="NAME" /><br>
        <input type="text" name="phonenumber" placeholder="YOUR PHONE" /><br>
        <input type="button" id="btn" value="Отправить" />
    </form>

    <br>

    <div id="result_form"></div> 
</body>
</html>