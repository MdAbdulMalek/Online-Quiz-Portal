<?php 
include("class/users.php");

$register=new users;
extract($_POST);
$img_name=$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name,"img/".$img_name);
$query="insert into signup_teacher values ('','$n','$e','$p','$img_name')";

if($register->signup_teacher($query))
{
	//$register->url("signup.php?run=success");
	echo "<script>
					alert('You are Successfully Registered');
					window.location.href='login_teacher.php';
					</script>";
}
?>
