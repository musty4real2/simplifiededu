<?php
		ob_start();
		session_start();
		//$currentfile=$_SERVER['SCRIPT_NAME'];
		function loggedin()
		{
			if(isset($_SESSION['matric_number']) && !empty($_SESSION['matric_number']))
			return true;
			else return false;
		}
?>