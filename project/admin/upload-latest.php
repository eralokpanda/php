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
	if(isset($_POST['name'])&&($_POST['name']!='')&&($_POST['zone']!='select') )
	{
	
	$code=substr($_POST['name'],0,15)."_".mt_rand(0,99);
	
	
	
   define ("FILEREPOSITORY","../data/".$_POST['zone']."/latest and icon/");

   if (is_uploaded_file($_FILES['img']['tmp_name'])) 
   {

	    {
         $name = $code;
         if(move_uploaded_file($_FILES['img']['tmp_name'], FILEREPOSITORY."/$name.jpg"))
       
		 {

	
	
	
	
	
	
	
	
	
	
		

	if($_POST['zone']=="young")
	{
	if(mysqli_query($db,"INSERT INTO `young-latest` (`link`, `img_name`) VALUES ('".$_POST['url']."', '".$code."')"))
	echo '<center><div class="success">Successfully Uploaded</div></center>';
	}
	else if($_POST['zone']=="senior")
	{
	if(mysqli_query($db,"INSERT INTO `senior-latest` (`link`, `img_name`) VALUES ('".$_POST['url']."', '".$code."')"))
	echo '<center><div class="success">Successfully Uploaded</div></center>';
	}
	else 
	{
	if(mysqli_query($db,"INSERT INTO `kids-latest` (`link`, `img_name`) VALUES ('".$_POST['url']."', '".$code."')"))
	echo '<center><div class="success">Successfully Uploaded</div></center>';
	}
		 }
		   else 
		 echo '<center><div class="failure">There was a problem uploading the file.</div></center>';
      } #endIF
   } #endIF

	
	
	
	}
	else
	echo '<center><div class="yellow">Please fill-up all the data correctly</div></center>';
}

?>



<form action="" method="post" enctype="multipart/form-data">

<table width="732" border="0">
  <tr>
    <td width="143" height="37">Name</td>
    <td width="10">&nbsp;</td>
    <td width="571"><input name="name" type="text" size="80" required></td>
  </tr>
  <tr>
    <td height="52">Image(150*330,jpg)</td>
    <td>&nbsp;</td>
    <td><input name="img" size="60" type="file" required="required" /></td>
  </tr>
  <tr>
    <td>URL</td>
    <td>&nbsp;</td>
    <td><input name="url" type="text" size="80" required></td>
  </tr>
  <tr>
    <td>Zone</td>
    <td>&nbsp;</td>
    <td><select name="zone">
      <option value="select" selected>--Select--</option>
        <option value="kids">kids</option>
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