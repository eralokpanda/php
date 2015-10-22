<?php
session_start();
	$_SESSION['user_fname']="";
	$_SESSION['user_lname']="";
	$_SESSION['user_email']="";
	$_SESSION['user_id'] = "";
	
	unset($_SESSION['user_fname']);
	unset($_SESSION['user_lname']);
	unset($_SESSION['user_email']);
	unset($_SESSION['user_id']);	
	
	
		$_SESSION['admin_fname']="";
		$_SESSION['admin_lname']="";
		$_SESSION['admin_email']="";
		$_SESSION['admin_id'] = "";
		
	
		unset($_SESSION['admin_fname']);
		unset($_SESSION['admin_lname']);
		unset($_SESSION['admin_email']);
		unset($_SESSION['admin_id']);
		
session_destroy();
session_write_close();
header("location:index.php");
?>