<?php
	include'../koneksi/koneksi.php';

	$query 		= mysqli_query($koneksi,"DELETE from tb_guru where nip='".$_GET['id']."'");
	$varQuery 	= mysqli_query($query);
	header("location:data_guru.php");
?>
?>