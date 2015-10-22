<?php
ob_start();
if(($_GET['page']!= 'young-video')||(!isset($_GET['no'])))
header("location:index.php?page=young-video&no=1");
?>



<center>
<div class="book-body">


<?php
$j=1;




$i=25*($_GET['no']-1);
if($_GET['no']>0)
{
$query=mysqli_query($db,"SELECT * FROM `young-video`ORDER BY sl_no DESC limit ".$i.",25");

while($sql=mysqli_fetch_array($query))
{	
?>
<a href="index.php?page=young-video-play&play=<?php echo $sql['sl_no'] ?>">
<div class="my-book1">

<img src="http://img.youtube.com/vi/<?php echo $sql['link']; ?>/default.jpg" width="170" height="95" style="margin-top:10px;"/>

<div style=" margin-top:5px; font-size:16px;">

<?php
echo substr($sql['name'],0,17);
if(strlen($sql['name'])>17)
echo "...";
?>
</div>
</div>
</a>
<?php
if($j%5==0)
echo '<div style="clear:both;"></div>';
$j=$j+1;
}
echo '<div style="clear:both;"></div>';
}
?>









</div>
</center>
<div class="next-page">
<?php
if($_GET['no']>1)
{
?>
<a href="index.php?page=young-video&no=<?php echo $_GET['no']-1;?>">
<img src="./young/book/left.png" width="40px" height="40px" />
</a>

<?php 
}
else
echo '<img src="./young/book/left.png" width="40px" height="40px" />';
$next=mysqli_num_rows(mysqli_query($db,"SELECT * FROM `young-video`ORDER BY sl_no DESC limit ".($i+26).",1"));
if($next != 0)
{
?>
<a href="index.php?page=young-video&no=<?php echo $_GET['no']+1;?>">
<img src="./young/book/right.png" width="40px" height="40px" />
</a>
<?php
}
else
echo '<img src="./young/book/right.png" width="40px" height="40px" />';
?>


