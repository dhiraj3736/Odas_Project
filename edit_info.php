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
	height: 130vh;
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
  background-color: #fff;
  color: #000;

}

	</style>
</head>
<body>
<header>
	
</br></br>
<h3>You can edit you information</h3></br>

<?php 
	$signup_id=$_SESSION['admin_id'];
	$member_query = mysqli_query($conn,"select * from signup where id='$signup_id'")or die(mysqli_error($conn));
	$member_row= mysqli_fetch_array($member_query);
	?>
	 <form action="" method="post" >
		<div class="sucontainer" style="background-image:url(./images/3.jpg)">
			<label ><br>fullname</label><br>
			
			<input type="text" value="<?php echo $member_row['fullname']; ?>" name="fullname" id="inputfullname" placeholder="Fullname" required>

				<label ><br>username</label><br>
			
			<input type="text" value="<?php echo $member_row['user_name']; ?>" name="user_name" id="inputuser_name" placeholder="user_name" required>
		
			<label ><br>Gender</label><br>
		
		<select class="span2" name="gender" required>
		<option><?php echo $member_row['gender']; ?></option>
		<option>Male</option>
		<option>Female</option>
		</select><br>
			<label ><br>password</label><br>
			
			<input type="text" name="password" id="inputPassword" placeholder="Password" value="<?php echo $member_row['password']; ?>" required>
		
		
		
		
		
			<label ><br>Confirm password</label><br>
			
			<input type="text" name="confirmpassword" id="inputPassword" placeholder="Confirm Password" value="<?php echo $member_row['confirm_password']; ?>" required>
			
		
		
			<label ><br>Address</label><br>
			<div class="controls">
			<input type="text" name="address" value="<?php echo $member_row['address']; ?>" id="inputaddress" placeholder="Address" required>
			
			<label ><br>Email</label><br>
			
			<input type="text" name="email" id="inputemail" value="<?php echo $member_row['email_address']; ?>" placeholder="Email" required>

			<label ><br>contact_no</label><br>
			
			<input type="text" name="contact_no" id="contact_no" value="<?php echo $member_row['contact_no']; ?>" placeholder="contact_no" required>
			
			
			
			<input type="submit" name="update" class="btn">
			<div class="main5"><a href="profile.php" class="btn" >cancel</a></div>
			
			</div>
			
    </form>

		<?php
	if (isset($_POST['update'])){
	$fullname = $_POST['fullname'];
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$contact_no = $_POST['contact_no'];

		
	mysqli_query($conn,"UPDATE signup SET fullname='$fullname' ,user_name='$user_name', gender='$gender', address='$address', email_address='$email', contact_no='$contact_no' WHERE id='$signup_id'") or die(mysqli_error($conn));
	?>
	<script>
	window.location = 'profile.php'; 
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
