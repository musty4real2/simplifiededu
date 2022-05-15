<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$query="SELECT * FROM `stuff_you_might_like` WHERE `visibility`='1' ORDER BY `subject` ASC";
	$result=mysql_query($query);
 
	$cols=2;		
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

 <td><?php 

//GET the Main image from the image table for this result using the ID********************************************************
 $getimage= $object->getImageWhere($row['id'], 'stuff_you_might_like');
//****************************************************************************************************************************

 //*************************DISPLAY min image thumbnail*********************************************************************************
 while($m=mysql_fetch_array($getimage)){
	$picture=$m['logo'];
if($picture!=""){
$pic=getimagesize("../logo/$picture");
?>
  <img   class="pic " src="<?php echo "../logo/$picture";?>"  <?php echo $object->imageResize($pic[0], $pic[1], 100);?> alt="<?php echo $row['id'];?>" />
  <?php } 

if($picture==""){
$pic=getimagesize("../logo/info.jpg");
?>
  <img  class="pic" src="<?php echo "../logo/info.jpg";?>"  <?php echo $object->imageResize($pic[0], $pic[1], 100);?>  />
  <?php } ?>                    
                       
                      <center><a href="subject.php"><img   class="pic " src="<?php echo "logo/$picture";?>"  <?php echo $object->imageResize($pic[0], $pic[1], 100);?> alt="<?php echo $row['id'];?>" /><br/></a></center>
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
				
			}
		}
	} while($row);
	echo "</table>";
 ?>

</body>
</html>