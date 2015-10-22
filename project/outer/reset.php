<style type="text/css">
.success{
	height:30px;
	background-color:rgba(0,153,0,.1);
	border:dotted #0D0 1px;
	width:400px;
	color:#0D0; 
	font-size:20px;
	margin-top:50px;
	line-height:30px;
	margin-bottom:40px;
}
.failure{
	height:30px;
	background-color:rgba(153,0,0,.1);
	border:dotted #D00 1px;
	width:400px;
	color:#D00; 
	font-size:20px;
	margin-top:50px;
	line-height:30px;
	margin-bottom:40px;
	
}
.yellow{
	height:30px;
	background-color:rgba(255,153,0,.1);
	border:dotted #FC0 1px;
	width:600px;
	color:#FC0; 
	font-size:20px;
	margin-top:50px;
	line-height:30px;
	margin-bottom:40px;
}

</style> 


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link href="./common/icon/favicon.ico" rel="shortcut icon" />
<link href="./common/css/header.css" rel="stylesheet" />
<link href="./common/css/footer.css" rel="stylesheet" />
<link href="./common/css/bdy.css" rel="stylesheet" />
<title>Create new Password</title>
</head>

<body>
<div>
<?php
include("./common/php/header.php");
?>
</div>
<div>
<div class="total-body">
<center>
<div class="my-body">
<!--My body Start--> 
 
 
 <?php 
 include("./common/php/dbconnect.php");
 
 
 if(isset($_POST['submit'])&&isset($_POST['pass1'])&&isset($_POST['pass2']))
 {
	 if($_POST['pass1']==$_POST['pass2'])
	 {
		 if(mysqli_query($db,"UPDATE member SET pass='".$_POST['pass1']."' WHERE email = '".$_POST['email']."'"))
		 {
			 echo '<center><div class="success">Password successfully changed</div></center>
			 <div style="margin-bottom:40px;"><a href="http://www.amusingworld.ga/index.php?page=login">Click here to login</a></div>';
		 }
		 else
		 echo '<center><div class="failure">Something went wrong!!</div></center>';
	 }
	 else
	 echo '<center><div class="yellow">Password does not match try again with new URL!!</div></center>';
 }
 
else if(isset($_GET['em'])&&isset($_GET['cpc']))
{
$email=$_GET['em'];
$change_pass_code=$_GET['cpc'];
$sql=mysqli_num_rows(mysqli_query($db,"SELECT * from member WHERE email = '".$email."' and change_pass_code = '".$change_pass_code."'"));
if($sql==1)
{
	$change_pass_code=substr(md5($email),0,10).mt_rand(10000,99999);
	mysqli_query($db,"UPDATE member SET change_pass_code = '".$change_pass_code."' WHERE email = '".$email."'");
?>

<style type="text/css">
.h{
	font-size:25px; 
	padding-left:60px;
	padding-top:50px;
	text-align:left;
}

#submit{
	height:30px;
	width:150px;
	background-color:#09F;
	border:0px;
	color:#FFFFFF;
}
#pass1,#pass2{
	width:400px;
	height:30px;
}
.box{
	float:left;
	margin-left:70px;
	margin-bottom:100px;
}
</style>  
        

     
<div class="h">
<strong>You Most Create a New Password</strong>
</div>
<div class="box">
<form action="" method="post">
<table border="0">
  <tr>
    <td height="50px;" align="right">E-mail:&nbsp;&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $email; ?><input type="hidden" name="email" value="<?php echo $email; ?>" /></td>
  </tr>
  <tr>
    <td height="50px;" align="right">New password<span style="color:#F00;">*</span></td>
    <td>&nbsp;</td>
    <td><input type="password" id="pass1" name="pass1" placeholder="Enter password" required /></td>
  </tr>
  <tr>
    <td height="50px;" align="right">Retype password<span style="color:#F00;">*</span></td>
    <td>&nbsp;</td>
    <td><input type="password" id="pass2" name="pass2" placeholder="Retype password" required /></td>
  </tr>
  <tr>
    <td height="50px;">&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" id="submit" name="submit" value="Create Password"/></td>
  </tr>
</table>
</form>
</div>
<div style="clear:both"></div>


<?php
}
else
echo '<center><div class="failure">Invalid or changed URL!!</div></center>';
}
else
echo '<center><div class="failure">Invalid URL!!</div></center>';


?>


	


<!--My body End-->
</div>
</center>
</div>
</div>
<div>
<?php
include("./common/php/footer.php");
?>
</div>
</body>
</html>




