<?php
include "config.php";

?>

<!DOCTYPE html >
<html lang="en">
<head>
<title>Admin LOGIN FORM</title>
<link rel="stylesheet" type="text/css" href="style.css">
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
 width:300px; 
 border-radius:5px; 
}
#lol{	
	color:black;
	margin:5px;
	text-align:center;
	padding:2px;
	height:25px;
	width:60px;	
	background:#9F81F7;
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
<h3>ADMIN  LOGIN  FORM</h3>
    <form id="login-form" method="post" action="login.php" >
        <table border="0.5" >
            <tr>
                <td><label for="user_id">Username :</label></td>
                <td><input type="text" name="u" id="user_id" placeholder="Enter Username" required></td><br>
            </tr>
            <tr>
                <td><label for="user_pass">Password :</label></td>
                <td><input type="password" name="p" id="user_pass" placeholder="Enter Password" required></input></td>
            </tr>
			<tr>
			<td></td>
            <td>
                <br><center><input type="submit" value="Submit" id="lol" />
                <input type="reset" value="Reset" id="lol"/>	</center>
				
            </td>
			</tr>			
        </table>
    </form>
		</div>
</body>
</html>
<?php
include "footer.php";
?>