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

  list-style-type: none;
  margin-top: 0px;


}
.tad{
   position: absolute;
    top: 30%;
  right: 4%;
  width: 900px;
  

}
.tad table tr td{

  color: #fff;
  padding: 5px 0px;
  /* border: 2px solid transparent ; */
  font-size: 16px;
  text-align: center;

  
}

.tad table tr th{

  color: #fff;
  padding: 5px 0px;
  /* border: 3px solid transparent ; */
  font-size: 18px;
  text-align: center;

  
}
/*th{
  background-color: lightskyblue;
}
td{
  background-color: #4480ab;
}*/

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
.head td{
  font-size: 40px;

}
.text{
  color: #fff;
  position: absolute;
  top: 30%;
  left: 3%;
  transform: translate(50%,50%);
  font-size: 18px;

  
}
.notapprove{
  background-color: red;
}
.approve{
  background-color: green;
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
      <li class="active"><a href="viewpatientappointments.php">Show Appointments</a></li>
      <li ><a href="report.php">Report</a></li>
      
      
    </ul> 
    
  </div>
 <div class="tad" name="servicedisplay" id="servicedisplay">
    
    <table border="3px">
        <tr >
            <th>Fullname</th>
             <th>Gender</th>
              <th>Dov</th>
              <th>Time</th>
               <th>Doctor</th>
              
              <th>Service</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Status</th>
              <th>de/ed</th>
             <th>Edit</th>
              
        </tr>

<?php
include "connection.php";
$signup_id=$_SESSION['admin_id'];
$servicefetchSQL= "SELECT * from book where s_id='$signup_id'"; 
$fetchResult=mysqli_query($conn,$servicefetchSQL);
foreach($fetchResult as $value){
  
    ?>
        <tr class="<?php if($value['approve']==1){echo  "approve";}else{echo "notapprove";}?>">
          
        
            <td ><?php echo $value['fname']?></td>
             <td><?php echo $value['gender']?></td>
              <td><?php echo $value['dov']?></td>

              <td><?php echo $value['time']?></td>
              <td><?php echo $value['doctor']?></td>

              <td><?php echo $value['service']?></td>
             <td><?php echo $value['address']?></td>
             
              
              <td><?php echo $value['phone']?></td>
              <td><?php if($value['approve']==1){echo "Approved";}else{echo "Not Approved";}?></td>

              
              
             
                <td><form action="deleteapp.php" method="post"> 
                <input type="hidden" name="idtodelete" value="<?php echo $value['id']?>">
                <input type="submit" name="deletebtn" value="Delete"></form></td>

                <td>  <form action="appoinmentedit.php" method="post"> 
                <input type="hidden" name="idtoedit" value="<?php echo $value['id']?>">
                <input type="submit" name="editbtn" value="Edit">
                </form></td>
            
            </tr>
                    

    
   
        
<!-- <?php

$servicefetchSQL= "SELECT approve FROM book where id='$signup_id''";
$fetcheResult=mysqli_query($conn,$servicefetchSQL);
foreach($fetcheResult as $value){
    ?>
        <tr>
            <td><?php echo $value['approve']?></td>
            
       </tr>
       <?php }
?> -->



            
            
       <?php 
}



?>



           
<!--  <?php

$SQL= "SELECT * from book";
$fetch=mysqli_query($conn,$SQL);
foreach($fetch as $value){
    ?>
        
       <?php 
}



?> -->


 
    
</table>
</div>
</body>
</html>