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
    <br/><br/>
     <?php
if(isset($_POST['a']))
{
	$schoolname=mysql_real_escape_string($_POST['schoolname']);
		$schooladdress=mysql_real_escape_string($_POST['schooladdress']);

	
		$name2=$_FILES['file2']['name'];
	$temp2=$_FILES['file2']['tmp_name'];
		
move_uploaded_file($temp2,"uploaded/".$name2);

	
	$insert=$object->query("UPDATE `school` SET `school_name`='$schoolname', `school_address`='$schooladdress', `school_logo`='$name2' LIMIT 1");
	
}
$staff=$object->query("SELECT * FROM `school` WHERE `id`='{$_GET['id']}' LIMIT 1");
while($row=mysql_fetch_array($staff)){

?>  
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"/>
  <input type="hidden" value="<?php echo $_GET['id'];?>" name="id" />


<table border="0" width="100%" height="321">
      <tr><td>&nbsp;</td></tr>
        	<tr>
            	<td height="60" ><p>School Name::</p></label></td>
              <td ><input type="text" name="schoolname" value="<?php echo $row['school_name'];  ?>"/></td>
      </tr>
            <tr>
            	<td height="68"><p>School Address:</p></td>
              <td><textarea name="schooladdress" rows="4" cols="18"/><?php echo $row['school_address'];  ?></textarea></td>
            </tr>
            <tr>
            	<td height="58" ><p>School Logo:</p></label></td>
              <td ><input type="file" name="file2" value="value="<?php echo $row['logo'];  ?>""/></td>
            </tr>
            <tr>
            	<td><label></label></td>
               
                <td align="justify"><input name="a" type="submit"  id="button" value="Add To School List"/></td>
            </tr>
            
    </table>  </form>  <div class="cl">
  </div>
    
  </div>
      <p class="lf">Copyright &copy; 2013 <a href="#">GMU360 E-Learning </a> - All Rights Reserved BY Gmu360 Concept</p>

</div>
<!-- END PAGE SOURCE --></body>
<?php } ?>
</html>