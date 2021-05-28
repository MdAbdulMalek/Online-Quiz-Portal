<?php
if(isset($_POST['submit'])){
	$cat=$_POST['cat'];
	$url= "give_quiz.php?cat=".$cat;
	header( "Location: " .$url);
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/web.css"></link>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
</head>
<body id="body_bg">
<style>
#body_bg
{ 
background-color:#A9D0F5; 
}
#login-form{ 

background:#A9D0F5; 
border: 3 px solid #eeeee; 
padding:9px 9px;
 width:400px; 
 border-radius:5px; 
}
</style>
 
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
  
  <div> <div align="center">
<h3>Role Selection FORM</h3>


    <form id="login-form" method="post" action="selected_quiz.php" >
        <table border="0.5" >
           <label for="sel1">Enter The Category ID:</label><br>
				 <input type="text" name="cat" class="form-control" placeholder="Enter category id" required>				  
			</div>
			<tr>
			<td></td>
            <td>			    
                <br><center><input type="submit" name="submit" value="Submit cat id" id="lol" />
                <input type="reset" value="Reset" id="lol"/>	</center>				
            </td>
			</tr>			
        </table>
    </form>
	
		</div>

</body>
</html>
<?php
include ("footer.php");
?>