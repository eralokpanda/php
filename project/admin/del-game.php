

<?php
ob_start();
if((!isset($_GET['no']))||($_GET['no']<1))
header("location:index.php?page=del-game&no=1");


 if(isset($_POST['young']))
 {
$_SESSION['del-game-zone']="young-game";
 }
else if((!isset($_SESSION['del-game-zone']))||(isset($_POST['kids'])))
{
$_SESSION['del-game-zone']="kids-game";
}
?>

<?php
if(isset($_POST['del-mul']))
{if($_SESSION['del-game-zone']=="young-game")
 $zo="young";
 else
 $zo="kids";
	
	foreach($_POST['mark'] as $v)
	{
		
		unlink("../data/".$zo."/game/cache/".$v.".png");
	mysqli_query($db,"DELETE from `".$_SESSION['del-game-zone']."` WHERE link = '".$v."'");	
	}
	
	
	
}
?>

<center>

<div style="margin-top:50px; margin-bottom:50px;">
<div style="margin-bottom:20px;">
<form name="" method="post">
<input type="submit" name="kids" value="Kids" />
<input type="submit" name="young" value="Young" />
</form>
</div>
<!--Part1 start-->
<form method="post" action="">

<table width="931" border="1" align="center">
  <tr align="center">
    <td width="73">#</td>
    <td width="692">Name</td>
    <td width="144">Added Date</td>

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
$query=mysqli_query($db,"SELECT * from `".$_SESSION['del-game-zone']."` LIMIT ".$no.",50");
while($sql=mysqli_fetch_array($query))
{
	$i+=1;    
                                       	
	?>



<table width="931" border="0" align="center">
  <tr align="center">
    <td width="73">
    <input type="checkbox" name="mark[]" id="mark" value="<?php echo $sql['link']; ?>" />
	<?php echo $i; ?></td>
    <td width="692"><?php echo $sql['name']; ?></td>
    <td width="144"><?php echo $sql['add_date']; ?></td>

  </tr>
  </table>




<hr style="width:900px;" />
<?php	
}
?>






<div class="body-part2">
<input type="submit" name="del-mul" id="del-mul" value="Delete" onclick="return confirm();" />&nbsp;&nbsp; 
</div>
</form>
<!-- part1 end -->
</div>





<div class="body-part3">
<?php 
$pg= 50*($_GET['no']-1);
if($_GET['no']>1)
echo '<a href="index.php?page=del-game&no='.($_GET['no']-1).'">Previous</a>';
echo "&nbsp;&nbsp;&nbsp;";
$next=mysqli_num_rows(mysqli_query($db,"SELECT `sl_no` from `".$_SESSION['del-game-zone']."` LIMIT ".($pg+51).",50"));
if($next != 0)
echo '<a href="index.php?page=del-game&no='.($_GET['no']+1).'">Next</a>';
?>
</div>

</center>


