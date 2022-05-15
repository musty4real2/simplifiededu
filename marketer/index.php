<?php
ob_start();
include("../connect.php");

include("../ballot_class.php");
$object=new library();
session_start();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gmu e-Library||e-Learning</title>
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
    <h1 id="logo"><a href="#"><img src="../css/images/Logo_colord.png" width="37" height="20" />SIMPLIFIED EDUCATION<span>Strictly Education</span></a></h1>
        <div class="socials"> <a href="#" class="link link-twitter">Twitter</a> <a href="#" class="link link-linkedin">LinkedIn</a> <a href="#" class="link link-facebook">Facebook</a> <a href="#" class="link link-flickr">flickr</a> </div>
  </div>
  <div id="navigation">
    <ul>
      <li><a href="../index.php">HOME</a></li>

    </ul>

  </div> 
  
  <div id="main">
    <h2><a href="howitworks.php">e-Learning</a></h2>

    <center><h2>&nbsp;</h2></center>
    Please Login Below: <table width="100%" border="0" >
    <tr width="100%">
      <td width="40%">
      
     <?php 
if($_GET['access']=='denied'){ echo "<h3 style='color:#F00;'>ACCESS DENIED!! LOGIN </h3>";
}
if($_GET['logout']==1){ echo "<h3 style='color:#F00;'>You have been loged out</h3>";
}


if(isset($_POST['button'])){
	$uname=addslashes($_POST['username']);
	$pword=addslashes($_POST['password']);
	
	$select="SELECT * FROM `marketers` WHERE `username`='$uname' AND `password`='$pword'";
	$query=mysql_query($select) or die("ERROR:".mysql_error());
	
	if(mysql_num_rows($query)>0){
		
					$_SESSION['auth']=1;
					$_SESSION['postersid']=$id;
header("location:reportform.php");
}

		
	if(mysql_num_rows($query)==0){
echo "<p style='color:#F00;'>Invalid Username or Password</p>";
}
$choose=mysql_query("Select `id` FROM `marketers` WHERE `username`='$uname' AND `password`='$pword'");
		while($row=mysql_fetch_array($choose)){
		$id=$row['id'];
							$_SESSION['postersid']=$id;

		}
}
?>
      <center><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<div id="bar"><h2>Login here</h2>
</div>
        
        
<table border="0" width="600" height="200px" bgcolor="#0071bc">
<tr class="none">
<td >
<table border="0" >
<tr class="none">
            	<td height="37" ><p style="color:#FFF; font-family:'Courier New', Courier, monospace; size:auto;">Username:</p></label><br/><input class="data" id="input" type="text" size="40" maxlength="15" width="30" name="username" autosuggest="off"/></td>
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
<a href="">Library Rules</a><br/>
<a href="forgotpass.php">Forgot Password</a>
<br/><br/>
<form><input name="button" type="submit"  id="button_login" value=" " />
</form>
<br/><br/></td>
          
      </tr>
        </table>       
       <br/>
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