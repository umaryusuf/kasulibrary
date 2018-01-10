<?php
session_start();

unset($_SESSION['student']);
unset($_SESSION['is_logged_in']);

session_destroy();
header("location: login.php");

?>
