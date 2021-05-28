<?php
include("class/users.php");
$signin_teacher=new users;
extract($_POST);
if($signin_teacher->signin_teacher($e,$p))
{
	//$signin->url("home.php");
	echo "<script>
					alert('You are Successfully Logged IN');
					window.location.href='home_teacher.php';
					</script>";
}
else
{
	$signin_teacher->url("index.php?run=failed");
}

?>