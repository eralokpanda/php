
<?php
session_start();
?>
<?php
if(isset($_POST['change-pass'])&&isset($_SESSION['user_id']))
{
}
?>
<?php
if(isset($_POST['change-pass'])&&isset($_SESSION['admin_id']))
{
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link href="favicon.ico" rel="shortcut icon" />
<link href="style.css" rel="stylesheet" />

<style type="text/css">
.pass-bdy{
	border:1px solid #13BB95;
	border-radius:100px 0 0 0;
	height:400px;
	width:825px;
	margin-top:10px;
	margin-left:10px;
}

</style>

</head>


<body>


<div class="tot-bdy">
<div class="header">
	<div class="logo">
		<img src="logo.png" alt="Logo" height="70" />
	</div>
    
    <div class="corner">
    <!-- half circe corner inside the body -->
    </div>
   
   	<div class="logout">
	<?php 
	if(isset($_SESSION['user_id'])||isset($_SESSION['admin_id']))
	{
		?>	
	<a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/elogic2/logout.php">	
		<div class="logout-btn">Logout</div>		
	  </a>
	<?php }
	 ?>		
		
	</div> 

    
	<div class="search">
			<form name="form" action="http://www.google.com/search" method="get">
				<input type="text" name="q" id="search-txt" placeholder="Search !" />
				<input type="submit"  id="search-btn"value="Search" />
				</form>
</div>
    <div class="float-end"></div>
<!-- end header -->
</div>




<div class="menu">

	<div class="dir">
		<div class="dir-head">
			<center>
				&nbsp;
			</center>
		</div>
		<a href="index.php">
			<div class="menu-btn">
				Home
			</div>
		</a>
	</div>


<!--End menu -->
</div>

<div class="my-bdy">

<div class="pass-bdy">

<?php
if(isset($_SESSION['user_id'])||isset($_SESSION['admin_id']))
{
?>

<form name="form" action="" method="post">
<table  border="0" style="margin-left:200px; margin-top:200px;">
  <tbody>
    <tr>
      <td width="86" align="right">Old password</td>
      <td width="6">&nbsp;</td>
      <td width="203"><input type="text" name="old-pass" id="old-pass" placeholder="" size="32" /></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td>&nbsp;</td>
      <td><input type="text" name="pass1" id="pass1" placeholder="" size="32"/></td>
    </tr>
    <tr>
      <td align="right">Confirm</td>
      <td>&nbsp;</td>
      <td><input name="pass2" type="text" id="pass2" placeholder="" size="32" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="change-pass" id="change-pass" value="Change" /></td>
    </tr>
  </tbody>
</table>
</form>

<?php
}else
{
?>
<form name="form" action="" method="post">
<table  border="0" style="margin-left:250px; margin-top:200px;">
  <tbody>
    <tr>
      <td align="right">E-mail</td>
      <td>&nbsp;</td>
      <td><input name="email" type="text" id="email" placeholder="E-mail" size="32" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
  </tbody>
</table>
</form>
<?php
}
?>
</div>
<!--End My body -->
</div>


<div class="float-end"></div>

<div class="my-footer">
	<div style="border-bottom:1px solid #13BB95; width:1000px; margin:auto; margin-bottom:10px;"></div>
	<div class="footer-left">
		<a href="#">Privacy policy</a> &nbsp; <a href="#">About us</a> &nbsp; <a href="#">Contact us</a>
	</div>

	<div class="footer-right">
		<a href="#">elogic Team</a>
	</div>
	<div class="float-end"></div>
<!-- my footer end -->
</div>



<!-- End total body -->
</div>






<?php
session_write_close();
?>





</body>
</html>


