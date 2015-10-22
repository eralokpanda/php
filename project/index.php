<?php
session_start();
include("./common/php/dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link href="./common/icon/favicon.ico" rel="shortcut icon" />
<link href="./common/css/header.css" rel="stylesheet" />
<link href="./common/css/footer.css" rel="stylesheet" />
<link href="./common/css/bdy.css" rel="stylesheet" />
<script src="./common/js/jquery.js"></script>
<?php 
$query=mysqli_query($db,"SELECT `title`,`css`,`js` FROM `page_data` WHERE page_name = '".$_GET['page']."'");
while($sql=mysqli_fetch_array($query))
{
	if($sql['css']!="")
	echo $sql['css']."\n";
	if($sql['js']!="")
	echo $sql['js']."\n";
}

$sql=mysqli_fetch_array(mysqli_query($db,"SELECT `title` FROM `page_data` WHERE page_name = '".$_GET['page']."'"));              
 echo $sql['title']."\n";
?>
</head>

<body>
<div>
<?php
include("./common/php/header.php");
?>
</div>
<div>
<?php
include("./common/php/bdy.php");
?>
</div>
<div>
<?php
include("./common/php/footer.php");
?>
</div>
</body>
</html>