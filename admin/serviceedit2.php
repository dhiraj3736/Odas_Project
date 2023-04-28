<?php  
session_start();
include('../connection.php');
 

if(!isset($_SESSION['admin_username'])){
    header('location:login.php');
}
?>
<?php
$fullname=$_POST['name'];
$files=$_FILES['image'];
// print_r($fullname);



if(isset($_POST['update'])){
	
	$idtoedit=$_POST['idtoedit'];
	$service_name=$_POST['service_name'];
	$service_description=$_POST['service_description'];
	$service_price=$_POST['service_price'];
	
	$row="UPDATE services SET service_name='$service_name',service_description='$service_description',service_price='$service_price' where id='$idtoedit'";
	$ram=mysqli_query($conn,$row);
	
	if(!$ram){
		die(mysqli_error($conn));
	}
	 header("location:adminservice.php");

}?>