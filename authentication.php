<?php
    session_start();
include('connection.php');
$user = $_POST['username'] ;
$password = $_POST['password'];

$sql = "SELECT * FROM signup where user_name = '$user' and password ='$password' ";
$san = $conn->query($sql);
$row = $san->fetch_assoc();

if($san->num_rows==1){

    $_SESSION['admin_id']=$row['id'];
    $_SESSION['admin_username']=$row['user_name'];
    $_SESSION['admin_password']=$row['password'];

    header('location:userdashboard.php');

}else{
    echo("Login Credential Not Matched!!");
}


    ?>