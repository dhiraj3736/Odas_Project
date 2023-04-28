<?php
    
 session_start();
include('../connection.php');
 


if(!isset($_SESSION['admin_username'])){
    header('location:adminlogin');
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
      
      *{
  margin: 0;
  padding: 3;
  font-family: century gothic;
}
body{
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(../images/3.jpg);
  height: 125vh;
  background-size: cover;
  background-position: center;
}


.main{
  position: absolute;
  top: 18%;
 right: 10%
  transform: translate(50%,50%);

}
ul{

  

  margin-top: 25px;

}
ul li{
  padding: 10px;
  list-style:none; 
 
}

ul li a{
  text-decoration: none;
  color: #fff;
  padding: 10px 20px;
  border: 2px solid transparent ;
  transition: 0.6s ease;
  font-size: 30px;

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
  top: 0%;
  left: 20%;
  transform: translate(50%,50%);


}
.title h1{
  color: #fff;
  font-size: 50px;

}

.title1{
  position: absolute;
  top: 10%;
  right: 50%
  transform: translate(50%,50%);


}
.title1 h1{
  color: #fff;
  font-size: 30px;

}


.add{
  position: absolute;
  top: 25%;
  left: 35%;
  transform: translate(50%,50%);
  color: white;
  font-size: 30px;
}

.text{
  color: #fff;
  position: absolute;
  top: 20%;
  left: 3%;
  transform: translate(50%,50%);
  font-size: 18px;

  
}


.tad{
  
  
  background-image: url(../images/3.jpg);
   
   position: absolute;
   top: 40%;
   right: 8%;
   width: 875px;
}

table{

  list-style-type: none;
  margin-top: 0px;


}
.tad table tr td{

  color: #fff;
  padding: 2px 10px;
  border: 2px solid transparent ;
  font-size: 18px;
  width: 70px;
  
}
.button{
  position: absolute;
  top: 80%;
  left: 40%;
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
.submit{
  background-color: green;
}
    </style>
  
</head>
<body>
  <div class="title">
    <h1>Admin Dashboard</h1>
    
  </div>


<div class="main">
    <ul>
      <li ><a href="admindashboard.php">Home</a></li>
      <li ><a href="adminservice.php">Services</a></li>
      <li><a href="adminviewappointment.php">view appoinment</a></li>
      <li class="active"><a href="adminschedule.php">Today Schedule </a></li>
      
      <li><a href="admindoctor.php">Doctors</a></li>
      
    </ul> 
    
  </div>
  <div class="add">
      <h3>Today Schedule</h3>
  </div>

    <form method="post">
<div class="tad" name="servicedisplay" id="servicedisplay">
    
    <table >
        <tr>
            <td>Fullname</td>
              <td>Gender</td>
              <td>DOV</td>
              <td>Time</td>
                <td>Service</td>
              <td>Phone</td>
            
              <td>Address</td>
              <!-- <td>report</td> -->
              <td>Report</td>
              
         
         
             
  
             </tr>
<?php
$new = date('Y-m-d');
 
$user_query=mysqli_query($conn,"select * from book where   dov  like  '%$new%' and approve='1' ")or die(mysqli_error($conn));
                  while($row=mysqli_fetch_array($user_query)){
                    $id=$row['id'];
                



    ?>
    <form method="POST">
        <tr>
            <td><input type="hidden" name="current_id" value="<?php echo $row['id']; ?> "><?php echo $row['fname']?></td>
             <td><?php echo $row['gender']?></td>
              <td><?php echo $row['dov']?></td>
              <td><?php echo $row['time']?></td>
              <td><?php echo $row['service']?></td>
              <td><?php echo $row['phone']?></td>
              <td><?php echo $row['address']?></td>
              <!-- <td><?php echo $row['report']?></td> -->
            <td><textarea name="report" rows="2" cols="20"></textarea>
            <input type="submit" name="submit" onclick="myFunction()"></td>
            <script>
function myFunction() {
  alert("submit!");
 
}
</script>

             
                  </form>
              
  
       </tr>
       <?php }
?>


</div>
                  </form>
                  <?php

if(isset($_POST['submit'])){
			$report=$_POST['report'];
     
	
		
	$temp=$_POST['current_id'];
		$sql ="UPDATE book SET report ='$report' WHERE id = '$temp'";
  
		if(!mysqli_query($conn,$sql)){
			die(mysqli_error($conn));
		}
	
		}
		
		
?>

<!-- </body>
</html>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
      <div class="button">
    <a href="logout.php" class="btn">logout</a>
    
  </div>
    </body>
    </html> -->