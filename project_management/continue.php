<?php
ob_start();
include("../connect.php");
session_start();

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>simplified education </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="../js/jquery-func.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="../css/images/favicon.ico" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie.css" type="text/css" media="all" /><![endif]-->
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <h1 id="logo"><a href="#"><img src="../css/images/Logo_colord.png" width="37" height="20" />SIMPLIFIED EDUCATION<span>Strictly Education</span></a></h1>    <div class="socials"> <a href="#" class="link link-twitter">Twitter</a> <a href="#" class="link link-linkedin">LinkedIn</a> <a href="#" class="link link-facebook">Facebook</a> <a href="#" class="link link-flickr">flickr</a> </div>
  </div>
  <div id="navigation">
    <ul>
      <li><a href="index.php" class="active">Home</a></li>
   
    </ul>

  </div> 
  
  <div id="main">
  <?php 
include('../connect.php');
if($_GET['access']=='denied'){ echo "<h3 style='color:#F00;'>ACCESS DENIED!! LOGIN </h3>";
}


if(isset($_POST['submit'])){
	$transaction_id=addslashes($_POST['transaction_id']);
	
	
	$select="SELECT * FROM `project_orders` WHERE `transaction_id`='$transaction_id'";
	$query=mysql_query($select) or die("ERROR:".mysql_error());
	
	if(mysql_num_rows($query)>0){
		
					$_SESSION['auth']=1;
					$_SESSION['postersid']=$id;
header("location:orderprofile.php");
}

		
	if(mysql_num_rows($query)==0){
echo "<p style='color:#F00;'>Invalid Transaction ID</p>";
}
$choose=mysql_query("Select `id` FROM `project_orders` WHERE `transaction_id`='$transaction_id'");
		while($row=mysql_fetch_array($choose)){
		$id=$row['id'];
							$_SESSION['postersid']=$id;

		}
}
?>
   <br/><br/>
   <?php echo $_GET['msg']; ?><br/>
   <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
   
  <center> <table width="50%" border="1">
  <tr>
    <td height="50">Enter your Transaction Id</td>
    <td><input type="text" name="transaction_id" value="<?php if(isset($_POST['transaction_id'])){ echo "$transaction_id";}?>"/></td>
  </tr>
  <tr>
    <td height="49">&nbsp;</td>
    <td><input type="submit" value="Continue" name="submit" /></td>
  </tr>
</table></center>

   </form>
   
    <div class="cl">
  </div>
    
  </div>
      <p class="lf">Copyright &copy; 2013 <a href="#">GMU360 E-Learning </a> - All Rights Reserved BY Gmu360 Concept</p>

</div>
<!-- END PAGE SOURCE --></body>
</html>
<?php
ob_flush();
?>