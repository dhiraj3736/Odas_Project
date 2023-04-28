<?php
    
session_start();
include('connection.php');

?>
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
	height: 200vh;
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





  
  
 
.tad{
	background-image: url(./images/3.jpg);
   position: absolute;
   top: 25%;
   right: 30%;
   width:450px;
   
}
.tad table tr td{

color: #fff;
padding: 2px 10px;
border: 2px solid transparent ;
font-size: 18px;
/* width: 70px; */

}


.main{
	max-width: 1200px;
	margin: auto;

}



}</style>
</head>
<body>
<header>
	<div class="main">
		<ul>
			<li ><a href="userdashboard.php">Home</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="book1.php">Book</a></li>
			<li class="active"><a href="doctors.php">Doctors</a></li>
			
		</ul> 
		

<div class="tad">
		<div name="servicedisplay" id="servicedisplay">
    
		<table >
        <tr>
            <td>Doctor Name</td>
			<td></td>
             <td>Doctor Pic</td>
             
        </tr>
<?php
$docfetch= "SELECT * from doctors";
$fetchResult=mysqli_query($conn,$docfetch);
foreach($fetchResult as $value){
    ?>
        <tr>
            <td><?php echo $value['fullname']?></td>
			<td></td>
             <td><img src="<?php echo "admin/".$value['image']?>" height="100px" width="100px"></td>
              <td>
              

              </td>
       </tr>
       <?php 
}



?>




    </table>
		
	</div>
</header>
</body>
</html>