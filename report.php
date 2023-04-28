<?php
    
session_start();
include 'connection.php';
 
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

  height: 125vh;
  background-size: cover;
  background-position: center;


}
.main ul{

  float:right;
  list-style-type: none;
  margin-top: 25px;

}
.main ul li{
  display: inline-block;
}

.main ul li a{
  text-decoration: none;
  color: white;
  padding: 5px 20px;
  border: 2px solid transparent ;
  transition: 0.6s ease;

}

.main ul li a:hover{
  background-color: #fff;
  color: #000;

}
.main ul li.active a{
    background-color: #fff;
  color: #000;

}
table{

  /* border-collapse: collapse; */
border: 1px solid black;

color: white;


}
.tad{
  position: absolute;
    top: 35%;
  right: 25%;
  width: 505px;

  

}
 table tr td{

  color: #fff;
  padding: 5px 0px;
  /* border: 2px solid transparent ; */
  font-size: 16px;
  text-align: center;
}

th{
  background-color: lightskyblue;
  font-size:20px;
}
td{
  background-color: #4480ab;
}

.main{
  max-width: 1200px;
  margin: auto;

}
.main1{
  position: absolute;
  top: 18%;
 right: 10%
  transform: translate(50%,50%);
  text-decoration: none;}

.main1 ul{

  
  margin-top: 25px;

}
.main1 ul li{
  padding: 10px;
 list-style:none; 
}

.main1 ul li a{
  text-decoration: none;
  color: #fff;
  padding: 10px 20px;
  border: 2px solid transparent ;
  transition: 0.6s ease;
  font-size: 30px;

}

.main1 ul li a:hover{
  background-color: #fff;
  color: #000;

}
.main1 ul li.active a{
    background-color: #fff;
  color: #000;

}
h1{
  color:white;
}

 </style>
  
  
 
</head>
<body>
<header>
  <div class="main">
    <ul>
      <li ><a href="userdashboard.php">Home</a></li>
      <li ><a href="services.php">Services</a></li>
      <li class="active"><a href="">Book</a></li>
      <li><a href="doctors.php">Doctors</a></li>
      
    </ul> 
    
  </div>
  <div class="main1">
    <ul>
      <li ><a href="book1.php">Book Appointment</a></li>
      <li ><a href="viewpatientappointments.php">Show Appointments</a></li>
      <li class="active"><a href="report.php">Report</a></li>
      
      
    </ul> 
    
  </div>
 <div class="tad" name="servicedisplay" id="servicedisplay">
    
  
  <div class="title">

		<!-- //Welcoming a user.. -->

		 <?php
		$signup_id=$_SESSION['admin_id'];
		$wel="SELECT * FROM signup WHERE id='$signup_id'";
		$row=mysqli_query($conn,$wel);
		$bow=mysqli_fetch_array($row);
		
		?> 


		<h1 class="yyy">Report </h1></br>
    
				</div>
        <table >
        <tr>
            <th>visit date</th>
            <th>name</th>
             
              <th>report</th>
               </tr>
    
    <?php

$servicefetchSQL= "SELECT * FROM book where s_id='$signup_id'";
$fetcheResult=mysqli_query($conn,$servicefetchSQL);
foreach($fetcheResult as $value){
    ?>
        <tr>
        <td ><?php if($value['approve']==1){echo  $value['dov'];} ?></td>
        <td ><?php if($value['approve']==1){echo  $value['fname'];} ?></td>
            <td><?php echo $value['report']?></td>

            
       </tr>
       <?php }
?>

		
  </table>
</div>
</body>
</html>