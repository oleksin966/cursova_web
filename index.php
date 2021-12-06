<?php 
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
  require 'header.php';
?>
<head>
  <title>Головна</title>
    <!--Bootstrap libs-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style>
    .blocks{
      background-image: url('img/fon1.png')!important;
    }
    .blocks-inner .text-center
    {
      padding-bottom: 40px !important;
    }
    .blocks-inner a{
      position: relative;
      bottom: -20px;
    }
  </style>
</head>

<!-- Slider -->  
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="info">
    <div class="left-foto"><img src="img/left.png" height="300"></div>
    <div class="name w-100 text-center d-flex flex-column justify-content-center align-items-center">
        <h1>Бджолина сім'я</h1>
        <h2>Сайт для бджолярів та бджільництво. Все про бджоли , їх утримання та догляд за ними.</h2>
        <div class="circle"><img src="img/logo.png" width="200" height="200"></div>
        <h2>На цьому сайті ви зможете знайти корисну інформацію та дізнатися багато корисних порад про це ремесло, а також поспілкуватися чи задати питання</h2>
    </div>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/beekeeper.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/footer.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/beekeeper5.jpg" alt="Third slide">
    </div>
  </div>
</div>
<!-- Slider -->  


<!--Блоки-->
<div class="blocks">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-lg-3 blocks-inner wow bounceInLeft">
        <img src="img/logo.png" class="logo-block">
        <div class="text-center">
          <img src="img/honey.png">
          <h1>Мед</h1>
          <p>В даний час властивості меду добре вивчені і широко використовуються для профілактики і лікування різних захворювань. Адже крім характерного неповторного смаку і аромату, завдяки яким він так любимо багатьма людьми і широко використовується, як в кулінарії, так і в якості самостійного продукту, мед має чудові антибактеріальні, бактерицидні та протизапальні властивості.</p>
          <a href="#">Детальніше</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 blocks-inner wow bounceInDown">
        <img src="img/logo.png" class="logo-block">
        <div class="text-center">
          <img src="img/sotu.png">
          <h1>Прополіс</h1>
          <p>Бджолиний прополіс - це ще й унікальний природний антибіотик, подібних якому немає. Всім відомо, що бактерії, що вижили після «атаки» антибіотика, можуть виробити до нього імунітет. Так ось це правило не поширюється на бджолиний клей. Численні дослідження показали, що в світі не існує бактерій, здатних перебороти дію прополісу.</p>
          <a href="#">Детальніше</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 blocks-inner wow  bounceInUp">
        <img src="img/logo.png" class="logo-block">
        <div class="text-center">
          <img src="img/flower.png">
          <h1>Маточне молочко</h1>
          <p>Пилок, зібраний бджолами, схожа на зернятка проса — це грудочки твердої консистенції. Якщо на неї натиснути, вона сплюснеться. Колір продукту може варіювати від яскраво-жовтого до темно-оранжевого або навіть фіолетового. Це обумовлено медоносною рослиною, з якого здійснювався збір. Розміри крупинок пилку також відрізняються у різних видів квітів. Вона має приємний Запах, квітково-медовий. На смак він солодкуватий і трохи пряна.</p>
          <a href="#">Детальніше</a>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 blocks-inner wow  bounceInRight">
      <img src="img/logo.png" class="logo-block">   
        <div class="text-center">
          <img src="img/bee-mother.png">
          <h1>Квітковий пилок</h1>
          <p>Маточне молочко - продукт бджільництва. Якщо точніше - це молоко, яким бджоли вигодовують своїх діток, коли вони знаходяться в грудному віці. Можна собі уявити, наскільки це корисний і сильнодіючий продукт. Адже за рахунок нього маленька личинка виростає у дорослу бджолу, тобто проходить всі етапи розвитку особини, отримуючи при цьому найнеобхідніші для життя речовини</p>
          <a href="#">Детальніше</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Блоки-->


<!--Хрень-->
<div class="hren">
<div class="container-fluid">
  <div class="row">
    <div class="left-bar col-md-12 col-lg-6 wow zoomInLeft">
      <div class="left-bar-inner text-center">
        <img src="img/beekeeper.jpg">
        <p>"Бджільництво є найблагороднішим заняттям для мислячих людей. Пристойність існування бджіл... легке і приємне малоробство при їх утриманні й значний прибуток, який ними доставляється, - усе це має привертати кожного господаря до бджільництва та пробуджувати бажання завести бджіл"</p>
        <h3>П. Прокопович</h3>
      </div>
    </div>
    <div class="right-bar col-md-12 col-lg-6">
      <div class="box-down">
        <div class="box-down-item"></div>
        <div class="box-down-item"></div>
        <div class="box-down-item"></div>
      </div>
    </div>
  </div>
</div>
<!--Хрень-->

<!--Хрень-->
<div class="container-fluid">
  <div class="row">
        <div class="right-bar col-md-12 col-lg-6">
      <div class="box-down">
        <div class="box-down-item"></div>
        <div class="box-down-item"></div>
        <div class="box-down-item"></div>
      </div>
    </div>
    <div class="left-bar col-md-12 col-lg-6 wow zoomInRight">
      <div class="left-bar-inner text-center">
        <img src="img/beekeeper2.jpg">
             <p>"Із здійснених пошуків мною виявилось й те, що ні в одній із давніх держав не зроблено стільки важливих відкриттів і винаходів у бджолиному господарстві, скільки їх зроблено в слов'янських землях"</p>
            <h3>М. Вітвіцький</h3>
                 <p>"При достатньому старанні навіть бідний бджоляр може досягти достатку за допомогою бджіл"</p>
    <h3>Т. Цесельський</h3>
      </div>
    </div>
  </div>
</div>
</div>
<!--Хрень-->


<!--Статистика-->
<div class="spincrement d-flex align-items-center">
  <div class="container">
    <div class="row d-flex   justify-content-center">
      <div class="circle-outer col-md-4 d-flex justify-content-center row text-center">
        <div class="circles">
         <span class="inc" data-from="0" data-to="80">80</span><span>&nbsp тис.</span>
         </div>
         <div class="col-md-12" style="width: 80%;"><hr class="col-md-12"></div>
        <p class="col-md-12 justify-content-center">Тонн меду щорічно виробляється в Україні. З них лише 25-30 тис. тонн йде на внутрішній ринок. Все інше експортується.</p>
    </div>
      <div class="circle-outer col-md-4 d-flex  justify-content-center row text-center">
        <div class="circles">
         <span class="inc">400</span><span>&nbsp тис.</span>
        </div>
        <div class="col-md-12" style="width: 80%"><hr class="col-md-12"></div>
         <p class="col-md-12">Осіб займається в Україні бджільництвом. Це один з найбільших в світі показників. Фактично, кожен сотий українець — пасічник.</p>
    </div>
      <div class="circle-outer col-md-4 d-flex  justify-content-center row text-center">
        <div class="circles">
         <span>$</span><span class="inc">87</span><span>&nbsp млн.</span>
        </div>
        <div class="col-md-12" style="width: 80%"><hr class="col-md-12"></div>
        <p class=" col-md-12">Загальна вартість експортованого меду за 2021 рік. Це рекордний обсяг у порівнянні з аналогічним періодом минулих років.</p>
    </div>
    </div>
  </div>
</div>
<!--Статистика-->






 
<div class="google-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10182.28056265804!2d30.473732692646422!3d50.355922482987566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c86496026557%3A0x495c2cd8fe739dea!2z0JjQvdGB0YLQuNGC0YPRgiDQn9GH0LXQu9C-0LLQvtC00YHRgtCy0LAg0LjQvC4g0J8u0JguINCf0YDQvtC60L7Qv9C-0LLQuNGH0LA!5e0!3m2!1sru!2sua!4v1534162063069" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
</script>
</div>
<?php 
  if (isset($_POST["submit"])) {
      $to = "oleksin.966@gmail.com";
      $name = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];
      if (stristr($email, '@')) {
        mail($to, $name, $message);
         echo "<script>alert(\"Повідомлення успішно надіслано!\");window.location = window.location.href</script>";
      }else{
        $err = "<p class='posta-mes' style='color:#fff'>Некоректний ввід данних</p>";
      }
  }
?>
<footer>
  <div class="footer-hiden">
    <div class="footer-hiden-content">
      <center>
        <div class="footer-logo">
          <img src="img/logo.png">
        </div>
          <p style="color: red!important;">Бджолина сім'я</p>
      </center>
    </div>
    <div class="footer-hiden-form">
      <form action="" method="post">
        <div class="d-flex justify-content-center">
          <div class="posta"><input type="text" name="name" placeholder="Ім'я"></div>
          <div class="posta"><input type="text" name="email" placeholder="E-mail"></div>
          <div class="posta"><input type="text" name="message" placeholder="Повідомлення"></div>
        </div>
        <center>
          <?php 
          if (isset($err))
          {
            echo $err;
          }
          ?>
          <button type="submit" name="submit" id="send-mail" class="btn btn-dark">Відправити</button>
        </center>
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


<script type="text/javascript" src="js/js.js"></script>
<?php require 'js/wow.min.php'; ?>
</body>
</html>