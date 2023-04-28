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
	height: 100vh;
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
    font-size:20px;
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
	top:19%;
	border:2px solid white;
	border-collapse:collapse;
	background:grey;
    font-size:18px;
    text-align:center;
}

.main5 a{
	font-size: 23px;
	color: white;
	text-decoration: none;
	  position: absolute;
 	 top: 80%;
 right: 8%;
	
	margin-top: 25px;
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
	
</br></br>

<a href="edit_info.php" class="btn">Edit your info</a>
<div class="main5"><a href="userdashboard.php" class="btn" >Back</a></div> 
<h3>Profile</h3></br>

<?php 
	$signup_id=$_SESSION['admin_id'];
	$member_query = mysqli_query($conn,"select * from signup where id='$signup_id'")or die(mysqli_error($conn));
	$member_row= mysqli_fetch_array($member_query);
	?>
	 <form action="" method="post" >
		<div class="sucontainer" style="background-image:url(./images/3.jpg)">
			<label ><br>Fullname</label><br>
			
			<?php echo $member_row['fullname']; ?>

				<label ><br>Username</label><br>
			
			<?php echo $member_row['user_name']; ?>  
		
            <label ><br>Gender</label><br>
            <?php echo $member_row['gender']; ?>
		
		    <label ><br>Address</label><br>
			<div class="controls">
			<?php echo $member_row['address']; ?>

            <label ><br>Contact_no</label><br>
		<?php echo $member_row['contact_no']; ?>
			
			<label ><br>Email</label><br>		
            <?php echo $member_row['email_address']; ?>
			
			
           
			
			
		
			
    </form>

		

		

		
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
