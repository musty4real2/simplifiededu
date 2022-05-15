<?php
ob_start();
include("../connect.php");

include("../ballot_class.php");
$object=new library();
session_start();
$tid=$_SESSION['postersid'];
$sid=$_SESSION['sid'];
$getit=mysql_query("SELECT * FROM `sch_student_reg` WHERE  `id`='$tid' AND `school`='$sid' ");

while($row=mysql_fetch_array($getit)){
	$change=$row['attempt'];
	$msg="sorry you are not allowed";
}
if($change=='0'){
		header("location:signup.php");
}
else{

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
    <h1 id="logo"><a href="#"><img src="../css/images/Logo_colord.png" width="37" height="20" />SIMPLIFIED EDUCATION  (<?php echo strtoupper($object->getSchoolNa($_SESSION['sid'])); ?>)<span>Strictly Education</span></a></h1>
        <div class="socials"> <a href="#" class="link link-twitter">Twitter</a> <a href="#" class="link link-linkedin">LinkedIn</a> <a href="#" class="link link-facebook">Facebook</a> <a href="#" class="link link-flickr">flickr</a> </div>
  </div>
  <div id="navigation">
    <ul>
      <li><a href="../index.php">GO TO SITE HOMEPAGE</a></li>
      
      <li><a href="logout.php">LOGOUT/a></li>

      
    </ul>

  </div> 
  
  <div id="main">
    <h2><a href="howitworks.php">e-Learning</a> </h2>

    <center></center>
    Please Select the library you want to visit: <br/><br/><br/><br/>
    <center><table width="100%" border="0" >
    <tr >
      <td width="40%">
     <a href="menu.php"><img src="" /><br/> General Library</a></td>
      
      <td><a href="myschoolmenu.php"><img src="" /><br/>My school Library</a></td>
      </tr></table>
    </center>
     
        
        


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