<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
		<title>*** Forgot password ***</title>
	<?php
include("../common/include_file.html");
?>
	</head>
<?php 
include("../common/before_login_topbar.php");
include("../common/database_connect.php");
?>

	<br />
<br/>
<br/>
<H4>
	<center>
		<font color="#006600" face="Arial Black, Gadget, sans-serif">
			<B>Forgot password</B>
		</font>
	</center>
</H4>
<center>
	<div class="container">
	<div class="row">
		<form role="form" method="POST" action="">
        	<div class="form-group col-xs-1">
			&nbsp;
            </div>
		<div class="form-group col-xs-10">
			<label for="name">Enter email id </label> 
			<input name="email" type="text" required class="form-control"  placeholder="Email ID" >
		</div>
        <div class="form-group col-xs-1">
			&nbsp;
            </div>
	</div>

	<div class="row">
		<div class="form-group col-xs-12">
			<center>
				<button type="submit" name="submit" value="true" class="btn btn-success">Submit</button>
			</center>
		</form>
		</div>
	</div>
</div>

</center>
</body>

</html>

<?php
if(isset($_POST['submit'])&& ($_POST['email']!=""))
{
	$query=mysql_query("SELECT * FROM `login` WHERE EMAIL='".$_POST['email']."'");
	$sql=mysql_fetch_array($query);
	
	if($sql['email']==$_POST['email'])
	{
		header("location:pass_activation_code.php?email='".$sql['email']."'");
	}
	else if($sql!=1)
{
echo "<center><font color='#FF0000'>Email ID not Registered</font></center>";
}
}

?>