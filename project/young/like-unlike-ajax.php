<?php 
session_start();
if(isset($_POST['like'])&&isset($_SESSION['user']))
{

	include("../common/php/dbconnect.php");
mysqli_query($db,"INSERT INTO `like_unlike` (`like`,`page`,`user`) VALUES ('1','young-video','".$_SESSION['user']."')");	

$sql=mysqli_num_rows(mysqli_query($db,"SELECT `like` FROM `like_unlike`"));	
	 echo $sql; 
	
}
session_write_close();
?>