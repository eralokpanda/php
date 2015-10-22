<?php
session_start();
?>
<link href="body.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<link href="event.css" type="text/css" rel="stylesheet">
<body onLoad="fun();">

<center>
<div class="top-bar">
<div class="my-center">
<div class="logo">
<img src="img/logo.png" height="100" width="200">
</div>
<div class="time">

<embed src="http://www.yes-clock.com/Clocks/D-006.swf" width="200" height="80" wmode="transparent" type="application/x-shockwave-flash">

</div>

</div>
</div>
<div class="my-menubar">
<div class="my-center">
<a href="index.php">
<div class="menubar-btn" id="home">HOME
</div>
</a>
<a href="event.php">
<div class="menubar-btn" id="event">EVENT
</div>
</a>
<a href="gallery.php">
<div class="menubar-btn" id="gallery">GALLERY
</div>
</a>
<a href="registeration.php">
<div class="menubar-btn" id="registeration">REGISTERATION
</div>
</a>
<a href="contact.php">
<div class="menubar-btn" id="contact">CONTACT
</div>
</a>

<?php
if(isset($_SESSION['passkey']))
{
echo '<div class="log"><a href="logout.php">Logout</a></div>';
}
else
{
?>
<form name="pass-form1" method="post" action="" id="pass-form1">
<div class="pass-btn">
<input type="submit" name="enter" value="Enter" id="login">
</div>

<div class="passkey">
<input type="text" name="passkey" id="passkey" placeholder="Passkey">
</div>
</form>
<?php }?>

</div>
</div>



<div class="my-body" style="padding-top:20px; padding-bottom:20px;">
<div class="event-list">
<ol>
<li>hello</li>
<li>hello</li>
<li>hello</li>
<li>hello</li>
<li>hello</li>
<li>hello</li>
</ol>

</div>


</div>
<!--My-body end-->

<div class="footer">

</div>



</center>
</body>

<script>
function fun(){
 $("#event").css("background-color","rgba(255,255,255,.3)");
}
</script>