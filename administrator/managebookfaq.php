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
      <li><a href="menu.php">HOME</a></li>
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
      <?php
if(isset($_GET['msg'])){
	
$msg=$_GET['msg'];	
echo $msg;
}
	  ?>
  <div id="bar">
    <h3>MANAGE STUDY LAB PAGE FAQ</h3></div>
    <?php

if(isset($_GET['deleteid'])){
echo 'Do You Really Want To Turn On the visibility of these faq if you do the suggestion would be available ? <a href="managebookfaq.php?yesdelete='.$_GET['deleteid'].'">Yes </a>| <a href="managebookfaq.php">No</a>';
exit();

}

if(isset($_GET['yesdelete'])){
	$id_to_delete=$_GET['yesdelete'];
	$sql=mysql_query("UPDATE `faq` SET `visibility`='1' WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:managebookfaq.php");
	exit();
}
	if(isset($_GET['deleteid2'])){
echo 'Do You Really Want To Turn Off the visibility of these suggestion if you do the suggestion would not be available in the page  ? <a href="managebookfaq.php?yesdelete2='.$_GET['deleteid2'].'">Yes </a>| <a href="managebookfaq.php">No</a>';
exit();

}

if(isset($_GET['yesdelete2'])){
	$id_to_delete=$_GET['yesdelete2'];
	$sql=mysql_query("UPDATE `faq` SET `visibility`='0' WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:managebookfaq.php");
	exit();
}

	if(isset($_GET['deleteid3'])){
echo 'Do You Really Want To Delete these suggestion if you do the suggestion would not be available? <a href="managebookfaq.php?yesdelete3='.$_GET['deleteid3'].'">Yes </a>| <a href="managebookfaq.php">No</a>';
exit();

}

if(isset($_GET['yesdelete3'])){
	$id_to_delete=$_GET['yesdelete3'];
	$sql=mysql_query("DELETE FROM `faq` WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:managebookfaq.php");
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
  $q = "SELECT * FROM `faq` WHERE `section`='studylab' AND `reply`='0'";
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
		$get="SELECT * FROM `faq`  WHERE `section`='studylab' AND `reply`='0' ORDER BY `id` DESC LIMIT $start, $display ";
		$get=$object->query($get);
		if(mysql_num_rows($get)==0){ echo "<p style='margin:30px 0 30px 0; text-align:center; border:1px solid #CCC;'><img src='../logo/info.JPG' width='56' height='50' />No Posts</p>";}
		?>
        <legend><b>View All Suggestion posted </b><?php
if(mysql_num_rows($get)>0){
?>
</legend>
<table width="95%" border="1" cellspacing="1">
	<tr class="thead">
        <td>S/N</td>
    <td>Name</td>
      <td>Subject</td>
      <td>Email</td>
      <td>Message</td>
      <td>Entry Date</td>
  <td>Visibility</td>
    <td></td>
    <td></td>
    </tr>
  <?php
$s=1;
  	while($l=mysql_fetch_array($get)){
		$id=$l['id'];
	echo "<tr class= \"trodd\">";
	?>
    <td><?php echo $s++;
	?></td>

    <td><?php echo $l['name'];?></td>
        <td><?php echo $l['subject'];?></td>
        <td><?php echo $l['email'];?></td>
        <td><?php echo $l['message'];?></td>
        <td><?php echo $l['entry_date'];?></td>

   <td><?php echo $l['visibility'] ;?></td>
   <?php echo "<td><a href='managebookfaq.php?deleteid=$id'>Turn On Visibility</a></td>"; ?> 
   <?php echo "<td><a href='managebookfaq.php?deleteid2=$id'>Turn Off Visibility</a></td>"; ?> 
 
    <?php echo "<td><a href='managebookfaq.php?deleteid3=$id'>Delete</a></td>"; ?> 
        <?php echo "<td><a href='reply5.php?id=$id'>reply</a></td>"; ?> 

 </tr>
 <?php 
}
}
?>		 

</table>
      </td>
            
          
      </tr>
        </table>
        <?php 
  //paginate result set
if ($pages > 1) {
echo '<center>';
$current_page = ($start/$display) + 1;

if ($current_page != 1) {
 echo '<center><a href="managebookfaq.php?s=' .
($start - $display) . '&p=' . $pages .
'">Previous</a></center> ';
 }

for ($i = 1; $i <= $pages; $i++) {
 if ($i != $current_page) {
 echo '<a href="managebookfaq.php?s=' .
(($display * ($i - 1))) . '&p=' .
$pages . '">' . $i . '</a> ';
 } else {
 echo $i . ' ';
}
 }

if ($current_page != $pages) {
 echo '<center><a href="managebookfaq.php?s=' .
($start + $display) . '&p=' . $pages .
'">Next</a></center>';
 }

 echo '</center>';// Close the paragraph.
 
}
 ?><br/><br/>
        
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