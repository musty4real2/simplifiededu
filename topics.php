<?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gmu e-Library || Subjects</title>
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
    <h1 id="logo"><a href="#"><img src="css/images/Logo_colord.png" width="37" height="20" />SIMPLIFIED EDUCATION<span>Strictly Education</span></a></h1>    <div class="socials"> <a href="#" class="link link-twitter">Twitter</a> <a href="#" class="link link-linkedin">LinkedIn</a> <a href="#" class="link link-facebook">Facebook</a> <a href="#" class="link link-flickr">flickr</a> </div>
  </div>
  <div id="navigation">
    <ul>
      <li><a href="index.php"  class="active">ABOUT GMU</a></li>
      <li><a href="partners.php">PARTNERS</a></li>
      <li><a href="study_lab/index.php">SUBMIT A TUTORIAL</a></li>
       <li><a href="study_lab.php">STUDY LAB</a></li>
      <li><a href="library_temp/index.php">ENTER LIBRARY</a></li>
      <li><a href="contact.php">CONTACT</a></li>
            <li><a href="book_shop/index.php">BOOK SHOP</a></li>


    </ul>

  </div> 
  
  <div id="main">
    <br/><br/>
    <h2><a href="library/library_menu.php"> E-LIBRARY MENU </a></h2>
    <h3>Please Choose a Topic Below</h3>

<?php
include("library/connect.php");
include("ballot_class.php");
$object=new library();

session_start();
	$query="SELECT * FROM `free_topics` WHERE `subject_id`='{$_GET['id']}' AND `visibility`='1' ORDER BY `subject_id` ASC";
	$result=mysql_query($query);
 
	$cols=8;		
	echo "<table id='box-table-a'>";	
	do{
		echo "<tr>";
		for($i=1;$i<=$cols;$i++){	
									
			$row=mysql_fetch_array($result);
			if($row){
 ?>
        <td>
            <table>
                <tr valign="top">
<td width="50">&nbsp;</td>
 <td>      
                        <center><?php echo "<a href='topic_note_area.php?id={$row['id']}&subj={$_GET['id']}'>{$row['topic_name']}</a>"; ?></center>
<br />
                    </td>
                    <td width="50">&nbsp;</td>	<!-- Create gap between columns -->
                </tr>
           </table>
        </td>
<?php
 }
			else{
				
			}
		}
	} while($row);
	echo "</table>";
 ?>
    <br/><br/>
    <div class="cl">
  </div>
    </div>
  </div>
  <div class="footer">
    <p class="lf">Copyright &copy; 2013 <a href="#">GMU360 E-Learning </a> - All Rights Reserved</p>
    <p class="rf"><a href="http://gmu360.com" target="_blank"></a> <a href="http://www.gmu360.com/" target="_blank">Powered by GMU360 CONCEPT</a></p>
    <div style="clear:both;"></div>
  </div>
<!-- END PAGE SOURCE --></body>
</html>
<?php
ob_flush();
?>