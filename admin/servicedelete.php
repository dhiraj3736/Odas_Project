<?php
include("../connection.php");
if(isset($_POST['deletebtn'])){
	$idtodelete=$_POST['idtodelete'];
	$deleteQuery="DELETE from services where id='$idtodelete'";
	$execute=mysqli_query($conn,$deleteQuery);
	if(!$execute){
		die(mysqli_error($conn));
	}

	header("location:adminservice.php");
}





?>