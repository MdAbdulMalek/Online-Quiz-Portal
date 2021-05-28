<?php
include("class/users.php");
$ans=new  users;
$answer=$ans->answer_selected($_POST);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<link rel="stylesheet" href="css/web.css"></link>
	<meta charset="UTF-8">
	<title>answer</title>
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
</head>
<body id="body_bg">
<style>
#body_bg
{ 
background-color:#A9D0F5; 
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

	<center>
	<?php
	$total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
	$attempt_qus=$answer['right']+$answer['wrong'];
	?>
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
  <h2>Your Quiz results</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Total number of Questions</th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempted qusetions</td>
        <td><?php echo $attempt_qus;?></td>
      </tr>
      <tr>
        <td>Right answer </td>
        <td><?php echo $answer['right'];?></td>
      </tr>
      <tr>
        <td>Wrong answer</td>
        <td><?php echo $answer['wrong'];?></td>
      </tr>
	  <tr>
        <td>No answer</td>
        <td><?php echo $answer['no_answer'];?></td>
      </tr>
	  <tr>
        <td>Your result</td>
        <td><?php 
		$per=($answer['right']*100)/($total_qus);
		
		echo $per."%";
		?></td>
      </tr>
    </tbody>
  </table></div>

  <div class="col-sm-2"></div>
</div>

   <a href="home.php"><input name="reg" type="button" id="lool" value="HOME PAGE" "></input>
	
	
	</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>