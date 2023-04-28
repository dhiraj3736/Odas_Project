<!DOCTYPE html>
<html>
<head>
	<title>ODAS</title>
	
	<style type="text/css">
		*{
	margin: 0;
	padding: 0;
	font-family: century gothic;

}
header{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(./images/3.jpg);
	height: 100vh;
	background-size: cover;
	background-position: center;


}
ul{

	float:right;
	list-style-type: none;
	margin-top: 25px;

}
ul li{
	display: inline-block;
}

ul li a{
	text-decoration: none;
	color: #fff;
	padding: 5px 20px;
	border: 2px solid transparent ;
	transition: 0.6s ease;

}

ul li a:hover{
	background-color: #fff;
	color: #000;

}
ul li.active a{
		background-color: #fff;
	color: #000;

}




.title{
	position: absolute;
	top: 30%;
	left: center;
	transform: translate(10%,20%);


}
.title h3{
	color: #fff;
	font-size: 20px;


}

.title h1{
	color: #fff;
	font-size: 40px;

}



.main{
	max-width: 1200px;
	margin: auto;

}

.button{
	position: absolute;
	top: 50%;
	left: 30%;
	transform: translate(50%,50%);


}
.btn{
	border: 2px solid #fff;
	padding: 10px 30px;
	color: #fff;
	text-decoration: none;

}
.btn:hover{
	background-color: #fff;
	color: #000;

}


	</style>

</head>
<body>
<header>
	<div class="main">
		<ul>
			<li ><a href="frontend.php">Home</a></li>
			<li class="active"><a href="#">About</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul> 
		
	</div>

	<div class="title">
		<h1>About</h1>
		<div>
			</br><h3>Odas´s mission is to bring people and service businesses<br> 
			together by enabling them to easily reserve their services online <br>
			 no matter which, where they are or when they want to book!<br><br>

           Our vision is to become the best global customer centric One Stop <br>
		   Solution where small service businesses and their clients unite in <br>
		   harmony.</h3>
		</div>
		
		
	</div>
	<<!-- div class="button">
		<a href="services.php" class="btn">Services</a>
		
	</div> -->
</header>
</body>
</html>