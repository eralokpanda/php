<?php
session_start();
if(!isset($_SESSION['id']))
header("location:home.php");
		
?>

<!DOCTYPE html><head>
		<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
    	<title>Profile</title>
		<link href="../css/rounded.css" rel="stylesheet">
<?php 
include("../common/include_file.html");
?>
    </head>
<?php
include("../common/after_login_topbar.php");
include("../common/database_connect.php");
$var=$_SESSION['luser'];
$query=mysql_query("select * from login WHERE email='".$var."' ");
$sql=mysql_fetch_array($query);
?>

<div class="container">
	<div class="col-xs-12 col-md-6 col-lg-5 round">
		<div class="row">


<?php

echo "<center>".$sql['fname']." ".$sql['lname']."</center>";
?>
</div>
<form role="form" method="POST" action="" onsubmit="return checkform(this);">
		
<div class="row">
<div class="col-xs-8 col-md-8 col-lg-8" style="padding-left:10">
<label for="name">Password</label>
</div>
</div>
<div class="row">
<div class="col-xs-8 col-md-8 col-lg-8">
<input class="form-control" name="oldpass" placeholder="old password" type="password" required>
</div>
</div>
<div class="row">
<p>
<div class="col-xs-8 col-md-8 col-lg-8">
<input  title="Password not Match" class="form-control" name="pass" placeholder="Enter new Password" type="password" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title:''); if(this.checkValidity()) form.passconf.pattern=this.value;" required>
</div>
</p>
</div>
<div class="row">
<p>
<div class="col-xs-8 col-md-8 col-lg-8">
<input title="Password not match "class="form-control" name="passconf"  placeholder="Confirm Password" type="password" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title:'');" required>
</div>
</p>
</div>
<div class="row">
<div class="col-xs-8 col-md-8 col-lg-8">
<br />
&nbsp;
</div>
</div>
<div class="row">
<div class="col-xs-12 col-md-12 col-lg-12" align="center">
				
<button type="submit" name="change" style="width:70" class="btn btn-success">Change</button>
						
<div class="row">
<div class="col-xs-8 col-md-8 col-lg-8">
<br />
&nbsp;
</div>
</div>

</div>
</div>
</form>        
        

<?php
if(isset($_POST['change']))
{

	$oldpass=md5($_POST['oldpass']);
	$pass=md5($_POST['pass']);

	if(($oldpass)==($sql['pass']))
	{
		$query="UPDATE `login` SET `pass` = '".$pass."' WHERE `login`.`email` = '".$var."'";
			if(mysql_query($query))
			{	
				echo "<center><font color='#0F0'>Password is Successfully changed</font></center>";
				echo "<center><a href='mynote.php'>Back to My notes</a></center><br />";
			}
			else
				echo "<center><font color='#F00'>ERROR</font></center>";
	}
   else
    echo "<center><font color='#F00'>You Entered a Wrong Password</font></center>";
	
}
?>


</body>
</html>