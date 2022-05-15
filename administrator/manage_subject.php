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
  

    <br/><br/>
    <h2><a href="index.php">WELCOME TO GMU360 CONCEPT e-Library </a></h2>
    <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
      <center>
  <div id="bar">
    <h3>MANAGE SUBJECTS</h3></div>
    <?php

if(isset($_GET['deleteid'])){
echo 'Do You Really Want To Turn On the visibility of these Subject if you do the subject would be available in the category ? <a href="manage_subject.php?yesdelete='.$_GET['deleteid'].'">Yes </a>| <a href="manage_subject.php">No</a>';
exit();

}

if(isset($_GET['yesdelete'])){
	$id_to_delete=$_GET['yesdelete'];
	$sql=mysql_query("UPDATE `subjects` SET `visibility`='1' WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:manage_subject.php");
	exit();
}
	if(isset($_GET['deleteid2'])){
echo 'Do You Really Want To Turn Off the visibility of these Subject if you do the subject would not be available in the category  ? <a href="manage_subject.php?yesdelete2='.$_GET['deleteid2'].'">Yes </a>| <a href="manage_subject.php">No</a>';
exit();

}

if(isset($_GET['yesdelete2'])){
	$id_to_delete=$_GET['yesdelete2'];
	$sql=mysql_query("UPDATE `subjects` SET `visibility`='0' WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:manage_subject.php");
	exit();
}

	if(isset($_GET['deleteid3'])){
echo 'Do You Really Want To Delete these Category if you do the category would not be available in the category? <a href="manage_subject.php?yesdelete3='.$_GET['deleteid3'].'">Yes </a>| <a href="manage_subject.php">No</a>';
exit();

}

if(isset($_GET['yesdelete3'])){
	$id_to_delete=$_GET['yesdelete3'];
	$sql=mysql_query("DELETE FROM `subjects` WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:manage_subject.php");
	exit();
}
		if(isset($_GET['deleteid4'])){
echo 'Do You Really Want To upload a logo for these Category if you do the category logo would be available ? <a href="manage_subject.php?yesdelete4='.$_GET['deleteid4'].'">Yes </a>| <a href="manage_subject.php">No</a>';
exit();

}if(isset($_GET['yesdelete4'])){
			$id=$_GET['yesdelete4'];

header("location:subject_logo_upload.php?id=$id");
exit();

}


?>
<?php
$cat=mysql_query("SELECT *  FROM `subjects`");

?>
<legend><b>View All Subjects</b><?php
if(mysql_num_rows($cat)>0){
?>
</legend><table width="95%" border="1" cellspacing="1">
	<tr class="thead">
        <td>S/N</td>
    <td>Subject Name</td>
      <td>Category</td>
  <td>Visibility</td>
    <td></td>
    <td></td>
    </tr>
  <?php
$s=1;
  	while($l=mysql_fetch_array($cat)){
		$id=$l['id'];

		$catid=$l['subject_category_id'];
	echo "<tr class= \"trodd\">";
	?>
    <td><?php echo $s++;
	?></td>

    <td><?php echo $l['subject_name'];?></td>
        <td><?php echo $object->getCategory($catid); ?></td>

   <td><?php echo $l['visibility'] ;?></td>
   <?php echo "<td><a href='manage_subject.php?deleteid=$id'>Turn On Visibility</a></td>"; ?> 
   <?php echo "<td><a href='manage_subject.php?deleteid2=$id'>Turn Off Visibility</a></td>"; ?> 
 
    <?php echo "<td><a href='manage_subject.php?deleteid3=$id'>Delete</a></td>"; ?> 
        <?php echo "<td><a href='edit_subject.php?id=$id'>Edit</a></td>"; ?> 
        <?php echo "<td><a href='manage_subject.php?deleteid4=$id'>Upload Logo</a></td>"; ?> 
 </tr>
 <?php 
}
}
?>		 

</table>
      </td>
            
          
      </tr>
        </table><br/><br/>
        
        
            <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
  <?php

if(isset($_POST['button'])){
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	//include database connect script
	include_once("connect.php");
	
		$subname=addslashes($_POST['subname']);

	$catname=addslashes($_POST['wname']);


	$query=mysql_query("INSERT INTO `subjects` (`subject_name`, `subject_category_id`,`logo`, `visibility`) VALUES ('$subname','$catname','', '0')");
	
header("location:manage_subject.php");
}
?>
      <center>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div id="bar">
    <h3>ADD A SUBJECT</h3></div>

        <table border="0" width="398" height="255px">
        <tr><td>&nbsp;</td></tr>
        	
            <tr>
            	<td height="36"><p>SUBJECT NAME:</p></td>
              <td><input id="input" type="text" size="40" maxlength="15" name="subname" /></td>
            </tr>
            <td><p>SUBJECT CATEGORY</p></td>
            <td> <?php
  $auto=mysql_query("SELECT *  FROM `categories` ORDER BY `category_name` ASC"); ?>
<select class="input" name='wname'>
  <option value=''>select</option>
  <option value=''>----------</option>
  <?php 
 while($row=mysql_fetch_array($auto)){
$id=$row['id'];
$catname=$row['category_name'];

echo "<option value='$id'>$catname</option>";
}
 ?>
 </select>
 </td>
 </tr>
            <tr>
            	<td><label></label></td>
               
                <td align="justify"><input name="button" type="submit"  id="button" value="ADD TO LIST OF SUBJECTS"/></td>
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