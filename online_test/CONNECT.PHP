<?php
	$connect=mysql_connect("localhost", "root", "") or die("Can not connect to database");
	$select=mysql_select_db ("dlcf", $connect) or die("Table not found");
?>