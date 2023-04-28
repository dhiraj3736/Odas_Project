<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	body{

        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('images/3.jpg');
        background-repeat:none;
        background-size:1500px;
       box-sizing: border-box;
       padding-top: 200px;

    }
    h1{
    	color: white;
    }
    label{
    	color: white;
    }
		#border{
			width: 300px;
			height: 250px;
			border: 1px solid black;
			margin: auto;
			position: absolute;
			transform: translatex(600px);
			 box-shadow: 0 10px 25px;
			 border-radius: 25px;
			
			
			padding: 10px;
		}
		.textbox{
			width: 200px;
			height: 20px;
			transform: translateX(20px);
			border-radius: 20px;
		}
		.errorfield{
			color:red;

		}
		.main a{
	font-size: 18px;
	color: white;
	text-decoration: none;
	  position: absolute;
 	 top: 66%;
 right: 48%;
	
	margin-top: 25px;

		}
	


	</style>
</head>
<body>

	<form method="post"  name="adminloginform"action = "authentication.php" onsubmit = "return formValidation()">
	
		<div id="border">
			<h1>User Login</h1>
			<?php
			if(isset($_GET['err'])&& $_GET['err']==1){?>
<center><p id="login_error" class="errorfield" >Please Login to Continue!!</p></center>
<?php
}
?>
<label>Username:</label>	
<input type="text" name="username" class="textbox">	
<center><p id="nameerror" class="errorfield" ></p></center>
<label>Password:</label>	
<input type="password" name="password" class="textbox"/>	
<center><p id="passerror" class="errorfield"></p></center>	
<center><input type="submit" name="ok" value="Submit"  >
		</div>
		<div class="main">
	
			<a href="frontend.php">Cancel</a>
	
			
		</div></center>

		
	

	</form>
	
<script type="text/javascript">

	function formValidation(){
		var username=document.adminloginform.username.value;
		var password= document.adminloginform.password.value;
		var error=false;
		if(username==""){
			error=true;
			printErrorMessage("nameerror","Username can't be empty!!");
		}else{
			printErrorMessage("nameerror","");
		}
		if(password==""){
			error=true;
			printErrorMessage("passerror","Password can't be empty!!");
		}
		else{
			printErrorMessage("passerror","");
		}
		if(error==true){
			return false;
		}else{
			return true;
		}
 	}

 	function printErrorMessage(id,message){
 		document.getElementById(id).innerHTML=message;
 	}
 	


</script>
</body>


</html>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body >
   <!--  <a  href="logout.php">Logout</a> -->
    </body>
    </html>