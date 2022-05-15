<?php
include("../connect.php");
if(isset($_POST['a']))
{
	$name=$_FILES['file']['name'];
	$temp=$_FILES['file']['tmp_name'];
	
		$name2=$_FILES['file2']['name'];
	$temp=$_FILES['file2']['tmp_name'];
	move_uploaded_file($temp,"uploaded/".$name2);
	move_uploaded_file($temp,"uploaded/".$name);
	$url="http://localhost/elibrary/administrator/video_upload_play/uploaded/".$name;
	
	mysql_query("INSERT INTO `videos_test` (`name`, `url`,`thumbnail`) VALUES ('$name', '$url','$name2')");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<a href="videos.php">Videos</a>
<form action="index2.php" method="post" enctype="multipart/form-data"/>
upload video here:<br/><input type="file" name="file"/><br/>
Upload thumbnail here: <br/><input type="file" name="file2"/>

<input type="submit" value="Upload" name="a"/>


</form>
<?php

if(isset($_POST['a']))
{
	echo "<br/>".$name." has been uploaded"; 
}


?>
</body>
</html>