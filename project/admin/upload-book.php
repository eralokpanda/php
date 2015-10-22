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
	
	$code=substr(md5($_POST['name']),0,5).mt_rand(10000,99999);
	
	
	
   define ("FILEREPOSITORY","../data/".$_POST['zone']."/book/");
    define ("CACHE","../data/".$_POST['zone']."/book/cache/");

   if (is_uploaded_file($_FILES['book']['tmp_name'])&&is_uploaded_file($_FILES['img']['tmp_name'])) 
   {

      if (($_FILES['book']['type'] != "application/pdf")&& (($_FILES['img']['type'] != "jpeg")||($_FILES['img']['type'] != "jpg")))
	  {
		  
         echo '<center><div class="yellow">Book must be uploaded in PDF format & Image in JPG.</div></center>';
		 
      }
	   else
	    {
         $name = $code;
         $result1 = move_uploaded_file($_FILES['book']['tmp_name'], FILEREPOSITORY."$name.pdf");
		 $result2 = move_uploaded_file($_FILES['img']['tmp_name'], CACHE."$name.jpg");
         if (($result1 == 1)&&($result2 == 1))
		 {

	
	
	
	
	
	
	
	
	
	
		

	if($_POST['zone']=="young")
	{
	if(mysqli_query($db,"INSERT INTO `young-book` (`name`, `code`, `description`) VALUES ('".$_POST['name']."', '".$code."', '".$_POST['description']."')"))
	echo '<center><div class="success">Successfully Uploaded</div></center>';
	}
	else 
	{
	if(mysqli_query($db,"INSERT INTO `senior-book` (`name`, `code`, `description`) VALUES ('".$_POST['name']."', '".$code."', '".$_POST['description']."')"))
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

<table width="574" border="0">
  <tr>
    <td height="37">Name</td>
    <td>&nbsp;</td>
    <td><input name="name" type="text" size="80" required></td>
  </tr>
  <tr>
    <td height="46">Book</td>
    <td>&nbsp;</td>
    <td><input name="book" size="60" type="file" required="required" /></td>
  </tr>
  <tr>
    <td height="52">Front page</td>
    <td>&nbsp;</td>
    <td><input name="img" size="60" type="file" required="required" /></td>
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