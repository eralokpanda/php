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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
		<title>Note</title>
		<link href="../css/rowline.css" rel="stylesheet">
<?php
include("common/include_file.html");
?>
	</head>
<?php
include("common/after_login_topbar.php");
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 ">
			<center>
				<a href="newnote.php"><button class ="btn btn-primary"type="button">Add New Note</button></a>
			</center>
    	</div>
    </div>
	<div class="row">
    &nbsp;
    </div>
</div>

<div class="container">
<div class="col-xs-12">
<?php
function clean_dec($text)
{
$text= str_replace("&slcn","<br />",$text);
$text= str_replace("&snglquot","'",$text);
$text= str_replace("&snglquot","'",$text);
return $text;
}
include("common/database_connect.php");
$query=mysql_query("select * from note_tab WHERE email='".$_SESSION['luser']."' ");
$i=1;
while(($sql=mysql_fetch_array($query))&&($i++))
{
$hd=$sql['head'];

$hd = clean_dec($hd);
?>
 <div class="<?php if(!((($i-1)%2))) echo "even"; else echo "odd";?>">
	<div class="container">
   		<div class="row">
        	<a href="show.php?val=<?php echo $sql['sl'];?>">
				<div class="col-xs-1">
					<?php  echo "*";?>
				</div>
				<div class="col-xs-9">
					<?php echo substr($hd,20);?>
				</div> 
			</a>
		</div>
	</div>
</div>
<?php
}
?>    
</div>
</div>  
</body>

</html>
