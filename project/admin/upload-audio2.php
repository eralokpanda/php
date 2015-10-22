









<table width="683" height="400" border="0">


<?php
if(isset($_POST['submit']))
{
	
echo "*".$_FILES['mu']['type']."*";	
}
?>

<form action="" method="post" enctype="multipart/form-data" name="rr">
  <tr>
    <td>Audio </td>
    <td>&nbsp;</td>
    <td><input name="mu" type="file" ></td>
  </tr>


  <tr>
  
    <td><input type="submit" name="submit"  value="Submit"></td>
  </tr>
</table>

</form>
</div>