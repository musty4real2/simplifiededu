<?php
ob_start();
include("../ballot_class.php");
$object=new library();
session_start();
include("connect.php");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$query="SELECT * FROM `subjects` WHERE `subject_category_id`='{$_GET['id']}' AND `visibility`='1' ORDER BY `subject_name` ASC";
	$result=mysql_query($query);
 
	$cols=3;		// Here we define the number of columns
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
 <td><?php 

//GET the Main image from the image table for this result using the ID********************************************************
 $getimage= $object->getImageWhere($row['id'], 'subjects');
//****************************************************************************************************************************

 //*************************DISPLAY min image thumbnail*********************************************************************************
 while($m=mysql_fetch_array($getimage)){
	$picture=$m['logo'];
if($picture!=""){
$pic=getimagesize("../logo/$picture");
?>
  <img   class="pic " src="<?php echo "../logo/$picture";?>"  <?php echo $object->imageResize($pic[0], $pic[1], 200);?> alt="<?php echo $row['id'];?>" />
  <?php } 

if($picture==""){
$pic=getimagesize("../logo/info.jpg");
?>
  <img  class="pic" src="<?php echo "../logo/info.jpg";?>"  <?php echo $object->imageResize($pic[0], $pic[1], 200);?>  />
  <?php } ?>                    
                        <b><?php echo $row['subject_name'];?> </b><br />
 <?php echo "<a href='topics.php?id={$row['id']}'>View {$row['subject_name']}</a>"; ?>
<br />
                    </td>
                    <td width="50">&nbsp;</td>	<!-- Create gap between columns -->
                </tr>
           </table>
        </td>
<?php
 }
 }
			else{
				echo "<td>&nbsp;</td>";	//If there are no more records at the end, add a blank column
			}
			
		}

	} while($row);
	
	echo "</table>";
	
 ?>
</body>
</html>