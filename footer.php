<footer>
  <div class="footer-hiden">
    <div class="footer-hiden-content">
      <center>
        <div class="footer-logo">
          <img src="img/logo.png">
        </div>
          <p>Бджолина сім'я</p>
      </center>
    </div>
    <div class="footer-hiden-form">
      <form>
        <div class="d-flex justify-content-center">
          <div class="posta"><input type="text" name="name" placeholder="Ім'я"></div>
          <div class="posta"><input type="text" name="email" placeholder="E-mail"></div>
          <div class="posta"><input type="text" name="message" placeholder="Повідомлення"></div>
        </div>
        <center><button type="button" class="btn btn-dark">Відправити</button></center>
      </form>
    </div>
  </div>
  <div class="footer-center">
    <div class="footer-center-text">
      <p>спасибі за перегляд!</p>
      <div class="footer-center-foto">
        <div class="footer-center-foto-inner"><a href="#"><img src="img/footer.jpg"></a></div>
        <div class="footer-center-foto-inner"><a href="#"><img src="img/slider7.jpg"></a></div>
        <div class="footer-center-foto-inner"><a href="#"><img src="img/footer2.jpg"></a></div>
        <div class="footer-center-foto-inner"><a href="#"><img src="img/footer4.jpg"></a></div>
        <div class="footer-center-foto-inner"><a href="#"><img src="img/footer5.jpg"></a></div>
      </div>  
    </div>
  </div>

</footer> 



<script type="text/javascript">
  $(window).scroll(function(){
    $(".box-down-item").css("top","200px");
  })
</script> 


<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})

$('#myModal1').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>
<script type="text/javascript" src="js/js.js"></script>
<?php require 'js/wow.min.php'; ?>
  <!--Bootstrap libs-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>