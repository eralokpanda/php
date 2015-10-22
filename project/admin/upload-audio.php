<?php 
if(isset($_POST['go'])&&isset($_POST['noOfFile'])&& ($_POST['noOfFile']>0))
{
	$_SESSION['inc']=$_POST['noOfFile'];
}
else if(!isset($_SESSION['inc']))
$_SESSION['inc']=1;
?>


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
	
	
	
   define ("FILEREPOSITORY","../data/".$_POST['zone']."/audio/");
    define ("CACHE","../data/".$_POST['zone']."/audio/image/");

   if (is_uploaded_file($_FILES['img']['tmp_name'])) 
   {
		echo $_FILES['img']['type'];
		 echo $_FILES['music']['type'];
 
      if (($_FILES['img']['type'] != "image/jpeg"))
	  {
		  
         echo '<center><div class="yellow">Image must be uploaded in JPG format.</div></center>';
		 
      }
	   else
	    {
         $name = $code;
         
		 $result2 = move_uploaded_file($_FILES['img']['tmp_name'], CACHE."/$name.jpg");
         $result1 = 1;
		}
   }
 



	}
		else
	echo '<center><div class="yellow">Please fill-up all the data correctly</div></center>';
}

	

?>





<form method="post">
<table  border="0">
  <tr>
    <td>No of audio file</td>
    <td><input name="noOfFile" type="number" required></td>
    <td><input type="submit" name="go" id="submit" value="Go"></td>
  </tr>
</form> 


<form action="" method="post" enctype="multipart/form-data" name="rr">

<table width="683" border="0">
  <tr>
    <td width="153">Name</td>
    <td width="19">&nbsp;</td>
    <td width="497"><input name="name" type="text" size="80" required></td>
  </tr>
  
  
    <tr>
    <td>Image</td>
    <td>  <br />
  <br />
  <br />
  <br /></td>
    <td><input name="img" type="file" required>

    </td>
  </tr>

  <?php
   for($i=1;$i<=$_SESSION['inc'];$i++)
  {
	  ?>
  <tr>
    <td>Audio <?php echo $i; ?></td>
    <td>&nbsp;</td>
    <td><input name="music" type="file" required="required"></td>
  </tr>
    <tr>
    <td>Name</td>
    <td>&nbsp;</td>
    <td><input name="fname" type="text" size="50" required="required"></td>
  </tr>
<?php } ?>
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