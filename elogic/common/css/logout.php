<?php
session_start();
unset($_SESSION['session_id']);
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['email']);
session_destroy();
session_write_close();
header("location:index.php");
?>