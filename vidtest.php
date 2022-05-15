
<?php
	include('connect.php');
include("ballot_class.php");
$object=new library();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body
             
     	<?php
	$query="SELECT * FROM `videos_test`";
	$result=mysql_query($query);
 
	$cols=2;		
	echo "<table>";	
	do{
		echo "<tr>";
		for($i=1;$i<=$cols;$i++){	
									
			$row=mysql_fetch_assoc($result);
			if($row){
 ?>
        <td>
            <table>
                <tr valign="top">

 <td>      <?php 

//GET the Main image from the image table for this result using the ID********************************************************
 $getimage= $object->getImageWhere($row['id'], 'videos_test');
//****************************************************************************************************************************

 //*************************DISPLAY min image thumbnail*********************************************************************************
 while($m=mysql_fetch_array($getimage)){
	 $mid=$row['id'];
	$picture=$m['thumbnail'];
	
if($picture!=""){
$pic=getimagesize("administrator/uploaded/$picture");

?>
           
        <center><a href="<?php echo "view_quick_grab.php?id=$mid" ?>"><img   class="pic " src="<?php echo "administrator/uploaded/$picture";?>"  <?php echo $object->imageResize($pic[0], $pic[1], 130);?> alt="<?php echo $row['id'];?>" title="<?php echo $row['name'];?>"/><br/><?php echo $row['name'];?></a></center>
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
    
    
    </body>
</html>