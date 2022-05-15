<?php
include("../connect.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query=mysql_query("SELECT * FROM `videos_test` WHERE `id`='$id'");
	while($row=mysql_fetch_assoc($query))
	{
		$name=$row['name'];
		$url=$row['url'];
		
	}
	echo "You are watching".$name."<br/><br/>";
	echo "<center><embed src='$url' width='620' height='480'></embed></center>";
	 
}else{
	echo "Error!!! Please a video";
}

?>

</body>
</html>