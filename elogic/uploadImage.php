<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link href="favicon.ico" rel="shortcut icon" />
<link href="style.css" rel="stylesheet" />

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


</head>


<body>
<?php
session_start();
?>


<div class="tot-bdy">
<div class="header">
	<div class="logo">
		<img src="logo.png" alt="Logo" height="70" />
	</div>
    
    <div class="corner">
    <!-- half circe corner inside the body -->
    </div>
   
   	<div class="logout">
	<?php 
	if(isset($_SESSION['user_id']))
	{
		?>	
	<a href="logout.php">	
		<div class="logout-btn">Logout</div>		
	  </a>
	<?php }
	 ?>		
		
	</div> 

    
	<div class="search">
			<form name="login" action="" method="post">
				<input type="text" id="search-txt" placeholder="Search !" />
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
				PLC
			</center>
		</div>
        
        
		<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/elogic2'; ?>">
			<div class="menu-btn">
				Home
			</div>
		</a>
		<a href="<?php echo $_SESSION['previous_url']; ?>">
			<div class="menu-btn">
				back
			</div>
		</a>



	</div>


<!--End menu -->
</div>

<div class="my-bdy">

<div class="total-bdy">
<div class="plc-bdy-head">Upload image
</div>
<div class="plc-bdy">
<br /><br /><br />
<form action="" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="upload">
</form>



<br />

<?php
if(isset($_POST['upload']))
{


$target_dir = str_replace("/elogic2/","",str_replace("index.php","",str_replace("page","data",$_SESSION['previous_url'])))."img/";
	
	if(!file_exists($target_dir))
	mkdir($target_dir,0777,true);
	
	
	
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image."."<br />";
        $uploadOk = 0;
    }

// Check the image width
if($check[0] > 600){
echo "sorry, please upload the image lower than 600px."."<br />";
$uploadOk = 0;
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists."."<br />";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large."."<br />";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG &amp; PNG files are allowed."."<br />";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded."."<br />";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "URL :  http://elogic.tk/".$target_dir.basename( $_FILES["fileToUpload"]["name"]). " :has been uploaded successfully<br />";
    } else {
        echo "Sorry, there was an error uploading your file."."<br />";
    }
}










}
?>


<br />

<?php
$target_dir = str_replace("/elogic2/","",str_replace("index.php","",str_replace("page","data",$_SESSION['previous_url'])))."img/";
$log_directory = $target_dir;	
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
	if(($file !='..')&&($file != "."))
	{
	echo '<div style="height:160px;"><img src="http://'.$_SERVER['HTTP_HOST'].'/elogic2/'.$target_dir.$file.'" width="150" height="150" />'.
 	'<span  style="line-height:160px;">URL: http://'.$_SERVER['HTTP_HOST'].'/elogic2/'.$target_dir.$file.'</span></div>';	
	}
}

?>






</div>

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
session_write_close();
?>

</body>
</html>


