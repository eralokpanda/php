<link href="body.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<link href="registeration.css" type="text/css" rel="stylesheet">
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

<div class="pass-btn">
<input type="button" name="login" value="Enter" id="login">

</div>
<div class="passkey">
<input type="text" name="passkey" id="passkey" placeholder="Passkey">

</div>

</div>
</div>



<div class="my-body" style="padding-top:20px; padding-bottom:20px;">
<div class="registeration-form">

<form name="form" method="post" action="">


<table width="590" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="188" height="49" align="right" scope="row">Name</th>
    <td width="18">&nbsp;</td>
    <td width="384"><input type="text" name="name" id="name"></td>
  </tr>
  <tr>
    <th height="49"  align="right" scope="row">Gender</th>
    <td>&nbsp;</td>
    <td><select name="gender" id="gender">
      <option value="0" selected>--Select--</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select></td>
  </tr>
  <tr>
    <th scope="row" height="49" align="right">Mobile No.</th>
    <td>&nbsp;</td>
    <td><input type="text" name="mobile" id="mobile"></td>
  </tr>
  <tr>
    <th scope="row" height="49" align="right">E-mail</th>
    <td>&nbsp;</td>
    <td><input type="email" name="email" id="email"></td>
  </tr>
  <tr>
    <th scope="row" height="49" align="right">Registeration no.</th>
    <td>&nbsp;</td>
    <td><input type="text" name="regd_no" id="regn_no"></td>
  </tr>
  <tr>
    <th scope="row" height="49" align="right">Branch</th>
    <td>&nbsp;</td>
    <td><select name="branch" id="branch">
      <option value="0" selected>--Select--</option>
      <option value="cse">CSE</option>
      <option value="it">IT</option>
    </select></td>
  </tr>
  <tr>
    <th scope="row" height="49" align="right">Year</th>
    <td>&nbsp;</td>
    <td><select name="year" id="year">
      <option value="0" selected>--Select--</option>
      <option value="1st Year">1st Year</option>
      <option value="2nd Year">2nd Year</option>
      <option value="3rd Year">3rd Year</option>
    </select></td>
  </tr>
  <tr>
    <th scope="row" height="49" align="right">Passkey</th>
    <td>&nbsp;</td>
    <td><input type="text" name="passkey2" id="passkey2"></td>
  </tr>
  <tr>
    <th scope="row" height="49" align="right">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row" height="49" align="right">&nbsp;</th>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" id="submit" value="Submit"></td>
  </tr>
</table>

</form>


</div>
<!--My-body end-->
</div>
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
 $("#registeration").css("background-color","rgba(255,255,255,.3)");
}
</script>


<?php
if(isset($_POST['submit']))
{
	include("db_connect.php");
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$regd=$_POST['regd_no'];
	$branch=$_POST['branch'];
	$year=$_POST['year'];
	$passkey=$_POST['passkey2'];
	
	if(($name=="")&&($gender=="0")&&($mobile=="")&&($email=="")&&($regd=="")&&($branch=="0")&&($year=="0")&&($passkey==""))
	echo '<script>alert("Please enter correct data");</script>';
	else
	{
	
	$query=mysql_query("SELECT passkey FROM student WHERE passkey='".$passkey."'");
	$data=mysql_fetch_array($query);
	if($passkey==$data['passkey'])
	{
		echo '<script>alert("Please enter a unique passkey");<script>';
	}
	else
	{
	$query=mysql_query("SELECT regd FROM student WHERE regd='".$regd."'");
	$data=mysql_fetch_array($query);
	if($regd==$data['regd'])
	{
		echo '<script>alert("you are already registread with us.");</script>';
	}
	else
	{
	$sql="INSERT INTO `student` (`name`,`gender`,`mobile`,`email`,`regd`,`branch`,`year`,`passkey`) VALUES ('".$name."','".$gender."','".$mobile."','".$email."','".$regd."','".$branch."','".$year."','".$passkey."')";
	if(mysql_query($sql))
	echo '<script>alert("Successful");</script>';
	else
	echo '<script>alert("Unsuccessful");</script>';	
	}
	}
	}
}

?>