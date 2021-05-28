<?php
include("class/users.php");
$signin=new users;
extract($_POST);
if($signin->signin($e,$p))
{
	//$signin->url("home.php");
	echo "<script>
					alert('You are Successfully Logged IN');
					window.location.href='home.php';
					</script>";
}
else
{
	$signin->url("index.php?run=failed");
}

?>