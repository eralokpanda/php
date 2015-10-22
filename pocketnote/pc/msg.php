<!Doctype html>
<head>
<meta name = "viewport" content = "width=device-width,initial-scale=1.0">
<title>Message sent</title>
<?php 
include("../common/include_file.html");
?>
</head>

<?php
include("../common/before_login_topbar.php");

$to="alokpanda101@gmail.com";
$subject=$_POST['name'];
$email = $_POST['msg'];

if(($to==null)||($email==null)||($subject==null))
header("location:about.php");
else
{

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: Alok Panda<noreply@alokpanda.net76.net>";
$headers[] = "Bcc: JJ Chong <alokpanda101@yahoo.com>";
$headers[] = "Reply-To: someone <noreply@alokpanda.net76.net>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $subject, $email, implode("\r\n", $headers));	
echo' 
<center>
<h1 class="lead">Message Successfully Sent</h1>
</center>';
}

?>




</body>
</html>