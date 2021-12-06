<style type="text/css">
html{
	background:url('img/fone.jpg'); 
	display: flex;
	justify-content: center;
}
body{
	width: 80%!important;
}
@media screen and (max-width: 1024px){
	body{
		width: 100%!important;
	}
	.news-text p{
		font-size: 1px;
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




/*Products*/
.products-block{
	padding: 5px;
}
.products-inner p{
	color: #fff;
	font-style: italic;
	width: 100%;
	word-wrap: break-word;
}
.products-inner{
	background: #b5a642;
	padding: 3px;
}
.products-inner img{
	width:100%;
	height: auto;
}
.button-article{
	background: #fff;
	border-radius: 12px;
	font-style: italic;
	border:2px solid #d87d56;
	padding: 8px;
	transition: .5s ease-in-out;
}
.button-article a{
	color: gray;
}
.button-article:hover a{
	color:#d87d56;
}
.button-article:hover{
    background:yellow;
}

.banner{
	background-image: url("img/banner.png");
	background-size: 100% 100%;
	padding: 30px 40px 5px 40px;
	color: #b5a642;
	font-family: 'Lobster' , sans-serif;
}





/*Article*/
.article img{
	max-width: 80%;
	height: auto;
}


/*flowers*/
.flowers{
	background: lime;
	border-radius: 12px;
}
.flowers h4{
	color: lime;
}
.flowers img{
	border-radius: 12px;
}



/*SLIDER*/
#slider {
  position: relative;
  overflow: hidden;
  margin: 20px auto 0 auto;
  border-radius: 4px;
}

#slider ul {
  position: relative;
  margin: 0;
  padding: 0;
  height: 200px;
  list-style: none;
}

#slider ul li {
  position: relative;
  display: block;
  float: left;
  margin: 0;
  padding: 0;
  width: 500px;
  height: 300px;
  background: #ccc;
  text-align: center;
  line-height: 300px;
}


a.control_prev, a.control_next {
  position: absolute;
  top: 40%;
  z-index: 999;
  display: block;
  padding: 4% 3%;
  width: auto;
  height: auto;
  background: #2a2a2a;
  color: #fff;
  text-decoration: none;
  font-weight: 600;
  font-size: 18px;
  opacity: 0.8;
  cursor: pointer;
}

a.control_prev:hover, a.control_next:hover {
  opacity: 1;
  -webkit-transition: all 0.2s ease;
}

a.control_prev {
  border-radius: 0 2px 2px 0;
}

a.control_next {
  right: 0;
  border-radius: 2px 0 0 2px;
}


/*UP*/
#up{
	position: absolute;
	width: 80px;
	height: 80px;
	background: red;
	position: fixed;
	bottom: 60px;
	right: 60px;
	z-index: 999;
	border-radius: 50%;
	background: #b5a642;
	cursor: pointer;
	transition: 1s ease-in-out;
}
#up i{
	color: #fff;
	position: relative;
	font-size: 50px;
	top: 12px;
}




/*---NEWS---*/
.news-item{
	max-width: 900px;
	margin:10px; 
	border:3px solid #b5a642;
	display: flex;
	transition: .5s ease-in-out;
	height: 210px;

}
.news-text{
	padding-left: 10px;
	word-wrap: break-word;
	transition: .5s ease-in-out;
	overflow-y: hidden;
}
.news-text p{
	max-width: 80%;
	font-style: italic;
	font-size: 20px;
	color: gray;
}
.news-text span{
	color: #b5a642 
}
.news-button{
	padding: 10px;
	background: #b5a642;
	color: #fff;
	display: flex;
	align-items: center;
}
.news-button i{
	position: relative;
	transition: .5s ease-in-out;
	left: 3px;
}
.news-title{
	color: #b5a642;
	font-family: 'Open Sans',sans-serif;
}
.news{
	max-width: 1000px;
	height: auto;
	margin:0px auto;
}
@media screen and (max-width: 1024px){
	.news-text p{
		font-size: 15px;
	}
	.footer-hiden-content p{
		font-size: 30px!important;
	}
/*	.news-item{
		flex-direction: column;
	}*/
}




</style>