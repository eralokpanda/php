<?php
session_start();
include("db_connect.php");
ob_start();
?>


<link href="body2.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>

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


<div class="my-body">
<div class="sutter">
<div class="inner-sutter">
<div class="part1">
<div class="notice">
<div class="head" style="background-color:#FF0000; border-radius:0 20px 0 0; color:#3399FF; ">NOTICE</div>
<div class="notice-inner">
<marquee direction="up" scrolldelay="1" scrollamount="2">
<?php
$i=0;
$query=mysql_query("SELECT `notice` FROM `notice` order by `sl_no` DESC");
while($data=mysql_fetch_array($query))
{
$i++;
echo "<p>".$i.".&nbsp;&nbsp;&nbsp;".$data['notice']."</p>";
}
?>
</marquee>

</div>
</div>

<div class="quote1">
<div class="quote1-inner">
<p style="margin-top:100px;">&quot;It can be argued that the computer is humanity&rsquo;s attempt to replicate the human brain. This is perhaps an unattainable goal. However, unattainable goals often lead to outstanding accomplishment.&quot;</p>
</div>
</div>

</div>










<div style=" height:1px; top:-130px; position:relative; width:1200px; margin-top:20px; z-index:99;">
<img src="img/trojan1.png" height="140px" width="140px" id="trojan1">
<script type="text/javascript">
var a=1;
$(document).ready(function(){
	setInterval(function()
{
	if(a==1)
$("#trojan1").attr("src","img/trojan2.png");
	else if(a==2)
$("#trojan1").attr("src","img/trojan3.png")
	else if(a==3)
$("#trojan1").attr("src","img/trojan4.png")
	if(a==4)
$("#trojan1").attr("src","img/trojan5.png");
	else if(a==5)
$("#trojan1").attr("src","img/trojan6.png")
	else if(a==6)
$("#trojan1").attr("src","img/trojan7.png")
	if(a==7)
$("#trojan1").attr("src","img/trojan8.png");
	else if(a==8)
$("#trojan1").attr("src","img/trojan9.png")
	else if(a==9)
	{
		a=1;
$("#trojan1").attr("src","img/trojan1.png")
	}
	a++;
},300);


});

</script>
</div>













<div class="part2">

<div class="quote2">
<div class="quote2-inner">
<p style="margin-top:100px;">&quot;It can be argued that the computer is humanity&rsquo;s attempt to replicate the human brain. This is perhaps an unattainable goal. However, unattainable goals often lead to outstanding accomplishment.&quot;</p>
</div>
</div>

<div class="quiz">
<div class="head" style="background-color:#090; border-radius:20px 0 0 0; color:#3399FF">QUIZ</div>
<div class="quiz-inner">
<div class="quiz-question">
<?php

$sql=mysql_query("SELECT `quiz` FROM `quiz` WHERE `sl_no`= 4");
while($quiz=mysql_fetch_array($sql))
{
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$quiz['quiz'];
}
?>
</div>
<div class="quiz-ans">
<textarea name="quiz-ans" id="quiz-ans" cols="40" rows="5"></textarea>
</div>
<?php
if(isset($_SESSION['passkey']))
{
echo '<input type="submit" name="submit" id="submit" value="Submit">';
}
else
{
echo '<input type="submit" name="submit" id="submit" value="Submit" disabled>';	
}
?>
<div style="float:left; color:#FF0000; padding-top:20px;">
plz enter the passkey to submit the ans.
</div>
</div>
</div>



</div>
<div class="other">




<div style="height:50px; background-color:#00FF33;" id="test">
<div style="height:50px; background-color:#FF0000; width:0px; float:left;" id="colo">
</div>
</div>

<script>
var i=0;
var j=0;
$("#test").mouseover(function(e) {
	j=1;
	var x=setInterval(function(){
		if((i>=1200)||(j==0))
	clearInterval(x);
	$("#colo").css("width",i);


			i+=1;
		
	},1)


});
$("#test").mouseout(function(e) {
	j=0;
	var y=setInterval(function(){
		if((i<=0)||(j==1))
	clearInterval(y);
	$("#colo").css("width",i);


			i-=1;
		
	},1)


});
</script>






</div>
<!--Other End-->
</div>
</div>
</div>
<!--My-body end-->

<div class="footer">
<div class="my-center">
<div class="fb-btn">
<div class="fb-like" data-href="https://www.facebook.com/cebtrojan5.0" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</div>
</div>
</div>



</center>
</body>

<script>
function fun(){
 $("#home").css("background-color","rgba(255,255,255,.3)");
}
</script>

<script>
var i=1;
$(".quote1-inner p").mouseover(function(e) {

	var x=setInterval(function(){
		if(i>=6)
		{
			clearInterval(x);
		}
		else if((i==2)||(i==4))
		{
	$(".quote1-inner").css("margin-left",10);
		}
		else
		{
				$(".quote1-inner").css("margin-left",0);
		}
		
			i+=1;
		
	},50)


});
$(".quote2-inner p").mouseover(function(e) {

	var x=setInterval(function(){
		if(i>=6)
		{
			clearInterval(x);
		}
		else if((i==2)||(i==4))
		{
	$(".quote2-inner").css("margin-right",10);
		}
		else
		{
				$(".quote2-inner").css("margin-right",0);
		}
		
			i+=1;
		
	},50)


});
$(".quote1-inner").mouseout(function(e) {
i=1;
clearInterval(x);
});
$(".quote2-inner").mouseout(function(e) {
i=1;
clearInterval(x);
});
</script>



<script>
$(document).ready(function(e) {
	var w=0;
	var inr_w=-1500;
    	var x=setInterval(function(){
		if(w==1500)
		{
			clearInterval(x);
		}
		$(".inner-sutter").css("margin-top",inr_w);
		$(".sutter").css("height",w);
			w+=5;
		inr_w+=5;
	},1)
});


</script>


<?php
if(isset($_POST["enter"]))
{
$passkey=$_POST["passkey"];
if($passkey=='')
echo '<script>alert("Please enter the correct passkey.");</script>';
else
{
$query=mysql_query("SELECT `passkey` FROM `student` WHERE passkey='".$passkey."'");
$data=mysql_fetch_array($query);
if($data['passkey']==$passkey)
{
$_SESSION['passkey']=$passkey;
$_SESSION['name']=$data['name'];
header("location:index.php");
}
else
{
echo '<script>alert("Please check the passkey and try again.");</script>';	
}
}
}

?>