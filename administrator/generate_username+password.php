<?php
ob_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include ("../ballot_class.php");
include("../connect.php");
session_start();
$object=new library();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
      <li><a href="school_menu.php">HOME</a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
            <li><a href="logout.php">LOGOUT</a></li>

    </ul>

  </div> 
  
  <div id="main">

<legend>Generate Username and password</legend>
<center><form method="post">
<center><table border="0" width="40%" height="300">
<tr><td>
<label>Number of card to be generated</label></td><td>
<input type="text" name="cardno1" autocomplete="off" placeholder="Enter the number you want to be produced"/></td>
</tr>
<tr><td>Select School</td><td>
<?php
$dd=$object->query("SELECT * FROM `school` ORDER BY `school_name` ASC");
 
 ?>

 <select   class="input" name='distribute2'>
  <option value=''>select</option>
  <option value=''>----------</option>
  <?php 
 while($row=mysql_fetch_array($dd)){
$did=$row['id'];
$dname=$row['school_name'];

echo "<option value='$did'> $dname</option>";
}
 ?>
 </select> </td></tr>
 <tr><td>

<input type="submit" name="aa" value="Generate Username And Password"/>
</td></tr></table></center>
</form></center>
<?php
$cardno1=mysql_real_escape_string($_POST['cardno1']);
$denominations1=mysql_real_escape_string($_POST['denominations1']);
$cardtype1=mysql_real_escape_string($_POST['cardtype1']);
$distribute2=mysql_real_escape_string($_POST['distribute2']);

include("connect.php");
if(isset($_POST['aa'])){
	
for ($index = 0; $index < $cardno1; $index++) {
	
	
	
$rand01 = rand(1000000, 9999999); 
	$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$i=0;
	$Password= "";
	while ($i <= 8) {
		$Password.= $chars{mt_rand(0,strlen($chars))};
		$i++;
	}

$serial1=$Password;
$pin1 = $rand01;


$check1 = mysql_query("SELECT * FROM sch_student_reg WHERE password='$pin1' AND username='$serial1'");
if(mysql_num_rows($check1)>0){
$index-=1;
}elseif 
(mysql_num_rows($check)==0) {
mysql_query("INSERT INTO `sch_student_reg` (`fname`, `sname`, `school`, `location`, `phone_number`, `email`, `username`, `password`, `paid`, `attempt`, `entry_date`) VALUES ('', '', '$did', '', '', '', '$serial1', '$pin1', '', '', '')");

$sn = mysql_query("SELECT `username`,`password` FROM `sch_student_reg` WHERE `password`='$pin1' AND `username`='$serial1'");
while ($row2 =mysql_fetch_array($sn)) {
$pinSerial = $row2["username"];


}
echo"<br/>Password: " .$pin ."<br/><br/> username: ".$pinSerial." .";
}
}
header("location:admin_menu.php?bill=oops&id=dooggodi&wildcat=empty&noble=noble&thief=thief&id={$_GET['id']}&noble=noble&thief=thief&noble=noble&thief=thief&&noble=noble&thief=thief");
}else{
	
echo "<br/>No values have been given please fill the from above";	
	
}

?>






      <div class="cl">
  </div>
    
  </div>
      <p class="lf">Copyright &copy; 2013 <a href="#">GMU360 E-Learning </a> - All Rights Reserved BY Gmu360 Concept</p>

</div>
<!-- END PAGE SOURCE --></body>
</html>