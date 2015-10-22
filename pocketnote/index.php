<?php 
require_once 'mob/Mobile_Detect.php';
$detect = new Mobile_Detect;
if( $detect->isMobile() || $detect->isTablet() )
{
header("location:mobile/home.php");
}
else
header("location:pc/home.php");
?>