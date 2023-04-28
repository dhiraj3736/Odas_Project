<?php
    
session_start();
include('connection.php');
 
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
	height: 150vh;
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
table{

border-collapse: collapse;
border: 2px solid black;

color: white;
/* transform: translate(-70%,-110%); */



}
th,td{
	padding: 30px;
	font-size: 20px;
	
	text-align: center;
	
}
th{
	background-color: lightskyblue;
}
td{
	background-color: #4480ab;
}

.time{
	position: absolute;
	top: 20%;
	left: 70%;
	/* transform: translate(50%,50%); */
	color: white;
	font-size: 30px;
}
p{
	color: white;
	font-size: 20px;
	
}

.title{
	position: absolute;
	top: 15%;
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

.tad{
   position: absolute;
    top: 40%;
  right: 40%;
  width: 700px;
  

}
/* .btn{
	border: 2px solid #fff;
	padding: 10px 30px;
	color: #fff;
	text-decoration: none;

} */
/* .btn:hover{
	background-color: #fff;
	color: #000; */

}</style>
	
	
	</style>
</head>
<body>
<header>
	<div class="main">
		<ul>
			<li ><a href="userdashboard.php">Home</a></li>
			<li class="active"><a href="#">Services</a></li>
			<li><a href="book1.php">Book</a></li>
			<li><a href="doctors.php">Doctors</a></li>
			
		</ul> 
		
	</div>
	<div class="title">
		<h1>Services</h1>
		
	</div><div class="time">
	<div class="alert alert-info">Time Guide for Each Number</div>
						<p>Number 1  - 9:30 - 10:00</p>
						<p>Number 2  - 10:00 - 10:30</p>
						<p>Number 3  - 10:30 - 11:00</p>
						<p>Number 4  - 11:30 - 12:00</p>
						<p>Number 5  - 12:30 - 1:00</p>
						
						<p>Number 6  - 3:00 - 3:30</p>
						<p>Number 7  - 3:30 - 4:00</p>
						<p>Number 8  - 4:30 - 5:00</p>
				
						
							
				<div class="alert alert-info">Office Hours</div>
						<p>Monday - Firday (9:30 am to 1:00 pm)</p>
						<p>Monday - Friday (3:00 pm to 5:00 pm)</p>
						<p>Room 312</p>
						<p>Saturday(half day)</p>
						<p>(9:30 pm to 1:00 pm)</p>
						</div>
				
	<div class="tad">
		<div name="servicedisplay" id="servicedisplay">
    
    <table border="2px" >
        <tr>
            <th>Service Name</th>
             <th>Service Description</th>
              <th>Service Price</th>
             
              
        </tr>
<?php
$servicefetchSQL= "SELECT * from services";
$fetchResult=mysqli_query($conn,$servicefetchSQL);
foreach($fetchResult as $value){
    ?>
        <tr>
            <td><?php echo $value['service_name']?></td>
             <td><?php echo $value['service_description']?></td>
              <td><?php echo $value['service_price']?></td>
              


             
       </tr>
       <?php 
}



?>




    </table>
		
	</div>
</header>
</body>
</html>