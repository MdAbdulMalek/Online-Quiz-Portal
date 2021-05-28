<!DOCTYPE html>
<html lang="en">
<head>
  <title>singin and signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body id="body_bg">
<style>
#body_bg
{ 
background-color:#9F81F7; 
}
#login-form{ 

background:#A9D0F5; 
border: 3 px solid #eeeee; 
padding:9px 9px;
 width:400px; 
 border-radius:5px; 
}
#lool{
	
	color:white;
	margin:5px;
	text-align:center;
	padding:2px;
	height:40px;
	width:150px;	
	background:green;
	border-radius:5px;
	
}
</style>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			 <div class="panel panel-info">
				  <div class="panel-heading"><b>Online Quiz system in php</b></div>
				  <div class="panel-body">Quiz in php </div>
			</div>
		</div>
    </div>
</div>

<div <div align="center">

<h3><b>ONLINE QUIZ ADMIN PANEL</b></h3>
    <form id="login-form" method="post" action="home.php" >
        <table border="0.5" >
            
			<tr>
			<td></td>
            <td>
                <br><center><a href="edit.php"><input type="button" value="View Student List" id="lool"/><br><br>
                <a href="edit_t.php"><input type="button" value="View Teacher list" id="lool"/>	<br><br>
				<a href="add.php"><input type="button" value="Add Question" id="lool"/>	<br><br>
				<input name="logout" type="submit" value="LOGOUT" id="lool" /></center>
				
            </td>
			</tr>			
        </table>
    </form>
		</div>
		
	<?php
	  if(isset($_POST['logout'])){
		  
		  session_start();
          session_destroy();
		  echo "<script>
						alert('You are Successfully Logged out');
						window.location.href='index.php';
						</script>";
	  }
    ?>
</body>
</html>
<?php
include "footer.php";
?>