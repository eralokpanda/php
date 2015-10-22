
<?php
session_start();
include("./common/php/dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link href="./common/icon/favicon.ico" rel="shortcut icon" />
<link href="./common/css/header.css" rel="stylesheet" />
<link href="./common/css/footer.css" rel="stylesheet" />
<link href="./common/css/bdy.css" rel="stylesheet" />
<link href="./common/css/activate.css" rel="stylesheet" />
<title>Activation</title>
</head>

<body>
<div>
<?php
include("./common/php/header.php");
?>
</div>
<div>
<div class="total-body">
<center>
<div class="my-body">
<!--My body Start-->


<?php
if(isset($_POST['login'])&&(isset($_POST['user'])&&($_POST['user']!='')&&isset($_POST['pass'])&&($_POST['pass']!='')))
{	
$query=mysqli_query($db,"SELECT * from member where user ='".$_POST['user']."'");
$sql=mysqli_fetch_array($query);
if(($_POST['pass']==$sql['pass'])&&($sql['permission']=='active'))
{
$_SESSION['user']=$_POST['user'];
$_SESSION['fname']=$sql['fname'];
$_SESSION['lname']=$sql['lname'];
$_SESSION['acc_create']=substr($sql['acc_create'],0,10);
header("location:http://www.amusingworld.ga/index.php?page=home");
}
else
{
$_SESSION['once']=1;
echo '<center><div class="failure">Wrong user or password!!</div></center>';
}
}
?>


<?php
if(!isset($_SESSION['once']))
{
if(isset($_GET['cpc'])&&isset($_GET['ac']))
{
	$query=mysqli_query($db,"SELECT * from member WHERE change_pass_code = '".$_GET['cpc']."' and activation = '".$_GET['ac']."'");
	$sql= mysqli_fetch_array($query);
	if(mysqli_num_rows($query)==1)
	{
		if($sql['activation']!='activated')
		{
		if(mysqli_query($db,"UPDATE member SET activation = 'activated',permission = 'active' WHERE change_pass_code = '".$_GET['cpc']."' and activation = '".$_GET['ac']."'"))
		echo '<center><div class="success">Successfully Activated</div></center>';
		}
	}
	else
	echo '<center><div class="failure">Something went wrong!!</div></center>';
}
else
echo '<center><div class="failure">Invalid URL!!</div></center>';
}
?>     
<center>
<form name="form" method="POST" action="">
<div class="login-tot">
<div class="login-box">
<div class="login-head">
<center>
<div class="login-head-dot">
</div>
<div class="login-head-title">
LOGIN
</div>
</center>
</div>
<div class="login-text-box">

<div class="txt-box1">
<input type="email" id="user" name="user" placeholder="Email address" />
</div>
<div class="txt-box1">
<input type="password" id="pass" name="pass" placeholder="Password"  />
</div>


</div>
<div class="login">
<div class="login-btn">
<input type="submit" id="login" name="login" value="Login"/>
</div>
<div class="remember">
<input type="checkbox" id="remember" />
Remember me
</div>
</div>
<div class="forgot">
<div class="forgot-inner">
Forgot password?

</div>
</div>
</div>
</div>
</form>
</center>




<!--My body End-->
</div>
</center>
</div>
</div>
<div>
<?php
include("./common/php/footer.php");
?>
</div>
</body>
</html>