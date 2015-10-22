<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/elogic2/favicon.ico" rel="shortcut icon" />
<link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/elogic2/style.css" rel="stylesheet" />
<script type="text/javascript" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/elogic2/nicEdit.js"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	
	new nicEditor({iconsPath : 'http://<?php echo $_SERVER['HTTP_HOST']; ?>/elogic2/nicEditorIcons.gif'}).panelInstance('area3');
});
</script>
<style type="text/css">
.total-bdy{
	margin-top:20px;
	margin-left:20px;
}
.plc-bdy-head{
	height:100px;
	width:742px;
	padding-left:80px;
	line-height:100px;
	font-size:35px;
	color:#FFF;
	border-top-left-radius:100px;
	background-color:#13BB95;
}
.plc-bdy{
	border:2px solid #13BB95;
	width:798px;
	padding-left:10px;
	padding-right:10px;
	text-align:justify;
}
#del{
	background-color:transparent;
	border:none;
	height:14px;
	background-color:#096;
	color:#FFF;
	line-height:1px;
}
#del:hover{
	background-color:#F00;
	color:#FFF;
	}
 #plc-btn-txt{
	height:40px;
	width:215px;
	background-color:transparent;
	color:#fff;
	border:none;
	border-radius:10px;
	outline:none;
	font-size:14px;
}
#plc-btn{
	height:40px;
	width:215px;
	background-color:transparent;
	border:none;
	border-radius:10px;
	outline:none;
	font-weight:bold;
	text-align:left;
}
    
</style>


<?php if(isset($_SESSION['admin_id']))
{
	?>
    
<style type="text/css">
		.menu-btn-part1{
			float:left;
			width:190px;
			overflow:hidden;	
		}
		.menu-btn-part2{
			float:left;
			width:25px;	
			height:40px;
			background-color:#E8191D;
			border-radius:0 10px 10px 0;
		}
	.menu-btn-part1:hover{
	background-color:#CCC;
	box-shadow:#000 0px 0px 0px;
	color:#13BB95;
	border-radius:10px 0 0 10px;
}
	.menu-btn-part2:hover{
	background-color:#CCC;
	box-shadow:#000 0px 0px 0px;
	color:#13BB95;
	height:40px;
	border-radius:0 10px 10px 0;
}	

#menu-btn-part2{
	width:25px;
	border:none;
	outline:none;
	background-color:transparent;
	border-radius:0 10px 10px 0;
}	
</style>       
<?php
}
else
{
?>

<style type="text/css">
  menu-btn-part1{
	  width:215px;
	  overflow:hidden
	  
  }
  	.menu-btn-part1:hover{
	background-color:#CCC;
	box-shadow:#000 0px 0px 0px;
	color:#13BB95;
	border-radius:10px;
}

</style> 
<?php 
}
?>


</head>


<body>

<?php
$str = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$folderNameArray =  explode('/',$str,-1);
$word = count($folderNameArray);
$word -= 1;
$folderName = $folderNameArray[$word];
$pageFolderURL = str_replace("\\","/",getcwd())."/";
$dataFolderURL =  str_replace("\\","/",str_replace("page","data",getcwd()))."/";



?>

<?php
			
			function createIndex($structure)
			{
				
				$file = $_SERVER['DOCUMENT_ROOT'].'/elogic2/'."indexdata.php";
				$structure = $structure."/index.php";
				$f = fopen($file,"r");
				$indexData = fread($f,filesize($file));
				$f = fopen($structure,"w");
				fwrite($f,$indexData);
			}
			
			
if(isset($_POST['addBtn']))
{
	$structure = $dataFolderURL.$_POST['plc-btn-txt'];
	
	if(!file_exists($structure))
	{
	mkdir($structure,0777,true);
		$structure = $pageFolderURL.$_POST['plc-btn-txt'];
		
	mkdir($structure,0777,true);
	createIndex($structure);
	}
	else
	echo "<script> alert('file already exist');</script>";
}
?>


<div class="tot-bdy">
<div class="header">
	<div class="logo">
	<?php echo '<img src="http://'.$_SERVER['HTTP_HOST'].'/elogic2/logo.png" alt="Logo" height="70" />'; ?>
	</div>
    
    <div class="corner">
    <!-- half circe corner inside the body -->
    </div>
   
   	<div class="logout">
	<?php 
	if(isset($_SESSION['user_id'])||isset($_SESSION['admin_id']))
	{
		?>	
	<a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/elogic2/logout.php">	
		<div class="logout-btn">Logout</div>		
	  </a>
	<?php }
	 ?>		
		
	</div> 

    
	<div class="search">
			<form name="login" action="http://www.google.com/search" method="get">
				<input type="text" name="q" id="search-txt" placeholder="Search !" />
				<input type="submit"  id="search-btn"value="Search" />
				</form>
</div>
    <div class="float-end"></div>
<!-- end header -->
</div>




<div class="menu">

	<div class="dir">
		<div class="dir-head">
			<center>
				<?php echo $folderName; ?>
			</center>
		</div>
        
        
		<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/elogic2'; ?>">
			<div class="menu-btn">
				Home
			</div>
		</a>
        <a href="../index.php">
			<div class="menu-btn">
				Back
			</div>
		</a>

  <?php if(isset($_SESSION['admin_id'])){ ?>

		<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/elogic2/uploadImage.php">
			<div class="menu-btn">
				Upload image
			</div>
		</a>

        <form name="form" method="post" action="">
			<div class="menu-btn">
			<input name="plc-btn-txt" type="text" id="plc-btn-txt" />
			</div>
			<div class="menu-btn">
				<input type="submit" name="addBtn" id="plc-btn" value="Add New" />
			</div>
        </form>


<?php } ?>


<?php
if(isset($_POST['menu-btn-part2']))
{
	 function deleteDir($dirPath) {
    if (! is_dir($dirPath)) {
        throw new InvalidArgumentException("$dirPath must be a directory");
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}
deleteDir($pageFolderURL.$_POST['menu-btn-part2-hidden']);
deleteDir($dataFolderURL.$_POST['menu-btn-part2-hidden']);
}
?>


<?php
$log_directory = $pageFolderURL;	
$result_array = array();
if(is_dir($log_directory))
{
	if($handle = opendir($log_directory))
	{
		while(($file = readdir($handle))!== FALSE)
		{
			$result_array[] = $file;
		}
		closedir($handle);
	}
}

foreach($result_array as $file)
{
	if(($file !='..')&&($file != ".")&&($file != "index.php"))
	{
echo 	'<div class="menu-btn">
			<a href="page/'.$file.'">
				<div class="menu-btn-part1">
				&nbsp;'.$file.'
				</div>
			</a>';
				if(isset($_SESSION['admin_id']))
				{ $al = "'Are You Sure!!'";
				echo '<div class="menu-btn-part2">
				<form name="form" method="post">
				<input type="submit" value="X" name="menu-btn-part2" id="menu-btn-part2" onClick="return confirm('.$al.');">
				<input type="hidden" name="menu-btn-part2-hidden" value="'.$file.'">
				</form>
				</div>';
				}
			echo '</div>';	
	}
}

?>



	</div>


<!--End menu -->
</div>

<?php
if(isset($_POST['submit']))
{
	
	if($_POST['area3'] != '<br>')
	{ $count = 1;
		$log_directory = $dataFolderURL;	
$result_array = array();
if(is_dir($log_directory))
{
	if($handle = opendir($log_directory))
	{
		while(($file = readdir($handle))!== FALSE)
		{
			$result_array[] = $file;
		}
		closedir($handle);
	}
}


foreach($result_array as $file)
{
	if(($file !='..')&&($file != ".")&&($file != "head.txt")&&(!is_dir($file))&&($file != "img"))
	{
		if(str_replace(".txt","",$file) >= $count)
		$count = str_replace(".txt","",$file);
		
	}
}
		$count += 1;
		$f=fopen($dataFolderURL."/".$count.".txt","w");
		fwrite($f,$_POST['area3']);
		fclose($f);
	}
}
?>




<?php
if(isset($_POST['del']))
{
	$filename = $dataFolderURL.$_POST['del-name'];
	if (file_exists($filename)){
	unlink($filename);
	}
}
?>

<?php
if(isset($_POST['head-submit']))
{
	if($_POST['head-txt'] != '')
	{
	
	
	$filename = $dataFolderURL."head.txt";
	$f = fopen($filename,"w");
	fwrite($f,$_POST['head-txt']);
	echo "<script> alert('Successfully submited'); </script>";
	fclose($f);
	
}
}
?>




<div class="my-bdy">
<div class="total-bdy">
<div class="plc-bdy-head">

<?php

$filename = $dataFolderURL."head.txt";
if (file_exists($filename)) {
$f = fopen($filename,"r") or die("Unable to open file");
$txt = fread($f,filesize($filename)) or die("file not found");	
$txt= $txt;
fclose($f);
}
else
$txt= "No heading";
if(isset($_SESSION['admin_id'])){
echo '
<form name="form" method="post"  action="">
<label><input type="text" name="head-txt" id="head-txt" value="'.$txt.'" /></label>
<input type="submit" name="head-submit" id="head-submit" value="Submit" />
</form>
';
}
else
echo $txt;
?>


</div>


<?php
$log_directory = $dataFolderURL;	
$result_array = array();
if(is_dir($log_directory))
{
	if($handle = opendir($log_directory))
	{
		while(($file = readdir($handle))!== FALSE)
		{
			$result_array[] = $file;
		}
		closedir($handle);
	}
}
foreach($result_array as $file)
{
	if(($file !='..')&&($file != ".")&&($file != "head.txt")&&(!is_dir($file))&&($file != "img"))
	{
	
?>

<div class="plc-bdy">






<?php	









$filename = $dataFolderURL.$file;
$con = "'Are you sure!'";

if (file_exists($filename)) {	
$f = fopen($filename,"r") or die("Unable to open file");
$txt = fread($f,filesize($filename)) or die("file not found");
if(isset($_SESSION['admin_id']))
{
echo '<div style="text-align:right;">
<form name="form" method="post" action="">
<input type="submit" name="del" id="del" value="X" onclick="return confirm('.$con.');" />
<input type="hidden" name="del-name" value="'.$file.'" />
</form>
</div>';
}
echo $txt;
fclose($f);
}
?>
</div>
<br />
<?php
	}
	}
	// foreach loop end;
?>
  <?php if(isset($_SESSION['admin_id'])){ ?>
<div>
<form name="form" method="post"  action="">
<div>
<textarea name="area3" id="area3" style="width:820px;" value="Add your text here."></textarea>
</div>
<div class="btn">
<input type="submit" name="submit" id="submit" value="Submit" />
</div>
</form>
</div>


<?php } ?>


</div>
<!--End my body -->
</div>
<div class="float-end"></div>

<div class="my-footer">
	<div style="border-bottom:1px solid #13BB95; width:1000px; margin:auto; margin-bottom:10px;"></div>
	<div class="footer-left">
		<a href="#">Privacy policy</a> &nbsp; <a href="#">About us</a> &nbsp; <a href="#">Contact us</a>
	</div>

	<div class="footer-right">
		<a href="#">elogic Team</a>
	</div>
	<div class="float-end"></div>
<!-- my footer end -->
</div>



<!-- End total body -->
</div>

<?php
//set url
$_SESSION['previous_url'] = $_SERVER['REQUEST_URI'];

?>


<?php
session_write_close();
?>

</body>
</html>


