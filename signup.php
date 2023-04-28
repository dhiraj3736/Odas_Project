<?php
    
session_start();
include('connection.php');
?>
    <!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
  body {
  box-sizing: border-box;
  height: 200px;
  margin: 20px 
  padding: 20px;
  background-color: white;
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("./images/4.jpg");

}


.signupFrm {
  display:flex;
  justify-content: center;
  align-items: center;
  
  
}
.form {
  background-color: white;
  width: 400px;


  border-radius: 8px;
  padding: 20px 40px;
  box-shadow: 0 10px 25px;
}

.title {
  font-size: 50px;
  margin-bottom: 50px;
}

.inputContainer {
  position: relative;
  height: 30px;
  width: 90%;
  margin-bottom: 17px;
  
}
/* Style the inputs */

.input {
  position: absolute;
  top: 0px;
  left: 0px;
  height: 100%;
  width: 100%;
  border: 2px solid #7c7f82;
  border-radius: 10px;
  font-size: 16px;
  padding: 0 20px;
  outline: none;
  background: none;
  z-index: 1;
}

/* Hide the placeholder texts (a) */

::placeholder {
  color: transparent;
}

/* Styling text labels */

.label {
  position: absolute;
  top: 15px;
  left: 15px;
  padding: 0 4px;
  background-color: white;
  color: #d3d7db;
  font-size: 16px;
  transition: 0.5s;
  z-index: 0;
}

.submitBtn {
  display: block;
  margin-left: auto;
  padding: 15px 30px;
  border: none;
  background-color: #34a4eb;
  color: white;
  border-radius: 6px;
  cursor: pointer;
  font-size: 16px;
  margin-top: 30px;
}

.submitBtn:hover {
  background-color: #61eb34;
  transform: translateY(-2px);
}
.gender{
  font-size:20px;
}
.cccc{
  position: absolute;
  top: 20%;
  left: 30%;
  transform: translate(50%,50%);
  color: red;
}
.jabba{
  /*text-decoration: none;*/
  position: absolute;
  top: 80.7%;
  left: 30%;
  transform: translate(50%,50%);
  
}
./*jabb {
  font-size: 18px;
  text-decoration: none;
  background-color: #34a4eb;
  border-radius: 6px;
  padding: 15px 30px;
  color: white;
  margin-top: 25px;
  border: 2px;
}*/
/*.jabb:hover{
 background-color: #61eb34;
  color: white;

}*/



	</style>
</head>
<body>
<div class="signupFrm">


        
    <form method="post" action="" name = "adminloginform" onsubmit="return Validate()" class="form">
      <h1 class="title">Sign up</h1>

      <div class="inputContainer">
        <input type="text" name="fullname" class="input" placeholder="a"  required>
        <label for="" class="label">Fullname:</label>
      </div>
      <div class="inputContainer">
        <label class = "gender" >Gender</label><br>	
        <input type="radio"  name="gender" value = "male" required>	Male
        <input type="radio"  name="gender" value = "female" >	Female
        <input type="radio"  name="gender" value = "others" >	Others <br><br>
      </div>
      <div class="inputContainer">
        <input type="text" name="username" class="input" placeholder="a"  required>
        <label for="" class="label">Username</label>
      </div>
      <div class="inputContainer">
        <input type="password" class="input"   name="password" placeholder="a"  required>
        <label for="" class="label">Password</label>
      </div>
      <div class="inputContainer">
        <input type="password" class="input"   name="confirmpassword" placeholder="a"  required>
        <label for="" class="label">Confirm Password</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" name="address" placeholder="a"  required>
        <label for="" class="label">Address</label>
      </div>
      <div class="inputContainer">
        <input type="text" class="input" name="contactno" placeholder="a"  required>
        <label for="" class="label">Contact no:</label>
      </div>

      <div class="inputContainer">
        <input type="text" class="input" name="email"  placeholder="a" required>
        <label for="" class="label">Email</label>
      </div>

      <input type="submit" name="ok" class="submitBtn"  value="Submit"  onclick="myFunction()">
      <script>
function myFunction() {
  alert("registered successfully!");
 
}
</script>
    </form>
</div>
	
<script type="text/javascript">
  
function Validate() {
         var pass = document.adminloginform.password.value;
        var confirmPass = document.adminloginform.confirmpassword.value;
        var error = false;
        if (pass!= confirmPass) {
            error=true;
            alert("Passwords do not match.");
           
        }
          if(error == true){
          return false;
        }
            else{
          return true;
        }
        
    }
    
</script>
</body>


</html>
    <div class="cccc">
    <?php
        if(isset($_POST['ok'])){
            $fullname = $_POST['fullname'];
            $gender = $_POST['gender'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirmpassword = $_POST['confirmpassword'];
            $address = $_POST['address'];
            $contactno = $_POST['contactno'];
            $email = $_POST['email'];

            $checksql= "SELECT * FROM signup where user_name='$username' OR email_address='$email'";
            $checkrow= mysqli_query($conn,$checksql);

            if($checkrow->num_rows!=0){
              die("Username or Email already registered!!");
            }else{

            $dml = "INSERT into signup(fullname, gender, user_name, password, confirm_password, address, contact_no, email_address)
                values('$fullname', '$gender', '$username', '$password', '$confirmpassword', '$address', '$contactno', '$email')";
               if(!mysqli_query($conn,$dml)){
                die(mysqli_error($conn));
              }
           
              }
              

          
            }
            
        
        
        ?>
        </div>
        <!DOCTYPE html>
        <html>
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title></title>
        </head>
        <body>
          <div class="jabba">
        <a href="login.php" class="jabb">Go to Login page</a>
        </div>
        </body>
        </html>