<style type="text/css">
#name{
	height:25px;
	width:603px;
	margin-top:5px;
}
#email{
	margin-top:5px;
	height:25px;
	width:603px;
}
#subject{
	margin-top:5px;
	height:25px;
	width:603px;
}
#feedback{
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
if(isset($_POST['submit'])&&(isset($_POST['email'])&&($_POST['email']!=''))&&(isset($_POST['feedback'])&&($_POST['feedback']!='')))
{	
$to="admon@amusingworld.ga";
$from=$_POST['name']."<".$_POST['email'].">";
$subject="Feedback-".$_POST['subject'];
$message=str_replace("\n.","\n..",$_POST['feedback']);
$header = 'From:'.$_POST['email']."\r\n";
$header .= 'Reply-To:'.$_POST['email']."\r\n";
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
    <td width="77" align="right">Name:&nbsp;&nbsp;</td>
    <td width="31">&nbsp;</td>
    <td width="605"><input type="text" name="name" placeholder="Name" id="name" /></td>
  </tr>
  <tr>
    <td align="right">E-mail:<span style="color:#F00">*</span></td>
    <td>&nbsp;</td>
    <td><input type="email" name="email" id="email" placeholder="Enter your Email"  required="required"/></td>
  </tr>
  <tr>
    <td align="right">Subject:&nbsp;&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name="subject" id="subject" placeholder="Enter your Subject" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><textarea name="feedback" id="feedback" placeholder="Feedback" required="required"></textarea></td>
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



