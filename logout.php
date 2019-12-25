<?php  
include"koneksi/koneksi.php";

unset($_POST['user']);
unset($_POST['pass']);

session_destroy();
header('location:index.php');
?>