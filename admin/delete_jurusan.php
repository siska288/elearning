<?php
	include'../koneksi/koneksi.php';

	$query 		= mysqli_query($koneksi,"DELETE from tb_jurusan where id_jurusan='".$_GET['id']."'");
	$varQuery 	= mysqli_query($koneksi,$query);
	header("location:data_jurusan.php");
?>
?>