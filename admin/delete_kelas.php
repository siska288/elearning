<?php
	include'../koneksi/koneksi.php';

	$query 		= mysqli_query($koneksi,"DELETE from tb_kelas where id_kelas='".$_GET['id']."'");
	$varQuery 	= mysqli_query($koneksi,$query);
	header("location:data_kelas.php");
?>
?>