<?php
	require 'connect.php';
	
	require 'core.php';
	
	session_destroy();
	
	header('location:../index.php');
?>