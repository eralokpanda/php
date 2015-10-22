<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link href="../favicon.ico" rel="shortcut icon" />
<link href="../style.css" rel="stylesheet" />

<style type="text/css">
.tot-bdy{
	margin-top:60px;
}
.login-box{
	margin:100px 0 60px 400px;
	border:1px #000000 solid;
	width:300px;
	height:330px;
	border-radius:20px;
	transform:rotate(-5deg);
	box-shadow: #000 5px 5px 5px;
}

#user,#pass{
	height:25px;
	width:200px;
	border-radius:14px;
	border:1px #000000 solid;
	outline:none;
	padding-left:5px;
}
#submit{
	height:25px;
	width:80px;
	border:0px;
	color:#FFF;
	background-color:#13BB95;
}
.login-box-hanger{
	margin:auto;
	width:25px;
	height:12.5px;
	padding-top:11.5px;
	margin-top:20px;
	background-color:#000;
	border-radius:12.5px;
	box-shadow: #666 2px 2px 2px;
	
}
#login-txt{
	font-size:24px;
	color:#13BB95;
	height:80px;
}
.login-box-hanger-line{
	width:25px;
	height:2px;
	transform:rotate(-135deg);
	background-color:#CCC;
}





</style>

</head>


<body>
<?php
session_start();
?>


<div class="tot-bdy">
  <div class="my-bdy">
    
    <div class="login-box">
<div class="login-box-hanger">
<div class="login-box-hanger-line">
</div>
</div>
<center>
<form name="form" method="post" action="">
<table width="200" border="0" id="login-tbl">
  <tr>
    <td>&nbsp;</td>
    <td align="center" id="login-txt">ADMIN LOGIN</td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td ><label for="user"></label>
      <input type="text" name="user" id="user"></td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="40px"><label for="pass"></label>
      <input type="password" name="pass" id="pass"></td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right" height="40px">
      
        <input type="submit" name="submit" id="submit" value="Login">
     
    </td>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Forgot password?</td>
    <td>&nbsp;</td>
  </tr>
  </table>
</form>
</center>
</div>


<!--End my body -->
</div>
<div class="float-end"></div>

<div class="my-footer">
  <div class="float-end"></div>
<!-- my footer end -->
</div>



<!-- End total body -->
</div>


</body>
</html>

<?php
if(isset($_POST['submit'])&&($_POST['user'] != '')&&($_POST['pass'] != ''))
{
	function login($user,$pass)
	{
		require '../dbconnect.php';
		$db = database_connect();
		$v = $db->prepare("SELECT * FROM `admin` WHERE email = '".$user."'");
		$v->execute();
		$res = $v->fetch(PDO::FETCH_ASSOC);
		if($pass==$res['pass'])
		{
		$db=NULL;
		$_SESSION['admin_fname']=$res['fname'];
		$_SESSION['admin_lname']=$res['lname'];
		$_SESSION['admin_email']=$res['email'];
		$_SESSION['admin_id'] = "12345601512";
		header("location:../index.php");	
		}
	}
	login($_POST['user'],$_POST['pass']);
	exit();
	session_write_close();
}

?>

