<?php
	include'../koneksi/koneksi.php';

	$query 		= mysqli_query($koneksi,"DELETE from tb_mapel where id_mapel='".$_GET['id']."'");
	$varQuery 	= mysqli_query($query);
	header("location:data_mapel.php");
?>
?>