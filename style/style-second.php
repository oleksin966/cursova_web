<style type="text/css">
html{
	background:url('../img/fone.jpg'); 
	display: flex;
	justify-content: center;
}
body{
	width: 80%;
}
@media screen and (max-width: 1024px){
	body{
		width: 100%;
	}
}
nav{
	position: fixed;
	right: 0%;
}
.title1{
	width: 100%;
    padding: 30px 100px 30px 100px;
	margin:100px auto;
	border-top: 5px solid #d87d56;
	border-bottom: 5px solid #d87d56;
	font-family:'Lobster',sans-serif; 
	color:#d87d56;
    animation:blusk 3s infinite; 

}
@keyframes blusk{
	0%{
		border-top: 5px solid #d87d56;
		border-bottom: 5px solid #d87d56;
		color:#d87d56;
	}
	50%{
		border-top: 5px solid lime;
		border-bottom: 5px solid lime;
		color:lime;
	}

}
.list-content li{
  list-style-type: square;
    color:#d87d56;
}
.list-content li a{
  font-style: italic;
  color:#d87d56;
  font-weight: 500;
  text-decoration: none;
}
.bee-text{
	font-family: 'Open sans condensed',sans-serif;
	font-size: 25px;
 	text-align: center;
}
.bee-text p{
	text-align: left;
}
.bee-text img{
	max-width: 100%;
}
.bee-text ul li{
	list-style-type: square;
}
.mini-gallery{
	padding: 20px;
}
.gal:hover{
	transform: scale(1.3);
	transition: 1s ease-in-out;

}
.gal{	
	width: 300px;
	height: 200px;
	overflow: hidden;
	background-size: cover;

}
.gal:after {
    content: " ";
    height: 0px;
    width: 300px;
    position: absolute;
    bottom: 0px;
    right: 0;
}
.gal:hover:after{
	height:200px;
	transition: 1s ease-in-out;
	z-index: 888;
	background: linear-gradient(to right, rgba(227, 227, 25, .65) 30%, rgba(25, 227, 25, .65) 100%);
}
.bee-info{
	padding: 20px;
}
/*registration*/
.form-inner{
  padding: 10px;
  max-width: 80%;
}
.form-inner input{
  padding: 10px;
  background-color:#E9EFF6;
  border-radius: 20px;
  border-width: 0px;
}
.form-inner input::placeholder{
  color: gray;
  font-size: 15px;
  font-style: italic;
}


/*http://www.poznavayka.org/uk/zoologiya-2/bdzhola-tvorets-medu/#a3*/
</style>