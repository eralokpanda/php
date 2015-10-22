<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
    	<title>** New Password **</title>
		<link href="css/rounded.css" rel="stylesheet">
	<?php
include("common/include_file.html");
?>
    </head>
<?php
include("common/after_login_topbar.php");
include("common/database_connect.php");
if(isset($_GET['email'])&&isset($_GET['code']))
{
$email=$_GET['email'];
$pass=$_GET['code'];
$query=mysql_query("select * from login WHERE email='".$email."'&&pass='".$pass."' ");
$sql=mysql_fetch_array($query);
if($email=$sql['email'])
{

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

	
	$pass=md5($_POST['pass']);

		$query="UPDATE `login` SET `pass` = '".$pass."' WHERE `login`.`email` = '".$email."'";
			if(mysql_query($query))
			{	
				echo "<center><font color='#0F0'>Password is Successfully changed</font></center>";
				echo "<center><a href='home.php'>Back to Home</a></center><br />";
			}
			else
				echo "<center><font color='#F00'>ERROR</font></center>";
	}

	
}

else
echo "<center><font color='#F00'>You entered a Wrong code</font></center>";
}
else
echo "<center><font color='#F00'>You entered a Wrong code</font></center>";
?>


</body>
</html>