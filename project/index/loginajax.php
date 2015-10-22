<?PHP
session_write_close();
session_start();

if(isset($_SESSION['user'])||((isset($_POST['user'])&&($_POST['user']!=''))&&(isset($_POST['pass'])&&($_POST['pass']!=''))))
{
	
	
if(isset($_POST['user']))
{	
include("../common/php/dbconnect.php");
$query=mysqli_query($db,"SELECT * from member where user ='".$_POST['user']."'");
$sql=mysqli_fetch_array($query);
if(($_POST['pass']==$sql['pass'])&&($sql['permission']=='active'))
{
$_SESSION['user']=$_POST['user'];
$_SESSION['fname']=$sql['fname'];
$_SESSION['lname']=$sql['lname'];
$_SESSION['acc_create']=substr($sql['acc_create'],0,10);
}
}


if(isset($_SESSION['user']))
{
 echo '<div style="padding-left:20px; margin-top:80px;" align="left">
      Name: '.$_SESSION['fname'].'&nbsp;'.$_SESSION['lname'].'<br />
       Account created: '.$_SESSION['acc_create'].'
       </div>
            <div style="margin-top:20px;">
      <center><a href="./index.php?page=ChangePass">change password</a></center>
      </div>                   
      <div style="margin-top:40px;">
      <center><a href="logout.php">Logout</a></center>
      </div>'; 
}
}

		