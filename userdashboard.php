<?php
    
session_start();
include('connection.php');
 

if(!isset($_SESSION['admin_username'])){
    header('location:login.php');
}
?>
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
	left: 15%;
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

}
.button{
  position: absolute;
  top: 80%;
  left: 80%;
  transform: translate(50%,50%);
}
  .ttt{
  color: white;
  font-size: 20px;
  position: absolute;
 
}
 


	</style>
	
		
	</style>
</head>
<body>
<header>
	<div class="main">
		<ul>
			<li class="active"><a href="userdashboard.php">Home</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="book1.php">Book</a></li>
			<li><a href="doctors.php">Doctors</a></li>
			
		</ul> 
		
	</div>
</br></br>

<a href="profile.php" class="btn">Profile</a> 

	<div class="title">

		<!-- //Welcoming a user.. -->

		 <?php
		$signup_id=$_SESSION['admin_id'];
		$wel="SELECT * FROM signup WHERE id='$signup_id'";
		$row=mysqli_query($conn,$wel);
		$bow=mysqli_fetch_array($row);
		
		?> 


		<h1 class="yyy">Welcome <?php echo $bow['user_name'];?></h1></br>

				<div class="ttt"><p><strong>Today is:</strong></p> <!-- todays date -->
				
                        
                        <?php
                        $Today = date('Y-m-d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                   
               </div>

		
	</div>

	<!-- div class="button">
		<a href="services.php" class="btn">Services</a>
		
	</div> -->
</header>
</body>
</html>

    <!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>

     <div class="button">

    <a href="logout.php" class="btn">Logout
   
    </a>

  </div>
    </html>

