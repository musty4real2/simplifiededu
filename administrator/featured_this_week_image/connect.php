<?php
//connect to the mysql database
if(!$connection=@mysql_connect("localhost", "simplifi", "kbE020xGf4")){
	
	//if couldnt connect to database
	die("Sorry could not connect to the database<br/>ERROR: ".mysql_error());
	
	}
		$dbcnx=@mysql_select_db("simplifi_elibrary", $connection);
		if(!$dbcnx){
		die("<p class=\"error\">Sorry could not connect to database at this time:".mysql_error()."</p>");
		}
		
		
		
?>