<?php 
session_start();

session_unset();
unset($_SESSION['hak_akses']);


header('location:login.php');
?>