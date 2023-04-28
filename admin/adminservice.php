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
$row= mysqli_query($conn,$bike);
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
  top: 20%;
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
  top:0%;
  left: 30%;
  transform: translate(50%,50%);
  font-size: 18px;

  
}
fieldset{
background-image: url(../images/3.jpg);
  padding: 20px 70px;
  border: 2px solid transparent ;
}
legend {
  background-color: #48D1CC;
  color: white;
  padding: 5px 10px;
}

.tad{
  
  background-image: url(../images/3.jpg);
   
  position: absolute;
  top: 60%;
  right: 20%;
  width: 700px;
  /* height: 100px; */ 
  

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



    </style>
  
</head>
<body>
  <div class="title">
    <h1>Admin Dashboard</h1>
    
  </div>


<div class="main">
    <ul>
      <li ><a href="admindashboard.php">Home</a></li>
      <li class="active"><a href="adminservice.php">Services</a></li>
      <li><a href="adminviewappointment.php">view appoinment</a></li>
      <li><a href="adminschedule.php">Today Schedule </a></li>
      <li><a href="admindoctor.php">Doctors</a></li>
      
    </ul> 
    
  </div>
  
<form target="admindashboard.php" method="post">
  

    <div class="text">
<fieldset>
    <legend>add sevices:</legend>
        <label for="service">service</label><br>
        <input id="service" type="text" name="service" required><br>

        <label for="servicedescription">discription</label><br>
        <input id="servicedescription" type="text" name="servicedescription" required><br>

        <label for="serviceprice">price</label><br>
        <input id="serviceprice" type="text" name="serviceprice" required><br>
        <input id="ok" type="submit" name="ok" value="Enter" onclick="myFunction()">
        <script>
function myFunction() {
  alert("Added!");
 
}
</script>  </fieldset>  </div>
</form>

<div class="tad" name="servicedisplay" id="servicedisplay" >
    
    <table   >
        <tr>
            <td>Service Name</td>
             <td>Service Description</td>
              <td>Service Price</td>
              <td>Options</td>
        </tr>
<?php
$servicefetchSQL= "SELECT * from services";
$fetchResult=mysqli_query($conn,$servicefetchSQL);
foreach($fetchResult as $value){
    ?>
        <tr>
            <td ><?php echo $value['service_name']?></td>
             <td><?php echo $value['service_description']?></td>
              <td><?php echo $value['service_price']?></td>
              
              <td><form action="servicedelete.php" method="post"> 
                <input type="hidden" name="idtodelete" value="<?php echo $value['id']?>">
                <input type="submit" name="deletebtn" value="Delete">

              </form>
              <form action="serviceedit1.php" method="post"> 
                <input type="hidden" name="idtoedit" value="<?php echo $value['id']?>">
                <input type="submit" name="editbtn" value="Edit">
                </form></td>
       </tr>
       <?php 
}



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