
<?php
session_start();
    if (isset($_GET['email'])) {
        // if the form has been submitted
  include("./common/php/dbconnect.php");
  $query=mysqli_query($db,"SELECT * from member where email = '".$_GET['email']."'");
  $sql=mysqli_fetch_array($query);
  if($_GET['email']==$sql['email'])
  {


 	$change_pass_code=substr(md5($_POST['email']),0,10).mt_rand(10000,99999);
	 		 $activation=mt_rand(1000,9999).mt_rand(1000,9999);
			 

 if(mysqli_query($db,"UPDATE member SET change_pass_code = '".$change_pass_code."',activation = '".$activation."' WHERE email = '".$sql['email']."'"))
	 { 
	 
	  $_SESSION['sent']='success';   
  	 $to = $_GET['email'];
	 $subject="Amusingworld";
	 //message
	 $message='
	 <p>Hello '.$sql['fname'].' '.$sql['lname'].' -</p>
<p>Thank you for registering on <a href="http://amusingworld.ga">amusingworld.ga</a>. This is your last step in activating your account and is in place to protect your privacy.</p>
<p>If you made this request, please follow the instructions below. [Note: If you did not make this request please ignore this e-mail].</p>
<p>Please click the link below to confirm your registration.</p>
<p><a href="http://outer.amusingworld.ga/activate.php?cpc='.$change_pass_code.'&ac='.$activation.'">http://outer.amusingworld.ga/activate.php?cpc='.$change_pass_code.'&ac='.$activation.'</a></p>
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
if(mail($to,$subject,$message,$header))
{ 
header('location:index.php?page=forgot');
}
  }
  
  }
 }
  ?>