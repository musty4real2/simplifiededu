<?php

	require 'connect.php';
	
	require 'core.php';

	//echo "Thank you for successfully answering the questions\n";
	
	$answerString = $_GET['answers'];
	
	$questionsString = $_GET['questions'];
	
	$question = array();
	
	$answer = explode(',', $answerString);
	
	$question = explode(',', $questionsString);
	
	$score = 0;
	
	for($index = 0; $index <= 99; $index++)
	{
		$query = "SELECT * FROM questions WHERE id = '$question[$index]'";
		
		$result = mysql_query($query);
		
		//echo $questions[$index];
		
		$rows = mysql_fetch_array($result, MYSQL_ASSOC);
		
		//$scorecolumn = $answer[$index]."_score";
		
		//$score += $rows[$scorecolumn];
		
		if($answer[$index] == $rows['answer'])
		{
			
			$score++;
			
		}
		
		
	}
	$endtime = date('H:i:s');
	
	$end_time_array= array();
	
	//9:54:3 - 9:58:1
	
	//$end_time_array = explode(":", $endtime);
	
	//$start_time_array = explode(":", $_SESSION['starttime']);
	
	//$quiztime= (($end_time_array[1] - $start_time_array[1]) * 60) + ($end_time_array[2] - $start_time_array[2]);
	
	//$score = ($score / 30) * 100;
	
	$result = "";
	
	$result = $score / 40 * 100;
	
	$query = "UPDATE result SET result ='$result' WHERE matric_number='$_SESSION[matric_number]'";
	
	$result = mysql_query($query);
	
	echo "<p style=color:white;font-size:30px;text-align:center>You have successfully completed</p>
			<p style=color:white;font-size:30px;text-align:center>the quiz</p>
			<p style=color:white;font-size:30px;text-align:center>You Scored $result in your quiz</p>
			<p style=color:white;font-size:30px;text-align:center><a href=Logout.php>Logout</a></p>";	
	
	//echo $answer;
	
?>