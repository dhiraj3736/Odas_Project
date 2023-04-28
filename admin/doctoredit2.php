<?php  
session_start();
include('../connection.php');
 

if(!isset($_SESSION['admin_username'])){
    header('location:login.php');
}
?>
<?php



if(isset($_POST['update'])){

	$idtoedit=$_POST['idtoedit'];
	$fullname=$_POST['fullname'];
	$file=$_POST['image'];
	print_r($file);

	

	
	$row="UPDATE doctors SET fullname='$fullname',image='$file' where id='$idtoedit'";
	$ram=mysqli_query($conn,$row);
	
	if(!$ram){
		die(mysqli_error($conn));
	}
	 header("location:admindoctor.php");

}?>