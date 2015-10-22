<?php
session_start();
if(!isset($_SESSION['id']))
header("location:home.php");
else
{
if(!isset($_SESSION['act']))
header("location:notactive.php");
}
?>
<!DCOTYPE html><head>
		<title>Note</title>
<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
		<link href="../css/rounded.css" rel="stylesheet">
<?php
include("common/include_file.html");
include("common/database_connect.php");
?>
	</head>
<?php
include("common/after_login_topbar.php");
if(!isset($_GET['val']))
header("location:error.php");
$query=mysql_query("select * from note_tab WHERE sl='".$_GET['val']."' ");
$sql=mysql_fetch_array($query);
$luser=$_SESSION['luser'];//login user
$nt=$sql['note'];
$hd=$sql['head'];
$tym=$sql['time'];
$email = $sql['email'];
function clean_dec($text)
{
	$text= str_replace("&slcn","<br />",$text);
	$text= str_replace("&snglquot","'",$text);
	$text= str_replace("&snglquot","'",$text);
	return $text;
}
$hd=clean_dec($hd);
$nt=clean_dec($nt);
$prnt="Last Updated: &nbsp;".$tym."<center><h4><font color='#0000FF'><strong>".$hd."</strong></font></h4></center><hr width='50%'/>\r\n<i>".$nt."</i><br />&nbsp;";

if($luser==$email)
{
?>
 <div class="container">

	<div class="row container">
		<div class="form-group col-lg-12 col-md-12 col-xs-12 round" >
			<?php echo $prnt;?>
		</div>
	</div>
     	<div class="row container">
		<div class="form-group col-lg-12 col-md-12 col-xs-12" align="center">
        <a href="mynote.php">
				<button type="button" name="Edit" style="width:70" class="btn btn-primary">Back</button>
			</a>
				<button class="btn btn-danger" data-toggle="modal" data-target="#myModal">Delete</button>
			
			<a href="edit.php?val=<?php echo $sql['sl'];?>">
				<button style="width:70px" class="btn btn-success">Edit</button>
			</a>
		</div>
	</div>
 </div>
  

<!-- Modal --> 

<div class="modal fade" id="myModal"   role="dialog" style="padding-top:10%"  aria-labelledby="myModalLabel" aria-hidden="true">    
#myModal4 .modal-dialog {width:75%;}
<div class="modal-dialog" >       
<div class="modal-content" >          
<div class="modal-header">             
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>             
<h4 class="modal-title" id="myModalLabel">Deleting...</h4>          
</div>          
<div class="modal-body" align="center">Are you sure ?       
</div>          
<div class="modal-footer">             
<button type="button" class="btn btn-default"data-dismiss="modal">Cancel            
</button> 
  <a href="delete.php?val=<?php echo $sql['sl'];?>">         
<button type="button" class="btn btn-danger" style="width:70px">  Yes         
</button> </a>        
</div>       
</div>
<!-- /.modal-content -->    
</div>
<!-- /.modal-dialog --> 
</div>
<!-- /.modal --> 
<script>   $(function () {onclick.$('#myModal').modal({       keyboard: true    })}); </script> 

<?php
}
?> 
</body>


</html>