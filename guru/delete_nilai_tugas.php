<?php
	include'../koneksi/koneksi.php';

	$query 		= mysqli_query($koneksi,"DELETE from tb_nilai_tugas where id_nilai_tugas='".$_GET['id']."'");
	$varQuery 	= mysqli_query($query);
	header("location:nilai_tugas.php");
?>
?>