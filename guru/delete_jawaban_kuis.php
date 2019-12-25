<?php
	include'../koneksi/koneksi.php';

	$query 		= mysqli_query($koneksi,"DELETE from tb_jawaban_kuis where id_jawaban='".$_GET['id']."'");
	$varQuery 	= mysqli_query($query);
	header("location:jawaban_kuis.php");
?>
?>