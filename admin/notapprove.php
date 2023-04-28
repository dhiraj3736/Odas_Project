<?php
include ('../connection.php');
if(isset($_POST["notapprove"])){
	$id=$_POST['id'];
	$sql="UPDATE book set approve=0 where id='$id'";
	mysqli_query($conn,$sql);
	header('location:adminviewappointment.php');
}
?>