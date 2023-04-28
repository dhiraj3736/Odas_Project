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
	height: 125vh;
	background-size: cover;
	background-position: center;


}


.main a{
	font-size: 15px;
	color: white;
	text-decoration: none;
}
label{
	color:white;
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
	color: #fff;
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
input[type=text], input[type=password], input[type=email] ,input[type=date], input[type=number]  {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=submit]
{
	border-radius:12px;
    background-color: white;
    border: none;
    color: black;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
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




.main{
	max-width: 1200px;
	margin: auto;

}


.container {
    padding: 16px;
   
	left:30%;
	right:15%;
	

}
.sucontainer{
	padding: 12px;
	position:absolute;
	left:35%;
	right:17%;
	top:17%;
	border:2px solid white;

	
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
p{
	color: white;
}
</style>
	
	
	
</head>
<body>
<header>
	<div class="main">
		<ul>
			<li ><a href="userdashboard.php">Home</a></li>
			<li ><a href="services.php">Services</a></li>
			<li class="active"><a href="book1.php">Book</a></li>
			<li><a href="doctors.php">Doctors</a></li>
			
		</ul> 
		
	</div>

	
    </table>
		
	</div>
	<div class="main1">
    <ul>
      <li class="active"><a href="book1.php">Book Appointment</a></li>
      <li ><a href="viewpatientappointments.php">Show Appointments</a></li>
	  <li ><a href="report.php">Report</a></li>
 
  
      
    </ul> 
    
  </div>
    
	<form action="book1.php" method="post">
	<div class="sucontainer" style="background-image:url(./images/3.jpg)">
	

		<label><b>Name:</b></label><br>
		<input type="text" placeholder="Enter Full name of patient" name="fname" required><br>
		
		<label ><b>Gender</b></label><br>
	<p>	<input type="radio" name="gender" value="female"required>Female
		<input type="radio" name="gender" value="male"required>Male
		<input type="radio" name="gender" value="other"required>Other</p><br>

		<label><b>Address:</b></label><br>
		<input type="text" placeholder="address" name="address" required><br>

		<label><b>service::</b></label><br>
		<select name="service">
			
			<?php $query=mysqli_query($conn,"select service_name from services")or die(mysqli_error($conn));
		while($row=mysqli_fetch_array($query)){
		?>
			<option  ><?php echo $row['service_name'] ?></option>
		<?php } ?>
		</select><br><br>

		<label><b>Doctor:</b></label><br>
		<select name="doctor">
			
			<?php $query=mysqli_query($conn,"select fullname from doctors")or die(mysqli_error($conn));
		while($row=mysqli_fetch_array($query)){
		?>
			<option  ><?php echo $row['fullname'] ?></option>
		<?php } ?>
		</select><br><br>
	
			<label><b>Date of Visit:</b></label><br>
		<input type="date" name="dov" onChange="getDay(this.value);" min="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d',strtotime('+7 day'));?>" required><br>
		   
		
		
		
		<label><b>Time</b></label><br>
		   <select name="time" id="cars">
			  <option >9:30 - 10:00</option>
			  <option >10:00 - 10:30</option>
			  <option >10:30 - 11:00</option>
			  <option >11:30 - 12:00</option>
			   <option >12:30 - 1:00</option>
			    <option >3:00 - 3:30</option>
			     <option >3:30 - 4:00</option>
			      <option >4:30 - 5:00</option>
			</select><br><br>

		   <label><b>contact_number</b></label><br>
		   <input name="phone" id="phone" type="Numbers" class="form-control" placeholder="Phone Number"required><br><br>

		   
		
		<div class="container1">
			<input type="submit" name="submit" value="submit" onsubmit="return errorchecker()" onclick="myFunction()" >
			<script>
function myFunction() {
  alert("booked!");
 
}
</script>
		</div>
			</form>
<?php

if(isset($_POST['submit'])){
		

		$fname=$_POST['fname'];
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		$service=$_POST['service'];
		$doctor=$_POST['doctor'];
		$dov=$_POST['dov'];
		$time=$_POST['time'];
		$phone=$_POST['phone'];
		
		
		$s_id=$_SESSION['admin_id'];
	
		
	
		$sql = "INSERT INTO book(fname,gender,address,service,doctor,dov,time,phone,s_id) VALUES ('$fname','$gender','$address','$service','$doctor','$dov','$time','$phone','$s_id')";

		if(!mysqli_query($conn,$sql)){
			die(mysqli_error($conn));
		}
		
	
		}
		
		
?>


</header>

</body>
</html>