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
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(./images/3.jpg);
	height: 125vh;
	background-size: cover;
	background-position: center;


}
h3{
	color: white;
	position: absolute;
	padding: 12px;
	
	left:30%;
	right:30%;
}
}
.main a{
	font-size: 18px;
	color: white;
	text-decoration: none;
}
label{
	color:white;


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
button {
	border-radius:20px;
    
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    
}

button:hover {
    opacity: 0.8;
}

table{

border-collapse: collapse;
border: 2px solid black;

color: white;
transform: translate(-70%,-60%);



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


.container {
    padding: 16px;
   
	left:30%;
	right:15%;
	

}
.sucontainer{
	padding: 12px;
	position:absolute;
	left:30%;
	right:30%;
	top:13%;
	border:2px solid white;
	border-collapse:collapse;
	background:grey;
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
.main5 a{
	font-size: 23px;
	color: white;
	text-decoration: none;
	  position: absolute;
 	 top: 87%;
 right: 15%;
	
	margin-top: 25px;
}
.btn:hover{
  /* background-color: #fff; */
  color: #000;

}

	</style>
</head>
<body>
<header>
	
</br></br>
<h3>Edit appoinment</h3></br>

<?php 
	if(isset($_POST['editbtn'])){
		$idtoedit=$_POST['idtoedit'];
	$member_query = mysqli_query($conn,"SELECT * from book where id='$idtoedit'")or die(mysqli_error($conn));
	$member_row= mysqli_fetch_array($member_query);
	?>
	 <form action="" method="post" >
		<div class="sucontainer" style="background-image:url(./images/3.jpg)">
			<label ><br>fname</label><br>
			
			<input type="text" value="<?php echo $member_row['fname']; ?>" name="fname" id="inputfullname" placeholder="fname" required>

				<label ><br>Gender</label><br>
		
			<select class="span2" name="gender" required>
			<option><?php echo $member_row['gender']; ?></option>
			<option>Male</option>
			<option>Female</option>
			</select><br><br>
		
		<label><b>service::</b></label><br>
		<select name="service">
			<option><?php echo $member_row['service'] ?></option>
			<?php $query=mysqli_query($conn,"select service_name from services")or die(mysqli_error($conn));
		while($row=mysqli_fetch_array($query)){
		?>
			<option  ><?php echo $row['service_name'] ?></option>
		<?php } ?>
		</select><br><br>
		
				

				<label><b>Date of Visit:</b></label><br>
		<input type="date" name="dov" onChange="getDay(this.value);" min="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d',strtotime('+7 day'));?>" value="<?php echo $member_row['dov']; ?>" required><br>
		
		
		<label><b>Time</b></label><br>
		   <select name="time" id="cars"value="<?php echo $member_row['fname']; ?>">
			  <option >9:30 - 10:00</option>
			  <option >10:00 - 10:30</option>
			  <option >10:30 - 11:00</option>
			  <option >11:30 - 12:00</option>
			   <option >12:30 - 1:00</option>
			    <option >3:00 - 3:30</option>
			     <option >3:30 - 4:00</option>
			      <option >4:30 - 5:00</option>
			</select><br><br>
		
		
			<label ><br>phone</label><br>
			
			<input type="text" name="phone" id="phone" placeholder="phone" value="<?php echo $member_row['phone']; ?>" required>
			
		
		
			<label ><br>Address</label><br>
			<div class="controls">
			<input type="text" name="address" value="<?php echo $member_row['address']; ?>" id="inputaddress" placeholder="Address" required>
			
			
			
			
			<input type="hidden" name="idtoedit" value="<?php echo $idtoedit?>">
			<input type="submit" name="update" class="btn">
			<div class="main5"><a href="viewpatientappointments.php" class="btn" >cancel</a></div>
			</div>
			<?php
	}	
	?>
    </form>

		<?php
	if (isset($_POST['update'])){
		$idtoedit=$_POST['idtoedit'];
	$fname = $_POST['fname'];
	$gender = $_POST['gender'];
	$dov= $_POST['dov'];
	$phone= $_POST['phone'];
	$address = $_POST['address'];
	$service = $_POST['service'];
	$time = $_POST['time'];
	
	

		
	mysqli_query($conn,"UPDATE book SET fname='$fname' , gender='$gender', address='$address', dov='$dov',phone='$phone',
	service='$service', time='$time' where id='$idtoedit'") or die(mysqli_error($conn));
	?>
	<script>
	window.location = 'viewpatientappointments.php'; 
	</script>
	<?php
	}	
	?>


		

		
<!-- </header>
</body>
</html>

    <!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>

     <div class="button">

    <a href="logout.php" class="btn">Logout</a>


    
  </div>
    </html>
 -->
