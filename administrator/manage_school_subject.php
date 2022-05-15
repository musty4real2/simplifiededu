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
    <h3>MANAGE SUBJECTS ::<?php $iio=$_GET['id'];
	 echo strtoupper($object->getSchname($iio));    ?> :::</h3><br/></div>
    <?php

if(isset($_GET['deleteid'])){
echo 'Do You Really Want To Turn On the visibility of these Subject if you do the subject would be available in the category ? <a href="manage_school_subject.php?yesdelete='.$_GET['deleteid'].'&schid='.$_GET['schid'].'">Yes </a>| <a href="manage_school_subject.php'.'&schid='.$_GET['schid'].'">No</a>';
exit();

}

if(isset($_GET['yesdelete']) && ($_GET['schid'])){
	$id_to_delete=$_GET['yesdelete'];
	$schid=$_GET['schid'];
	
	$sql=mysql_query("UPDATE `school_subjects` SET `visibility`='1' WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:manage_school_subject.php?id=$schid");
	exit();
}
	if(isset($_GET['deleteid2'])){
echo 'Do You Really Want To Turn Off the visibility of these Subject if you do the subject would not be available in the category  ? <a href="manage_school_subject.php?yesdelete2='.$_GET['deleteid2'].'&schid='.$_GET['schid'].'">Yes </a>| <a href="manage_school_subject.php'.'&schid='.$_GET['schid'].'">No</a>';
exit();

}

if(isset($_GET['yesdelete2']) && ($_GET['schid'])){
	$id_to_delete=$_GET['yesdelete2'];
	$schid=$_GET['schid'];
	
	$sql=mysql_query("UPDATE `school_subjects` SET `visibility`='0' WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:manage_school_subject.php?id=$schid");
	exit();
}

	if(isset($_GET['deleteid3'])){
echo 'Do You Really Want To Delete these Category if you do the category would not be available in the category? <a href="manage_school_subject.php?yesdelete3='.$_GET['deleteid3'].'&schid='.$_GET['schid'].'">Yes </a>| <a href="manage_school_subject.php?'.'&schid='.$_GET['schid'].'">No</a>';
exit();

}

if(isset($_GET['yesdelete3']) && ($_GET['schid'])){
	$id_to_delete=$_GET['yesdelete'];
	$schid=$_GET['schid'];
	
	$sql=mysql_query("DELETE FROM `school_subjects` WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:manage_school_subject.php?id=$schid");
	exit();
}
		if(isset($_GET['deleteid4'])){
echo 'Do You Really Want To upload a logo for these Category if you do the category logo would be available ? <a href="manage_school_subject.php?yesdelete4='.$_GET['deleteid4'].'&schid='.$_GET['schid'].'">Yes </a>| <a href="manage_school_subject.php'.'&schid='.$_GET['schid'].'">No</a>';
exit();

}
if(isset($_GET['yesdelete4']) && ($_GET['schid'])){
	$id_to_delete=$_GET['yesdelete'];
	$schid=$_GET['schid'];
	

header("location:subject_logo_upload.php?id=$schid");
exit();

}


?>
<?php

  $display = 10;
  // Determine how many pages there are...
  if (isset($_GET['p']) && is_numeric($_GET
  ['p'])) { // Already been determined.
  
  $pages = $_GET['p'];
  } else { // Need to determine.
  
  // Count the number of records:
  $q = "SELECT * FROM `school_subjects`  WHERE `school_id`='{$_GET['id']}'";
  $r = mysql_query ($q);
  $records=mysql_num_rows($r);
  if(!$r){echo  "SYSTEM ERROR: Server cannot execute query.".mysql_error();}
  if(empty($r)){echo "SYSTEM ERROR: Server cannot execute query.".mysql_error();}
  
  
  // Calculate the number of pages...
  if ($records > $display) { // More than
  $pages = ceil ($records/$display);
  } else {
  $pages = 1;
  }
  }
  if (isset($_GET['s']) && is_numeric
  ($_GET['s'])) {
  $start = $_GET['s'];
  } else {
  $start = 0;
  }
?>
        <?php
		$get="SELECT * FROM `school_subjects` WHERE `school_id`='{$_GET['id']}' ORDER BY `id` DESC LIMIT $start, $display ";
		$get=$object->query($get);
		if(mysql_num_rows($get)==0){ echo "<p style='margin:30px 0 30px 0; text-align:center; border:1px solid #CCC;'><img src='../logo/info.JPG' width='56' height='50' />No Posts</p>";}
		?>
<legend><b>View All Subjects</b><?php
if(mysql_num_rows($get)>0){
?>
</legend><table width="95%" border="1" cellspacing="1">
	<tr class="thead">
        <td>S/N</td>
    <td>Subject Name</td>
  <td>Visibility</td>
    <td></td>
    <td></td>
    </tr>
  <?php
$s=1;
  	while($l=mysql_fetch_array($get)){
		$id=$l['id'];

		$catid=$l['school_id'];
	echo "<tr class= \"trodd\">";
	?>
    <td><?php echo $s++;
	?></td>

    <td><?php echo $l['subject_name'];?></td>
     

   <td><?php echo $l['visibility'] ;?></td>
   <?php echo "<td><a href='manage_school_subject.php?deleteid=$id&schid=$iio'>Turn On Visibility</a></td>"; ?> 
   <?php echo "<td><a href='manage_school_subject.php?deleteid2=$id&schid=$iio'>Turn Off Visibility</a></td>"; ?> 
 
    <?php echo "<td><a href='manage_school_subject.php?deleteid3=$id&schid=$iio'>Delete</a></td>"; ?> 
        <?php echo "<td><a href='edit_school_subject.php?id=$id&schid=$iio'>Edit</a></td>"; ?> 
                <?php echo "<td><a href='manage_school_topics.php?id=$id&schid=$iio'>View topics</a></td>"; ?> 

 </tr>
 <?php 
}
}
?>		 

</table>
      </td>
            
          
      </tr>
        </table><br/>
        <?php 
  //paginate result set
if ($pages > 1) {
echo '<center>';
$current_page = ($start/$display) + 1;

if ($current_page != 1) {
 echo '<center><a href="manage_school_subject.php?s=' .
($start - $display) . '&p=' . $pages .
'">Previous</a></center> ';
 }

for ($i = 1; $i <= $pages; $i++) {
 if ($i != $current_page) {
 echo '<a href="manage_school_subject.php?s=' .
(($display * ($i - 1))) . '&p=' .
$pages . '">' . $i . '</a> ';
 } else {
 echo $i . ' ';
}
 }

if ($current_page != $pages) {
 echo '<center><a href="manage_school_subject.php?s=' .
($start + $display) . '&p=' . $pages .
'">Next</a></center>';
 }

 echo '</center>';// Close the paragraph.
 
}
 ?><br/>
        
        
            <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
  <?php

if(isset($_POST['button'])){
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	//include database connect script
	include_once("connect.php");
	
		$subname=addslashes($_POST['subname']);
		$idd=addslashes($_POST['idd']);



	$query=mysql_query("INSERT INTO `school_subjects` (`subject_name`, `school_id`,`logo`, `visibility`) VALUES ('$subname','$idd','', '0')");
	
header("location:manage_school_subject.php?id=$idd");
}
?>
      <center>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<input type="hidden" name="idd" value="<?php echo $_GET['id']; ?>" />
  <div id="bar">
    <h3>ADD A SUBJECT</h3></div>

        <table border="0" width="398" height="255px">
        <tr><td>&nbsp;</td></tr>
        	
            <tr>
            	<td height="36"><p>SUBJECT NAME:</p></td>
              <td><input id="input" type="text" size="40" maxlength="15" name="subname" /></td>
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