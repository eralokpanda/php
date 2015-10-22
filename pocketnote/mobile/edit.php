<?php
session_start();
if(!isset($_SESSION['id']))
header("location:home.php");
?>
<!DCOTYPE html><head>
<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
		<title>**EDIT**</title>
	<?php
include("common/include_file.html");
?>
	</head>
<?php
include("common/after_login_topbar.php");
include("common/database_connect.php");
if(!isset($_GET['val']))
header("location:error.php");
$var=$_GET['val'];
$query=mysql_query("select * from note_tab WHERE sl='".$var."' ");
$sql=mysql_fetch_array($query);
$nt=$sql['note'];
$hd=$sql['head'];
$email=$sql['email'];
function clean_dec($text)
{
	$text= str_replace("&slcn","\n",$text);
	$text= str_replace("&snglquot","'",$text);
	$text= str_replace("&snglquot","'",$text);
	$text= str_replace("&nbsp"," ",$text);
	return $text;
}
$hd=clean_dec($hd);
$nt=clean_dec($nt);

function clean($note)
{
	$note= str_replace("&","&amp",$note);
	$note= str_replace("'","&snglquot",$note);
	$note= str_replace('"',"&quot",$note);
	$note= str_replace(" ","&nbsp",$note);
	$note=str_replace("\n","&slcn",$note);
	$note= str_replace("<","&lt",$note);
	return $note;
}
if($email==$_SESSION['luser'])
{
?>

	<div class="container">
	<form role="form" method="post" action="">
		<div class="row">
			<div class="form-group col-lg-12 col-md-12 col-xs-12">
				<label for="name">Head</label> 
				<input class="form-control" name="head"  value="<?php echo $hd;?>" type="text" >
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-12 col-md-12 col-xs-12">
				<label for="name">Note</label> 
				<textarea class="form-control"rows="10" id="note" name="note"><?php echo $nt;?></textarea>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-12 col-md-12 col-xs-12" align="center">
				<button type="submit" name="submit" style="width:120" class="btn btn-primary">Save</button>
			</div>
		</div>
	</form>
 </div>
 
  
 <script type="text/javascript" src="../bootstrap/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/jquery.autogrow-textarea.js"></script>
<script type="text/javascript">
$(function() {
   $('#note').autogrow();
});
	
$('#textMeetingAgenda').css('overflow', 'hidden').autogrow();
</script>
<?php
}
if(isset($_POST['submit']))
{
	$hd=$_POST['head'];
	$nt=$_POST['note'];
	$hd = clean($hd);
	$nt = clean($nt);

	if(mysql_query("UPDATE `note_tab` SET `head` = '".$hd."', `note` = '".$nt."' WHERE `note_tab`.`sl` = '".$var."'"))
		header("location:show.php?val=$var");
	else
		echo "ERROR";
}
?>
</body>

</html>