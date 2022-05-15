<?php
ob_start();
include("connect.php");
include("ballot_class.php");
$object=new library();

session_start();

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gmu e-Library|| Forumn Sign up Stage1</title>
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
    <h2><a href="#">WELCOME TO GMU360 CONCEPT e-Library </a></h2><table width="100%" border="1" id="box-table-a">
    <tr width="100%">
      <td width="40%">
      
     <?php 
include('connect.php');
if(isset($_POST['button'])){
	$post=addslashes($_POST['post']);
		
	$select="INSERT INTO `post` (`posters_id`, `message`, `entry_date`, `hits`) VALUES ('{$_SESSION['postersid']}', '$post', NOW(), '0');";
	$query=mysql_query($select) or die("ERROR:".mysql_error());
header("location:test.php");

}
?>
      <center><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div id="bar">
    <h3>Welcome <?php echo $object->getPoster($_SESSION['postersid']); ?></h3></div>

        <table border="0" width="398" height="255px">
        	<tr>
            	<td height="37" ><p>Please Post Your Queston or What Is on Your Mind Here</p></label></td>
              <td >
              <textarea name="post"></textarea>
    </td><td align="justify"><input name="button" type="submit"  id="button" value="Post"/></td>
            </tr>
        </table>

	</form></center>
      
      
      
      </td>
            
          
      </tr>
        </table><br/>






<?php

  $display = 10;
  // Determine how many pages there are...
  if (isset($_GET['p']) && is_numeric($_GET
  ['p'])) { // Already been determined.
  
  $pages = $_GET['p'];
  } else { // Need to determine.
  
  // Count the number of records:
  $q = "SELECT * FROM `post`";
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
$registered="SELECT `hits` FROM `post` WHERE `id`='{$_GET['id']}'";
$reg=mysql_query($registered);
while($row=mysql_fetch_array($reg)){
$registered=$row['hits'];

}

$yet=$registered+1;

$update=mysql_query("UPDATE `post` SET `hits` = '$yet' WHERE `id` ='{$_GET['id']}' LIMIT 1");

?>

        
        <?php
		$get="SELECT * FROM `post` ORDER BY `entry_date` DESC";
		$get=$object->query($get);
		if(mysql_num_rows($get)==0){ echo "<p style='margin:30px 0 30px 0; text-align:center; border:1px solid #CCC;'><img src='../images/info.JPG' width='56' height='50' />No Posts</p>";}
		
		while($row=mysql_fetch_array($get)){
			$id=$row['id'];
			?>
            <div class="submitdate"></div>
            <table border="0" width="100%">

<td>
<img class="avatar" src="images/avatar.gif" width="32" height="32" alt="" />
<span><a href="#"><?php echo $object->getPoster($_SESSION['postersid']); ?></a></span>
 <span class="wrote">wrote:</span>
            <?php echo $row['message'];?></td></div>
            <tr>
            <td><div class="submitdate"><?php echo $row['entry_date'];
			$_SESSION['post']=$id;
			?></div></td>
            </tr>
            <tr>
            <td><a href="<?php echo "test.php?id=$id";?>" title="Like these Post" ><img src="../images/cancel.JPG" width="36" height="32" /><?php echo number_format($row['hits']).' '; ?> like (s) </a>  |<a href="<?php echo "comment.php?id=$id";?>" title="Comment on these Post" ><img src="../images/cancel.JPG" width="36" height="32" /> Reply</a></td>
    
           </tr>
           
         </table>
        <?php } ?>
        
        
    
        
       
  <?php
 
  //paginate result set
if ($pages > 1) {
echo '<center>';
$current_page = ($start/$display) + 1;

if ($current_page != 1) {
 echo '<center><a href="test.php?s=' .
($start - $display) . '&p=' . $pages .
'">Previous</a></center> ';
 }

for ($i = 1; $i <= $pages; $i++) {
 if ($i != $current_page) {
 echo '<a href="test.php?s=' .
(($display * ($i - 1))) . '&p=' .
$pages . '">' . $i . '</a> ';
 } else {
 echo $i . ' ';
}
 }

if ($current_page != $pages) {
 echo '<center><a href="test.php?s=' .
($start + $display) . '&p=' . $pages .
'">Next</a></center>';
 }

 echo '</center>';// Close the paragraph.
 
}
 ?>

        <br/>
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