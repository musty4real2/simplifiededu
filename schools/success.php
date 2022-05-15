<?php
ob_start();
session_start();

include("../connect.php");

include("../ballot_class.php");
$object=new library();
//fetch staff record
$set=$object->fetchRecord($_GET['id'], "library_reg");
while($st=mysql_fetch_array($set)){


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
    <h2><a href="#">Simplified Education </a>::: Registration Successful</h2>
    Please fill in the details Below:
     <table width="100%" border="0" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      <center><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div id="bar">
    <h3>your simplified Education Library Registration was successful</h3></div>

        <table border="0" width="398" height="255px">
        <tr><td>Please print this page or copy out your transaction id for future purposes</td></tr>
        	<tr>
            	<td height="37" ><p>Phone Number</p></label></td>
              <td ><?php echo $st['phone_number'];?></td>
            </tr>
            <tr>
            	<td height="37" ><p>first name</p></label></td>
              <td ><?php echo $st['fname'];?></td>
            </tr>
            <tr>
            	<td height="37" ><p>Surname</p></label></td>
              <td ><?php echo $st['sname'];?></td>
            </tr>
            <tr>
            	<td height="37" ><p>school</p></label></td>
              <td ><?php echo $st['school'];?></td>
            </tr>
            <tr>
            	<td height="37" ><p>Department</p></label></td>
              <td ><?php echo $st['department'];?></td>
            </tr>
            <tr>
            	<td height="37" ><p>location</p></label></td>
              <td ><?php echo $st['location'];?></td>
            </tr>
            <tr>
            	<td height="37" ><p>Username</p></label></td>
              <td ><?php echo $st['username'];?></td>
            </tr>
            <tr>
            	<td height="37" ><p>Password</p></label></td>
              <td ><?php echo $st['password'];?></td>
            </tr>
                  <tr>
            	<td height="37" ><p>Enter Email</p></label></td>
              <td ><?php echo $st['email'];?></td>
            </tr>
                        <tr>
                      <td  style="font-size:14px;">Transaction Id:</td>
      <td  style="color:#F00; font-size:14px;"><?php echo $st['transaction_id'];?>
      </td>
      </tr>
            <tr>
            
          	<td><label></label></td>
               
                <td align="justify"><center><SCRIPT LANGUAGE="JavaScript">
<!-- Begin
if (window.print) {
document.write('<form>'
+ '<input type="button" name="print" value="  Print  " '
+ 'onClick="javascript:window.print()"></form>');
}
// End -->
</SCRIPT></center></td>
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

}
ob_flush();
?>