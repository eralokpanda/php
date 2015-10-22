<?php
session_start();


unset($_SESSION['user']);
unset($_SESSION['fname']);
unset($_SESSION['lname']);
unset($_SESSION['acc_create']);
unset($_SESSION['my-url']);
ob_start();
session_destroy();
header("location:index.php?page=home");
?>