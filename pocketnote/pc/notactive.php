<?php

session_start();
if(!isset($_SESSION['id']))
{
header("location:home.php");
}
include("../common/database_connect.php");

$query=mysql_query("SELECT * FROM `login` WHERE EMAIL='".$_SESSION['notactive']."'");
$sql=mysql_fetch_array($query);
if($sql['flag']!='0')
header("location:index.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
		<title>Not Activated</title>
<?php 
include("../common/include_file.html");
?>
	</head>
<?php 

include("../common/after_login_topbar.php");
$query=mysql_query("SELECT * FROM `act_tab` WHERE EMAIL='".$_SESSION['notactive']."'");
$sql=mysql_fetch_array($query);
?>

	<br />
<br/>
<br/>
<H3>
	<center>
		<font color="#006600" face="Arial Black, Gadget, sans-serif">
			<B>YOUR ACCOUNT IS NOT ACTIVATED</B>
		</font>
	</center>
</H3>


<center>
	<div class="container">
	<div class="row">
		<form role="form" method="GET" action="">
        	<div class="form-group col-lg-4 col-md-4 col-xs-1">
			&nbsp;
            </div>
		<div class="form-group col-lg-4 col-md-4 col-xs-10">
			<label for="name">Enter your Email ID for Activation</label> 
			<input name="code" type="text" required class="form-control"  placeholder="code" >
		</div>
        <div class="form-group col-lg-4 col-md-4 col-xs-1">
			&nbsp;
            </div>
	</div>

	<div class="row">
		<div class="form-group col-lg-12 col-md-12 col-xs-12">
			<center>
				<button type="submit" name="activate" value="true" class="btn btn-success">Activate</button>
			</center>
		</form>
		</div>
	</div>
</div>

</center>
<?php
if(isset($_GET['activate'])&& ($_GET['code']==$sql['code']))
{
	$sql1=mysql_query("UPDATE login SET flag='".date("Y-m-d")."'  WHERE EMAIL='".$_SESSION['notactive']."'");
	$sql2=mysql_query("DELETE FROM act_tab  WHERE EMAIL='".$_SESSION['notactive']."'");
	if($sql1 && $sql2)
	$_SESSION['act']=$_SESSION['notactive'];
	unset($_SESSION['notactive']);
		header("Location:index.php");
}
else if(isset($_GET['activate'])&& ($_GET['code']!=$sql['code']))
{
echo "<center><font color='#FF0000'>You Entered a wrong activation code</font></center>";
}
?>
     
</body>

</html>