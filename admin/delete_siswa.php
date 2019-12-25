<?php
	include'../koneksi/koneksi.php';

	$query 		= mysqli_query($koneksi,"DELETE from tb_siswa where nis='".$_GET['id']."'");
	$varQuery 	= mysqli_query($query);
	header("location:data_siswa.php");
?>
?>