<?php
    session_start();
include('../connection.php');
$user = $_POST['username'] ;
$password = $_POST['password'];


$sql="SELECT * FROM admin_login where username = '$user' and password ='$password' ";
$san=$conn->query($sql); //object oriented approach to execute query
$row=$san->fetch_assoc();//data fetch on row by using fetch_assoc method

// authentication part ((checking username and password in database))
if($san->num_rows==1){

    $_SESSION['admin_id']=$row['id'];
    $_SESSION['admin_username']=$row['username'];
    $_SESSION['admin_password']=$row['password'];

    

    header('location:admindashboard.php');

}else{
    echo("Login Credential Not Matched!!");
}


    ?>

    