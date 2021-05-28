<?php
include "config.php";
$signin=new Database();
extract($_POST);
if($signin->signin($u,$p))
{
	$signin->url("home.php");
}
else
{
	$signin->url("index.php?run=failed");
}

?>