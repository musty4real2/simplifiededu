<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

				function createPassword($length) {
	$chars = "1234567890";
	$i = 0;
	$Password= "";
	while ($i = $length) {
		$Password.= $chars{mt_rand(0,strlen($chars))};
		$i++;
	}
	return $Password;
		}
	
	
	$babyname=createPassword(8);
	echo  $babyname;
	?>
</body>
</html>