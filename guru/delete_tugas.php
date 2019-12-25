<?php
	include'../koneksi/koneksi.php';

	$query 		= mysqli_query($koneksi,"DELETE from tb_tugas where id_tugas='".$_GET['id']."'");
	$varQuery 	= mysqli_query($query);
	header("location:tugas.php");
?>
?>