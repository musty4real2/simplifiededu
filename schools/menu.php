<?php
ob_start();
include("../connect.php");

include("../ballot_class.php");
$object=new library();
session_start();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gmu e-Library||e-Learning</title>
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
    <h1 id="logo"><a href="#"><img src="../css/images/Logo_colord.png" width="37" height="20" />SIMPLIFIED EDUCATION<span>Strictly Education</span></a></h1>
        <div class="socials"> <a href="#" class="link link-twitter">Twitter</a> <a href="#" class="link link-linkedin">LinkedIn</a> <a href="#" class="link link-facebook">Facebook</a> <a href="#" class="link link-flickr">flickr</a> </div>
  </div>
  <div id="navigation">
    <ul>
      <li><a href="menu1.php">HOME</a></li>
      <li><a href="logout.php">LOGOUT</a></li>



    </ul>

  </div> 
  
  <div id="main">
    <h2><a href="">e-Learning</a></h2>

       
       <?php
$select="SELECT * FROM `categories` WHERE `visibility`='1' ORDER BY `category_name` ASC";

$query=$object->query($select);

?>
  <br/>
<?php 

if(mysql_num_rows($query)!=0){?>
    <table width="100%" border="0" id="box-table-a">
<tr >

<?php
while($row=mysql_fetch_array($query)){
	$catid=$row['id'];
	?>
  <tr>
  <td>
 <br/>

<?php echo "<h2  style='background-color:#4bacc6;'>&nbsp;&nbsp;{$row['category_name']}<br/></h2>"; ?>
  <?php
$select2="SELECT * FROM `subjects` WHERE `visibility`='1' AND `subject_category_id`='$catid' ORDER BY `subject_name` ASC";

$query2=$object->query($select2);

?>
  <br/>
<?php 

if(mysql_num_rows($query2)!=0){?>
    <table width="100%" border="0" >
<tr >
<?php
while($row=mysql_fetch_array($query2)){
	$subid=$row['id'];
	?>
  <tr>
  <td>
 <br/>

<?php echo "<h2  style='background-color:#d2eaf1;'>{$row['subject_name']}<br/></h2>"; ?>
<?php
	$query3="SELECT * FROM `topics` WHERE `subject_id`='$subid' AND `visibility`='1' ORDER BY `topic_name` ASC";
	$result3=mysql_query($query3);
 
	$cols=8;		// Here we define the number of columns
	echo "<table border='0' id='box-table-'>";	// The container table with $cols columns
	do{
		echo "<tr>";
		for($i=1;$i<=$cols;$i++){	// All the rows will have $cols columns even if
									// the records are less than $cols
			$row2=mysql_fetch_array($result3);
			if($row2){
 ?>
        <td>
            <table >
               <?php $bg = ($bg=='#cfebf2' ? '#fde4d0' :
'#cfebf2'); // Switch the background
 echo "<tr bgcolor='$bg' class='trs' >";  
 ?>
                 <td width="50" height="5px">&nbsp;</td>
  <br />
 <center><?php echo "<a href='topic_note_area2.php?id={$row2['id']}&subj=$subid'>{$row2['topic_name']}</a>"; ?></center>
 </form>                   </td>
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
	
 ?>

</td>
    </tr>
    </table>
</td>
  </tr>
    <?php }
}

else{
	echo "There are no subject(s) available yet";
}
?>
</td>
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