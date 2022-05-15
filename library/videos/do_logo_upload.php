<?php
ob_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include ("../../ballot_class.php");
include("../connect.php");
session_start();
$object=new library();
$_SESSION['voterid']=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gmu e-Library|| Administrative Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../../css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="../../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../../js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="../../js/jquery-func.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="../../css/images/favicon.ico" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie.css" type="text/css" media="all" /><![endif]-->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
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
      <li><a href="../index.php">HOME</a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>
      <li><a href="#" class="active"></a></li>

    </ul>

  </div> 
  
  <div id="main">
    <br/><br/>
    <h2>&nbsp;</h2>
    Please upload a logo for the subject you have just selected: <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
      <center>
  <div id="bar"><h3>upload Videos</h3></div>
<?php
if(isset($_POST['button'])){

$filefile=addslashes($_POST['filefield']);
$videoname=addslashes($_POST['videoname']);

	$sql=mysql_query("INSERT INTO `video`(`video_name`,`video_link`) VALUES($videoname,'')");
	$pid=mysql_insert_id();
	$newname="$pid.flv";
		$videolink="<a href='animations/$newname?title=0&amp;byline=0&amp;portrait=0'>$newname</a>";									

	move_uploaded_file($_FILES['filefield']['tmp_name'], "animations/$newname");
	$up=mysql_query("UPDATE `video` SET `video_link`=$videolink WHERE `id`=$pid LIMIT 1");
	header("location:c.php");
	exit();
}
?>
        <form action='<?php $_SERVER['PHP_SELF']; ?>' method="post" id="imageform" enctype="multipart/form-data">
  <table border="0" width="591" style="margin:auto;">
  <tr>
  <td>
  Video Name: <input type="text" name="videoname" value=""/>
  </td>
  </tr>
  <tr>
  <td width="585"> Select your picture to upload:<br/><input type="file"  name="filefield" id="photoimg"  size="80" /></td>
    </tr>
    <tr>
<td>&nbsp;</td>
<td><label><input type="submit" name="button" id="button" value="Add This Item Now"/></label></td>
</tr>
    </table> 
</form>
    </center>
      
      
      
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
<?php ob_flush();
?>