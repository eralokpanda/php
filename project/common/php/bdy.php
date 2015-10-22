
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
include("./forgot.php");
else if($_GET['page']=='kids')
include("./kids/kids.php");
else if($_GET['page']=='changePass')
include("./changepass.php");








else if($_GET['page']=='kids-game')
include("./kids/game/kids-game.php");
else if(($_GET['page']=='kids-game-play')&&($_GET['play']!=''))
include("./kids/game/kids-game-play.php");
else if($_GET['page']=='kids-video')
include("./kids/video/kids-video.php");
else if(($_GET['page']=='kids-video-play')&&($_GET['play']!=''))
include("./kids/video/kids-video-play.php");
else if($_GET['page']=='kids-audio')
include("./kids/audio/kids-audio.php");
else if(($_GET['page']=='kids-audio-play')&&($_GET['gp-no']!=''))
include("./kids/audio/kids-audio-play.php");
else if(($_GET['page']=='kids-book')&&($_GET['no']!=''))
include("./kids/book/kids-book.php");







else if($_GET['page']=='young')
include("./young/young.php");





else if(($_GET['page']=='senior-game-play')&&($_GET['play']!=''))
include("./senior/game/senior-game-play.php");
else if($_GET['page']=='senior-video')
include("./senior/video/senior-video.php");
else if(($_GET['page']=='senior-video-play')&&($_GET['play']!=''))
include("./senior/video/senior-video-play.php");
else if($_GET['page']=='senior-audio')
include("./senior/audio/senior-audio.php");
else if(($_GET['page']=='senior-audio-play')&&($_GET['gp-no']!=''))
include("./senior/audio/senior-audio-play.php");
else if(($_GET['page']=='senior-book')&&($_GET['no']!=''))
include("./senior/book/senior-book.php");




else if($_GET['page']=='senior')
include("./senior/senior.php");
else if($_GET['page']=='young-game')
include("./young/game/young-game.php");
else if(($_GET['page']=='young-game-play')&&($_GET['play']!=''))
include("./young/game/young-game-play.php");
else if($_GET['page']=='young-video')
include("./young/video/young-video.php");
else if(($_GET['page']=='young-video-play')&&($_GET['play']!=''))
include("./young/video/young-video-play.php");
else if($_GET['page']=='young-image')
include("./young/image/image.php");
else if($_GET['page']=='young-audio')
include("./young/audio/young-audio.php");
else if(($_GET['page']=='young-audio-play')&&($_GET['gp-no']!=''))
include("./young/audio/young-audio-play.php");
else if(($_GET['page']=='young-book')&&($_GET['no']!=''))
include("./young/book/young-book.php");
else if($_GET['page']=='newaccount')
include("./newAccount.php");
else if($_GET['page']=='about')
include("./common/php/about.php");
else if($_GET['page']=='feedback')
include("./common/php/feedback.php");
else if($_GET['page']=='report')
include("./common/php/report.php");
else if($_GET['page']=='contact')
include("./common/php/contact.php");
else if($_GET['page']=='termsAndConditions')
include("./common/php/termsAndConditions.php");
else if($_GET['page']=='policy')
include("./common/php/policy.php");
else if($_GET['page']=='privacy')
include("./common/php/privacy.php");
else
header("location:./common/php/404.php")

?>






<!--My body End-->
</div>
</center>
</div>
