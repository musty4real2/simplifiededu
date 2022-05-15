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
if(isset($_GET['vid']))
{
	$vid=$_GET['vid'];
	$query=mysql_query("SELECT * FROM `videos_test` WHERE `id`='$vid'");
	while($row=mysql_fetch_assoc($query))
	{
		$name1=$row['name'];
		$url=$row['url'];
		
	}
	echo "You are watching".$name1."<br/>";
	echo "<embed src='$url' width='630' height='480'></embed><br/><br/>";
	 
}else{
}

?>

<?php

$query=mysql_query("SELECT * FROM `videos_test`");
while($row=mysql_fetch_assoc($query)){
	$id=$row['id'];
	$name=$row['name'];
	echo "<a href='test.php?vid=$id'>$name</a><br/>";
	
	
}



?>
</body>
</html>