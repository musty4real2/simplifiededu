<?php
ob_start();
include("connect.php");

include("ballot_class.php");
$object=new library();
session_start();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gmu e-Library||e-Learning</title>
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
      <li><a href="index.php">ABOUT GMU</a></li>
      <li><a href="partners.php">PARTNERS</a></li>
      <li><a href="howitworks.php">HOW IT WORKS</a></li>
       <li><a href="study_lab.php" class="active">STUDY LAB</a></li>
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
    <br/><br/>
    <h2><a href="howitworks.php">e-Learning</a></h2>
  
       <br/>
       
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
while($row=mysql_fetch_array($query)){
	?>
  <tr>
  <td>
 <br/>

<?php echo "<h2>{$row['category_name']}<br/></h2>"; ?>
<?php
	$query2="SELECT * FROM `subjects` WHERE `subject_category_id`='{$row['id']}' AND `visibility`='1' ORDER BY `subject_name` ASC";
	$result2=mysql_query($query2);
 
	$cols=8;		// Here we define the number of columns
	echo "<table>";	// The container table with $cols columns
	do{
		echo "<tr>";
		for($i=1;$i<=$cols;$i++){	// All the rows will have $cols columns even if
									// the records are less than $cols
			$row2=mysql_fetch_array($result2);
			if($row2){
 ?>
        <td>
            <table>
                <tr valign="top">
                 <td width="50">&nbsp;</td>
  <br />
 <center><?php echo "<a href='topics.php?id={$row2['id']}'>{$row2['subject_name']}</a>"; ?></center>
                    </td>
                    <td width="50">&nbsp;</td>	<!-- Create gap between columns -->
                </tr>
           </table>
        </td>
<?php
 }
			else{
				echo "<td>&nbsp;</td>";	//If there are no more records at the end, add a blank column
			}
			
		}

	} while($row2);
	
	echo "</table>";
	
 ?></td>
    </tr>
    </table>
</td>
  </tr>
    <?php }
}

else{
	echo "There are no categories Available";
}
?>
  </table>

       
       
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