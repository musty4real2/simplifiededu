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

$query=mysql_query("SELECT * FROM `videos_test`");
while($row=mysql_fetch_assoc($query)){
	$id=$row['id'];
	$name=$row['name'];
	echo "<a href='watch.php?id=$id'>$name</a><br/>";
	
	
}



?>

</body>
</html>