<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
//print_r($profile->cat);
//print_r($profile->data);
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
  #lol{
	
	color:white;
	margin:5px;
	text-align:center;
	padding:2px;
	height:35px;
	width:130px;	
	background:blue;
	border-radius:5px;
	
}
</style>

<div class="container">
  <h2>Online Quiz in php</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li style="float:right"><a data-toggle="tab" href="#menu3"><b>Logout</b></a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
	  <center><a href="selected_quiz.php"><input name="reg" type="button" id="lol" value="Give Selected Quiz" ></input></a>
	  <br><br><br>
	  <button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Practice Quiz</button></center>       
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4"><br>
	   <div id="select" class="tab-pane fade">

		  <form  method="post" action="qus_show.php">
		  <select class="form-control" id="" name="cat">
		  <option>select category</option>
		  <?php		  
		  foreach($profile->cat as $category)
		  {  ?>			  			
			<option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
			<?php   }?>
		  </select><br>
		  <center><input type="submit" value="submit" class="btn btn-primary" /></center>
		</form>
	 
	  
	  </div>
	  </div>
	  <div class="col-sm-4"></div>
	  
    </div>
	
    <div id="menu1" class="tab-pane fade">
      <h3>Showing profile</h3>
	  
	  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
	
	<?php 
	foreach($profile->data as $prof)
	{?>
      <tr>
        <td><?php echo $prof['id'];?></td>
        <td><?php echo $prof['name'];?></td>
        <td><?php echo $prof['email'];?></td>
        <td><img src="img/<?php echo $prof['img'];  ?>" alt="" width="100px" height="80px" /></td>
      </tr>
    </tbody>
	<?php 	}?>
  </table>	
    </div>
	
    <div id="menu3" class="tab-pane fade">
	  <br>
	  <br>
	  <form method="post" action="home.php">
	  <center><input name="logout" type="submit" id="lool" value="Logout""></input> </center> 
	  <?php
	  if(isset($_POST['logout'])){
		  
		  session_start();
          session_destroy();
		  echo "<script>
						alert('You are Successfully Logged out');
						window.location.href='login_student.php';
						</script>";
	  }
	  ?>
	  </form>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include "footer.php";
?>