<?php
include("../connection.php");
if(isset($_POST['deletebtn'])){
	$idtodelete=$_POST['idtodelete'];
	$deleteQuery="DELETE from doctors where id='$idtodelete'";
	$execute=mysqli_query($conn,$deleteQuery);
	if(!$execute){
		die(mysqli_error($conn));
	}

	header("location:admindoctor.php");
}





?>