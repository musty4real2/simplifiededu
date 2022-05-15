<?php
ob_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include ("../ballot_class.php");
include("connect.php");
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
  <?php
  if(isset($_POST['button'])){

  	$subname=mysql_real_escape_string($_POST['subname']);

	$catname=mysql_real_escape_string($_POST['wname']);
	$content=mysql_real_escape_string($_POST['content']);

	$reallifeapp=mysql_real_escape_string($_POST['reallifeapp']);
		$objective=mysql_real_escape_string($_POST['objectives']);
	$summary=mysql_real_escape_string($_POST['summary']);
	$possiblequestions=mysql_real_escape_string($_POST['possiblequestions']);
	$introduction=mysql_real_escape_string($_POST['introduction']);
	$formula=mysql_real_escape_string($_POST['formula']);

  		
		if(empty($subname)){$error[]="required";}
		if(empty($catname)){$error[]="required";}

	if(!empty($error)){
		   echo "<p class='info' id='error'><span class='info_inner'><b>Oops! ERROR:</b></span></p>";
		foreach($error as $oops){
			echo "<p class='msg error'>$oops</p>";
			}//foreach loop
		}//if !empty error

		//if $error variable is empty, continue with the script
		elseif(empty($error)){
//insert record in database
		$insert=$object->query("UPDATE `topics` SET `subject_id`='$catname',`topic_name`='$subname',`content`='$content',`objectives`='$objective',`real_life_application`='$reallifeapp',`summary`='$summary',`possible_questions`='$possiblequestions',`introduction`='$introduction',`formulas`='$formula'  WHERE `id`='{$_POST['id']}'");
	header("location:manage_topics.php");	
	}

}
//fetch staff's record from db first
$staff=$object->query("SELECT * FROM `topics` WHERE `id`='{$_GET['id']}'");
while($row=mysql_fetch_array($staff)){

?>            <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
      <center>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <input type="hidden" value="<?php echo $_GET['id'];?>" name="id" />

  <div id="bar">
    <h3>EDIT TOPIC</h3></div>

        <table border="0" width="398" height="255px">
        <tr><td>&nbsp;</td></tr>
        	
            <tr>
            	<td height="36"><p>TOPIC TITLE:</p></td>
              <td><input id="input" name="subname" value="<?php echo $row['topic_name'];  ?>"/></td>
            </tr>
                         <tr>
 <td>INTRODUCTION:</td>
 <td>
  <textarea name="introduction" cols="50" role="100" value=""/><?php echo $row['introduction'];  ?>
 </textarea>
             
 </td>
 </tr>
                                <tr>
 <td>OBJECTIVES:</td>
 <td>
  <textarea name="objectives" cols="50" role="100" value=""/><?php echo $row['objectives'];  ?>
 </textarea>
             
 </td>
 </tr>
             <tr>
 <td>TOPIC CONTENT:</td>
 <td>
  <textarea name="content" value=""/><?php echo $row['content'];  ?>
 </textarea>
             
 </td>
 </tr>
                          <tr>
 <td>POSSIBLE QUESTIONS:</td>
 <td>
  <textarea name="possiblequestions"  value=""/><?php echo $row['possible_questions'];  ?>
 </textarea>
             
 </td>
 </tr>
                           <tr>
 <td>REAL-LIFE APPLICATIONS:</td>
 <td>
  <textarea name="reallifeapp"  value=""/><?php echo $row['real_life_application'];  ?>
 </textarea>
             
 </td>
 </tr>
                            <tr>
 <td>SUMMARY:</td>
 <td>
  <textarea name="summary"  value=""/><?php echo $row['summary'];  ?>
 </textarea>
             
 </td>
 </tr>
                             <tr>
 <td>FORMULA'S:</td>
 <td>
  <textarea name="formula"  value=""/><?php echo $row['formulas'];  ?>
 </textarea>
             
 </td>
 </tr>
            <tr>
            
            <td><p>SUBJECT</p></td>
            <td>
            <?php
			$m=$object->getSubject($row['subject_id']);
  $auto=mysql_query("SELECT *  FROM `subjects` ORDER BY `subject_name` ASC"); ?>
<select class="input" name='wname'>
      <option value='' selected="selected">select</option>
        <?php echo "<option value='{$row['subject_id']}' selected='selected'>$m</option>";?>

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
            	<td><label></label></td>
               
                <td align="justify"><input name="button" type="submit"  id="button" value="SAVE TOPIC EDIT"/></td>
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
}
ob_flush();
?>