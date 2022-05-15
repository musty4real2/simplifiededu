<?php
ob_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include ("../study_lab/ballot_class.php");
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
		<link href="../study_lab/css/styles.css" rel="stylesheet" type="text/css" media="all" />
		<!-- MAKE SURE TO REFERENCE THIS FILE! -->
		<script type="text/javascript" src="../study_lab/scripts/ajaxupload.js"></script>
		<!-- END REQUIRED JS FILES -->
		<!-- THIS CSS MAKES THE IFRAME NOT JUMP -->
		<style type="text/css">
			iframe {
				display:none;
			}
		</style>
        <link rel="stylesheet" href="../styles/layout.css" type="text/css" />
<script type="text/javascript" src="../scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="../scripts/jquery.cycle.min.js"></script>
<script type="text/javascript" src="../scripts/jquery.cycle.setup.js"></script>
</head>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.form.js"></script>
 <script src='../js2/jquery.form.js' type="text/javascript" language="javascript"></script>
	<script src='../js2/jquery.MetaData.js' type="text/javascript" language="javascript"></script>
 <script src='../js2/jquery.MultiFile.js' type="text/javascript" language="javascript"></script>
 <script src='../js2/jquery.blockUI.js' type="text/javascript" language="javascript"></script>
<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg').live('change', function()			{ 
			           $("#preview").html('');
			    $("#preview").html('<img src="ajax-loaders.gif" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '#preview'
		}).submit();
		
			});
        }); 
</script>

<style>

body
{
font-family:arial;
color:#FFF;
}
.preview
{
width:200px;
border:solid 1px #dedede;
padding:10px;
}
#preview
{
color:#cc0000;
font-size:12px
}

</style>
<script type="text/javascript" src="../study_lab/js/jquery-1.4.1.min.js"></script>
 <SCRIPT LANGUAGE="JavaScript" src="../study_lab/js/jquery.js"></SCRIPT>
 <SCRIPT LANGUAGE="JavaScript" src="../study_lab/js/script3.js"></SCRIPT>
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
    <h2><a href="../study_lab/index.php">WELCOME TO GMU360 CONCEPT e-Library </a></h2>
    <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
      <center>
  <div id="bar">
    <h3>MANAGE FREE TOPICS</h3></div>
    <?php

if(isset($_GET['deleteid'])){
echo 'Do You Really Want To Turn On the visibility of these Topic if you do the Topic would be available ? <a href="manage_free_tutorials.php?yesdelete='.$_GET['deleteid'].'">Yes </a>| <a href="manage_free_tutorials.php">No</a>';
exit();

}

if(isset($_GET['yesdelete'])){
	$id_to_delete=$_GET['yesdelete'];
	$sql=mysql_query("UPDATE `free_topics` SET `visibility`='1' WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:manage_free_tutorials.php");
	exit();
}
	if(isset($_GET['deleteid2'])){
echo 'Do You Really Want To Turn Off the visibility of these Subject if you do the subject would not be available in the category  ? <a href="manage_free_tutorials.php?yesdelete2='.$_GET['deleteid2'].'">Yes </a>| <a href="manage_free_tutorials.php">No</a>';
exit();

}

if(isset($_GET['yesdelete2'])){
	$id_to_delete=$_GET['yesdelete2'];
	$sql=mysql_query("UPDATE `free_topics` SET `visibility`='0' WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:manage_free_tutorials.php");
	exit();
}

	if(isset($_GET['deleteid3'])){
echo 'Do You Really Want To Delete these Topic if you do the Topic would not be available? <a href="manage_free_tutorials.php?yesdelete3='.$_GET['deleteid3'].'">Yes </a>| <a href="manage_free_tutorials.php">No</a>';
exit();

}

if(isset($_GET['yesdelete3'])){
	$id_to_delete=$_GET['yesdelete3'];
	$sql=mysql_query("DELETE FROM `free_topics` WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:manage_free_tutorials.php");
	exit();
}
		if(isset($_GET['deleteid4'])){
echo 'Do You Really Want To upload a logo for these Topic if you do the logo would be available ? <a href="manage_free_tutorials.php?yesdelete4='.$_GET['deleteid4'].'">Yes </a>| <a href="manage_free_tutorials.php">No</a>';
exit();

}if(isset($_GET['yesdelete4'])){
			$id=$_GET['yesdelete4'];

header("location:topic_logo_upload1.php?id=$id");
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
  $q = "SELECT * FROM `free_topics`";
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
		$get="SELECT * FROM `free_topics` ORDER BY `id` DESC LIMIT $start, $display ";
		$get=$object->query($get);
		if(mysql_num_rows($get)==0){ echo "<p style='margin:30px 0 30px 0; text-align:center; border:1px solid #CCC;'><img src='../logo/info.JPG' width='56' height='50' />No Posts</p>";}
		?>
        <legend><b>View All free topics </b><?php
if(mysql_num_rows($get)>0){
?>
</legend>
<table width="95%" border="1" cellspacing="1">
	<tr class="thead">
        <td>S/N</td>
    <td>Subject Name</td>
      <td>Topic Title</td>
  <td>Visibility</td>
    <td></td>
    <td></td>
    </tr>
  <?php
$s=1;
  	while($l=mysql_fetch_array($get)){
		$id=$l['id'];

		$catid=$l['subject_id'];
	echo "<tr class= \"trodd\">";
	?>
    <td><?php echo $s++;
	?></td>

    <td><?php echo $object->getSubject($catid); ?></td>
        <td><?php echo $l['topic_name'];?></td>

   <td><?php echo $l['visibility'] ;?></td>
   <?php echo "<td><a href='manage_free_tutorials.php?deleteid=$id'>Turn On Visibility</a></td>"; ?> 
   <?php echo "<td><a href='manage_free_tutorials.php?deleteid2=$id'>Turn Off Visibility</a></td>"; ?> 
 
    <?php echo "<td><a href='manage_free_tutorials.php?deleteid3=$id'>Delete</a></td>"; ?> 
 </tr>
 <?php 
}
}
?>		 

</table>
      </td>
            
          
      </tr>
        </table><br/><?php 
  //paginate result set
if ($pages > 1) {
echo '<center>';
$current_page = ($start/$display) + 1;

if ($current_page != 1) {
 echo '<center><a href="manage_bookshop.php?s=' .
($start - $display) . '&p=' . $pages .
'">Previous</a></center> ';
 }

for ($i = 1; $i <= $pages; $i++) {
 if ($i != $current_page) {
 echo '<a href="manage_bookshop.php?s=' .
(($display * ($i - 1))) . '&p=' .
$pages . '">' . $i . '</a> ';
 } else {
 echo $i . ' ';
}
 }

if ($current_page != $pages) {
 echo '<center><a href="manage_bookshop.php?s=' .
($start + $display) . '&p=' . $pages .
'">Next</a></center>';
 }

 echo '</center>';// Close the paragraph.
 
}
 ?><br/>
        
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