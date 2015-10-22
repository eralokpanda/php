<?php
session_start();
	if(!isset($_SESSION['id']))
		header("location:home.html");
		
?>		
<!DOCTYPE html><head>
<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
    	<title>Delete Account</title>
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
			<div class="col-xs-12 col-md-12 col-lg-12">
				<input class="form-control" name="pass" placeholder="Enter password" type="password" required>
			</div>
		</div>
        <div class="row">
			<div class="col-xs-8 col-md-8 col-lg-8">
				<br />
					&nbsp;
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12" align="center">
				
					<button type="submit" name="delete" style="width:70" class="btn btn-success">Delete</button>
			</div>
            </div>			
  		<div class="row">
			<div class="col-xs-8 col-md-8 col-lg-8">
				<br />
					&nbsp;
			</div>
		</div>
</form>

<?php
if(isset($_POST['delete']))
{
	$pass=md5($_POST['pass']);
	if(($pass)==($sql['pass']))
	{
	
	mysql_query("DELETE FROM note_tab WHERE email='".$var."' ");
	$query=mysql_query("DELETE FROM login WHERE email='".$var."' ");
		if($query)
		{  
			mysql_query("DELETE FROM act_tab WHERE email='".$var."' ");
			header("location:logout.php");
		}
		else
			header("location:error.php");
	}
	  else
    echo "<center><font color='#F00'>You Entered a Wrong Password</font></center>";
	
}
	?>
	</div>
</div>

</body>
</html>