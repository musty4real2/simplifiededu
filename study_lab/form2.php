<?php
ob_start();
include("../connect.php");
include("ballot_class.php");
$object=new library();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gmu e-Library|| Tutor menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="../js/jquery-func.js"></script>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
 <SCRIPT LANGUAGE="JavaScript" src="js/jquery.js"></SCRIPT>
 <SCRIPT LANGUAGE="JavaScript" src="js/script3.js"></SCRIPT>
 <style type="text/css">
 
 	#loading{
	visibility:hidden;
	padding-left:5px;
}

.list{
	list-style:none;
	margin:0;
	text-align:left;
	}

#ajax_response{
border:1px solid #999; font-family:Tahoma, Geneva, sans-serif;
text-align:left;

}
#ajax_response a{
	text-decoration:none;
	color:#333;
	text-align:left;
	}
	
	#ajax_response a:hover{
	text-decoration:underline;
	color:#F00;
	}
 </style>


</head>

<style type="text/css">
.warning{
	color:#F00;
	
	}

</style>
<p id="demo" align="right"></p>

<script type="text/javascript">
document.getElementById("demo").innerHTML=Date();
</script>

<body>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <h1 id="logo"><a href="#"><img src="../css/images/Logo_colord.png" width="37" height="20" />SIMPLIFIED EDUCATION<span>Strictly Education</span></a></h1>
        <div class="socials"> <a href="#" class="link link-twitter">Twitter</a> <a href="#" class="link link-linkedin">LinkedIn</a> <a href="#" class="link link-facebook">Facebook</a> <a href="#" class="link link-flickr">flickr</a> </div>
  </div>
  <div id="navigation">
    <ul>
      <li><a href="index.php" class="active">Home</a></li>
      <li><a href="" ></a></li>
      <li><a href="logout" class="active">Logout</a></li>


    </ul>

  </div> 
  
  <div id="main">
    <br/><br/>
     <?php

if(isset($_POST['button'])){
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	//include database connect script
	
		$tname=addslashes($_POST['tname']);

	$catname=addslashes($_POST['wname']);
$objective=addslashes($_POST['objectives']);
$content=addslashes($_POST['content']);
$reallifeapp=addslashes($_POST['reallifeapp']);
$introduction=addslashes($_POST['introduction']);
$possiblequestions=addslashes($_POST['possiblequestions']);
$summary=addslashes($_POST['summary']);

if($tname==""){$error[]="please enter a topic name or the title of the topic";}
	if($catname==""){$error[]="please select a category";}
	if($objective==""){$error[]="Please enter the objectives of the topic";}
	if($content==""){$error[]="Please Enter the Tutorial Proper";}
	if($reallifeapp==""){$error[]="Real Life Application can not be empty please enter a Real Life Application";}
		if($introduction==""){$error[]="Introduction can not be empty please enter an introduction";}
	if($possiblequestions==""){$error[]="Possible Questions can not be empty please enter a Possible Questions";}
	if($summary==""){$error[]="Summary cannot be empty please enter a sumary";}
	
if(!empty($error)){
		   echo "<p class='info' id='error' style='color:#F00;'><span class='info_inner'><b>Oops! ERROR:</b></span></p>";
		foreach($error as $oops){
			echo "<p class='msg error' style='color:#F00;'>$oops</p>";
			}//foreach loop
		}//if !empty error

		//if $error variable is empty, continue with the script
		elseif(empty($error)){

	$query=mysql_query("INSERT INTO `free_topics` (`subject_id`, `topic_name`, `introduction`, `objectives`, `content`, `possible_questions`, `real_life_application`, `summary`,`tutor_id`, `visibility`) 
	VALUES ( '$catname','$tname','$introduction', '$objective', '$content', '$possiblequestions', '$reallifeapp', '$summary','{$_SESSION['postersid']}','1')");
header("location:history.php");
		}
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
              <td>      <input type="text" name="tname" id="area" size="60px" maxlength="60" autocomplete="off" onkeypress="autocomplete(this.value, event)" value="<?php if(isset($_POST['tname'])){echo $_POST['tname'];}?>"/><img src="loading.gif" alt="" width="19" height="27" id="loading" style="margin:0;"/>
 <div id="ajax_response" ></div>
</td>
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