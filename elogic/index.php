
<?php
session_start();
?>
<?php
ob_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link href="favicon.ico" rel="shortcut icon" />
<link href="style.css" rel="stylesheet" />
<link href="frame.css" rel="stylesheet" />

<?php if(isset($_SESSION['admin_id']))
{
	?>
    
<style type="text/css">
		.menu-btn-part1{
			float:left;
			width:190px;
			overflow:hidden;	
		}
		.menu-btn-part2{
			float:left;
			width:25px;	
			height:40px;
			background-color:#E8191D;
			border-radius:0 10px 10px 0;
		}
	.menu-btn-part1:hover{
	background-color:#CCC;
	box-shadow:#000 0px 0px 0px;
	color:#13BB95;
	border-radius:10px 0 0 10px;
}
	.menu-btn-part2:hover{
	background-color:#CCC;
	box-shadow:#000 0px 0px 0px;
	color:#13BB95;
	height:40px;
	border-radius:0 10px 10px 0;
}	

#menu-btn-part2{
	width:25px;
	border:none;
	outline:none;
	background-color:transparent;
	border-radius:0 10px 10px 0;
}	
</style>       
<?php
}
else
{
?>

<style type="text/css">
  menu-btn-part1{
	  width:215px;
	  overflow:hidden
	  
  }
  	.menu-btn-part1:hover{
	background-color:#CCC;
	box-shadow:#000 0px 0px 0px;
	color:#13BB95;
	border-radius:10px;
}

</style> 
<?php 
}
?>


<style type="text/css">
.aa{
	height:300px;
	background-color:#13BB95;
	width:300px;
	margin-right:0px;
	text-align:left;
	padding:5px;

}
.bck{
	left:40%;
	display:none;
	top:-350px;
	position:absolute;
	text-align:right;
	padding-left:20px;
	padding-right:20px;
	padding-bottom:20px;
	background-color:rgba(0,0,0,.3);
	border-radius:10px;
	z-index:99;
}
.bcknew{
	top:100px;
}
#close{
	background-color:transparent;
	height:20px;
	border:none;
	font-size:15px;
	color:#FFF;
	width:20px;
	
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
				Directory
			</center>
		</div>
        
      <?php if(isset($_SESSION['admin_id'])){ ?>
	    
        <form name="form" method="post" action="">
			<div class="menu-btn">
			<input name="plc-btn-txt" type="text" id="plc-btn-txt" />
			</div>
			<div class="menu-btn">
				<input type="submit" name="addBtn" id="plc-btn" value="Add New" />
			</div>
            </form>
            
            <?php } ?>
            
            
            
            <?php
			
			function createIndex($structure)
			{
				
				$file = "indexdata.php";
				$structure = $structure."/index.php";
				$f = fopen($file,"r");
				$indexData = fread($f,filesize($file));
				$f = fopen($structure,"w");
				fwrite($f,$indexData);
			}
			
			
if(isset($_POST['addBtn']))
{
	$structure = "data/".$_POST['plc-btn-txt'];
	if(!file_exists($structure))
	{
	mkdir($structure,0777,true);
		$structure = "page/".$_POST['plc-btn-txt'];
	mkdir($structure,0777,true);
	createIndex($structure);
	}
	else
	echo "<script> alert('file already exist');</script>";
}

?>


<?php
if(isset($_POST['menu-btn-part2']))
{
	 function deleteDir($dirPath) {
    if (! is_dir($dirPath)) {
        throw new InvalidArgumentException("$dirPath must be a directory");
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}
deleteDir("page/".$_POST['menu-btn-part2-hidden']);
deleteDir("data/".$_POST['menu-btn-part2-hidden']);
}
?>


<?php
$log_directory = "page";	
$result_array = array();
if(is_dir($log_directory))
{
	if($handle = opendir($log_directory))
	{
		while(($file = readdir($handle))!== FALSE)
		{
			$result_array[] = $file;
		}
		closedir($handle);
	}
}

foreach($result_array as $file)
{
	if(($file !='..')&&($file != ".")&&($file != "index.php"))
	{
echo 	'<div class="menu-btn">
			<a href="page/'.$file.'">
				<div class="menu-btn-part1" id="1">
				&nbsp;'.$file.'
				</div>
			</a>';
				if(isset($_SESSION['admin_id']))
				{ $al = "'Are You Sure!!'";
				echo '<div class="menu-btn-part2">
				<form name="form" method="post">
				<input type="submit" value="X" name="menu-btn-part2" id="menu-btn-part2" onClick="return confirm('.$al.');">
				<input type="hidden" name="menu-btn-part2-hidden" value="'.$file.'">
				</form>
				</div>';
				}
			echo '</div>';	
	}
}

?>

	</div>


<!--End menu -->
</div>

<div class="my-bdy">






	<div class="my-home">
		
        <div class="home-left">
        	<div class="home-head">My logic circuit
			</div>
        	<img src="1.jpg" height="550" width="470" />
            <div class="home-left-desc">
            	<p>&nbsp;&nbsp;&nbsp;In electronics, a logic gate is an idealized or physical device implementing a Boolean function; that is, it performs a logical operation on one or more logical inputs, and produces a single logical output.
                </p>
			</div>
        <!-- left side of home end -->
        </div>
        <div class="home-right">
    
 	<?php 
	if(!isset($_SESSION['user_id']))
	{
		?> 
        
        
        <div class="user">

			<p>&nbsp;&nbsp;&nbsp;* Existing User</p>
            <div class="login-box">
            	<form name="form1" action="" method="post">
            		<div class="user-txt-box">
						<input type="email" id="user" name="user" placeholder="&nbsp; email address" />
					</div>
                    <div class="user-txt-box">
						<input  type="password" id="pass" name="pass" placeholder="&nbsp; Password"  />
					</div>
                    <div class="user-login-btn">
						<input type="submit"  id="login" name="login" value="Login" />
					</div>
            	</form>
            	<div class="user-forgot-pass">
					Forgot password?
				</div>
            <!--end login box -->
            </div>
            
			<div class="login-new-user-divider"></div>
      		<p>&nbsp;&nbsp;&nbsp;* New User</p>
            <div class="new-account-box">
            	<form name="form2" action="" method="post">
                	<div class="new-account-lebel">
						First Name
                    </div>
						<div class="user-txt-box">
							<input type="text" id="fname" name="fname" placeholder="First Neme" />
						</div>
					<div class="new-account-lebel">
						Last Name
                    </div>
						<div class="user-txt-box">
							<input type="text" id="lname" name="lname" placeholder="Last Neme" />
						</div>
					<div class="new-account-lebel">
						Email
                    </div>
						<div class="user-txt-box">
							<input type="text" id="new-email" name="new-email" placeholder="Email" />
						</div>
					<div class="new-account-lebel">
						Password
                    </div>
						<div class="user-txt-box">
							<input type="text" id="pass1" name="pass1" placeholder="Password" />
						</div>
					<div class="new-account-lebel">
						Confirm password
                    </div>
						<div class="user-txt-box">
							<input type="text" id="pass2" name="pass2" placeholder="Confirm Password" />
						</div>
                        <div class="new-account-checkbox">
							<input type="checkbox" id="agree" name="agree" />I agree the Terms and Conditions.
                        </div>
						<div class="new-account-btn">
							<input type="submit" id="submit" name="submit" value="Submit" />
						</div>
				</form>
            <!--New accout box end-->
            </div>
		</div>
        
        <?php  }
		else 
		{
			?>
           
           <div class="after-login">
           
           <div class="data-box">
           &nbsp;&nbsp;Name:&nbsp;<?php echo $_SESSION['user_fname']."&nbsp;".$_SESSION['user_lname']; ?>
           <br />
           &nbsp;&nbsp;Last login:
           <br />
           <br />
           <br />
           <br />
           <br />
           <br />
           <br />
           <center><a href="pass.php">Change Password</a></center>
           
           </div>
           <div class="ad-box">
           </div>
           
           </div> 
           
           
            
            <?php
		}
			
			?>
        
        
      <!-- Right side of home end -->
	</div>
	<div class="float-end"></div>
	<!-- my home end-->
</div>


<?php
if(isset($_POST['submit']))
{
	
	function activatin_mail($fname,$lname,$to)
	{
		$domain = preg_replae('/^www\./','',$_SERVER['HTTP_HOST']);
		 
	 $subject="Activation";
	 //message
	 $message='
	 <p>Hello '.$fname.' '.$lname.' -</p>
<p>Thank you for registering on <a href="http://'.$_SERVER['HTTP_HOST'].'">'.$_SERVER['HTTP_HOST'].'</a>. This is your last step in activating your account and is in place to protect your privacy.</p>
<p>If you made this request, please follow the instructions below. [Note: If you did not make this request please ignore this e-mail].</p>
<p>Please click the link below to confirm your registration.</p>
<p><a href="http://'.$_SERVER['HTTP_HOST'].'/outer/activate.php?cpc='.$change_pass_code.'&ac='.$activation.'">http://'.$_SERVER['HTTP_HOST'].'/outer/activate.php?cpc='.$change_pass_code.'&ac='.$activation.'</a></p>
<p>Thank you for visiting our website.</p>
<p>The Elogic Web Team</p>
<p>Elogic is commited to protecting your information security. For additional information, please review our complete privacy policy.</p>
<p>Please do not reply directly to this e-mail as it is not a monitored account.</p>
';
$header = 'MIME-Version: 1.0'."\r\n";
$header .= 'Content-type:text/html; charset=iso-8859-1'."\r\n";


//Additional headers
$header .='From:Web Team<web.team@'.$domain.'>'."\r\n";
$header .='Reply-To:Web Team<web.team@'.$domain.'>'."\r\n";
$header .='To:'.$to."\r\n";
$header .='X-Mailer:PHP/'.phpversion();
mail($to,$subject,$message,$header); 	
		
		
	}
	
	
	
  function insert($fname,$lname,$email,$pass,$createDate){
	require'dbconnect.php';
	$db = database_connect();
	$v = $db->prepare("INSERT INTO user (`fname`, `lname`, `email`, `pass`, `create_date`) VALUES (?,?,?,?,?)");
	$v->bindValue(1,$fname);
	$v->bindValue(2,$lname);
	$v->bindValue(3,$email);
	$v->bindValue(4,$pass);
	$v->bindValue(5,$createDate);
	$res=$v->execute();
	echo $res;	
	$db = NULL;
	}
		
		
insert($_POST['fname'],$_POST['lname'],$_POST['new-email'],$_POST['pass1'],"2015-05-10");	
activation_mail($_POST['fname'],$_POST['lname'],$_POST['new-email']);














	
exit();
}


?>

<?php
if(isset($_POST['login']))
{
	function login($user,$pass)
	{
	require'dbconnect.php';
	$db = database_connect();	
	$v = $db->prepare("SELECT * FROM `user` WHERE email = '".$user."'");
	$v->execute();
	$res = $v->fetch(PDO::FETCH_ASSOC);
	if($pass==$res['pass'])
	{
	$db=NULL;
	$_SESSION['user_fname']=$res['fname'];
	$_SESSION['user_lname']=$res['lname'];
	$_SESSION['user_email']=$res['email'];
	$_SESSION['user_id'] = "12345601512";
	
	header("location:index.php");	
	}
	
}

login($_POST['user'],$_POST['pass']);
exit();
}
?>

<!--End my body -->
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


<div class="bck">
<input type="button" id="close" value="X" />
<div class="aa">

It works....

</div>
</div>

<script type="text/javascript">
$('#close').click(function(){	
$('.bck').animate({
		top:'105%'},{easing:'swing',duration:900,complete:function(){$('.bck').hide(); $('.bck').css('top','-350px'); }});
	
	

	
});
$(document).ready(function(e) {
    

$('#1').click(function(){
	$('.bck').show();
	$('.bck').animate({
		top:'30%'},900);
});
});

</script>


<?php
session_write_close();
?>





</body>
</html>


