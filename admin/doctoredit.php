<?php  
session_start();
include('../connection.php');
 

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
	background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(../images/3.jpg);
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

.button{
	position: absolute;
	top: 90%;
	left: 70%;
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

	</style>
</head>
<body>
<header>
	
</br></br>
<h3>You can edit Doctor information</h3></br>

<?php 
	if(isset($_POST['editbtn'])){
	$idtoedit=$_POST['idtoedit'];
	$sql = mysqli_query($conn,"SELECT * from doctors where id='$idtoedit'");
	$member_row= mysqli_fetch_array($sql);
	?>
	 <form action="doctoredit2.php" method="post" >
		<div class="sucontainer" style="background-image:url(../images/3.jpg)">
			 <label for="service">fullname</label>
        <input id="fullname" type="text" name="fullname" value="<?php echo $member_row['fullname']; ?>">

        <label for="servicedescription">Image</label>

        <input id="image" type="file" name="image" value="<?php echo $member_row['image']; ?>">
        <img name="image" src="<?php echo $member_row['image']?>" height="100px" width="100px"> 

		
			<input type="hidden" name="idtoedit" value="<?php echo $idtoedit?>">
			<input type="submit" name="update" class="btn">

			</div>
    </form>



<?php
	}	

	?>

</header>
</body>
</html>
