
<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // if the form has been submitted
  include("../../common/php/dbconnect.php");
  $query=mysqli_query($db,"SELECT * from member where email = '".$_POST['email']."'");
  $sql=mysqli_fetch_array($query);
  if($_POST['email']==$sql['email'])
  {
	  echo '<div style="width:400px; height:200px; margin-top:50px; padding-top:100px; font-size:24px;">
You are already registred with us.
</div>';
  }
  else
  {
 	$change_pass_code=substr(md5($_POST['email']),0,10).mt_rand(10000,99999);
	 		 $activation=mt_rand(1000,9999).mt_rand(1000,9999);
			 
			$birthday=explode("-",$_POST['birthday']);
$age=(date("md",date("U",mktime(0,0,0,$birthday[1],$birthday[2],$birthday[0])))>date("md")?((date("Y")-$birthday[0])-1):(date("Y")-$birthday[0]));
			if(($age<=15)&&($age>3)) 
	  $zone='kids';
	  else if(($age>15)&&($age<=50))
	  $zone="young";
	  else if(($age>50)&&($age<90))
	  $zone="senior";
	  else
	  {
		die('<font color="#FF0000">Something went Wrong.</font>');
		  
	  }
	  $date=new DateTime();
 
	  
	  
	  $q="INSERT INTO `member` (`fname`, `lname`, `gender`, `birthday`, `mobile`, `email`, `user`, `pass`, `zone`, `change_pass_code`, `activation`, `permission`, `last_time_login`) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['gender']."', '".$_POST['birthday']."', '".$_POST['mobile']."', '".$_POST['email']."', '".$_POST['email']."', '".$_POST['pass']."', '".$zone."', '".$change_pass_code."', '".$activation."', 'Block', '".$date->format('Y-m-d H:i:s')."')";
	if(mysqli_query($db,$q))  
  {
	  
	 $to = $_POST['email'];
	 $subject="Amusingworld";
	 //message
	 $message='
	 <p>Hello '.$_POST['fname'].' '.$_POST['lname'].' -</p>
<p>Thank you for registering on <a href="http://amusingworld.ga">amusingworld</a>. This is your last step in activating your account and is in place to protect your privacy.</p>
<p>If you made this request, please follow the instructions below. [Note: If you did not make this request please ignore this e-mail].</p>
<p>Please click the link below to confirm your registration.</p>
<p><a href="http://www.amusingworld.ga/outer/activate.php?cpc='.$change_pass_code.'&ac='.$activation.'">http://www.amusingworld.ga/outer/activate.php?cpc='.$change_pass_code.'&ac='.$activation.'</a></p>
<p>Thank you for visiting our website.</p>
<p>The Amusingworld Web Team</p>
<p>Amusingworld is commited to protecting your information security. For additional information, please review our complete privacy policy.</p>
<p>Please do not reply directly to this e-mail as it is not a monitored account.</p>
';
$header = 'MIME-Version: 1.0'."\r\n";
$header .= 'Content-type:text/html; charset=iso-8859-1'."\r\n";


//Additional headers
$header .='From:Web Team<web.team@amusingworld.ga>'."\r\n";
$header .='Reply-To:Web Team<web.team@amusingworld.ga>'."\r\n";
$header .='To:'.$to."\r\n";
$header .='X-Mailer:PHP/'.phpversion();
mail($to,$subject,$message,$header); 
	  
?>






 <center>
<div style="width:400px; height:100px; margin-top:50px; padding-top:100px; font-size:24px;">
<p>Thank you for register with us.</p>
</div>
</center>
<div style="text-align:left; margin:20px;"
<p>We sent an e-mail to the address you provided.To activate your new account, <strong>check your <br />e-mail and click the confirmation link </strong>contained in the e-mail from Amusingworld Web Team.</p>
<p> Thank you!</p>  
</div>

<?php
  }
  else
  echo '<center><div style="width:400px; height:200px; margin-top:50px; padding-top:100px; font-size:24px;">Something went Wrong.</div></center>';  
  }
 } ?>