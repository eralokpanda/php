
<?php
session_start();
	if(!isset($_SESSION['id']))
		header("location:home.html");
		
	include("../common/database_connect.php");
	$var=$_GET['val'];
	$query=mysql_query("select email from note_tab WHERE sl='".$var."' ");
	if($query)
		$sql=mysql_fetch_array($query);
	else
		header("location:error.php");
	if($sql['email']==$_SESSION['luser'])
	{
		$query=mysql_query("DELETE FROM note_tab WHERE sl='".$var."' ");
		if($query)
			header("location:index.php");
		else
			header("location:error.php");
	}
	else
		header("location:error.php");
?>

