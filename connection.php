<?php
 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "odas_database";
  
  $conn = mysqli_connect($servername,$username, $password, $database);
  
  if (!$conn){
      die("sorry we failed to connect");
  }
 
?>