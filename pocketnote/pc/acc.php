<?php
if(isset($_POST['submit']))
{
	include("../common/database_connect.php");
	$pass=md5($_POST['pass']);
	$uname=$_POST['email'];
	$date=date("Y-m-d");
	$x=mysql_query("SELECT * FROM `login` WHERE EMAIL='".$_POST['email']."'");
	$x1=mysql_fetch_array($x);
	if(($uname)==($x1['email']))
	{
		header("location:present.php");
	}
	else
	{
	$sql="INSERT INTO `a2044608_1`.`login` (`fname`,`lname`,`email`,`gender`, `pass`, `date`, `ip`) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['gender']."','".$pass."','".$date."','".$_SERVER['REMOTE_ADDR']."')";
	$act="INSERT INTO `a2044608_1`.`act_tab` (`email`,`code`) VALUES ('".$_POST['email']."','".$_POST['email']."')";
if(mysql_query($sql)&&mysql_query($act))
{	
header("location:success.php");
}

}
}
?>