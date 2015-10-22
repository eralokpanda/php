<?php
session_start();
if(!isset($_SESSION['id']))
header("location:home.php");
else
{
if(!isset($_SESSION['act']))
header("location:notactive.php");
}
?>
<html>
<head>
<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
<title>New note</title>
<?php
include("common/include_file.html");
?>
</head>

<?php
include("common/after_login_topbar.php");
include("common/database_connect.php");
?>




<form role="form" method="POST" action="">


<div class="container">
 <div class="row">
<div class="form-group col-lg-12 col-md-12 col-xs-12">
			<label for="name">Head</label> 
			<input class="form-control" name="head"  placeholder="Head line" type="text" required>
		</div>
 </div> 
 </div>

<div class="container">
	<div class="row">
		<div class="form-group col-lg-12 col-md-12 col-xs-12">
			<label for="name">Note</label> 
			<textarea class="form-control autoExpand" id="note"  rows="20" name="note" placeholder="Write your Note" required></textarea>
		</div>
	</div>
    </div>
 <div class="container">
 <div class="row">
  <div class="form-group col-lg-12 col-md-12 col-xs-12"> 
  <center>
 
 
 <button type="submit" name="submit" style="width:150"class="btn btn-primary">Save</button>
 
</center>

 
 </form>
 
</div>
 </div>
 </div>

 
 <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.autogrow-textarea.js"></script>
<script type="text/javascript">
$(function() {
   $('#note').autogrow();
});
	
$('#textMeetingAgenda').css('overflow', 'hidden').autogrow();
</script>


<?php

if(isset($_POST['submit']))
{
	$note=$_POST['note'];
	$hd=$_POST['head'];
	$date=date("Y-m-d");
	function clean($clr)
	{
		$clr= str_replace("&","&amp",$clr);
		$clr= str_replace("'","&snglquot",$clr);
		$clr= str_replace('"',"&quot",$clr);
		$clr= str_replace(" ","&nbsp",$clr);
		$clr=str_replace("\n","&slcn",$clr);
		$clr= str_replace("<","&lt",$clr);
		return $clr;
	}
	$note = clean($note);
	
	$hd = clean($hd);
	if(mysql_query("INSERT INTO `note_tab` (`email`,`head`, `note`, `date`) VALUES  ('".$_SESSION['luser']."','".$hd."','".$note."','".$date."')"))
		header("location:mynote.php");
	else
		echo "ERROR";
}
?>
</body>
</html>