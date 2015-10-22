<?php

session_start();
if(!isset($_SESSION['id']))
{
header("location:home.php");
}
$email=$_POST['email'];
$pass=md5($_POST['pass']);

include("../common/database_connect.php");
?>

<html>
	<head>
		<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
		<title>Welcome</title>
<?php 
include("../common/include_file.html");
?>
	</head>
	<body>


<?php


	if(($email!="") &&($pass!=""))
	{
	$query=mysql_query("SELECT * FROM `login` WHERE EMAIL='".$_POST['email']."'");
	$sql=mysql_fetch_array($query);
	
	if(($pass)==($sql['pass']))
	{
				$_SESSION['id']=session_id();
				$_SESSION['luser']=$email;//login user
		if(($sql['flag']!="0"))
		{
		
		$_SESSION['act']=$email;//login user
		mysql_query("UPDATE `login` SET time=CURRENT_TIMESTAMP,ip='".$_SERVER['REMOTE_ADDR']."' WHERE email='$email'");
		header("Location:mynote.php");
		}
		else
		{
		$_SESSION['notactive']=$email;// user
		header("location:notactive.php");
		}
	}
	
	else
header("location:home.php");

	
	}

else
header("location:home.php");


?>
         


	</body>




</html>