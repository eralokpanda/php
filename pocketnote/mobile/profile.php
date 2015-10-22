<?php
session_start();
if(!isset($_SESSION['id']))
header("location:home.php");
?>

<!DOCTYPE html><head>
    	<title>Profile</title>
<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
		<link href="css/rounded.css" rel="stylesheet">
<?php
include("common/include_file.html");
?>
    </head>
<?php
include("common/after_login_topbar.php");
include("common/database_connect.php");
$var=$_SESSION['luser'];
$query=mysql_query("select * from login WHERE email='".$var."' ");
$sql=mysql_fetch_array($query);
?>

<div class="container">
	<div class="col-xs-12 round">
		<div class="row">


<?php

echo "<center>".$sql['fname']." ".$sql['lname']."</center>";

?>
		</div>


		<div class="row">
			<div class="col-xs-8 col-md-8 col-lg-8" style="padding-left:10">
				<label for="name">Password</label>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-8 col-md-8 col-lg-8">
				<input class="form-control" name="pass" placeholder="*****" type="password" disabled>
			</div>
			<div class="col-xs-4 col-md-4 col-lg-4">
				<a href="passchange.php">
					<button type="button" name="Change" style="width:70" class="btn btn-success">Change</button>
				</a>		
			</div>
		</div>
        <div class="row">
			<div class="col-xs-8 col-md-8 col-lg-8">
				<br />
                <a href="accdel.php">
					<center>Delete Account</center>
                 </a>
			</div>
		</div>
        <div class="row">
			<div class="col-xs-8 col-md-8 col-lg-8">
				<br />
					&nbsp;
			</div>
		</div>
	</div>
</div>



</body>
</html>