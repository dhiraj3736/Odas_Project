<?php
    
session_start();
include('../connection.php');
 

if(!isset($_SESSION['admin_username'])){
    header('location:adminlogin');
}

$admin_id=$_SESSION['admin_id'];
$admin_name=$_SESSION['admin_username'];
$servicename="";
$servicedescription="";
if(isset($_POST['service'])&& $_POST['service']!=""){
$servicename=$_POST['service'];
$servicedescription=$_POST['servicedescription'];
$serviceprice=$_POST['serviceprice'];
$bike="INSERT INTO services(service_name,service_description,service_price) VALUES ('$servicename','$servicedescription','$serviceprice')";
/*$result= mysqli_query($conn,$bike);
$row= mysqli_fetch_assoc($result);*/
$row= mysqli_fetch_assoc(mysqli_query($conn,$bike));
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
  height: 100vh;
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




.text{
  color: #fff;
  position: absolute;
  top: 20%;
  left: 3%;
  transform: translate(50%,50%);
  font-size: 18px;

  
}


.tad{
  
  
    position: absolute;
  top: 30%;
  left: 12%;
  transform: translate(50%,50%);

}

table{

  list-style-type: none;
  margin-top: 0px;


}
.tad table tr td{

  color: #fff;
  padding: 5px 15px;
  border: 2px solid transparent ;
  font-size: 18px;

  
}
.button{
  position: absolute;
  top: 80%;
  left: 80%;
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
.titl{
  position: absolute;
  top: 30%;
  left: 30%;
  transform: translate(50%,50%);


}
.titl h1{
  color: #fff;
  font-size: 50px;

}
.ttt{
  color: white;
  font-size: 20px;
}

    </style>
  
</head>
<body>
  <div class="title">
   
    
  </div>


<div class="main">
    <ul>
      <li class="active"><a href="admindashboard.php">Home</a></li>
      <li ><a href="adminservice.php">Services</a></li>
      <li><a href="adminviewappointment.php">view appoinment</a></li>
      <li><a href="adminschedule.php">Today Schedule </a></li>
      <li><a href="admindoctor.php">Doctors</a></li>
      
    </ul> 
    
  </div>
</div><div class="titl">

    <!-- //Welcoming a user.. -->

   

    <h1>Welcome </h1></br>

        <div class="ttt"><p><strong>Today is:</strong></p> <!-- todays date -->
        
                        
                        <?php
                        $Today =  date('Y-m-d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                   
               </div>

    
  </div>


</body>
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
    </html>
