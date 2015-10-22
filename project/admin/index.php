<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="./common/icon/favicon.ico" rel="shortcut icon" />
<link href="./css/header.css" type="text/css" rel="stylesheet" />
<link href="./css/footer.css" type="text/css" rel="stylesheet" />
<link href="./css/bdy.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="./common/js/jquery.js"></script>
</head>

<body>
<div>
<?php
session_start();
include("./common/php/header.php");
include("./common/php/dbconnect.php");
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