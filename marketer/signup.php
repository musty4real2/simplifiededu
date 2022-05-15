<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gmu e-Library|| Administrative Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
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
    <br/><br/>
    <h2><a href="#">Simplified Education :FORUM</a></h2>
    Please Enter Your Phone Number Below: <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
     <?php 
include('connect.php');
if(isset($_POST['button'])){
	$phone=addslashes($_POST['phone']);
	
	$select="SELECT * FROM `forumn_reg` WHERE `phone_number`='$phone' ";
	$query=mysql_query($select) or die("ERROR:".mysql_error());
	
	if(mysql_num_rows($query)==1){
		echo "<p style='color:#F00;'>These Phone Number Cannot be used for registration Because it has been used to register Before</p>";

}

		
	if(mysql_num_rows($query)==0){
					$_SESSION['auth']=1;
header("location:signup2.php?phone=$phone");

}
}
?>
      <center><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div id="bar"><h3>Sign up Stage 1 Phone Check</h3></div>

        <table border="0" width="398" height="255px">
        <tr><td>&nbsp;</td></tr>
        	<tr>
            	<td height="37" ><p>Phone Number</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="phone" autosuggest="off"/></td>
            </tr>
            <tr>
            	<td><label></label></td>
               
                <td align="justify"><input name="button" type="submit"  id="button" value="Proceed"/></td>
            </tr>
        </table>

	</form></center>
      
      
      
      </td>
            
          
      </tr>
        </table><br/><br/>
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