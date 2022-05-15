<?php
include("../ballot_class.php");
$object=new library();
session_start();
include("connect.php");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gmu e-Library</title>
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
            <li><a href="logout.php">LOGOUT</a></li>

    </ul>

  </div> 
  
  <div id="main">
    <br/><br/>
    <h2><a href="library_menu.php">WELCOME TO THE E-LIBRARY MENU </a></h2>
    <h3>Please Choose a Category Below</h3>
    <?php
$select="SELECT * FROM `categories` WHERE `visibility`='1' ORDER BY `category_name` ASC";

$query=$object->query($select);

?>
  <br/>
<?php 

if(mysql_num_rows($query)!=0){?>
    <table width="100%" border="1" id="box-table-a">
<tr width="100%"
      <?php
while($row=mysql_fetch_array($query)){?>
  <tr>
  <td><?php 

//GET the Main image from the image table for this result using the ID********************************************************
 $getimage= $object->getImageWhere($row['id'], 'categories');
//****************************************************************************************************************************

 //*************************DISPLAY min image thumbnail*********************************************************************************
 while($m=mysql_fetch_array($getimage)){
	$picture=$m['logo'];
if($picture!=""){
$pic=getimagesize("../logo/$picture");
?>
  <img   class="pic " src="<?php echo "../logo/$picture";?>"  <?php echo $object->imageResize($pic[0], $pic[1], 50);?> alt="<?php echo $row['id'];?>" />
  <?php } 

if($picture==""){
$pic=getimagesize("../logo/info.jpg");
?>
  <img  class="pic" src="<?php echo "../logo/info.jpg";?>"  <?php echo $object->imageResize($pic[0], $pic[1], 50);?>  />
  <?php } ?>
 <br/>
 <?php echo $row['category_name'];?> <br/>
<?php echo "<a href='subject.php?id={$row['id']}'>View {$row['category_name']}</a>"; ?>
</td>
  </tr>
    <?php }
}


}else{
	echo "There are no categories Available";
}
?>
  </table>


    <br/><br/>
    <div class="cl">
  </div>
    
  </div>
      <p class="lf">Copyright &copy; 2013 <a href="#">GMU360 E-Learning </a> - All Rights Reserved BY Gmu360 Concept</p>

</div>
<!-- END PAGE SOURCE --></body>
</html>