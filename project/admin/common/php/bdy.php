<link href="bdy.css" type="text/css" rel="stylesheet" />
<body>
<div class="total-body">
<center>
<div class="my-body">
<!--My body Start-->



<?php 
if($_GET['page']=='about')
include("./common/php/about.php");
else if($_GET['page']=='report')
include("./common/php/report.php");
else if($_GET['page']=='report')
include("./common/php/report.php");
else if($_GET['page']=='feedback')
include("./common/php/feedback.php");
else if($_GET['page']=='contact')
include("./common/php/contact.php");
else if($_GET['page']=='privacy')
include("./common/php/privacy.php");
else if($_GET['page']=='policy')
include("./common/php/policy.php");
else if($_GET['page']=='termsAndConditions')
include("./common/php/termsAndConditions.php");
else if(isset($_SESSION['admin']))

{
	
	
	
	if($_GET['page']=='')
header("location:logout.php");
else if($_GET['page']=='home')
include("home.php");
else if($_GET['page']=='changepass')
include("changepass.php");
else if(($_GET['page']=='view')&&($_GET['no']>=1))
include("view.php");
else if(($_GET['page']=='details')&&($_GET['email']!=''))
include("details.php");
else if($_GET['page']=='mail')
include("mail.php");
else if($_GET['page']=='upload-video')
include("upload-video.php");
else if($_GET['page']=='upload-audio')
include("upload-audio.php");
else if($_GET['page']=='upload-game')
include("upload-game.php");
else if($_GET['page']=='upload-book')
include("upload-book.php");
else if($_GET['page']=='upload-latest')
include("upload-latest.php");
else if(($_GET['page']=='del-video')&&($_GET['no']>=1))
include("del-video.php");
else if($_GET['page']=='del-audio')
include("del-audio.php");
else if($_GET['page']=='del-game')
include("del-game.php");
else if($_GET['page']=='del-book')
include("del-book.php");
else if($_GET['page']=='del-latest')
include("del-latest.php");
else
header("location:index.php?page=home");


}
else
{
	if($_GET['page']!='login')
	header("location:index.php?page=login");
include("login.php");
}

?>






<!--My body End-->
</div>
</center>
</div>
</body>