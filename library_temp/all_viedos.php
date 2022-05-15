<?php
ob_start();

session_start();
	include('connect.php');
include("ballot_class.php");
$object=new library();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gmu e-Library|| Administrative Menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
<!--[if lte IE 6]><link rel="stylesheet" href="css/ie.css" type="text/css" media="all" /><![endif]-->
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <h1 id="logo"><a href="#"><img src="css/images/Logo_colord.png" width="37" height="20" />SIMPLIFIED EDUCATION<span>Strictly Education</span></a></h1>
        <div class="socials"> <a href="#" class="link link-twitter">Twitter</a> <a href="#" class="link link-linkedin">LinkedIn</a> <a href="#" class="link link-facebook">Facebook</a> <a href="#" class="link link-flickr">flickr</a> </div>
  </div>
  <div id="navigation">
        <ul>
      <li><a href="index.php"  class="active">HOME</a></li>
      <li><a href="partners.php">PARTNERS</a></li>
      <li><a href="study_lab/index.php">SUBMIT A TUTORIAL</a></li>
       <li><a href="study_lab.php">STUDY LAB</a></li>
      <li><a href="library_temp/index.php">ENTER LIBRARY</a></li>
      <li><a href="contact.php">CONTACT</a></li>
            <li><a href="book_shop/index.php">BOOK SHOP</a></li>


    </ul>

  </div> 
  
  <div id="main">

<?php
if(isset($_GET['vid']))
{
	$id=$_GET['vid'];
	$query=mysql_query("SELECT * FROM `home_videos` WHERE `id`='{$_GET['vid']}'");
	while($row=mysql_fetch_assoc($query))
	{
		$name=$row['name'];
		$vidname=$row['vid_name'];
		$url=$row['url'];
		
	}
	echo "You are watching ". $vidname ." <br/><br/>";
	echo "<center><object  width='900' height='500' data='$url'>
  <param name='movie' value='$url' /></object></center><br/>
  ";
	 
}else{
	echo "<h2>Please choose/ select a video to play</h2>";
}

?>



<br/>
<br/><br/>
<?php
	$query="SELECT * FROM `home_videos` ORDER BY `id`";
	$result=mysql_query($query);
 
	$cols=6;		
	echo "<table>";	
	do{
		echo "<tr>";
		for($i=1;$i<=$cols;$i++){	
									
			$row=mysql_fetch_assoc($result);
			if($row){
 ?>
        <td>
            <table>
                <tr valign="top">

 <td>      <?php 

//GET the Main image from the image table for this result using the ID********************************************************
 $getimage= $object->getImageWhere($row['id'], 'videos_test');
//****************************************************************************************************************************

 //*************************DISPLAY min image thumbnail*********************************************************************************
 while($m=mysql_fetch_array($getimage)){
	 $mid=$row['id'];
	 	$id=$row['id'];
	$name=$row['name'];
	$picture=$m['thumbnail'];
	$vid_name=$row['vid_name'];
if($picture!=""){
$pic=getimagesize("administrator/uploaded/$picture");

?>
           
        <center><a href="<?php echo "watch.php?vid=$id&id={$_GET['id']}&subj={$_GET['subj']}" ?>"><img   class="pic " src="<?php echo "administrator/uploaded/$picture";?>"  <?php echo $object->imageResize($pic[0], $pic[1], 130);?> alt="<?php echo $row['id'];?>" title="<?php echo $row['vid_name'];?>"/><br/><?php echo $row['vid_name'];?></a></center><br/>
<br />
                    </td>
                    <td width="0">&nbsp;</td>	<!-- Create gap between columns -->
                </tr>
           </table>
        </td>
<?php
}
 }
			}
			
		}
	} while($row);
	echo "</table>";
 ?>    


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