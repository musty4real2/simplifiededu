<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$selectpost="SELECT `hits` FROM `post` WHERE `id`='{$_GET['idpost']}'";
$selectpostq=mysql_query($selectpost);
while($row=mysql_fetch_array($selectpostq)){
$postrow=$row['hits'];

}

$postrowadd=$postrow+1;

$updatepostlike=mysql_query("UPDATE `replies` SET `hits` = '$yet' WHERE `id` ='{$_GET['idpost']}' LIMIT 1");

?>        
        <?php
		$getpost="SELECT * FROM `post` WHERE `id`={$_GET['id']} LIMIT 1";
		$getp=$object->query($getpost);
		if(mysql_num_rows($getp)==0){ echo "<p style='margin:30px 0 30px 0; text-align:center; border:1px solid #CCC;'><img src='../images/info.JPG' width='56' height='50' />No Posts Selected</p>";}
		
		while($row=mysql_fetch_array($getp)){
			$idpost=$row['id'];
			?>
            <table border="0" width="600px" bordercolor="#c7e7f9">
            <tr bgcolor="#c7e7f9" height="35px" >
            <td><p style="color:#0071BC;">Username:<?php echo "  ". $object->getPosterUsername($_SESSION['postersid']); ?>
             Wrote: </p></td>
             <td><?php echo $row['entry_date'];
			?></td></tr>
<tr>
<td>
<img class="avatar" src="images/avatar.gif" width="32" height="32" alt="" />
 <span class="wrote">wrote:</span>
            <?php echo $row['message'];?></td></div>
            <tr>
            <td><?php echo number_format($row['hits']).' '; ?> Like(s)</td>
            </tr>

           
         </table>  
                  <table width="600px">
                     <tr align="right" width="600px">

            <td><a href="<?php echo "comment.php?id={$_GET['id']}&idpost=$idpost";?>" title="Like these Post"><img src="forum/like.png" width="80px" height="32" /></a></td>
    
           </tr>
           </table>
         <?php } ?>
</body>
</html>