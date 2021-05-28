<?php
$fonts = "Arial";
$frontcolor = "#FC8C41";
?>
<?php
include "config.php";
$id= $_GET['id'];
$db = new Database();
$query = "select * from signup where id=$id";
$getData= $db->select($query)->fetch_assoc();

?>

<?php 
if(isset($_POST['delete'])){
$query= "delete from signup where id=$id";
$deleteData= $db->delete($query);
}

?>



<!doctype html>
<html>
<head>
<title>PHP LEARNING</title>
<style>
.Border{width:900px; margin:0 auto; background:#ddd;padding:20px;}
.headeroption, .footeroption{background:#444; color:<?php echo $frontcolor ?>; text-align:center;}
.maincontent{min-height:300px;padding:20px;}
.tblone{width:100%;border:1px solid #fff;margin:20px 0}
.tblone td{padding:5px 10px;text-align:center;}
table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
 table.tblone tr:nth-child(2n){background:#f1f1f1;height:30px;}
.p{margin:0}
</style>
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
width:500px; 
border-radius:5px; 
}
#lool{
	
	color:white;
	margin:5px;
	text-align:center;
	padding:2px;
	height:25px;
	width:100px;	
	background:blue;
	border-radius:5px;
	
}
#lol{	
	color:white;
	margin:5px;
	text-align:center;
	padding:2px;
	height:25px;
	width:100px;	
	background:Green;
	border-radius:5px;	
}
</style>
  <div class="Border">
   <section class="headeroption">
   <h2>Online Quiz system in php</h2>
   </section>
   <section class="maincontent"> 
   
 <center>  
 <form action="update.php?id=<?php echo $id?>" method="post" id="login-form">  
 
 <?php 
   
   if(isset($error)){
	   
	   echo "<span style='color:red'>".$error."</span>";
   }
   ?>
   
  <div <div align="center">
 <table> 
 <tr><br>
    <td>Name</td>
	<td><input type="text" name="name" value="<?php echo $getData['name']?>"/></td>    
 </tr>
  
 <tr>
    <td>Email</td>
	<td><input type="text" name="email" value="<?php echo $getData['email']?>"/></td>    
 </tr> 
 
 <tr>
   <td></td>
   <td>
   <center><input type="submit" name="delete" value="Delete User" id="lool" /></center>
   </td>
 </tr>
 
 <tr>
   <td></td>
   <td>
   <center><a href="home.php"><input type="button" value="Go Back" id="lol"/></center>
   </td>
 </tr>

</table>
 
</form> 

</div>

 </center>   
 </section>

   <section class="footeroption">
   <p>&copy; <?php echo date("Y")?> LEARNING.</p>
<h2>fantasticmalek0@gmail.com</h2>
</section>
</div>
</body>
</html>