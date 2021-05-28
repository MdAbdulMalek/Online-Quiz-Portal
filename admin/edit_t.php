<?php
$fonts = "Arial";
$frontcolor = "#FC8C41";
?>
<?php
include "config.php";
$db = new Database();
$query = "select * from signup_teacher";
$read= $db->select($query);
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
#lol{	
	color:white;
	margin:5px;
	text-align:center;
	padding:2px;
	height:40px;
	width:120px;	
	background:green;
	border-radius:5px;	
}
</style>
  <div class="Border">
   <section class="headeroption">
   <h2>Online Quiz system in php</h2>
   </section>
   <section class="maincontent">
   
   <?php 
   
   if(isset($_GET['msg'])){
	   
	   echo "<span style='color:green'>".$_GET['msg']."</span>";
   }
   ?>
  
  <table class="tblone">
  <tr>
 
    <th width="40%">NAME</th>
	<th width="40%">EMAIL</th>
	<th width="20%">ACTION</th> 
  </tr>
  
  <?php if($read) {?>
  <?php while($row = $read->fetch_assoc()) {?>
  <tr>
     <td><?php echo $row['name'];?></td>
	 <td><?php echo $row['email'];?></td>
	 <td><a href="update_t.php?id=<?php echo urlencode($row['id']);?>">EDIT</a></td>
  
  </tr>
  <?php } ?>
  <?php }else { ?>
  <p>Data is not availabe.</p>
  <?php } ?>
  </table>
   <center><a href="home.php"><input type="button" value="Go Back" id="lol"/></center>
   </section>
   <section class="footeroption">
   <p>&copy; <?php echo date("Y")?> LEARNING.</p>
<h2>fantasticmalek0@gmail.com</h2>
</section>
</div>
</body>
</html>