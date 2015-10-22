
<style>
.img{
	margin-top:50px;
}
.des{
	margin-top:30px;
	margin-bottom:30px;
	width:800px;
}
.music{
	margin-bottom:50px;
}
</style>

<div class="img">
<img src="./data/young/audio/image/<?php echo $_GET['gp-no'];  ?>.jpg" width="1000" height="400" />

</div>

<div class="des" align="left">
<?php 

$q=mysqli_query($db,"SELECT * FROM `young-audio` WHERE group_no = '".$_GET['gp-no']."'");
$sql = mysqli_fetch_array($q);

echo $sql['description'];

 ?>
</div>
<div class="music">
<?php
$i=0;
$q=mysqli_query($db,"SELECT * FROM `young-audio` WHERE group_no = '".$_GET['gp-no']."'");
while($sql = mysqli_fetch_array($q))
{
	$i += 1;
?>

<table border="0">
  <tr>
    <td width="10px;"><?php echo $i."."; ?></td>
    <td width="400px;"><?php echo $sql['name']; ?></td>
    <td width="300px"><audio src="./data/young/audio/<?php echo $sql['code'] ?>.mp3" controls="controls">
</audio></td>
    <td width="100px;"><a href="./data/young/audio/<?php echo $sql['code'] ?>.mp3">Download</a></td>
  </tr>
</table>
<?php
}
?>


</div>