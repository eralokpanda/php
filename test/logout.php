<?php
session_start();
$_SESSION['passkey']='';
$_SESSION['name']='';
session_destroy();
header("location:index.php");
?>