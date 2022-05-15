<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>welcome to Gmu e-Library</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
<script type="text/javascript" src="tinybox.js"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>

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
      <li><a href="index.php" >ABOUT GMU</a></li>
      <li><a href="partners.php">PARTNERS</a></li>
      <li><a href="howitworks.php">HOW IT WORKS</a></li>
       <li><a href="study_lab.php">STUDY LAB</a></li>
      <li><a href="library/library_menu1.php">ENTER LIBRARY</a></li>
      <li><a href="contact.php">CONTACT</a></li>
            <li><a href="bookshop.php">BOOK SHOP</a></li>


    </ul>

  </div> 
  <div id="slider">
    <div class="slider-navigation">
      <ul>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul>
    </div>
    <div class="cl">&nbsp;</div>
    <div class="slider-holder">
      <ul>
        <li><img src="css/images/slide-1.png" alt="" /></li>
        <li><img src="css/images/slide-2.png" alt="" /></li>
        <li><img src="css/images/slide-3.png" alt="" /></li>
      </ul>
    </div>
    <div class="big-navigation">
      <ul>
        <li class="big-navigation-orange">
          <div class="button-holder"> <a href="forumn/index.php">FORUM</a> </div>
          <div class="data">
            <h3><a href="forumn/index.php">Forumn</a> </h3>
            <p>have something on your mind visit our forum. </p>
            <h5><a href="forumn/index.php">FORUM</a> </h5>
          </div>
          <div class="cl">&nbsp;</div>
        </li>
        <li class="big-navigation-blue">
          <div class="button-holder"> <a href="#">2</a> </div>
          <div class="data">
            <h3><a href="#">Final Year Project</a></h3>
            <p>Want Your Project to be Managed Checkout this Section</p>
            <h5><a href="#">Learn More</a></h5>
          </div>
          <div class="cl">&nbsp;</div>
        </li>
        <li>
          <div class="button-holder"> <a href="aboutsimplified.php">About Simplified Education</a> </div>
          <div class="data">
            <h3><a href="aboutsimplified.php">About Simplified Education...</a></h3>
            <p>Want to learn more about simplified Education Click on Learn More</p>
            <h5><a href="aboutsimplified.php">Learn More</a></h5>
          </div>
          <div class="cl">&nbsp;</div>
        </li>
      </ul>
    </div>
    <div class="cl">&nbsp;</div>
  </div>
  <div id="main">
    <div class="box">
    <?php
	include('administrator/connect.php');
include("ballot_class.php");
$object=new library();
session_start();
	$path = "administrator/featured_this_week_image/";
	
	$getaticle=mysql_query("SELECT * FROM `featured_this_week` WHERE `visibility`='1' LIMIT 1");
	 while($row=mysql_fetch_array($getaticle)){
$id=$row['id'];
$description=$row['description'];
$subject=$row['subject'];
}	
	$getpic=mysql_query("SELECT `picture` FROM `featured_image` WHERE `featured_id`='$id'");
	 while($row=mysql_fetch_array($getpic)){

$picture=$row['picture'];
if($picture!=""){
$pic=getimagesize("administrator/featured_this_week_image/$picture");
?>
  <?php } 
	 }?>

      <h2>Featured This Week</h2>
      <div class="entry">
       <a href="#">  <img src="<?php echo "administrator/featured_this_week_image/$picture";?>"  <?php echo $object->imageResize ($pic[0], $pic[1], 300);?> alt="<?php echo $row['code'];?>" />
</a>
       <strong><u><B><?php echo "$subject"; ?> </B></u></strong> </p><?php echo "$description"; ?><br/>
          
<div class="buttons"> 
<?php echo "<a href='view_this_week_featured.php?id=$id' class='button'>Learn More</a>"; ?>  || <?php echo "<a href='view_all_this_week_featured.php' class='button'>See More</a>"; ?>  


</div> </div> 
   <br/><br/>
 <div class="box">
            <h2> History Stuff's </h2>

      <div class="entry">
        <div class="news">
             <?php
$select="SELECT * FROM `history` WHERE `visibility`='1' ORDER BY `id` DESC";

$query=$object->query($select);

?>
  <br/>
<?php 

if(mysql_num_rows($query)!=0){?>
      <?php
while($row=mysql_fetch_array($query)){?>
<?php 

//GET the Main image from the image table for this result using the ID********************************************************
 $getimage= $object->getImageWhere($row['id'], 'history');
//****************************************************************************************************************************

 //*************************DISPLAY min image thumbnail*********************************************************************************
 while($m=mysql_fetch_array($getimage)){
	$picture=$m['logo'];
if($picture!=""){
$pic=getimagesize("logo/$picture");
?>
<table>
<tr>
<td>
  <img   class="pic " src="<?php echo "logo/$picture";?>"  <?php echo $object->imageResize($pic[0], $pic[1], 100);?> alt="<?php echo $row['id'];?>" />
</td>
<td><table>
<tr>
<td>
<?php echo "<a href='view_history.php?hid={$row['id']}' > {$row['subject']}</a>"; ?>
</td>
</tr>
<tr>
<td><?php echo $row['description']; ?></td>
</tr>
</table>
</td>


<?php } ?>
</tr>
</table>
    <?php }
}

}
?>
        </div>
      </div>
      <div class="buttons">
<?php echo "<a href='view_all_history_stuffs.php' class='button'>See More</a>"; ?>  
        </div><br/><br/>
      
 <div class="box">
            <h2> All Animals Stuff</h2>

      <div class="entry">
        <div class="news">
    
            <?php
	$query="SELECT * FROM `animal_stuff` WHERE `visibility`='1' ORDER BY `id` DESC";
	$result=mysql_query($query);
 
	$cols=2;		
	echo "<table>";	
	do{
		echo "<tr>";
		for($i=1;$i<=$cols;$i++){	
									
			$row=mysql_fetch_array($result);
			if($row){
 ?>
        <td>
            <table>
                <tr valign="top">

 <td><?php 

//GET the Main image from the image table for this result using the ID********************************************************
 $getimage= $object->getImageWhere($row['id'], 'animal_stuff');
//****************************************************************************************************************************

 //*************************DISPLAY min image thumbnail*********************************************************************************
 while($m=mysql_fetch_array($getimage)){
	 $mid=$row['id'];
	$picture=$m['logo'];
	
if($picture!=""){
$pic=getimagesize("logo/$picture");

?>
                 
                       
                      <center><a href="<?php echo "view_animal.php?id=$mid" ?>"><img   class="pic " src="<?php echo "logo/$picture";?>"  <?php echo $object->imageResize($pic[0], $pic[1], 130);?> alt="<?php echo $row['id'];?>" /><br/></a></center>
<br />
                    </td>
                    <td width="5">&nbsp;</td>	<!-- Create gap between columns -->
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
          </div>
      </div>
      <div class="buttons">
<?php echo "<a href='view_all_animal_stuffs.php?id=$id' class='button'>See All</a>"; ?>  
       </div>
      
    </div>
    
   </div>
    <div class="box">

      <div class="entry">
      <ul>
          <li><a href="#"><img src="css/images/syllabus.png" /><br/>View Our Detailed Syllabus</a></li>
            <li><a href="#">Drop us a post to recieve our library updates</a></li>
            <li><a href="#">Request for a Link to download a video</a></li>
            </ul>
            <br/>
            <h2><a href="#">SUBMIT A TUTORIAL</a></h2>
            <br/>
          
          <br/>
    </div>
<br/>
</div>
   </div>
    
    <div class="box">
      <h2>Kiddies Stuff Today</h2>
      <div class="entry">
        <div class="ul-bullets">
        <?php
$select="SELECT * FROM `kiddies_stuff` WHERE `visibility`='1' ORDER BY `id` DESC Limit 8";

$query=$object->query($select);

?>
  <br/>
<?php 

if(mysql_num_rows($query)!=0){?>
      <?php
while($row=mysql_fetch_array($query)){?>
<?php 

//GET the Main image from the image table for this result using the ID********************************************************
 $getimage= $object->getImageWhere($row['id'], 'kiddies_stuff');
//****************************************************************************************************************************

 //*************************DISPLAY min image thumbnail*********************************************************************************
 while($m=mysql_fetch_array($getimage)){
	$picture=$m['logo'];
if($picture!=""){
$pic=getimagesize("logo/$picture");
?>
<table>
<tr>
<td>
  <img   class="pic " src="<?php echo "logo/$picture";?>"  <?php echo $object->imageResize($pic[0], $pic[1], 100);?> alt="<?php echo $row['id'];?>" />
</td>
<td><table>
<tr>
<td>
<?php echo "<a href='view_kiddies.php?id2={$row['id']}' > {$row['subject']}</a>"; ?>
</td>
</tr>
<tr>
<td><?php echo $row['description']; ?></td>
</tr>
</table>
</td>


<?php } ?>
</tr>
</table>
    <?php }
}

}
?>
        </div>
      </div>
      
      <div class="buttons"> <a href="view_all_kiddies_stuffs.php" class="button">See More</a> </div>
      <div class="box">
            <h2> Tech Stuff</h2>
        <div class="ul-bullets">
             <?php
$select="SELECT * FROM `tech_stuff` WHERE `visibility`='1' ORDER BY `id` DESC LIMIT 10";

$query=$object->query($select);

?>
  <br/>
<?php 

if(mysql_num_rows($query)!=0){?>
      <?php
while($row=mysql_fetch_array($query)){?>
<?php 

//GET the Main image from the image table for this result using the ID********************************************************
 $getimage= $object->getImageWhere($row['id'], 'tech_stuff');
//****************************************************************************************************************************

 //*************************DISPLAY min image thumbnail*********************************************************************************
 while($m=mysql_fetch_array($getimage)){
	$picture=$m['logo'];
if($picture!=""){
$pic=getimagesize("logo/$picture");
?>
<table>
<tr>
<td>
  <img   class="pic " src="<?php echo "logo/$picture";?>"  <?php echo $object->imageResize($pic[0], $pic[1], 100);?> alt="<?php echo $row['id'];?>" />
</td>
<td><table>
<tr>
<td>
<?php echo "<a href='view_tech.php?tid={$row['id']}' > {$row['subject']}</a>"; ?>
</td>
</tr>
<tr>
<td><?php echo $row['description']; ?></td>
</tr>
</table>
</td>


<?php } ?>
</tr>
</table>
    <?php }
}

}
?></div>
<div class="buttons"> 
<?php echo "<a href='view_all_tech_stuffs.php' class='button'>See More</a>"; ?>  
</div>
        </div>
      <div class="box">
            <h2> Do You Know</h2>

      <div class="entry">
        <div class="ul-bullets">
             <?php
$select="SELECT * FROM `do_you_know` WHERE `visibility`='1' ORDER BY `id` DESC LIMIT 4";

$query=$object->query($select);

?>
  <br/>
<?php 

if(mysql_num_rows($query)!=0){?>
      <?php
while($row=mysql_fetch_array($query)){?>
<?php 

//GET the Main image from the image table for this result using the ID********************************************************
 $getimage= $object->getImageWhere($row['id'], 'do_you_know');
//****************************************************************************************************************************

 //*************************DISPLAY min image thumbnail*********************************************************************************
 while($m=mysql_fetch_array($getimage)){
	$picture=$m['logo'];
if($picture!=""){
$pic=getimagesize("logo/$picture");
?>
  <img   class="pic " src="<?php echo "logo/$picture";?>"  <?php echo $object->imageResize($pic[0], $pic[1], 70);?> alt="<?php echo $row['id'];?>" />
<?php echo $row['description'];?><br/><br/>

<?php } ?>
    <?php }
}

}
?>
<div class="buttons"> 
<?php echo "<a href='view_all_do_you_know.php?id=$id' class='button'>See All</a>"; ?>  
</div>
        </div>
           
      </div>
      
    </div>
    
    </div><div class="box box-bordered last-box">
      <h2>&nbsp;</h2>
      <div class="entry">
        <div class="news">
               <img src="css/images/ad.png" width="274" height="200"/>

        </div>
      </div>
    </div>
    <div class="box box-bordered last-box">
           <h2> Stuff You Might Like </h2>

      <div class="entry">
        <div class="news">
             
            <?php
	$query="SELECT * FROM `stuff_you_might_like` WHERE `visibility`='1' ORDER BY `id` DESC LIMIT 10";
	$result=mysql_query($query);
 
	$cols=2;		
	echo "<table>";	
	do{
		echo "<tr>";
		for($i=1;$i<=$cols;$i++){	
									
			$row=mysql_fetch_array($result);
			if($row){
 ?>
        <td>
            <table>
                <tr valign="top">

 <td><?php 

//GET the Main image from the image table for this result using the ID********************************************************
 $getimage= $object->getImageWhere($row['id'], 'stuff_you_might_like');
//****************************************************************************************************************************

 //*************************DISPLAY min image thumbnail*********************************************************************************
 while($m=mysql_fetch_array($getimage)){
	 $mid=$row['id'];
	$picture=$m['logo'];
	
if($picture!=""){
$pic=getimagesize("logo/$picture");

?>
                 
                       
                      <center><a href="<?php echo "view_stuff_you_like.php?id=$mid" ?>"><img   class="pic " src="<?php echo "logo/$picture";?>"  <?php echo $object->imageResize($pic[0], $pic[1], 130);?> alt="<?php echo $row['id'];?>" title="<?php echo $row['subject'];?>"/><br/><?php echo $row['subject'];?></a></center>
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
 
             
             </div>
      </div>
      <div class="buttons"> 
      <?php echo "<a href='view_all_tuffs_you_might_like.php' class='button'>See More</a>"; ?>
</div>
      
      
      
    </div>
 <div class="box box-bordered last-box">
           <h2> Quick Grab</h2>

      <div class="entry">
        <div class="news">
		<?php
	$query="SELECT * FROM `quick_grab` WHERE `visibility`='1' ORDER BY `id` DESC LIMIT 10";
	$result=mysql_query($query);
 
	$cols=2;		
	echo "<table>";	
	do{
		echo "<tr>";
		for($i=1;$i<=$cols;$i++){	
									
			$row=mysql_fetch_array($result);
			if($row){
 ?>
        <td>
            <table>
                <tr valign="top">

 <td><?php 

//GET the Main image from the image table for this result using the ID********************************************************
 $getimage= $object->getImageWhere($row['id'], 'quick_grab');
//****************************************************************************************************************************

 //*************************DISPLAY min image thumbnail*********************************************************************************
 while($m=mysql_fetch_array($getimage)){
	 $mid=$row['id'];
	$picture=$m['logo'];
	
if($picture!=""){
$pic=getimagesize("logo/$picture");

?>
                 
                       
                      <center><a href="<?php echo "view_quick_grab.php?id=$mid" ?>"><img   class="pic " src="<?php echo "logo/$picture";?>"  <?php echo $object->imageResize($pic[0], $pic[1], 130);?> alt="<?php echo $row['id'];?>" title="<?php echo $row['subject'];?>"/><br/><?php echo $row['subject'];?></a></center>
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
 
   
        </div>
      </div>
      <div class="buttons"> <?php echo "<a href='view_all_quick_grab_you_might_like.php?id=$id' class='button'>See All</a>"; ?>  
 </div><br/><br/>
      
    </div>   
    
    
    <div class="cl">&nbsp;</div>
  </div>
  <div class="footer">
    <p class="lf">Copyright &copy; 2013 <a href="#">GMU360 E-Learning </a> - All Rights Reserved</p>
    <p class="rf"><a href="http://gmu360.com" target="_blank"></a> <a href="http://www.gmu360.com/" target="_blank">Powered by GMU360 CONCEPT</a></p>
    <div style="clear:both;"></div>
  </div>
</div>
<!-- END PAGE SOURCE -->
</html>