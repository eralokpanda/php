<?php
ob_start();

?>
<?php
if(isset($_POST['delete']))
{
mysqli_query($db,"DELETE from member WHERE email='".$_POST['email']."'");	
}

if(isset($_POST['account']))
{
mysqli_query($db,"UPDATE `member` SET permission='".$_POST['account']."' WHERE email='".$_POST['email']."'");	
}
?>
<?php
if(isset($_POST['del-mul']))
{
	foreach($_POST['mark'] as $v)
	{
	mysqli_query($db,"DELETE from member WHERE email = '".$v."'");	
	}
	
	
	
}
?>
<title>Views all member</title>
<link href="css/view-bdy.css" type="text/css" rel="stylesheet" />

<center>
<form method="post" action="">
<div class="body-part1">
<!--Part1 start-->
<table border="1" align="center">
  <tr align="center">
    <td width="70">Sl no.</td>
    <td width="120">Name</td>
    <td width="250">email</td>
    <td width="150">mobile</td>
    <td width="120">Activation</td>
    <td width="80">Delete</td>
    <td width="80">Account</td>
  </tr>
  </table>
  <table border="0">
  <tr>
    <td width="70">&nbsp;</td>
  </tr>
  </table>

<?php
$i=0;
$no= 50*($_GET['no']-1);
$query=mysqli_query($db,"SELECT * from member LIMIT ".$no.",50");
while($sql=mysqli_fetch_array($query))
{
	$i+=1;
	if($sql['permission']=='active') 
	$account="Block";
	else
	$account="active";     
                                       	
	?>
<table  border="0">
  <tr align="center">
   
 
    <td width="70">
    <input type="checkbox" name="mark[]" id="mark" value="<?php echo $sql['email']; ?>" />
	<?php echo $i; ?></td>
   <td width="120">
   <a href="index.php?page=details&email=<?php echo $sql['email'] ?>">
   <?php echo $sql['fname']." ".$sql['lname']; ?></a></td>
    <td width="250">
    <a href="index.php?page=details&email=<?php echo $sql['email'] ?>">
	<?php echo $sql['email'] ?></a></td>
    <td width="150">
    <a href="index.php?page=details&email=<?php echo $sql['email'] ?>">
	<?php echo $sql['mobile'] ?></a></td>
    <td width="120">
    <a href="index.php?page=details&email=<?php echo $sql['email'] ?>">
	<?php if($sql['activation']=="activated") echo "Activated"; else ?></a></td>
    <td width="80"><form  method="post">
    <input type="submit" name="delete" id="delete" value="Delete" />
     <input type="hidden" name="email" value="<?php echo $sql['email'] ?>" />
     
     </form></td>
    <td width="80"><form  method="post">
    <input type="submit" name="account" id="account" value="<?php echo $account; ?>" />
     <input type="hidden" name="email" value="<?php echo $sql['email']; ?>" />
     </form>
    
    </td>
  </tr>
</table>
<hr style="width:900px;" />
<?php	
}
?>








<!-- part1 end -->
</div>

<div class="body-part2">
<input type="submit" name="del-mul" id="del-mul" value="Delete" onclick="return confirm();" />&nbsp;&nbsp; 
<input type="submit" name="mail" id="mail" value="E-mail"  />
</div>
</form>

<div class="body-part3">
<?php 
$pg= 50*($_GET['no']-1);
if($_GET['no']>1)
echo '<a href="index.php?page=view&no='.($_GET['no']-1).'">Previous</a>';
echo "&nbsp;&nbsp;&nbsp;";
$next=mysqli_num_rows(mysqli_query($db,"SELECT `sl_no` from member LIMIT ".($pg+51).",50"));
if($next != 0)
echo '<a href="index.php?page=view&no='.($_GET['no']+1).'">Next</a>';
?>
</div>


</center>

<?php
if(isset($_POST['mail']))
{
	foreach($_POST['mark'] as $v)
	{
	$_SESSION['mail-addresses'] .=$v.",";
	}
	$_SESSION['mail-addresses']=trim($_SESSION['mail-addresses'],",");
	header("location:index.php?page=mail");
}

?>
