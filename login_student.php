<!DOCTYPE html>	  
<html lang="en">
<head>
<link rel="stylesheet" href="css/web.css"></link>
      <title>Registration</title>
      <h2 class="h" align="center">Welcome to Online Quiz System</h2>	  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body id="body_bg">
<style>

#body_bg
{ 
background-color:#9F81F7; 
}
</style>
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			 <div class="panel panel-danger">
				  <div class="panel-heading">Online Quiz system in php</div>
				  <div class="panel-body">Quiz in php </div>
			</div>
		</div>
    </div>
</div>

<div class="container">
      <center>
        <div class="col-sm-12">
				<div class="panel panel-info">
                <div class="panel-heading">Signin Form</div>
			    <div class="panel-body">
 <form action="login.php" method="POST" align="center">
            <div class="form-group">
			   <label for="email"><b>User-Email:</b></label>
			   <input type="email" class="form-control" name="e" id="email" placeholder="Enter email" required>
		   </div>
		   
		   <div class="form-group">
				<label for="pwd"><b>User-Password:</b></label>
				<input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password" required>
		  </div>	
           <input name="submit" type="submit" id="lol" value="Submit "></input>
            <a href="sign_stu.php"><input name="reg" type="button" id="lol" value="Sign Up" ></input></a>	
			<input name="reset" type="reset" id="lol" value="Reset "></input>
		 </div>
		 </center>
  </div>
 
 </form>
 
 <?php 
include ("footer.php");
?>
