<!DOCTYPE html>
<html>
<head>

	<title>ODAS</title>
	<style type="text/css">*{
	margin: 0;
	padding: 0;
	font-family: century gothic;

}
header{
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(images/3.jpg);
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
	transform: translate(50%,50%);


}
.title h1{
	color: #fff;
	font-size: 50px;

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

}</style>
	
		
	</style>
</head>
<body>
<header>
	<div class="main">
		<ul>
			<li class="active"><a href="#">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul> 
		
	</div>
	<div class="title">
		<h1>ONLINE DELTAL APPOINMENT</h1>
		
	</div>
	<div class="button">
		<a href="login.php" class="btn">Log in</a>
		<a href="signup.php" class="btn">Sign up</a>
	</div>
</header>
</body>
</html>
