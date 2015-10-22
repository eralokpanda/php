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
#pass1,#pass2,#old{
	width:400px;
	height:30px;
}
.box{
	float:left;
	margin-left:70px;
	margin-bottom:100px;
}
</style>  
        
<?php
if(isset($_POST['submit'])&& isset($_POST['pass1'])&& isset($_POST['pass2']))
{
if(isset($_POST['old'])&&$_POST['old']!='' && $_POST['pass1'])
{
	$query=mysqli_query($db,"SELECT `pass` FROM admin WHERE user='".$_SESSION['admin']."'");
	$sql=mysqli_fetch_array($query);
	if($sql['pass']==$_POST['old'])
	{
		if($_POST['pass1']==$_POST['pass2'])
		{
			if(mysqli_query($db,"UPDATE `admin` SET pass = '".$_POST['pass1']."' WHERE user='".$_SESSION['admin']."'"))
			echo '<center><div class="success">Password successfully changed.</div></center>';
			else
			echo '<center><div class="failure">Something went wrong!!</div></center>';
		}
		else
		echo '<center><div class="yellow">Password does not match.</div></center>';
		
		}
	else
	echo '<center><div class="failure">Password does not match.</div></center>';
}
else
echo '<center><div class="yellow">fill all the field correctly.</div></center>';
}
?>
     
<div class="h">
<strong>Change Password</strong>
</div>
<div class="box">
<form action="" method="post">
<table border="0">
  <tr>
    <td height="50px;" align="right">Old password<span style="color:#F00;">*</span></td>
    <td>&nbsp;</td>
    <td><input type="password" id="old" name="old" placeholder="Enter old password" required /></td>
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





	




