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
    <h2><a href="index.php">WELCOME TO GMU360 CONCEPT e-Library </a></h2>
            <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
  <?php

if(isset($_POST['button'])){
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	//include database connect script
	include_once("../connect.php");
	
		$tname=addslashes($_POST['tname']);

	$catname="<p style='padding:12px 5px 12px 0; '>".addslashes($_POST['wname'])."</p>";
$objective="<p style='padding:12px 5px 12px 0; '>".addslashes($_POST['objectives'])."</p>";
$content="<p style='padding:12px 5px 12px 0; '>".addslashes($_POST['content']);
$reallifeapp="<p style='padding:12px 5px 12px 0; '>".addslashes($_POST['reallifeapp'])."</p>";
$introduction="<p style='padding:12px 5px 12px 0; '>".addslashes($_POST['introduction'])."</p>";
$possiblequestions="<p style='padding:12px 5px 12px 0; '>".addslashes($_POST['possiblequestions'])."</p>";
$summary="<p style='padding:12px 5px 12px 0; '>".addslashes($_POST['summary'])."</p>";
$formula="<p style='padding:12px 5px 12px 0; '>".addslashes($_POST['formula'])."</p>";



	$query=mysql_query("INSERT INTO `topics2` (`subject_id`, `topic_name`, `introduction`, `objectives`, `content`, `possible_questions`, `real_life_application`, `summary`,`formulas`, `visibility`, `logo`) 
	VALUES ( '$catname','$tname','$introduction', '$objective', '$content', '$possiblequestions', '$reallifeapp', '$summary','$formula','0', '')");
header("location:form.php");
}
?>
      <center>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div id="bar">
    <h3>ADD A NEW TOPIC </h3></div>

        <table border="0" width="398" height="255px">
        <tr><td>&nbsp;</td></tr>
        	
            <tr>
            	<td height="36"><p>TITLE/TOPIC NAME:</p></td>
              <td><input id="input" type="text" size="40" name="tname" /></td>
            </tr>
            <td><p>SUBJECT CATEGORY</p></td>
            <td> <?php
  $auto=mysql_query("SELECT *  FROM `subjects` ORDER BY `subject_name` ASC"); ?>
<select class="input" name='wname'>
  <option value=''>select</option>
  <option value=''>----------</option>
  <?php 
 while($row=mysql_fetch_array($auto)){
$id=$row['id'];
$catname=$row['subject_name'];

echo "<option value='$id'>$catname</option>";
}
 ?>
 </select>
 </td>
 </tr>
<tr>
<td>
INTRODUCTION:
</td>
<td><textarea name="introduction"></textarea></td>

</tr>
<tr>
<td>
OBJECTIVES:
</td>
<td><textarea name="objectives"></textarea></td>

</tr>
<tr>
<td>
NOTE/ TUTORIALl PROPER:
</td>
<td><textarea name="content"></textarea></td>

</tr>
<tr>
<td>
POSSIBLE QUESTIONS	:
</td>
<td><textarea name="possiblequestions"></textarea></td>

</tr>
<tr>
<td>
REAL-LIFE APPLICATION:	:
</td>
<td><textarea name="reallifeapp"></textarea></td>

</tr>
<tr>
<td>
FORMULA:	:
</td>
<td><textarea name="formula"></textarea></td>

</tr>
<tr>
<td>
SUMMARY:	:
</td>
<td><textarea name="summary"></textarea></td>

</tr>
            <tr>
            	<td><label></label></td>
               
                <td align="justify"><input name="button" type="submit"  id="button" value="ADD TO TOPIC"/></td>
            </tr>
        </table>

	</form>
    </center>
      
      
      
      </td>
            
          
      </tr>
        </table>
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