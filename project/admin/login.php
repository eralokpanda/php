
		<title>Login</title>

            <link href="./css/login.css" type="text/css" rel="stylesheet" /> 



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
<input type="email" id="pass" name="user" placeholder="Email address" />
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
<a href="">Forgot password?</a>

</div>
</div>
</div>
</div>
</form>
</center>



<?php
if(isset($_POST['login']))
{
	$query=mysqli_query($db,"SELECT * from admin where user='".$_POST['user']."'");
	$sql=mysqli_fetch_array($query);
	if($sql['pass']==$_POST['pass'])
	{
		
	header("location:index.php?page=home");
	$_SESSION['admin']=$sql['user'];	
	}
	
	
}
?>
