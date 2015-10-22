<?php
$query=mysqli_query($db,"SELECT * FROM `kids-game` WHERE sl_no='".$_GET['play']."'");
$sql=mysqli_fetch_array($query);
$game_code=$sql['link'];
?>



<div class="prt1">

<div class="gameframe">
<div class="miniclip-game-embed" data-game-name="<?php echo $sql['link'] ?>" data-theme="0" data-width="900" data-height="600" data-language="en">
</div>
</div>

<?php
if(!isset($_POST['load-comment']))
$l=0;
$q=mysqli_query($db,"SELECT * FROM `kids-game-comment` WHERE game_code='".$sql['link']."' ORDER BY sl_no DESC LIMIT ".$l.",10");
ob_start();
$views= $sql['views'];
$likenum=mysqli_num_rows(mysqli_query($db,"SELECT `like` FROM `like_unlike` WHERE page='kids-game'"));
?>


<div class="body-part1">
<div class="part1-left">

<div class="game-heading">
<?php 
echo substr($sql['name'],0,50);
if(strlen($sql['name'])>50)
echo "...";
?>

<div class="like-dislike-div">
<div class="prog-bar">
<progress value="55" max="100" id="prog" ></progress>
</div>

<div class="like-dislike-btn">
<div style="float:right; padding:5px; margin-top:5px;" id="unlike-posted"><?php echo 0; ?></div>

<div style="float:right; padding:5px; margin-top:5px;">
<img src="./young/game/unlike.png" height="30px" width="30px" id="unlike"  />
</div>

<div  style="float:right; padding:5px; margin-top:5px;" id="like-posted">
<?php echo $likenum; ?></div>
<div style="float:right; padding:5px;">
<img src="./young/game/like.png" height="30px" width="30px" id="like" />
</div>
<div style="clear:both"></div>

</div>

</div>
<div class="description">
<?php echo $sql['description']; ?>
</div>


<div class="comment-box">

<div class="comment-txt-box">
<form name="" method="post" action="">
  <textarea name="comment-text" id="comment-text"></textarea>
<input type="submit" name="comment" id="comment" value="Comment" <?php if(!isset($_SESSION['user']))echo 'disabled="disabled"';?> />
</form>
<div style="clear:both"></div>
</div>

<div class="user-comment-all">
<?php 
while($comment=mysqli_fetch_array($q))
{

$comm=$comment['comment'];
?>

<div class="user-comment-box">
<div class="user-img">
<img src="./common/icon/user.png" height="50" width="50" />
</div>
<div class="name-comment">
<div class="user-name"><?php echo $comment['fname']." ".$comment['lname']; ?></div>
<div class="user-comment"><?php echo $comm; ?><br />
</div>

</div>
<div style="clear:both"></div>
</div>

<?php }?>













</div>

<div class="load-comment">
<center>show more</center>
</div>

</div>






<!--left part -->
</div>
</div>

<div class="part1-right">


<?php 
$query=mysqli_query($db,"SELECT sl_no,link,name,views FROM `kids-game`  ORDER BY view_time DESC LIMIT 5 ");
while($sql=mysqli_fetch_array($query))
{
?>
<a href="./index.php?page=kids-game-play&play=<?php echo $sql['sl_no']; ?>">
<div class="list-game">
<div class="list-game-left">
<div style="height:60px; width:60px; margin-top:5px;">
<img src="./data/kids/game/cache/<?php echo $sql['link']; ?>.png" height="60px" width="60px" />
</div>
</div>
<div class="list-game-right">
<?php 
echo substr($sql['name'],0,50);
if(strlen($sql['name'])>50)
echo "...";
echo "<br />";
echo '<span style="font-size:12px; color:#999;">played: '.$sql["views"].'</span>';
?>
</div>
<div style="clear:both"></div>
</div>
</a>

<?php
}
?>



</div>




<div style="clear:both;"></div>
</div>

    <script>
$(document).ready(function() {
 $("#like").click(function() {   

var x='like='+1;

	    $.ajax({
		type:"POST",
		data:x,
		cache:false,
		url:"./kids/game/like-unlike-ajax.php",
		success: function(e){
			if(e)
			$("#like-posted").html(e)

			}
      
});
    });
 


});


</script>




<?php 
if(isset($_POST['comment'])&&(isset($_SESSION['user']))&&($_POST['comment-text']!=''))
{

	$comment = $_POST['comment-text'];
	
	
	$inst="INSERT INTO `kids-game-comment` (`fname`, `lname`, `user`, `comment`, `game_code`) VALUES ('".$_SESSION['fname']."', '".$_SESSION['lname']."', '".$_SESSION['user']."', '".$comment." ', '".$game_code."')";
	
	if(!mysqli_query($db,$inst))
	header("location:common/php/404.php");
}
?>




<?php
//Update time and date
$views += 1;
mysqli_query($db,"UPDATE `kids-game` SET view_time = '".date("Y/m/d H:i:s",time())."', views = '".$views."' WHERE sl_no='".$_GET['play']."'");
?>