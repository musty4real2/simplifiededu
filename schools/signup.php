<?php
ob_start();
include("../connect.php");

include("../ballot_class.php");
$object=new library();
session_start();
$tid=$_SESSION['postersid'];
$sid=$_SESSION['sid'];

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
      <li><a href="index.php">HOME</a></li>
    </ul>

  </div> 
  
  <div id="main">
 <br/><br/>
    <h2><a href="#">Simplified Education </a>::: UPDATE YOUR LIBRARY INFORMATION</h2>
    Please fill in the details Below:
     <table width="100%" border="0" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
     <?php 
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
		$transaction_id=addslashes($_POST['transaction_id']);

	
	$select="UPDATE `sch_student_reg` SET `fname`='$fname',`sname`='$sname',`location`='$location',`phone_number`='$phone',`email` ='$email',`attempt`='1',`paid`='1',`entry_date`=NOW()  WHERE  `id`='$tid' AND `school`='$sid' LIMIT 1";
	$query=mysql_query($select) or die("ERROR:".mysql_error());	
	$id=mysql_insert_id($connection);
header("location:menu1.php");

}
?>
      <center><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div id="bar">
    <h3>Update your Library Details</h3></div>

        <table border="0" width="398" height="255px">
        <tr><td>&nbsp;</td></tr>
        	<tr>
            	<td height="37" ><p>Phone Number</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="phone" autosuggest="off" value="<?php if(isset($_GET['phone'])){echo $_GET['phone'];}?>"/></td>
            </tr>
            <tr>
            	<td height="37" ><p>first name</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="fname" autosuggest="off"/></td>
            </tr>
            <tr>
            	<td height="37" ><p>Surname</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="sname" autosuggest="off"/></td>
            </tr>

            <tr>
            	<td height="37" ><p>location</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="location" autosuggest="off"/></td>
            </tr>
       
                  <tr>
            	<td height="37" ><p>Enter Email</p></label></td>
              <td ><input class="data" id="input" type="text" size="40"maxlength="40" width="30" name="email" autosuggest="off"/></td>
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
 
 <br/><br/>     

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