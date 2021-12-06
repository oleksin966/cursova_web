<?php  

?>
<head>
	<link rel="stylesheet" type="text/css" href="style/admin.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Адмінка</title>
<!-- 	<style type="">
		.sidebar-sticky{
	border-radius: 12px; 
}
#products{
	background:#b5a642;
	display: block;
	border-radius: 12px;
}
#medonosy{
	background:lime; 
	display: none;
	border-radius: 12px;

}
html{
	background-image:url(img/fone.jpg); 
}
.nav{
	position: absolute;
	left: 0px;
	background-color:#444;
	border-radius: 12px;
	padding: 10px;
	color: #fff;
}
.nav ul li{
	padding: 3px;
	list-style-type: none;
	cursor: pointer; 
}
.nav ul li p{
	font-weight: bold;
	font-size: 20px;
}
textarea,input{
	border-radius: 12px;
	border:none;
	font-style: italic;
	color:gray; 
}
textarea
{
	width:1000px;
	height: 600px;
}
input{
	padding: 5px;
}
.title-admin{
	font-family: 'Lobster',sans-serif;
	color:#fff;
	font-size: 45px;
}
a,a:hover{
	color: #fff;
}
	</style>
</head>

<div class="title1" align="center">
	<h1>Адмін панель</h1>
</div>
<form method="post" action="" enctype="multipart/form-data">
<div class="admin">
	<div id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-12  d-flex justify-content-center" style="padding: 15px;">
				<input type="text" name="title" class="col-md-3" placeholder="Заголовок">
				</div>
				<div class="col-md-12  d-flex justify-content-center" style="padding: 15px;">
				<input type="file" name="file" class="col-md-3">
				</div> 
				<div class="col-md-12 d-flex justify-content-center" style="padding: 15px;">
				<textarea name="text" class="col-md-12" cols="40" rows="10" placeholder="Введіть текст..."></textarea>
				</div>
				<div class="col-md-12  d-flex justify-content-center" style="padding: 15px;">
				<input type="submit" name="send" class="col-md-3" placeholder="Відправити">
				</div>
			</div>
		</div>
	</div>
</form>
</div> -->

<!-- <br><br>
<div id="target" contenteditable>
    lorem ipsum
</div>
<input type='button' id='show' value="показ">
<script>
   $( document ).ready(function(){
      $('#inpfile').on('change', function(){
        var targetDiv=document.getElementById("target");
        var file = $(this).prop('files')[0].name;
        console.log(file);
		var img=document.createElement("img");
        img.src = "p/" + file;
        targetDiv.append(img);
        /*console.log(file);
        var img=document.createElement("img");
        var reader = new FileReader();
         
        reader.addEventListener("load", function () {
           img.src=reader.result;
           console.log(img.src);
        }); 
        if (file)
           reader.readAsDataURL(file);*/
        });
   })
   $('#show').on('click', function(){
   	alert($("#target").html(  ));
   })
</script>
 -->

<?php  
/*if($_FILES['file']['name'] != '')
{
	$foto = $_FILES["file"]["name"];
	echo $foto;
	move_uploaded_file($_FILES["file"]["tmp_name"], 'p/'.$foto);
}*/
?>


 <body>
    <div id="msg" style="color:red" contenteditable></div><br/>
    <input type="file" id="photo"><br/>
  <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(document).on('change','#photo',function(){
        var property = document.getElementById('photo').files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();
        var targetDiv = document.getElementById("msg");

        if(jQuery.inArray(image_extension,['gif','jpg','jpeg','png']) == -1){
          alert("Invalid image file");
        }

        var form_data = new FormData();
        form_data.append("file",property);
        $.ajax({
          url:'upload.php',
          method:'POST',
          data:form_data,
          contentType:false,
          cache:false,
          processData:false,
          // beforeSend:function(){
          //   $('#msg').append('Loading......');
          // },
          success:function(data){
            console.log(data);
            $('#msg').append(data);
          }
        });
      });
    });
  </script>
</body>
