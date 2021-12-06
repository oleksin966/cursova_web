<?php 	
if(!isset($_SESSION)) 
{ 
  session_start(); 
}  
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">
		#here{
			width: 200px;
			height: 200px;
			padding: 10px;
			border:1px solid grey;
			display: none;
			background-color:white; 
			transition: .5s ease-in-out;
			position: absolute;
			top:0px;
			margin: 50px auto;
			z-index: 999;
			
		}
		#here a{
			display: block;
			width: 98%;
			font-size: 20px;
			border-bottom: 1px solid grey;
		}
		@media screen and (max-width: 1024px)
		{
			#here{
				margin: 350px auto;
			}
		}
</style>
<input type="search" name="search_q" id="text" autocomplete="off" placeholder="Пошук..."> <!--Здійснення пошуку-->
<div id="here"> <!--Відображення результатів пошуку-->
</div>


