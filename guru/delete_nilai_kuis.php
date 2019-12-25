<?php
	include'../koneksi/koneksi.php';

	$query 		= mysqli_query($koneksi,"DELETE from tb_nilai_kuis where id_nilai_kuis='".$_GET['id']."'");
	$varQuery 	= mysqli_query($query);
	header("location:nilai_kuis.php");
?>
?>