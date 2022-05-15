<?php 
ob_start();
include("ballot_class.php");
$object=new library();
session_start();
include("connect.php");
?>
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
    <h1 id="logo"><a href="#">SIMPLIFIED EDUCATION<span>Strictly Education</span></a></h1>
    <div class="socials"> <a href="#" class="link link-twitter">Twitter</a> <a href="#" class="link link-linkedin">LinkedIn</a> <a href="#" class="link link-facebook">Facebook</a> <a href="#" class="link link-flickr">flickr</a> </div>
  </div>
  <div id="navigation">
    <ul>
      <li><a href="library_menu.php">HOME</a></li>
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
    <h2><a href="library_menu.php"> E-LIBRARY MENU </a></h2>
    <h3>Please Choose a Subject Below</h3>
    <table width="100%" border="1" id="box-table-a">
    <tr width="100%">
    <td>
<?php
	$query="SELECT * FROM `subjects` WHERE `subject_category_id`='{$_GET['id']}' AND `visibility`='1' ORDER BY `subject_name` ASC";
	$result=mysql_query($query);
 
	$cols=4;		// Here we define the number of columns
	echo "<table>";	// The container table with $cols columns
	do{
		echo "<tr>";
		for($i=1;$i<=$cols;$i++){	// All the rows will have $cols columns even if
									// the records are less than $cols
			$row=mysql_fetch_array($result);
			if($row){
 ?>
        <td>
            <table>
                <tr valign="top">
                 <td width="50">&nbsp;</td>
  <br />
 <center><?php echo "<a href='topics.php?id={$row['id']}'>{$row['subject_name']}</a>"; ?></center>
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

	} while($row);
	
	echo "</table>";
	
 ?></td>
    </tr>
    </table>
    <br/><br/>
    <div class="cl">
  </div>
    
  </div>
  <div class="footer">
    <p class="lf">Copyright &copy; 2013 <a href="#">GMU360 E-Learning </a> - All Rights Reserved</p>
    <p class="rf"><a href="http://gmu360.com" target="_blank"></a> <a href="http://www.gmu360.com/" target="_blank">Powered by GMU360 CONCEPT</a></p>
    <div style="clear:both;"></div>
  </div>
<!-- END PAGE SOURCE --></body>
</html>
<?php ob_flush(); ?>