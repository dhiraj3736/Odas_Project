
    <?php
    
session_start();
include('../connection.php');
 




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
  height: 150vh;
  background-size: cover;
  background-position: center;
}


.main{
  position: absolute;
  top: 18%;
 right: 10%
  transform: translate(50%,50%);
  text-decoration: none;


}
.add{
   color: #fff;
  position: absolute;
  top: 20%;
  left: 35%;
  transform: translate(50%,50%);
  font-size: 30px;
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
  top: 30%;
  left: 5%;
  transform: translate(50%,50%);
  font-size: 18px;

  
}


table{

  list-style-type: none;
  margin-top: 0px;



}
.tad{
  background-image: url(../images/3.jpg);
   
   position: absolute;
   top: 35%;
   right: 8%;
   width: 850px;
}
.tad table tr td{

  color: #fff;
  padding: 3px 0px;
  border: 2px solid transparent ;
  font-size: 16px;
  text-align: center;

  
}

.tad table tr th{

  color: #fff;
  padding: 5px 0px;
  border: 3px solid transparent ;
  font-size: 18px;
  text-align: center;

  
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

/*.notapprove{
  background-color: red;
}*/
.approve{
  background-color: #5fa081;
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
      <li class="active"><a href="adminviewappointment.php">view appoinment</a></li>
      <li><a href="adminschedule.php">Today Schedule </a></li>
      <li><a href="admindoctor.php">Doctors</a></li>
      
    </ul> 
    
  </div>
  



  <div class="add">
      <h3>View appoinment</h3>
  </div>

    
<div class="tad" name="servicedisplay" id="servicedisplay">
    
    <table border="3px">
        <tr>
             <th>Fullname</th>
             <th>Gender</th>
              <th>DOV</th>
              <th>Time</th>
              <th>Doctor</th>
 
              <th>Service</th>
              <th>Address</th>
              <th>Phone</th>
            
              <th>Approval</th>
              <th>Delete</th>
  
             </tr>
<?php

$servicefetchSQL= "SELECT * from book";
$fetchResult=mysqli_query($conn,$servicefetchSQL);
foreach($fetchResult as $value){
    ?>
        <tr class="<?php if($value['approve']==1){echo  "approve";} else{echo "notapprove";}?>">
            <td><?php echo $value['fname']?></td>
             <td><?php echo $value['gender']?></td>
              <td><?php echo $value['dov']?></td>
              <td><?php echo $value['time']?></td>
                <td><?php echo $value['doctor']?></td>
              <td><?php echo $value['service']?></td>
               
             
              <td><?php echo $value['address']?></td>
               <td><?php echo $value['phone']?></td>
              <td><form method="post" action="approve.php">
                <input  type="hidden" name="id" value="<?php print_r($value['id'])?>">
                <input style="background-color=black;" type="submit" name="approve" value="approve" class="btn_edit"></form>
                 
                  <form method="post" action="notapprove.php">
                <input type="hidden" name="id" value="<?php print_r($value['id'])?>">
                <input type="submit" name="notapprove" value="notapprove" class="btn_edit"></form></td>


                  <td> <form action="adminappdelete.php" method="post"> 
                <input   type="hidden" name="idtodelete" value="<?php echo $value['id']?>">
                <input  type="submit" name="deletebtn" value="Delete">

              </form></td>
              
       
       </tr>
       <?php }
?>
    </table>

</div>


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