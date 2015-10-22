
		
			
               



                
 <center>       
<div style="height:80px; padding-top:5px;">			

<h3>Forgot your password?</h3>
<p>Please enter the email address registered on your account.</p>

</div>
</center>

<?php
if(isset($_SESSION['sent'])&&($_SESSION['sent']=='success'))
{
	unset($_SESSION['sent']);
	echo '<center><div class="success">Successfully sent</div></center>';
}
else if(isset($_POST['submit']))
{
$sql=mysqli_fetch_array(mysqli_query($db,"SELECT * from member WHERE email = '".$_POST['email']."'"));
if($sql['email']!='')
{
	if($sql['activation']=="activated")
	{
	
$change_pass_code=substr(md5($_POST['email']),0,10).mt_rand(45454,89547);	
if(mysqli_query($db,"UPDATE member SET change_pass_code = '".$change_pass_code."' WHERE email = '".$sql['email']."'"))
{
	  
	 $to = $sql['email'];
	 $subject="Password Change Request";
	 //message
	 $message='
	 <p>Hello '.$sql['fname'].' -</p>
<p>Please click on the link below to update your password.</p>
<p><a href="http://www.amusingworld.ga/outer/reset.php?em='.$sql['email'].'&cpc='.$change_pass_code.'">http://www.amusingworld.ga/outer/reset.php?em='.$sql['email'].'&cpc='.$change_pass_code.'</a></p>
<p>Amusingworld is commited to protecting your information security. For additional information, please review our complete privacy policy.</p>
<p>Please do not reply directly to this e-mail as it is not a monitored account.</p>';



$header = 'MIME-Version: 1.0'."\r\n";
$header .= 'Content-type:text/html; charset=iso-8859-1'."\r\n";


//Additional headers
$header .='From:Web Team<web.team@amusingworld.ga>'."\r\n";
$header .='Reply-To:Web Team<web.team@amusingworld.ga>'."\r\n";
$header .='To:'.$to."\r\n";
$header .='X-Mailer:PHP/'.phpversion();
if(mail($to,$subject,$message,$header))
 	echo '<div style="height:50px; width:800px; border:1px solid rgba(0,153,0,.5); margin-top:20px; padding:10px;" align="left"><span style="font-size:18px;"><strong>Thank you.</strong></span>

<p>We sent an email to "'.$sql['email'].'" with instructions on how to reset your password</p></div>';
else
echo '<center><div class="failure">Something went wrong!!</div></center>';	
}
else
echo '<center><div class="failure">Something went wrong!!</div></center>';
	}
	else
	echo '<center><div class="yello">Account is not activated</div></center>
			 <div style="margin-bottom:20px; margin-top:20px;">
			 <a href="./activationSend.php?email='.$sql['email'].'">Resend activation code</a></div>';
}
else
echo '<center><div class="yello">Not Found!!</div></center>';

}
?>







<center>
<div class="email-div">
<div class="forgot-bdy">
<div class="forgot-head">
<div class="forgot-title">
Email Address
</div>
</div>
<div class="forgot-box">
<form name="" method="post" action="">
<div class="forgot-email-box">
<input type="email" id="email" name="email" placeholder="Email address" required="required" />
</div>
<div class="forgot-sub-btn">
<input type="submit" id="submit" name="submit" value="Reset password"/>
</div>
</form>

</div>
</div>
</div>
</center>


			
		



