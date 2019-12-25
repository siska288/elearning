<?php
	include'../koneksi/koneksi.php';

	$query 		= mysqli_query($koneksi,"DELETE from tb_jawaban_tugas where id_jawaban_tugas='".$_GET['id']."'");
	$varQuery 	= mysqli_query($query);
	header("location:jawaban_tugas.php");
?>
?>