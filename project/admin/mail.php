<?php
if(!isset($_SESSION['admin']))
header("location:index.php?page=login");
?>

<style type="text/css">

#email{
	margin-top:5px;
	height:60px;
	width:600px;
	overflow:hidden;
}
#subject{
	margin-top:5px;
	height:25px;
	width:603px;
}
#mail{
	margin-top:5px;
	height:300px;
	width:600px;
}
.feedback-form{
	float:left;
	margin-top:50px;
	padding-left:30px;
	margin-bottom:30px;
}
#submit{
	height:30px;
	width:100px;
}
.success{
	height:30px;
	background-color:rgba(0,153,0,.1);
	border:dotted #0D0 1px;
	width:400px;
	color:#0D0; 
	font-size:20px;
	margin-top:50px;
	line-height:30px;
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
}
	
</style>
<?php
if(isset($_POST['submit'])&&isset($_POST['email'])&&isset($_POST['mail']))
{	
$to=$_POST['email'];
$from="admin@amusingworld.ga";
$subject=$_POST['subject'];
$message=str_replace("\n.","\n..",$_POST['mail']);
$header = 'From:admin@amusingworld.ga'."\r\n";
$header .= 'Reply-To:admin@amusingworld.ga'."\r\n";
$header .= 'X-Mailer: PHP/'.phpversion();
if(mail($to,$subject,$message,$header))
{
	echo '<center><div class="success">successfully sent.</div></center>';
}
else
echo '<center><div class="failure">Failed.</div></center>';
}
?>


    
    
    
    
<div class="feedback-form">
<form name="" method="post" action="">
<table  border="0">
  <tr>
    <td align="right">E-mail:<span style="color:#F00">*</span></td>
    <td>&nbsp;</td>
    <td><textarea name="email" id="email" placeholder="Email address" required><?php if(isset($_SESSION['mail-addresses'])){echo $_SESSION['mail-addresses']; unset($_SESSION['mail-addresses']); }?>
    </textarea></td>
  </tr>
  <tr>
    <td align="right">Subject:&nbsp;&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name="subject" id="subject" placeholder="Enter your Subject" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><textarea name="mail" id="mail"  required></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" id="submit" value="Submit" /></td>
  </tr>
</table>
</form>

</div>
<div style="clear:both"></div>



