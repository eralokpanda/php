<?php
if(isset($_SESSION['user']))
header("location:index.php?page=home");
?>

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
header("location:".$_SESSION['my-url']);
}
else
{
$_SESSION['once']=1;
echo '<center><div class="failure">Wrong user or password!!</div></center>';
}
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
<a href="index.php?page=forgot">Forgot password?</a>

</div>
</div>
</div>
</div>
</form>
</center>


