<?php
session_start();
session_destroy();
echo'	<script type="text/javascript">';
echo'	alert("signup successfuly!");';
	echo'</script>';


header("location:login.php");

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
This is logout Page
</body>
</html>