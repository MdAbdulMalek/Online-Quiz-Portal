
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
				  <div class="panel-body"><center><b>Registration Form </b></center></div>
			</div>
		</div>
    </div>

	<div class="col-sm-12">
			<div class="panel panel-info">
			<div class="panel-heading"></div>
			<div class="panel-body">
			<?php 
							if(isset($_GET['run'])&& $_GET['run']=="success")
							{
								echo "<mark>Your registration successfully done</mark>";
							} 
							?>
	  <form role="form" method="post" action="reg.php" enctype="multipart/form-data"  >
							  	<div class="form-group">
								  <label for="name">Name:</label>
								  <input type="text" class="form-control" name="n" id="name"  placeholder="Enter name" required>
								</div>
								<div class="form-group">
								  <label for="email">Email:</label>;
								  <input type="email" class="form-control" name="e" id="email" required placeholder="Enter email" required>
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" required placeholder="Enter password" required>
								</div>
								<div class="form-group">
								  <label for="pwd">Choose your Image</label>
								  <input type="file" class="form-control" name="img" required >
								</div>
								
								<center><input name="submit" type="submit" id="lol" value="Submit "></input>
                                 <a href="login_student.php"><input name="reg" type="button" id="lol" value="Login Page "></input></a>
								 <input name="reset" type="reset" id="lol" value="Reset "></input>
								 </center>
												
		 </div>
		</div>
		</div>
		</div>
		</form>
		</body>
		
<br>
		  <br>
 <?php 
 echo "</br>";
 echo "</br>";
 echo "</br>";
include ("footer.php");
?>

