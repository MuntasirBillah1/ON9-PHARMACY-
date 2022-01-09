<?php
session_start();

session_destroy();
header("location:phar_login.php");
?>