<?php
include ('../connection.php');
if(isset($_POST["approve"])){
	$id=$_POST['id'];
	$sql="UPDATE book set approve=1 where id='$id'";
	mysqli_query($conn,$sql);
	header('location:adminviewappointment.php');
}
?>