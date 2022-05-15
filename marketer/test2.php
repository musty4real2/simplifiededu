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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
    <?php 
include('connect.php');
if(isset($_POST['button'])){
	$post=addslashes($_POST['post']);
		$id=$_GET['id'];
	$select="INSERT INTO `replies` (`post_id`, `repliers_id`, `reply_message`, `entry_date`, `hits`) VALUES ('{$_GET['id']}', '{$_SESSION['postersid']}', '$post', NOW(), '')";
	$query=mysql_query($select) or die("ERROR:".mysql_error());
header("location:test2.php?id=$id");

}
?>
      <center><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div id="bar">
    <h3>Welcome <?php echo $object->getPoster($_SESSION['postersid']); ?></h3></div>

        <table border="0" width="398" height="255px">
        	<tr>
            	<td height="37" ><p>Please Post Your Queston or What Is on Your Mind Here</p></label></td>
              <td >
              <textarea name="post"></textarea>
    </td><td align="justify"><input name="button" type="submit"  id="button" value="Comment"/></td>
            </tr>
        </table>

	</form></center>
      
    <?php
$registered2="SELECT `hits` FROM `replies` WHERE `id`='{$_GET['id']}'";
$reg2=mysql_query($registered2);
while($row=mysql_fetch_array($reg2)){
$registered2=$row['hits'];

}

$yet2=$registered2+1;

$update2=mysql_query("UPDATE `replies` SET `hits` = '$yet2' WHERE `post_id` ='{$_GET['id']}' LIMIT 1");

?>
 <?php
		$get2="SELECT * FROM `replies` WHERE `post_id`='{$_GET['id']}'";
		$get2=$object->query($get2);
		if(mysql_num_rows($get2)==0){ echo "<p style='margin:30px 0 30px 0; text-align:center; border:1px solid #CCC;'><img src='../images/info.JPG' width='56' height='50' />No Comments for these Post</p>";}
		
		while($row=mysql_fetch_array($get2)){
			$id2=$row['id'];
			?>
            <div class="submitdate"></div>
            <table border="0" width="100%">

<td>
<img class="avatar" src="images/avatar.gif" width="32" height="32" alt="" />
<span><a href="#"><?php echo $object->getPoster($_SESSION['postersid']); ?></a></span>
 <span class="wrote">wrote:</span>
            <?php echo $row['reply_message'];?></td></div>
            <tr>
            <td><div class="submitdate"><?php echo $row['entry_date'];
			?></div></td>
           
            <td><a href="<?php echo "comment.php?id=$id";?>" title="Like these Post" ><img src="../images/cancel.JPG" width="36" height="32" /><?php echo number_format($row['hits']).' '; ?> like (s) </a> </td>
    
           </tr>
           
         </table>
        <?php } ?>
          
    
    
    </td>
    </tr><tr>
      <td width="40%">
      
 
</body>
</html>
<?php
ob_flush();
?>