
<div class="total-body">
<center>
<div class="my-body">
<!--My body Start-->



<?php 

if($_GET['page']=='')
header("location:index.php?page=home");
else if($_GET['page']=='login')
include("./login.php");
else if($_GET['page']=='home')
include("home.php");
else if($_GET['page']=='forgot')
include("./forgot/forgot.php");
else if($_GET['page']=='reset')
include("./forgot/reset.php");
else if($_GET['page']=='kids')
include("./kids/kids.php");
else if($_GET['page']=='young')
include("./young/young.php");
else if($_GET['page']=='senior')
include("./senior/senior.php");
else if($_GET['page']=='young-game')
include("./young/game/game.php");
else if($_GET['page']=='young-video')
include("./young/video/young-video.php");
else if(($_GET['page']=='young-video-play')&&($_GET['play']!=''))
include("./young/video/young-video-play.php");
else if($_GET['page']=='young-image')
include("./young/image/image.php");
else if($_GET['page']=='young-audio')
include("./young/audio/young-audio.php");
else if(($_GET['page']=='young-book')&&($_GET['no']!=''))
include("./young/book/young-book.php");
else if($_GET['page']=='newaccount')
include("./newAccount/newAccount.php");
else if($_GET['page']=='about')
include("./about.php");
else if($_GET['page']=='feedback')
include("./feedback.php");
else if($_GET['page']=='report')
include("./report.php");
else if($_GET['page']=='contact')
include("./contact.php");
else
header("location:./common/php/404.php")

?>






<!--My body End-->
</div>
</center>
</div>
