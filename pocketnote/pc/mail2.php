<?php
$to      = 'alokpanda101@gmail.com';
$subject = 'website feedback';
$message = 'hello';


$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: Alok Panda<apapap@alokpanda.net76.net>";
$headers[] = "Bcc: JJ Chong <alokpanda101@yahoo.com>";
$headers[] = "Reply-To: someone <noreply@alokpanda.net76.net>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $subject, $email, implode("\r\n", $headers));
?>




</body>
</html>