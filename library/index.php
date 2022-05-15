<?php
include("connect.php");
session_start();

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gmu e-Library|| Administrative Menu</title>
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
    <h1 id="logo"><a href="#">SIMPLIFIED EDUCATION<span>Strictly Education</span></a></h1>
    <div class="socials"> <a href="#" class="link link-twitter">Twitter</a> <a href="#" class="link link-linkedin">LinkedIn</a> <a href="#" class="link link-facebook">Facebook</a> <a href="#" class="link link-flickr">flickr</a> </div>
  </div>
  <div id="navigation">
    <ul>
      <li><a href="../index.php" class="active"><img src="../css/images/home.png" />Home</a></li>
      <li><a href="signup.php" >Sign up for forumn</a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>

    </ul>

  </div> 
  
  <div id="main">
    <br/><br/>
    <center><h2><a href="#"><img src="css/images/login_03.png"/></a></h2></center>
    Please Login Below: <table width="100%" border="0" >
    <tr width="100%">
      <td width="40%">
      
     <?php 
include('connect.php');
if($_GET['access']=='denied'){ echo "<h3 style='color:#F00;'>ACCESS DENIED!! LOGIN </h3>";
}
if($_GET['logout']==1){ echo "<h3 style='color:#F00;'>You have been loged out</h3>";
}


if(isset($_POST['button'])){
	$uname=addslashes($_POST['username']);
	$pword=addslashes($_POST['password']);
	
	$select="SELECT * FROM `forumn_reg` WHERE `username`='$uname' AND `password`='$pword'";
	$query=mysql_query($select) or die("ERROR:".mysql_error());
	
	if(mysql_num_rows($query)>0){
		
					$_SESSION['auth']=1;
					$_SESSION['postersid']=$id;
header("location:post.php");
}

		
	if(mysql_num_rows($query)==0){
echo "<p style='color:#F00;'>Invalid Username or Password</p>";
}
$choose=mysql_query("Select `id` FROM `forumn_reg` WHERE `username`='$uname' AND `password`='$pword'");
		while($row=mysql_fetch_array($choose)){
		$id=$row['id'];
							$_SESSION['postersid']=$id;

		}
}
?>
      <center><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<div id="bar"><h2>Login here</h2><img src="../forum/Arrow.png" style="	position:absolute; top:210px; right:-200px; left:500px; z-index:10;" /></div>
        
        
<table border="0" width="600" height="350px" bgcolor="#197fc3">
<tr class="none">
<td >
<table border="0" >
<tr class="none">
<center><p style="color:#FFF"><h2>Enter Gmu360 Concept Forum</h2></center>

            	<td height="37" ><p style="color:#FFF; font-family:'Courier New', Courier, monospace; size:auto;">Username:</p></label><br/><input class="data" id="input" type="text" size="40"maxlength="15" width="30" name="username" autosuggest="off"/></td>
            </tr>
<tr class="none">
            	<td height="36"><p style="color:#FFF; font-family:'Courier New', Courier, monospace; size:auto;">Password:</p><br/><input id="input" type="password" size="40" maxlength="15" name="password" /></td>
            </tr>
<tr class="none">
            	<td><label></label></td>
               
                <td align="justify">&nbsp;</td>
            </tr>
</table></td>
<td bgcolor="#FFFFFF" width="400px">
<br/><br/>
<br/><br/>
<a href="">Forum Rules</a><br/>
<a href="">Forum Rules</a>
<a href="">Forum Rules</a><br/>
<img src="login/images/login_09.png"/><br/>
<br/><br/>
<form><input name="button" type="submit"  id="button_login" value=" " />
</form>
<br/><br/></td>
          
      </tr>
        </table>    <div class="cl">
  </div>
    
  </div>
      <p class="lf">Copyright &copy; 2013 <a href="#">GMU360 E-Learning </a> - All Rights Reserved BY Gmu360 Concept</p>

</div>
<!-- END PAGE SOURCE --></body>
</html>