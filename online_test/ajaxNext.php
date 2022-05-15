<?php
	require 'connect.php';
	
	require 'core.php';
	
	$questionId = $_GET['id'];
	
	$index = $_GET['index'] + 1;
	
	$b=rand(1,40);
	if($b==40){
		$b;
		}
	
	$query = mysql_query("SELECT * FROM `questions` WHERE `id`='$b'");
	
	//$result = mysql_query($query);
	
	$row = mysql_fetch_array($query);
	
	$_SESSION['question'] = $questionId;
	
	echo "
		<span style=text-align:center;color:white;font-size:20px;>$index  of 40</span>
		<br/>
		<p style=text-align:center;color:white;font-size:30px;>"; echo $row['questions']; echo"</p>
        
		<table align=center style=margin-right:100px; width=600 cellpadding=10>
						
				<tr>
							
					<td><input type=radio name=options value=A id=A onclick=optionClicked() /><span style=color:white;font-size:22px;>$row[option_A]</span> </td>
								
					<td><input type=radio name=options value=B id=B onclick=optionClicked() /><span style=color:white;font-size:22px;>$row[option_B]</span> </td>
								
				</tr>
							
				<tr>
								
					<td><input type=radio name=options value=C id=C onclick=optionClicked() /><span style=color:white;font-size:22px;>$row[option_C]</span> </td>
								
					<td><input type=radio name=options value=D id=D onclick=optionClicked() /><span style=color:white;font-size:22px;>$row[option_D]</span> </td>
								
				</tr>
				
			
                        
        </table>		
	";
?>