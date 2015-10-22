<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
    	<title>** New Password **</title>
		<link href="css/rounded.css" rel="stylesheet">
	<?php
include("../common/include_file.html");
?>
    </head>
<?php
include("../common/after_login_topbar.php");
include("../common/database_connect.php");
$q=$_GET['email'];
?>


	<br />
<br/>
<br/>
<H4>
	<center>
		<font color="#006600" face="Arial Black, Gadget, sans-serif">
			<B>Forgot Password</B>
		</font>
	</center>
</H4>


<center>
	<div class="container">
	<div class="row">
		<form role="form" method="GET" action="">
        	<div class="form-group col-xs-1">
			&nbsp;
            </div>
		<div class="form-group col-xs-10">
			<label for="name">Enter the code</label> 
			<input name="code" type="text" required class="form-control"  placeholder="code" >
		</div>
        <div class="form-group col-xs-1">
			&nbsp;
            </div>
	</div>

	<div class="row">
		<div class="form-group col-xs-12">
			<center>
				<button type="submit" name="submit" value="<?php echo $q;?>" class="btn btn-success">Submit</button>
			</center>
		</form>
		</div>
	</div>
</div>

</center>
</body>
</html>

<?php
if(isset($_GET['submit']))
{

$email=$_GET['submit'];
$query=mysql_query("select * from login WHERE email='".$email."' ");
$sql=mysql_fetch_array($query);
	if(($sql['code'])==($_GET['code']))
	{
header("location:newpass.php");
	}
   else
    echo "<center><font color='#F00'>You Entered a Wrong code</font></center>";
	
}
?>
