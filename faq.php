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
      <li><a href="index.php" class="active">ABOUT GMU</a></li>
      <li><a href="partners.php">PARTNERS</a></li>
      <li><a href="howitworks.php">HOW IT WORKS</a></li>
       <li><a href="study_lab.php" >STUDY LAB</a></li>
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
    <h2><a href="faq.php">e-Learning FAQ</a></h2>
  
       <br/>
                    <h2>FREQUENTLY ASKED QUESTIONS FROM THE HOME PAGE</h2>
<br/>
       
       <?php
$select1="SELECT * FROM `faq` WHERE `visibility`='1' AND `section`='homepage' ORDER BY `id` DESC";

$query1=$object->query($select1);

?>
  <br/>
<?php 

if(mysql_num_rows($query1)!=0){?>
    <table width="100%" border="0" id="box-table-a">
  
<tr>
<?php
while($row=mysql_fetch_array($query1)){
	
	?>
<td>

<?php echo "<a href='fullfaq.php?id={$row['id']}'>{$row['subject']}</a><br/>"; ?>


</td>
  </tr>
    <?php }
}

else{
	echo "There are no frequently asked questions from homepage";
}
?>
  </table>

       
       
       <br/>
             <br/>  <br/>
             
             <h2>FREQUENTLY ASKED QUESTIONS FROM THE PARTNERS PAGE</h2>
    
     <br/>
       
       <?php
$select2="SELECT * FROM `faq` WHERE `visibility`='1' AND `section`='partners' ORDER BY `id` DESC";

$query2=$object->query($select2);

?>
  <br/>
<?php 

if(mysql_num_rows($query2)!=0){?>
    <table width="100%" border="0" id="box-table-a">
<tr >
<?php
while($row2=mysql_fetch_array($query2)){
	
	?>
  <td>

<?php echo "<a href='fullfaq.php?id={$row2['id']}'>{$row2['subject']}</a><br/>"; ?>

</td>
  </tr>
    <?php }
}

else{
	echo "There are no frequently asked questions from Partners Page";
}
?>
  </table>

       
       
       <br/>
             <br/>  <br/>
              <br/>
             
             <h2>FREQUENTLY ASKED QUESTIONS FROM THE HOW IT WORKS PAGE</h2>
    
     <br/>
       
       <?php
$select3="SELECT * FROM `faq` WHERE `visibility`='1' AND `section`='howitworks' ORDER BY `id` DESC";

$query3=$object->query($select3);

?>
  <br/>
<?php 

if(mysql_num_rows($query3)!=0){?>
    <table width="100%" border="0" id="box-table-a">
<tr >
<?php
while($row3=mysql_fetch_array($query3)){
	
	?>
  <td>

<?php echo "<a href='fullfaq.php?id={$row3['id']}'>{$row3['subject']}</a><br/>"; ?>

</td>
  </tr>
    <?php }
}

else{
	echo "There are no frequently asked questions from how it works Page";
}
?>
  </table>

        <br/>
             <br/>  <br/>
              <br/>
             
             <h2>FREQUENTLY ASKED QUESTIONS FROM THE STUDY LAB</h2>
    
     <br/>
       
       <?php
$select4="SELECT * FROM `faq` WHERE `visibility`='1' AND `section`='studylab' ORDER BY `id` DESC";

$query4=$object->query($select4);

?>
  <br/>
<?php 

if(mysql_num_rows($query4)!=0){?>
    <table width="100%" border="0" id="box-table-a">
<tr >
<?php
while($row4=mysql_fetch_array($query4)){
	
	?>
  <td>

<?php echo "<a href='fullfaq.php?id={$row4['id']}'>{$row4['subject']}</a><br/>"; ?>

</td>
  </tr>
    <?php }
}

else{
	echo "There are no frequently asked questions from studylab Page";
}
?>
  </table>

        <br/>
             <br/>  <br/>
              <br/>
             
             <h2>FREQUENTLY ASKED QUESTIONS FROM THE BOOKSHOP</h2>
    
     <br/>
       
       <?php
$select5="SELECT * FROM `faq` WHERE `visibility`='1' AND `section`='bookshop' ORDER BY `id` DESC";

$query5=$object->query($select5);

?>
  <br/>
<?php 

if(mysql_num_rows($query5)!=0){?>
    <table width="100%" border="0" id="box-table-a">
<tr >
<?php
while($row5=mysql_fetch_array($query5)){
	
	?>
  <td>

<?php echo "<a href='fullfaq.php?id={$row5['id']}'>{$row5['subject']}</a><br/>"; ?>

</td>
  </tr>
    <?php }
}

else{
	echo "There are no frequently asked questions from Bookshop Page";
}
?>
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