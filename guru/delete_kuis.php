<?php
	include'../koneksi/koneksi.php';

	$query 		= mysqli_query($koneksi,"DELETE from tb_kuis where id_kuis='".$_GET['id']."'");
	$varQuery 	= mysqli_query($query);
	header("location:kuis.php");
?>
?>