
<!DOCTYPE html >
<html lang="en">
<head>
<title>Role Selection FORM</title>
<link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" href="css/bootstrap.min.css">
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

 <?php
       if(isset($_POST['submit'])){
		   $role = $_POST['role'];
		   if($role == "Student"){
			   
			  echo "<script>
					alert('Sending You to Student Registration form');
					window.location.href='login_student.php';
					</script>"; 		   
		   }
    else if($role == "Teacher"){
	
	        echo "<script>
					alert('Sending You to Teacher Registration form');
					window.location.href='login_teacher.php';
					</script>";
	
       }		   
	    } 
		
?>


<div> <div align="center">
<h3>Role Selection FORM</h3>
    <form id="login-form" method="post" action="" >
        <table border="0.5" >
           <label for="sel1">Select Your Role:</label>
								  <select name="role"  class="form-control" id="sel1">
								     <option >Select One </option>
									<option value="Student">Student</option>
									<option value="Teacher">Teacher</option>
								  </select>
								</div>
			<tr>
			<td></td>
            <td>
                <br><center><input type="submit" name="submit" value="Submit" id="lol" />
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
