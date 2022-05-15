<?php
	include("../connect.php");
	$keyword = $_POST['data'];
	
	$sql = "select `topic_name` from `free_topics` where `topic_name` like '%".$keyword."%' ";
	//$sql = "select name from ".$db_table."";
	$result = mysql_query($sql) or die(mysql_error());
	if(mysql_num_rows($result))
	{
		echo '<ul class="list" style="text-align:left;">';
		while($row = mysql_fetch_array($result))
		{
			$str = strtolower($row['topic_name']);
			$start = strpos($str,$keyword); 
			$end   = similar_text($str,$keyword); 
			$last = substr($str,$end,strlen($str));
			$first = substr($str,$start,$end);
			
			$final = '<span class="bold">'.$first.'</span>'.$last;
		
			echo '<li><a href=\'javascript:void(0);\'>'.$final.'</a></li>';
		}
		echo "</ul>";
	}
	else
		echo 0;
?>	   
