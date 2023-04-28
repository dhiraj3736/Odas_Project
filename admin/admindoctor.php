 <?php
    
session_start();
include('../connection.php');
 

if(!isset($_SESSION['admin_username'])){
    header('location:adminlogin');
}

$admin_id=$_SESSION['admin_id'];
$admin_name=$_SESSION['admin_username'];

if(isset($_POST['ok'])){
$fullname=$_POST['name'];
$files=$_FILES['image'];
// print_r($fullname);


// Storing only jpeg and png format files 
$filename=$files['name'];
$fileerror=$files['error'];
$filetmp=$files['tmp_name'];

//validation for png jpg (suppose our file name is 55.jpg)

$fileext=explode('.',$filename); //explode will seperate strings((it will seperate only jpg))

$filecheck= strtolower(end($fileext)); //to convert jpg,JPG and other format in jpg

$fileextstored=array('png','jpg','jpeg');

if(in_array($filecheck, $fileextstored)){
$destination='upload/'.$filename;//saving temp file into new folder 
move_uploaded_file($filetmp, $destination);

$bike="INSERT INTO doctors(fullname,image)VALUES ('$fullname','$destination')";
$result= mysqli_query($conn,$bike);
}

// $row= mysqli_fetch_assoc($result);
// $row= mysqli_fetch_assoc(mysqli_query($conn,$bike));

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
  left: 9%;
  transform: translate(50%,50%);
  font-size: 18px;

  
}


.tad{
  
  background-image: url(../images/3.jpg);
    position: absolute;
    top: 50%;
   right: 30%;
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
      <li><a href="adminschedule.php">Today Schedule </a></li>
      <li class="active"><a href="admindoctor.php">Doctors</a></li>
      
    </ul> 
    
  </div>
  
<form target="admindoctor.php" method="post" enctype="multipart/form-data">
  <div class="add">
      <h3>Add Doctors</h3>
  </div>

    <div class="text">

        <label for="name">Full Name</label>
        <input id="name" type="text" name="name" required>

      

        <label for="file">Image</label>
        <input id="file" type="file" name="image" required>

        <input id="ok" type="submit" name="ok" value="Enter" required>    </div>
</form>

<div class="tad" name="servicedisplay" id="servicedisplay">
    
    <table border="1px">
        <tr>
            <td>Doctor Name</td>
             <td>Doctor Pic</td>
              <td>Options</td>
        </tr>
<?php
$docfetch= "SELECT * from doctors";
$fetchResult=mysqli_query($conn,$docfetch);
foreach($fetchResult as $value){
    ?>
        <tr>
            <td><?php echo $value['fullname']?></td>
             <td><img src="<?php echo $value['image']?>" height="100px" width="100px"></td>
              <td>
                <form action="doctordelete.php" method="post"> 
                <input type="hidden" name="idtodelete" value="<?php echo $value['id']?>">
                <input type="submit" name="deletebtn" value="Delete"></form>

                <!-- <form action="doctoredit.php" method="post"> 
                <input type="hidden" name="idtoedit" value="<?php echo $value['id']?>">
                <input type="submit" name="editbtn" value="Edit">
                </form> -->


              </td>
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