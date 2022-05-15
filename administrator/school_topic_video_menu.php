<?php
ob_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include ("../ballot_class.php");
include("connect.php");
session_start();
$object=new library();
$tid=$_GET['topid'];
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
    <h3>UPLOADED VIDEO FOR<br/> TOPIC :<?php echo $object->getTopic($tid); 
	?></h3> </div>
    <?php

if(isset($_GET['deleteid'])&& $_GET['topid']){
echo 'Do You Really Want To Turn On the visibility of these Topic if you do the Topic would be available ? <a href="school_topic_video_menu.php?topid='.$_GET['topid'].'&yesdelete='.$_GET['deleteid'].'&subid='.$_GET['subid'].'&schid='.$_GET['schid'].'">Yes </a>| <a href="school_topic_video_menu.php?topid='.$_GET['topid'].'&subid='.$_GET['subid'].'&schid='.$_GET['schid'].'">No</a>';
exit();

}

if(isset($_GET['yesdelete'])&& $_GET['topid']){
	$id_to_delete=$_GET['yesdelete'];
	$topid=$_GET['topid'];
	$subid=$_GET['subid'];
	$schid=$_GET['schid'];
	$sql=mysql_query("UPDATE `school_note_videos` SET `visibility`='1' WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:school_topic_video_menu.php?topid=$topid&subid=$subid&schid=$schid");
	exit();
}
	if(isset($_GET['deleteid2'])&& $_GET['topid']){
echo 'Do You Really Want To Turn Off the visibility of these Subject if you do the subject would not be available in the category  ? <a href="school_topic_video_menu.php?topid='.$_GET['topid'].'&yesdelete2='.$_GET['deleteid2'].'&subid='.$_GET['subid'].'&schid='.$_GET['schid'].'">Yes </a>| <a href="school_topic_video_menu.php?topid='.$_GET['topid'].'&subid='.$_GET['subid'].'&schid='.$_GET['schid'].'">No</a>';
exit();

}

if(isset($_GET['yesdelete2'])&& $_GET['topid']){
	$id_to_delete=$_GET['yesdelete2'];
	$topid=$_GET['topid'];
	$subid=$_GET['subid'];
	$schid=$_GET['schid'];
	$sql=mysql_query("UPDATE `school_note_videos` SET `visibility`='0' WHERE `id`='$id_to_delete' limit 1") or die(mysql_error());
	
	header("location:school_topic_video_menu.php?topid=$topid&subid=$subid&schid=$schid");
	exit();
}

	if(isset($_GET['deleteid3'])&& $_GET['topid']){
echo 'Do You Really Want To Delete these Topic if you do the Topic would not be available? <a href="school_topic_video_menu.php?topid='.$_GET['topid'].'&yesdelete3='.$_GET['deleteid3'].'&subid='.$_GET['subid'].'&schid='.$_GET['schid'].'">Yes </a>| <a href="school_topic_video_menu.php?topid='.$_GET['topid'].'&subid='.$_GET['subid'].'&schid='.$_GET['schid'].'">No</a>';
exit();

}

if(isset($_GET['yesdelete3'])&& $_GET['topid']){
	$id_to_delete=$_GET['yesdelete3'];
	$topid=$_GET['topid'];
	$subid=$_GET['subid'];
	$schid=$_GET['schid'];
	$sql=mysql_query("DELETE FROM `school_note_videos` WHERE `id`='$id_to_delete'  limit 1") or die(mysql_error());
	
	header("location:school_topic_video_menu.php?topid=$topid&subid=$subid&schid=$schid");
	exit();
}
		if(isset($_GET['deleteid4'])&& $_GET['topid']){
echo 'Do You Really Want To upload a logo for these Topic if you do the logo would be available ? <a href="school_topic_video_menu.php?topid='.$_GET['topid'].'&yesdelete4='.$_GET['deleteid4'].'&subid='.$_GET['subid'].'&schid='.$_GET['schid'].'">Yes </a>| <a href="school_topic_video_menu.php?topid=$tid&subid=$subid&schid=$schid">No</a>';
exit();

}if(isset($_GET['yesdelete4'])&& $_GET['topid']){
			$id=$_GET['yesdelete4'];
$subid=$_GET['subid'];
	$schid=$_GET['schid'];
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
  $q = "SELECT * FROM `school_note_videos`  WHERE `topic_id`='{$_GET['topid']}'";
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
		$get="SELECT * FROM `school_note_videos` WHERE `topic_id`='{$_GET['topid']}' ORDER BY `id` DESC LIMIT $start, $display ";
		$get=$object->query($get);
		if(mysql_num_rows($get)==0){ echo "<p style='margin:30px 0 30px 0; text-align:center; border:1px solid #CCC;'><img src='../logo/info.JPG' width='56' height='50' /><br/>No Video(s) has been uploaded for this topic yet</p>";}
		?>
        <legend><?php
if(mysql_num_rows($get)>0){
?>	<b>View All uploaded videos for the above named topic</b>

</legend>
<table width="95%" border="1" cellspacing="1">
	<tr class="thead">
        <td>S/N</td>
    <td>Video Name</td>
      <td>video thumbnail Titile</td>
  <td>Visibility</td>
  <td>Entry Date</td>
    <td></td>
    <td></td>
    </tr>
  <?php
$s=1;
  	while($l=mysql_fetch_array($get)){
		$id=$l['id'];
		$subid=$l['subject_id'];
		$schid=$l['school_id'];

		$topid=$l['topic_id'];
	echo "<tr class= \"trodd\">";
	?>
    <td><?php echo $s++;
	?></td>
    
        <td><?php echo $l['url'];?></td>
        <td><?php echo $l['thumbnail'];?></td>

   <td><?php echo $l['visibility'] ;?></td>
   <td><?php echo $l['entry_date'] ;?></td>
   <?php echo "<td><a href='school_topic_video_menu.php?topid=$topid&deleteid=$id&&subid=$subid&schid=$schid'>Turn On Visibility</a></td>"; ?> 
   <?php echo "<td><a href='school_topic_video_menu.php?topid=$topid&deleteid2=$id&&subid=$subid&schid=$schid'>Turn Off Visibility</a></td>"; ?> 
 
    <?php echo "<td><a href='school_topic_video_menu.php?topid=$topid&deleteid3=$id&&subid=$subid&schid=$schid'>Delete</a></td>"; ?> 
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
 echo '<center><a href="school_topic_video_menu.php?s=' .
($start - $display) . '&p=' . $pages .'&subid='.$subid.'&schid='.$schid.'">Previous</a></center> ';
 }

for ($i = 1; $i <= $pages; $i++) {
 if ($i != $current_page) {
 echo '<a href="school_topic_video_menu.php?s=' .
(($display * ($i - 1))) . '&p=' .
$pages .'&subid='.$subid.'&schid='.$schid.'">' . $i . '</a> ';
 } else {
 echo $i . ' ';
}
 }

if ($current_page != $pages) {
 echo '<center><a href="school_topic_video_menu.php?s=' .
($start + $display) . '&p=' . $pages .'&subid='.$subid.'&schid='.$schid.'">Next</a></center>';
 }

 echo '</center>';// Close the paragraph.
 
}
 ?><br/><br/>
        
        
        <?php
if(isset($_POST['a']))
{
	$vtid=addslashes($_POST['vtid']);
	$schid=addslashes($_POST['schid']);
	$subid=addslashes($_POST['subid']);
	$name=$_FILES['file']['name'];
	$temp=$_FILES['file']['tmp_name'];
	
		$name2=$_FILES['file2']['name'];
	$temp2=$_FILES['file2']['tmp_name'];
		move_uploaded_file($temp,"uploaded/".$name);
move_uploaded_file($temp2,"uploaded/".$name2);
	$url="http://localhost/elibrary/administrator/uploaded/".$name;
	
	mysql_query("INSERT INTO `school_note_videos` (`name`, `url`,`thumbnail`,`visibility`,`entry_date`,`topic_id`,`subject_id`,`school_id`) VALUES ('$name', '$url','$name2','0',NOW(),'$vtid','$subid','$schid')");
	
header("location:school_topic_video_menu.php?topid=$vtid&subid=$subid&schid=$schid");
	
}

?>
        
            <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
  <div id="bar">
    <h3>UPLOAD A NEW VIDEO OR ANIMATION FOR THE ABOVE MENTIONED TOPIC</h3></div>

  <center><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"/>
  <input type="hidden" name="vtid" value="<?php echo $_GET['topid']; ?>"/>

  <input type="hidden" name="subid" value="<?php echo $_GET['subid']; ?>"/>
  <input type="hidden" name="schid" value="<?php echo $_GET['schid']; ?>"/>
  upload video here:<br/><input type="file" name="file"/><br/><br/><br/>
Upload thumbnail here: <br/><input type="file" name="file2"/>
<br/><br/>
<input type="submit" value="Upload" name="a"/>


</form></center>
<?php

if(isset($_POST['a']))
{
	echo "<br/>".$name." has been uploaded"; 
}


?>
    
      
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