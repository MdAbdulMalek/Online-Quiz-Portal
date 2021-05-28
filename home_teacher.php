<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile_teacher($email);
//$profile->cat_shows();
//print_r($profile->cat);
//print_r($profile->data_t);
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
	color:black;
	margin:5px;
	text-align:center;
	padding:2px;
	height:30px;
	width:90px;	
	background:#9F81F7;
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
      <h3>HOME FOR TEACHER</h3>
	  <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Make Question Paper</button></center>       
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4"><br>
	   <div id="select" class="tab-pane fade">
               <div class="table-responsive">
            <table class="table table-striped">
			<?php
			if(isset($_GET['msg']) && !empty($_GET['msg']))
			{
				echo "<p>data inserted successfully</p>";
			}
			
			?>
			
			
				  <form method="post" action="add_quiz_teacher.php">
					<div class="form-group">
					  <label for="text">Question</label>
					  <input type="text" class="form-control" name="qus"  placeholder="Enter question">
					</div>

					<div class="form-group">
					  <label for="text">option-1</label>
					  <input type="text" class="form-control"  name="op1"  placeholder="Enter option-1">
					</div>
					<div class="form-group">
					  <label for="text">option-2</label>
					  <input type="text" class="form-control" name="op2"  placeholder="Enter option-2">
					</div>
					
					<div class="form-group">
					  <label for="text">option-3</label>
					  <input type="text" class="form-control"  name="op3"  placeholder="Enter option-3">
					</div>
					
					<div class="form-group">
					  <label for="text">option-4</label>
					  <input type="text" class="form-control"  name="op4" id="email" placeholder="Enter option-4">
					</div>
					<div class="form-group">
					  <label for="text">answer</label>
					  <input type="text" class="form-control" name="ans" id="email" placeholder="Enter answer">
					</div>
					<div class="form-group">
					  <label for="text">Enter catagory id:</label>
					  <input type="text" class="form-control" name="catagory" id="email" placeholder="Enter catagory id"> 						   
					</div>
					
					<tr>
					<td>
					<center><button type="submit" name="submit" id="lol">Submit</button>
					<input type="reset" value="Reset" id="lol"/></center>
					</td>
					</tr>
					
				  </form>
              </tbody>
            </table>
          </div>
		   		   		   		   		   			  
		 
		</form>
	 <br><br>
	  
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
	foreach($profile->data_t as $profi)
	{?>
      <tr>
        <td><?php echo $profi['id'];?></td>
        <td><?php echo $profi['name'];?></td>
        <td><?php echo $profi['email'];?></td>
        <td><img src="img/<?php echo $profi['img'];  ?>" alt="" width="100px" height="80px" /></td>
      </tr>
    </tbody>
	<?php 	}?>
  </table>	
    </div>
	
    <div id="menu3" class="tab-pane fade">
	  <br>
	  <br>
	  <form method="post" action="home_teacher.php">
	  <center><input name="logout" type="submit" id="lool" value="Logout"></input> </center> 
	  
	  <?php
	  if(isset($_POST['logout'])){
		  
		  session_start();
          session_destroy();
		  echo "<script>
						alert('You are Successfully Logged out');
						window.location.href='login_teacher.php';
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
