<style type="text/css">
.success{
	height:30px;
	background-color:rgba(0,153,0,.1);
	border:dotted #0D0 1px;
	width:400px;
	color:#0D0; 
	font-size:20px;
	margin-top:50px;
	line-height:30px;
	margin-bottom:40px;
}
.failure{
	height:30px;
	background-color:rgba(153,0,0,.1);
	border:dotted #D00 1px;
	width:400px;
	color:#D00; 
	font-size:20px;
	margin-top:50px;
	line-height:30px;
	margin-bottom:40px;
	
}
.yellow{
	height:30px;
	background-color:rgba(255,153,0,.1);
	border:dotted #FC0 1px;
	width:600px;
	color:#FC0; 
	font-size:20px;
	margin-top:50px;
	line-height:30px;
	margin-bottom:40px;
}

</style> 


<div style="margin-bottom:50px; margin-top:50px;">
<?php
if(isset($_POST['submit']))
{
	if(isset($_POST['name'])&&($_POST['name']!='')&&isset($_POST['url'])&&($_POST['url']!='')&&($_POST['zone']!='select') )
	{
		
		$url= substr(strrchr($_POST['url'],'='),1);
		if($_POST['zone']=="kids")
	{
	if(mysqli_query($db,"INSERT INTO `kids-video` (`name`, `link`, `description`) VALUES ('".$_POST['name']."', '".$url."', '".$_POST['description']."')"))
	echo '<center><div class="success">Successfully Uploaded</div></center>';
	}
	else if($_POST['zone']=="young")
	{
	if(mysqli_query($db,"INSERT INTO `young-video` (`name`, `link`, `description`) VALUES ('".$_POST['name']."', '".$url."', '".$_POST['description']."')"))
	echo '<center><div class="success">Successfully Uploaded</div></center>';
	}
	else 
	{
	if(mysqli_query($db,"INSERT INTO `senior-video` (`name`, `link`, `description`) VALUES ('".$_POST['name']."', '".$url."', '".$_POST['description']."')"))
	echo '<center><div class="success">Successfully Uploaded</div></center>';
	}
	}
	else
	echo '<center><div class="yellow">Please fill-up all the data correctly</div></center>';
}
?>



<form action="" method="post">

<table width="574" border="0">
  <tr>
    <td>Name</td>
    <td>&nbsp;</td>
    <td><input name="name" type="text" size="80" required></td>
  </tr>
  <tr>
    <td>Url</td>
    <td>&nbsp;</td>
    <td><input name="url" type="text" size="80" required></td>
  </tr>

  <tr>
    <td>Description</td>
    <td>&nbsp;</td>
    <td><textarea name="description" cols="80" rows="20" required></textarea></td>
  </tr>
  <tr>
    <td>Zone</td>
    <td>&nbsp;</td>
    <td><select name="zone">
      <option value="select" selected>--Select--</option>
      <option value="kids">Kids</option>
      <option value="young">Young</option>
      <option value="senior">Senior</option>
      &nbsp;</select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" id="submit" value="Submit"></td>
  </tr>
</table>

</form>
</div>