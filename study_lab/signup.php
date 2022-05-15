<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gmu e-Library|| Forumn Sign up Stage1</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../forumn/css/style.css" type="text/css" media="all" />
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
    <br/><br/>
    <h2><a href="#">WELCOME TO GMU360 CONCEPT e-Library </a></h2>
    Please Fill Out the Form Below So you can proceed to tutorial submition:: <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
     <?php 
include('../connect.php');
if(isset($_POST['button'])){
	$phone=addslashes($_POST['phone']);
	$fname=addslashes($_POST['fname']);
	$sname=addslashes($_POST['sname']);
	$school=addslashes($_POST['school']);
	$dept=addslashes($_POST['dept']);
	$email=addslashes($_POST['email']);
		$location=addslashes($_POST['location']);
	$uname=addslashes($_POST['uname']);
	$pword=addslashes($_POST['pword']);
	
	
		if($location==""){$error[]="please include your address";}
	if($email==""){$error[]="please include your email";}
	if($fname==""){$error[]="Input your firstname";}
	if($sname==""){$error[]="Input your surname";}
	
		if($school==""){$error[]="please enter your school";}
		 	if($uname==""){$error[]="please enter your username";}
				if($pword==""){$error[]="please enter your password";}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error[]="Enter email correctly.";
	
	$regex="/^[_a-zA-Z0-9-]+(\.[_a-z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-z]{2,3})$/";
		if(!preg_match($regex, $email)){
				$error[]="Please enter a valid email address";
	
			}
}
		if(!empty($error)){
		   echo "<p class='info' id='error'><span class='info_inner'><b>Oops! ERROR:</b></span></p>";
		foreach($error as $oops){
			echo "<p class='msg error'>$oops</p>";
			}//foreach loop
		}//if !empty error

		//if $error variable is empty, continue with the script
		elseif(empty($error)){
	$select="INSERT INTO `tutor_reg` (`fname`, `sname`, `school`, `location`, `phone_number`, `email`, `department`, `username`, `password`) VALUES ('$fname', '$sname', '$school', '$location', '$phone', '$email', '$dept', '$uname', '$pword')";
	$query=mysql_query($select) or die("ERROR:".mysql_error());
	$id=mysql_insert_id($connection);
header("location:success.php?id=$id");

}
}
?>
      <center><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div id="bar">
    <h3>Free Tutorial Submition Sign up</h3></div>

        <table border="0" width="888" height="255px">
        <tr><td width="245">&nbsp;</td></tr>
        	<tr>
            	<td height="37" ><p>Phone Number</p></label></td>
              <td width="633" ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="phone" autosuggest="off" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];}?>"/></td>
            </tr>
            <tr>
            	<td height="37" ><p>first name</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="fname" autosuggest="off" value="<?php if(isset($_POST['fname'])){echo $_POST['fname'];}?>"/></td>
            </tr>
            <tr>
            	<td height="37" ><p>Surname</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="sname" autosuggest="off" value="<?php if(isset($_POST['sname'])){echo $_POST['sname'];}?>"/></td>
            </tr>
            <tr>
            	<td height="37" ><p>school</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="school" value="<?php if(isset($_POST['school'])){echo $_POST['school'];}?>"autosuggest="off"/></td>
            </tr>
            <tr>
            	<td height="37" ><p>Department</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="dept" autosuggest="off" value="<?php if(isset($_POST['dept'])){echo $_POST['dept'];}?>"/></td>
            </tr>
            <tr>
            	<td height="37" ><p>Address/ Location</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="location" autosuggest="off" value="<?php if(isset($_POST['location'])){echo $_POST['location'];}?>"/></td>
            </tr>
            <tr>
            	<td height="37" ><p>Username</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="uname" autosuggest="off" value="<?php if(isset($_POST['uname'])){echo $_POST['uname'];}?>"/></td>
            </tr>
            <tr>
            	<td height="37" ><p>Password</p></label></td>
              <td ><input class="data" id="input" type="password" size="40"maxlength="40" width="30" name="pword" autosuggest="off"/></td>
            </tr>
                  <tr>
            	<td height="37" ><p>Enter Email</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="email" autosuggest="off" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>"/></td>
            </tr>
            <tr>
            
          	<td><label></label></td>
               
                <td align="justify"><input name="button" type="submit"  id="button" value="Finish"/></td>
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